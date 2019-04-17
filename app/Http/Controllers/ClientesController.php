<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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

    public function salvar(Request $request)
    {
        $cliente = new Cliente();

        $cliente = $cliente->create($request->all());

        Session::flash('status', 'Cliente cadastrado com sucesso');

        return redirect::to('clientes/novo');


    }
    
}
