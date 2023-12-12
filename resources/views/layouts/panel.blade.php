<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    
    <title>@yield('title')</title>

    @vite(['resources/assets/css/app.min.css',
            'resources/assets/css/style.css',
            'resources/assets/css/components.css',
            'resources/assets/css/custom.css',
            ])

    {{-- @vite(['resources/assets/js/app.min.js',
            'resources/assets/js/scripts.js',
            'resources/assets/js/custom.js']) --}}
    
    <link rel='shortcut icon' type='image/x-icon' href="/favicon.ico">
</head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="card">
                <div class="text-center mt-4">
                  <h5>DIRECCIÓN ZONAL 7 LOJA</h5>
                  <br>
                  <h5>SISTEMAS DE CONTROL</h5>                  
                </div>
                <div class="card-body">                    
                  <nav class="navbar navbar-expand-lg bg-primary">
                    
                    <a class="navbar-brand" href="/inicio_ticket">Inicio</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="/crea_ticket">Ticket de Taxi <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Certificado Laboral</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Préstamo Llaves</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Vacaciones</a>
                        </li>                        
                    </div>
                    <ul class="navbar-nav navbar-right">
                            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                                <span class="badge headerBadge1">
                                  6 </span> </a>
                              <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                                <div class="dropdown-header">
                                  Messages
                                  <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                  </div>
                                </div>
                                <div class="dropdown-list-content dropdown-list-message">
                                  <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
                                                              text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                        Deo</span>
                                      <span class="time messege-text">Please check your mail !!</span>
                                      <span class="time">2 Min Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                        Smith</span> <span class="time messege-text">Request for leave
                                        application</span>
                                      <span class="time">5 Min Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                        Ryan</span> <span class="time messege-text">Your payment invoice is
                                        generated.</span> <span class="time">12 Min Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                        Smith</span> <span class="time messege-text">hii John, I have upload
                                        doc
                                        related to task.</span> <span class="time">30
                                        Min Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                        Joshi</span> <span class="time messege-text">Please do as specify.
                                        Let me
                                        know if you have any query.</span> <span class="time">1
                                        Days Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                        Smith</span> <span class="time messege-text">Client Requirements</span>
                                      <span class="time">2 Days Ago</span>
                                    </span>
                                  </a>
                                </div>
                                <div class="dropdown-footer text-center">
                                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
                              </a>
                              <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                                <div class="dropdown-header">
                                  Notifications
                                  <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                  </div>
                                </div>
                                <div class="dropdown-list-content dropdown-list-icons">
                                  <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                      class="dropdown-item-icon bg-primary text-white"> <i class="fas
                                                                  fa-code"></i>
                                    </span> <span class="dropdown-item-desc"> Template update is
                                      available now! <span class="time">2 Min
                                        Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
                                                                  fa-user"></i>
                                    </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                        Sugiharto</b> are now friends <span class="time">10 Hours
                                        Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                                        class="fas
                                                                  fa-check"></i>
                                    </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                      moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                        Hours
                                        Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                                        class="fas fa-exclamation-triangle"></i>
                                    </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                      clean it! <span class="time">17 Hours Ago</span>
                                    </span>
                                  </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
                                                                  fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Welcome to Otika
                                      template! <span class="time">Yesterday</span>
                                    </span>
                                  </a>
                                </div>
                                <div class="dropdown-footer text-center">
                                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user3.jpg"
                                  class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                              <div class="dropdown-menu dropdown-menu-right pullDown">
                                <div class="dropdown-title">Hello Sarah Smith</div>
                                <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                                                          fa-user"></i> Profile
                                </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                                  Activities
                                </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                  Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="/salida" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                                  Logout
                                </a>
                              </div>
                            </li>
                          </ul>
                        </ul>

                  </nav>
                  </div>
              </div>


            
            <!-- Main Content -->
            <main class="py-4">
                @yield('content')
                {{-- <div class="section-body">
                  <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <h4>Default</h4>
                        </div>
                        <div class="card-body">
                          <div class="alert alert-primary">
                            This is a primary alert.
                          </div>
                          <div class="alert alert-secondary">
                            This is a secondary alert.
                          </div>
                          <div class="alert alert-success">
                            This is a success alert.
                          </div>
                          <div class="alert alert-danger">
                            This is a danger alert.
                          </div>
                          <div class="alert alert-warning">
                            This is a warning alert.
                          </div>
                          <div class="alert alert-info">
                            This is a info alert.
                          </div>
                          <div class="alert alert-light">
                            This is a light alert.
                          </div>
                          <div class="alert alert-dark">
                            This is a dark alert.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h4>Icon</h4>
                        </div>
                        <div class="card-body">
                          <div class="alert alert-primary alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Primary</div>
                              This is a primary alert.
                            </div>
                          </div>
                          <div class="alert alert-secondary alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Secondary</div>
                              This is a secondary alert.
                            </div>
                          </div>
                          <div class="alert alert-success alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Success</div>
                              This is a success alert.
                            </div>
                          </div>
                          <div class="alert alert-danger alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Danger</div>
                              This is a danger alert.
                            </div>
                          </div>
                          <div class="alert alert-warning alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Warning</div>
                              This is a warning alert.
                            </div>
                          </div>
                          <div class="alert alert-info alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Info</div>
                              This is a info alert.
                            </div>
                          </div>
                          <div class="alert alert-light alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Light</div>
                              This is a light alert.
                            </div>
                          </div>
                          <div class="alert alert-dark alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Dark</div>
                              This is a dark alert.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <h4>Title</h4>
                        </div>
                        <div class="card-body">
                          <div class="alert alert-primary">
                            <div class="alert-title">Primary</div>
                            This is a primary alert.
                          </div>
                          <div class="alert alert-secondary">
                            <div class="alert-title">Secondary</div>
                            This is a secondary alert.
                          </div>
                          <div class="alert alert-success">
                            <div class="alert-title">Success</div>
                            This is a success alert.
                          </div>
                          <div class="alert alert-danger">
                            <div class="alert-title">Danger</div>
                            This is a danger alert.
                          </div>
                          <div class="alert alert-warning">
                            <div class="alert-title">Warning</div>
                            This is a warning alert.
                          </div>
                          <div class="alert alert-info">
                            <div class="alert-title">Info</div>
                            This is a info alert.
                          </div>
                          <div class="alert alert-light">
                            <div class="alert-title">Light</div>
                            This is a light alert.
                          </div>
                          <div class="alert alert-dark">
                            <div class="alert-title">Dark</div>
                            This is a dark alert.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h4>Dismissable</h4>
                        </div>
                        <div class="card-body">
                          <div class="alert alert-primary alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              This is a primary alert.
                            </div>
                          </div>
                          <div class="alert alert-secondary alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              This is a secondary alert.
                            </div>
                          </div>
                          <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              This is a success alert.
                            </div>
                          </div>
                          <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              This is a danger alert.
                            </div>
                          </div>
                          <div class="alert alert-warning alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              This is a warning alert.
                            </div>
                          </div>
                          <div class="alert alert-info alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              This is a info alert.
                            </div>
                          </div>
                          <div class="alert alert-light alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              This is a light alert.
                            </div>
                          </div>
                          <div class="alert alert-dark alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              This is a dark alert.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
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
                    </div>
                  </div>
                </div>
              </div> --}}
            </main>
            <footer class="main-footer">
              <div class="footer-center">
                <a href="templateshub.net">Templateshub</a></a>
              </div>
              <div class="footer-right">
              </div>
            </footer>
          </div>
    </div>

    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('scripts')

    

</body>


</html>