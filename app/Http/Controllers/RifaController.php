<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Rifa as RifaModel;

class RifaController extends BaseController
{

    public function get($name)
    {
    	$rifa = RifaModel::where('name', $name)->first();
    	
    	return view('rifa-numbers', ['rifa' => $rifa]);
    }

    public function post(Request $request)
    {
    	dd($request->all());
    }
}
