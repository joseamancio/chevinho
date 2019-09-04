<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Rifa as RifaModel;

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

    	$user = User::findOrCreate(['email' => $data->email]);
        $user->name = $data->name;
        $user->phone = $data->telefone;
        $user->save();



    }
}
