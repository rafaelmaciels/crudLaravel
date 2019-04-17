<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	return view('clientes.lista');
    }



    public function novo()
    {
    	return view('clientes.formulario');
    }
}
