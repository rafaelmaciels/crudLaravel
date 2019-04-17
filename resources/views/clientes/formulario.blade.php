@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informe abaixo as informações do Cliente
                    <a class="pull-right" href="{{ url('/Clientes') }}">Listar Clientes</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Formulario
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
