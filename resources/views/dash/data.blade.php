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
                    <a href="/admin" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
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
                <h1>Data Register</h1>
              </div>
              <div class="card4">
                <img class="gen4" src="{{ asset('asset/img/genuhuy.png') }}" alt="">
                <table class="text-center table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Asal Kota</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach ($regis as $l)
                    <tbody>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $l->name }}</td>
                        <td>{{ $l->email }}</td>
                        <td>{{ $l->no_hp }}</td>
                        <td>{{ $l->askot }}</td>
                        <td>
                            <form action="{{ route('delete', $l->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                              </svg></button>
                            </form>
                        </td>
                    </tbody>
                    @endforeach
                </table>
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