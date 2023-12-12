@extends('layouts.panel')

@section('title','Sistemas de Control')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Escoje el perfil') }}</div>

                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @auth
                        <p>{{ __('Bienvenido') }}, {{ auth()->user()->name }}</p>
                    @else
                    {{ __('Bienvenido') }}
                    @endauth

                    <h3>Este sistema es para generar el ticket para el uso del servicio de taxi</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
