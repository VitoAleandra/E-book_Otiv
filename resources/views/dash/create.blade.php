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
                <h1>Form Add!</h1>
              </div>
              <div class="card4">
                <div class="container">
                    <div class="row text-dark">
                        <div class="col">
                            <div class="card mt-2">
                                <div class="card-header" style="  background: -webkit-gradient(linear, left bottom, left top, from(#73abd3), to(#0088e8));
                                background: -webkit-linear-gradient(bottom, #73abd3 0%, #0088e8 100%);
                                background: -moz-linear-gradient(bottom, #73abd3 0%, #0088e8 100%);
                                background: -o-linear-gradient(bottom, #73abd3 0%, #0088e8 100%);
                                background: linear-gradient(to top, #73abd3 0%, #0088e8 100%);">
                                    <h3 class="text-white">Form Create Book</h3>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form action="/store" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="writer" class="form-label">Writer</label>
                                            <input type="text" class="form-control" id="writer" name="writer">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="publisher" class="form-label">Publisher</label>
                                                    <input type="text" class="form-control" id="publisher" name="publisher">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="no_isbn" class="form-label">No ISBN</label>
                                                    <input type="text" class="form-control" id="no_isbn" name="isbn">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <select class="form-select mt-4" aria-label="Default select example"
                                                    name="categorybook_id">
                                                    <option hidden>Category Book</option>
                                                    <option value="Fiksi">Fiksi</option>
                                                    <option value="Novel">Novel</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Synopsis</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="synopsis"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="book" class="form-label">Cover Book</label>
                                                    <input type="file" class="form-control" id="book" name="cover">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5 mb-3 search">
                    <div class="col">
                        <form action="" method="get">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="keyword" name="keyword">
                                <button class="input-group-text" id="basic-addon1">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Writer</th>
                                    <th scope="col">Publisher</th>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Synopsis</th>
                                    <th scope="col">Cover Book</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->writer }}</td>
                                        <td>{{ $item->publisher }}</td>
                                        <td>{{ $item->isbn }}</td>
                                        <td>{{ $item->synopsis }}</td>
                                        <td>
                                            <img src="{{ asset('img/'. $item->cover) }}" alt="" width="100px">
                                        </td>
                                        <td></td>
                                        <td>
                                            <form action={{route('delete',$item->id)}} method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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