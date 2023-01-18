<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="img/icons/favicon.ico">
  <title>Dashboard Admin</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  @stack('stylesheet')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
</head>


<body>
    <div id="app">
      <div class="main-wrapper">
          <div class="navbar-bg"></div>
              <nav class="navbar navbar-expand-lg main-navbar">
                  <form class="form-inline mr-auto">
                  <ul class="navbar-nav mr-3">
                      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                  </ul>
                  </form>
                  <ul class="navbar-nav navbar-right">
                  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                      <img alt="image" src="{{ asset('stisla/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                      <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name}}</div></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="/login" class="dropdown-item has-icon text-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                          </svg></i>
                        </a>
                      </div>
                  </li>
                  </ul>
              </nav>

        <div class="main-sidebar sidebar-style-2">
          <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <a href="#">Bookrama</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
              <a href="index.html">BR</a>
            </div>
            <ul class="sidebar-menu">
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
                </li>
                <li class="nav-item dropdown ">
                    <a href="/regis" class="nav-link"><i class="fas fa-user"></i><span>Data</span></a>
                </li>
                <li class="nav-item dropdown ">
                  <a href="/create" class="nav-link"><i class="fas fa-plus"></i><span>Add</span></a>
              </li>
            </ul>
          </aside>
        </div>
  
        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
              <div class="section-header">
                <h1>{{ auth()->user()->role }}</h1>
              </div>
              <div class="section-body">
                <h2 class="section-title">Hi, {{ auth()->user()->name }}</h2>
                <p class="section-lead">Selamat Datang, {{ auth()->user()->name }}! </p>
            
                {{-- <div class="row">
                  <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Input Text</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Default Input Text</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Phone Number (US Format)</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-phone"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control phone-number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Password Strength</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                              </div>
                            </div>
                            <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                          </div>
                          <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Currency</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                $
                              </div>
                            </div>
                            <input type="text" class="form-control currency">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Purchase Code</label>
                          <input type="text" class="form-control purchase-code" placeholder="ASDF-GHIJ-KLMN-OPQR">
                        </div>
                        <div class="form-group">
                          <label>Invoice</label>
                          <input type="text" class="form-control invoice-input">
                        </div>
                        <div class="form-group">
                          <label>Date</label>
                          <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                        </div>
                        <div class="form-group">
                          <label>Credit Card</label>
                          <input type="text" class="form-control creditcard">
                        </div>
                        <div class="form-group">
                          <label>Tags</label>
                          <input type="text" class="form-control inputtags">
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4>Toggle Switches</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <div class="control-label">Toggle switches</div>
                          <div class="custom-switches-stacked mt-2">
                            <label class="custom-switch">
                              <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                              <span class="custom-switch-indicator"></span>
                              <span class="custom-switch-description">Option 1</span>
                            </label>
                            <label class="custom-switch">
                              <input type="radio" name="option" value="2" class="custom-switch-input">
                              <span class="custom-switch-indicator"></span>
                              <span class="custom-switch-description">Option 2</span>
                            </label>
                            <label class="custom-switch">
                              <input type="radio" name="option" value="3" class="custom-switch-input">
                              <span class="custom-switch-indicator"></span>
                              <span class="custom-switch-description">Option 3</span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="control-label">Toggle switch single</div>
                          <label class="custom-switch mt-2">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">I agree with terms and conditions</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4>Image Check</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label class="form-label">Image Check</label>
                          <div class="row gutters-sm">
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input"  />
                                <figure class="imagecheck-figure">
                                  <img src="stisla/img/news/img01.jpg" alt="}" class="imagecheck-image">
                                </figure>
                              </label>
                            </div>
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input"  checked />
                                <figure class="imagecheck-figure">
                                  <img src="stisla/img/news/img02.jpg" alt="}" class="imagecheck-image">
                                </figure>
                              </label>
                            </div>
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input"  />
                                <figure class="imagecheck-figure">
                                  <img src="stisla/img/news/img03.jpg" alt="}" class="imagecheck-image">
                                </figure>
                              </label>
                            </div>
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input"  checked />
                                <figure class="imagecheck-figure">
                                  <img src="stisla/img/news/img04.jpg" alt="}" class="imagecheck-image">
                                </figure>
                              </label>
                            </div>
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input"  />
                                <figure class="imagecheck-figure">
                                  <img src="stisla/img/news/img05.jpg" alt="}" class="imagecheck-image">
                                </figure>
                              </label>
                            </div>
                            <div class="col-6 col-sm-4">
                              <label class="imagecheck mb-4">
                                <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input"  />
                                <figure class="imagecheck-figure">
                                  <img src="stisla/img/news/img06.jpg" alt="}" class="imagecheck-image">
                                </figure>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4>Color</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Simple</label>
                          <input type="text" class="form-control colorpickerinput">
                        </div>
                        <div class="form-group">
                          <label>Pick Your Color</label>
                          <div class="input-group colorpickerinput">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <i class="fas fa-fill-drip"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Color Input</label>
                          <div class="row gutters-xs">
                            <div class="col-auto">
                              <label class="colorinput">
                                <input name="color" type="checkbox" value="primary" class="colorinput-input" />
                                <span class="colorinput-color bg-primary"></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input name="color" type="checkbox" value="secondary" class="colorinput-input" />
                                <span class="colorinput-color bg-secondary"></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input name="color" type="checkbox" value="danger" class="colorinput-input" />
                                <span class="colorinput-color bg-danger"></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input name="color" type="checkbox" value="warning" class="colorinput-input" />
                                <span class="colorinput-color bg-warning"></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input name="color" type="checkbox" value="info" class="colorinput-input" />
                                <span class="colorinput-color bg-info"></span>
                              </label>
                            </div>
                            <div class="col-auto">
                              <label class="colorinput">
                                <input name="color" type="checkbox" value="success" class="colorinput-input" />
                                <span class="colorinput-color bg-success"></span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Select</h4>
                      </div>
                      <div class="card-body">
                        <div class="section-title mt-0">Default</div>
                        <div class="form-group">
                          <label>Default Select</label>
                          <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                          </select>
                        </div>
                        <div class="section-title">Select 2</div>
                        <div class="form-group">
                          <label>Select2</label>
                          <select class="form-control select2">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Select2 Multiple</label>
                          <select class="form-control select2" multiple="">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                            <option>Option 6</option>
                          </select>
                        </div>
                        <div class="section-title">jQuery Selectric</div>
                        <div class="form-group">
                          <label>jQuery Selectric</label>
                          <select class="form-control selectric">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                            <option>Option 6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>jQuery Selectric Multiple</label>
                          <select class="form-control selectric" multiple="">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                            <option>Option 6</option>
                          </select>
                        </div>
                        <div class="section-title">Select Group Button</div>
                        <div class="form-group">
                          <label class="form-label">Size</label>
                          <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                              <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                              <span class="selectgroup-button">S</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="value" value="100" class="selectgroup-input">
                              <span class="selectgroup-button">M</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="value" value="150" class="selectgroup-input">
                              <span class="selectgroup-button">L</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="value" value="200" class="selectgroup-input">
                              <span class="selectgroup-button">XL</span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Icons input</label>
                          <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                              <input type="radio" name="transportation" value="2" class="selectgroup-input">
                              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-mobile"></i></span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="transportation" value="1" class="selectgroup-input" checked="">
                              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-tablet"></i></span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="transportation" value="6" class="selectgroup-input">
                              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-laptop"></i></span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="transportation" value="6" class="selectgroup-input">
                              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Icon input</label>
                          <div class="selectgroup selectgroup-pills">
                            <label class="selectgroup-item">
                              <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="icon-input" value="2" class="selectgroup-input">
                              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-moon"></i></span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="icon-input" value="3" class="selectgroup-input">
                              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-cloud-rain"></i></span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="icon-input" value="4" class="selectgroup-input">
                              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-cloud"></i></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Your skills</label>
                          <div class="selectgroup selectgroup-pills">
                            <label class="selectgroup-item">
                              <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                              <span class="selectgroup-button">HTML</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                              <span class="selectgroup-button">CSS</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                              <span class="selectgroup-button">PHP</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                              <span class="selectgroup-button">JavaScript</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                              <span class="selectgroup-button">Ruby</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                              <span class="selectgroup-button">Ruby</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                              <span class="selectgroup-button">C++</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4>Toggle Switches</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <div class="control-label">Toggle switches</div>
                          <div class="custom-switches-stacked mt-2">
                            <label class="custom-switch">
                              <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                              <span class="custom-switch-indicator"></span>
                              <span class="custom-switch-description">Option 1</span>
                            </label>
                            <label class="custom-switch">
                              <input type="radio" name="option" value="2" class="custom-switch-input">
                              <span class="custom-switch-indicator"></span>
                              <span class="custom-switch-description">Option 2</span>
                            </label>
                            <label class="custom-switch">
                              <input type="radio" name="option" value="3" class="custom-switch-input">
                              <span class="custom-switch-indicator"></span>
                              <span class="custom-switch-description">Option 3</span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="control-label">Toggle switch single</div>
                          <label class="custom-switch mt-2">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">I agree with terms and conditions</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4>Date &amp; Time Picker</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label class="d-block">Date Range Picker With Button</label>
                          <a href="javascript:;" class="btn btn-primary daterange-btn icon-left btn-icon"><i class="fas fa-calendar"></i> Choose Date
                          </a>
                        </div>
                        <div class="form-group">
                          <label>Date Picker</label>
                          <input type="text" class="form-control datepicker">
                        </div>
                        <div class="form-group">
                          <label>Date Time Picker</label>
                          <input type="text" class="form-control datetimepicker">
                        </div>
                        <div class="form-group">
                          <label>Date Range Picker</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-calendar"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control daterange-cus">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Time Picker</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control timepicker">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>
            </section>
  
        </div>
      </div>
    </div>
  
  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('stisla/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('stisla/js/scripts.js') }}"></script>
  <script src="{{ asset('stisla/js/custom.js') }}"></script>

  @stack('javascript')


  <!-- Page Specific JS File -->
</body>
</html>