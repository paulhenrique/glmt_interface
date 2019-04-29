@extends('layouts.app')
@section('page-name')
{{'Ambiente de Simulações'}}    
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-6 m-auto p-1">
                    <div class="bg-white shadow rounded p-3">
                        <h5 class="font-weight-bold">Suas simulações</h5>
                        <p>Todas as suas simulações recentes ficam listadas aqui</p>
                        <div class="list-group list-group-flush pt-3">
                            @for ($i = 0; $i < 5; $i++)
                            <a href="#" class="list-group-item list-group-item-action">Exemplo de link de simulação</a>
                            @endfor
                        </div>  
                        <div class="text-right">
                            <a class="btn btn-primary shadow px-5 mt-3 rounded" href="#">Minhas simulações</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
