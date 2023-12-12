@extends('layouts.panel')

@section('title','Inicio')

@section('content')
<div class="main-content">
    <section class="section">
      <h4>Bienvenido al Sistema de Loja</h4>
      <div class="section-body">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>HTML5 Prueba de Inicio</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Multiple</label>
                  <select class="form-control" multiple="" data-height="100%">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label class="d-block">Checkbox</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Checkbox 1
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                      Checkbox 2
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Color</label>
                  <input type="color" class="form-control">
                </div>
                <div class="form-group">
                  <label>Date</label>
                  <input type="date" class="form-control">
                </div>
                <div class="form-group">
                  <label>Datetime Local</label>
                  <input type="datetime-local" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control">
                </div>
                <div class="form-group">
                  <label>File</label>
                  <input type="file" class="form-control">
                </div>
                <div class="form-group">
                  <label>Month</label>
                  <input type="month" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control">
                </div>
                <div class="form-group">
                  <label class="d-block">Radio</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Radio 1
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                    <label class="form-check-label" for="exampleRadios2">
                      Radio 2
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Range</label>
                  <input type="range" class="form-control">
                </div>
                <div class="form-group">
                  <label>Search</label>
                  <input type="search" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tel</label>
                  <input type="tel" class="form-control">
                </div>
                <div class="form-group">
                  <label>Time</label>
                  <input type="time" class="form-control">
                </div>
                <div class="form-group">
                  <label>Url</label>
                  <input type="url" class="form-control">
                </div>
                <div class="form-group mb-0">
                  <label>Week</label>
                  <input type="week" class="form-control">
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
              </div>
            </div>
            {{-- <div class="card">
              <div class="card-header">
                <h4>Inline Forms</h4>
              </div>
              <div class="card-body">
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                    placeholder="Jane Doe">
                  <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                      placeholder="Username">
                  </div>
                </form>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Help Text</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputPassword5">Password</label>
                  <input type="password" id="inputPassword5" class="form-control"
                    aria-describedby="passwordHelpBlock">
                  <small id="passwordHelpBlock" class="form-text text-muted">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                    spaces, special characters, or emoji.
                  </small>
                </div>
                <div class="form-inline">
                  <div class="form-group">
                    <label for="inputPassword6">Password</label>
                    <input type="password" id="inputPassword6" class="form-control mx-sm-3"
                      aria-describedby="passwordHelpInline">
                    <small id="passwordHelpInline" class="text-muted">
                      Must be 8-20 characters long.
                    </small>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Custom Forms #2</h4>
              </div>
              <div class="card-body">
                <div class="section-title mt-0">Select</div>
                <div class="form-group">
                  <label>Choose One</label>
                  <select class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="section-title">File Browser</div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Input Group Text</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <input type="text" class="form-control text-right" id="inlineFormInputGroup2"
                      placeholder="Your URL">
                    <div class="input-group-append">
                      <div class="input-group-text">.com</div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Input Group #2</h4>
              </div>
              <div class="card-body">
                <div class="section-title mt-0">Multiple Addons</div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">First and last name</span>
                    </div>
                    <input type="text" class="form-control">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="section-title">Button</div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
                <div class="section-title">Select With Button</div>
                <div class="form-group">
                  <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
                <div class="section-title">Select, Button &amp; Input</div>
                <div class="form-group">
                  <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect05">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            {{-- <div class="card">
               <div class="card-header">
                <h4>Sizing</h4>
              </div> 
              <div class="card-body">
                <div class="section-title mt-0">Text</div>
                <div class="form-group">
                  <label>Text <code>.form-control-sm</code></label>
                  <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Text <code>.form-control-lg</code></label>
                  <input type="text" class="form-control form-control-lg">
                </div>
                <div class="section-title">Select</div>
                <div class="form-group">
                  <label>Select <code>.form-control-sm</code></label>
                  <select class="form-control form-control-sm">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select <code>.form-control-lg</code></label>
                  <select class="form-control form-control-lg">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Disabled &amp; Read Only</h4>
              </div>
              <div class="card-body">
                <div class="section-title mt-0">Text</div>
                <div class="form-group">
                  <label>Readonly</label>
                  <input type="text" class="form-control" readonly="">
                </div>
                <div class="form-group">
                  <label>Readonly Plain Text</label>
                  <input type="text" class="form-control-plaintext" readonly="" value="Hello!">
                </div>
                <div class="section-title">Select</div>
                <div class="form-group">
                  <label>Select Disabled</label>
                  <select class="form-control" disabled="">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
                <div class="section-title">Checkbox</div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                    <label class="form-check-label" for="defaultCheck2">
                      Disabled checkbox
                    </label>
                  </div>
                </div>
                <div class="section-title">Radio</div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="" id="radioDisabled" disabled>
                    <label class="form-check-label" for="radioDisabled">
                      Disabled radio
                    </label>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Inline</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label class="d-block">Inline Checkbox</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="d-block">Inline Radio</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineradio1" value="option1">
                    <label class="form-check-label" for="inlineradio1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineradio2" value="option2">
                    <label class="form-check-label" for="inlineradio2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineradio3" value="option3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Horizontal Form</h4>
              </div>
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2"
                    placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary">Submit</button>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Horizontal Form</h4>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <fieldset class="form-group">
                  <div class="row">
                    <div class="col-form-label col-sm-3 pt-0">Radios</div>
                    <div class="col-sm-9">
                      <div class="form-check">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio3">First Radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2">Second Radio</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <div class="col-sm-3">Checkbox</div>
                  <div class="col-sm-9">
                    <div class="form-check">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Example Checkbox</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Custom Forms</h4>
              </div>
              <div class="card-body">
                <div class="section-title mt-0">Checkbox</div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                </div>
                <div class="section-title">Radio</div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                </div>
                <div class="section-title">Inline</div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="customRadioInline1"
                    class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="customRadioInline1"
                    class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom
                    radio</label>
                </div>
                <div class="section-title">Disabled</div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled>
                  <label class="custom-control-label" for="customCheckDisabled">Check this custom checkbox</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" name="radioDisabled" class="custom-control-input" disabled>
                  <label class="custom-control-label">Toggle this custom radio</label>
                </div>
              </div>
            </div> --}}
            {{-- <div class="card">
              <div class="card-header">
                <h4>Learn More</h4>
              </div>
              <div class="card-body">
                <div class="jumbotron text-center">
                  <h2>Learn More</h2>
                  <p class="lead text-muted mt-3">All the above form elements are the default of bootstrap and you
                    can learn them on the official documentation provided by Bootstrap.</p>
                  <a class="btn btn-primary mt-3" href="https://getbootstrap.com/docs/4.0/components/forms/"
                    target="_blank" role="button">Learn more</a>
                </div>
              </div>
            </div> --}}
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
  </div>
  @endsection