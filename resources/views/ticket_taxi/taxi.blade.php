@extends('layouts.panel')

@section('title','Crea Ticket')

@vite([
            'resources/assets/bundles/bootstrap-daterangepicker/daterangepicker.css',
            'resources/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css',
            'resources/assets/bundles/select2/dist/css/select2.min.css',
            'resources/assets/bundles/jquery-selectric/selectric.css',
            'resources/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
            'resources/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',])

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-body">
        <div class="col-8 col-md-8 col-lg-8">
          <div class="card">
            <div class="card-header">
              <h4>INGRESE LOS DATOS PARA EL RECIBO</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Nombre del Funcionario</label>
                <input type="text" class="form-control">
                {{-- <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $funcionario->nombre }}"> --}}
              </div>
              {{-- <div class="card-body"> --}}
                <div class="form-group">
                  <label>Departamento</label>
                  <input type="text" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Origen</label>
                  <select class="form-control">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Ruta</label>
                  <select class="form-control select2">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Date Time Picker</label>
                  <input type="text" class="form-control datetimepicker">
                </div>

                <div class="form-group">
                  <label>Asunto</label>
                  <input type="text" class="form-control">
                </div>

                <div class="buttons">
                  <a href="#" class="btn btn-outline-primary">Enviar</a>
                </div>
              
            </div>
          </div>
        </div>
      </div>
  </section>
  {{-- <div class="settingSidebar">
    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
    </a>
    <div class="settingSidebar-body ps-container ps-theme-default">
      <div class=" fade show active">
        <div class="setting-panel-header">Setting Panel
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Select Layout</h6>
          <div class="selectgroup layout-color w-50">
            <label class="selectgroup-item">
              <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
              <span class="selectgroup-button">Light</span>
            </label>
            <label class="selectgroup-item">
              <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
              <span class="selectgroup-button">Dark</span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Sidebar Color</h6>
          <div class="selectgroup selectgroup-pills sidebar-color">
            <label class="selectgroup-item">
              <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
              <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
            </label>
            <label class="selectgroup-item">
              <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
              <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Color Theme</h6>
          <div class="theme-setting-options">
            <ul class="choose-theme list-unstyled mb-0">
              <li title="white" class="active">
                <div class="white"></div>
              </li>
              <li title="cyan">
                <div class="cyan"></div>
              </li>
              <li title="black">
                <div class="black"></div>
              </li>
              <li title="purple">
                <div class="purple"></div>
              </li>
              <li title="orange">
                <div class="orange"></div>
              </li>
              <li title="green">
                <div class="green"></div>
              </li>
              <li title="red">
                <div class="red"></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <div class="theme-setting-options">
            <label class="m-b-0">
              <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                id="mini_sidebar_setting">
              <span class="custom-switch-indicator"></span>
              <span class="control-label p-l-10">Mini Sidebar</span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <div class="theme-setting-options">
            <label class="m-b-0">
              <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                id="sticky_header_setting">
              <span class="custom-switch-indicator"></span>
              <span class="control-label p-l-10">Sticky Header</span>
            </label>
          </div>
        </div>
        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
          <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
            <i class="fas fa-undo"></i> Restore Default
          </a>
        </div>
      </div>
    </div>
  </div> --}}



    
       {{-- <script src="{{ assets('assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ assets('assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ assets('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ assets('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ assets('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ assets('assets/js/page/forms-advanced-forms.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ assets('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ assets('assets/js/custom.js') }}"></script> --}}
  
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
<script src="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
@endsection