@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informe abaixo as informações do Cliente
                    <a class="pull-right" href="{{ url('/clientes') }}">Listar Clientes</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{url('clientes/salvar')}}">
                        @csrf
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Ver ou Editar Cliente</legend>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="nome">Nome:</label>  
                              <div class="col-md-4">
                              <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">
                                
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="enderenco">Endereço</label>  
                              <div class="col-md-4">
                                <input id="enderenco" name="enderenco" type="text" placeholder="Endend" class="form-control input-md">                            
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="numero">numero</label>  
                              <div class="col-md-4">
                                <input id="numero" name="numero" type="text" placeholder="numero" class="form-control input-md">                            
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="salvar"></label>
                              <div class="col-md-4">
                                <button id="salvar" name="salvar" class="btn btn-primary">Salvar!</button>
                              </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
