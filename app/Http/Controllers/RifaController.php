<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Rifa as RifaModel;
use App\User as UserModel;
use App\RifaNumber as RifaNumberModel;

class RifaController extends BaseController
{

    public function index()
    {
        $rifa = RifaModel::first();

        $rifa->total = count($rifa->numbers);
        $rifa->reservadas = count($rifa->numbers->where('status', 1));
        $rifa->faltando = ($rifa->total - $rifa->reservadas);

        return view('welcome', ['rifa' => $rifa]);
    }
    public function get($name)
    {
    	$rifa = RifaModel::where('name', $name)->first();

    	$rifa->total = count($rifa->numbers);
    	$rifa->disponiveis = count($rifa->numbers->where('status', 0));
        $rifa->pagos = count($rifa->numbers->where('status', 2));


    	return view('rifa-numbers', ['rifa' => $rifa]);
    }

    public function post(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required',
            'telefone' => 'required',
            'date_of_birth' => 'accepted',
        ]);

        $data['numbers'] = explode(',', $data['numbers']);

    	$UserModel = UserModel::where(['email' => $data['email']])->first();

        if(!empty($UserModel)) {
            $UserModel->name = $data['name'];
            $UserModel->phone = $data['telefone'];
            $UserModel->save();
        } else {
            $UserModel = UserModel::create([
                'name'  => $data['name'],
                'email'  => $data['email'],
                'phone' => $data['telefone'],
            ]);
        }

        foreach($data['numbers'] as $number) {
            $rifa = RifaNumberModel::find($number);

            if($rifa->status != 0) {
                return view('rifa-success', ['message' => 'fail', 'total' => 0]);;
            }

            $rifa->user_id = $UserModel->id;
            $rifa->status = RifaNumberModel::RESERVADA;
            $rifa->save();
        }

        $total = count($data['numbers']) * 30;

        return view('rifa-success', ['message' => 'success', 'total' => $total]);
    }
}
