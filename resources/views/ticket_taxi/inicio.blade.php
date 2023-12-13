@extends('layouts.panel')

@section('title','Inicio')

@section('content')
  <div class="main-content">
    <section class="section">
      <h3>Bienvenido al Sitio de Control de Aplicaciones</h4>
      <h3>de la Dirección Zonal 7 Loja</h3>
    </section> 
    <div>
      <h6>Compañía de Taxi "RIVERAL" RAVLOJA S.A.</h6>
      <h6>Contacto: 2612 - 257</h6>
      <h6>Celular: 0991495189</h6>
      <h6>Pasadas las 17h00 comunícate al 0986859250</h6>
    </div>
    
    <div>
      <img src="{{ asset('assets/img/taxi.png') }}" alt="" class="img-fluid">
    </div>
  </div>
          
    
@endsection