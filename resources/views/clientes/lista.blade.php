@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes
                    <a class="pull-right" href="{{ url('/clientes/novo') }}">Novo Cliente</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Listagem de Clientes
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
