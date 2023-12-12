@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
            <div class="login-brand">
              SRI DIRECCIÓN ZONAL 7
            </div>

            @if (session('message'))
              <div class="alert alert-danger alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb">
                  </i>
                  </div> 
                  <div class="alert-body">
                    <div class="alert-title">
                        Alerta!
                    </div>
                    {{ session('message') }}
                  </div>
                </div>  
            @endif

            @if ($errors->any())
            <div>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>
                    {{ $error }}
                  </li>
                @endforeach
              </ul>
            </div>
              
            @endif
            <div class="card card-light">
              <div class="row m-0">
                <div class="col-12 col-md-12 col-lg-5 p-0">
                  <div class="mt-3 text-center">
                    <h4>Sistemas de Control</h4>
                    </div>
                    <div class="mt-3 ml-4 text-left">
                      <h6>Ingresa tus credenciales</h6>
                      </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('ingresoPost') }}">
                      @csrf
                      <div class="form-group floating-addon">
                        <label>Usuario</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="far fa-user"></i>
                            </div>
                          </div>
                          <input id="usuario" type="text" class="form-control" name="usuario" autofocus placeholder="Usuario">
                        </div>
                      </div>
                      <div class="form-group floating-addon">
                        <label>Pasword</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-key"></i>
                            </div>
                          </div>
                          <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" placeholder="Type your message" data-height="150"></textarea>
                      </div> -->
                      <div class="form-group text-left">
                        <button type="submit" class="btn btn-outline-dark">
                          Ingresar
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7 p-0">
                  <div id="map" class="contact-map d-flex align-items-center justify-content-center text-center">
                      <img src="{{ asset('assets/img/logingreso.png') }}" alt="" class="img-fluid">
                  </div>
              </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Servicio de Rentas Internas
            </div>
          </div>
        </div>
      </div>
@endsection
