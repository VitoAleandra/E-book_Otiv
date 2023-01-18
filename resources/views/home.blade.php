<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Bookrama Home</title>
    <link rel="icon" type="image/png" href="img/icons/favicon.ico" />
    <!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="/css/owl-carousel.css">

</head>

<body>
    @if (Session::get('notAllowed'))
        <script>
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'question'
            )
        </script>
    @endif

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">BOOKRAMA</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                            <li class="submenu">
                                @if (Auth::user())
                                    <a href="">Dashboard</a>
                                    <ul>
                                        <li><a href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                          </svg></a></li>
                                    </ul>
                                @else
                                    <a href="javascript:;">Sign</a>
                                    <ul>
                                        <li><a href="/login">Sign In</a></li>
                                        <li><a href="/register">Sign Up</a></li>
                                    </ul>
                                @endif
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Baca Buku Online Kamu.</h1>
                        <p>Ebook dapat mengurangi penggunaan kertas dan menghemat tempat penyimpanan.</p>
                        <a href="#services" class="main-button-slider">More!</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="/img/slider-icon.png" class="rounded img-fluid d-block mx-auto"
                            alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    @if (Auth::user())
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="/img/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>Manfaat Membaca Buku Digital</h5>
                    </div>
                    <div class="left-text">
                        <p>Kelebihan pertama yang dimiliki oleh buku digital adalah lebih ringkas dan praktis. Karena
                            didukung oleh teknologi digital, dengan begitu semua koleksi bukumu tersimpan disatu
                            genggaman aplikasi.<br><br>
                            Dengan begitu, bisa membaca buku apapun sesuai mood dengan mudah di mana saja dan kapan
                            saja.</p>
                            @if (Auth::user()->role == 'admin')
                        <a href="/admin"
                            class="main-button">Admin Dashboard</a>
                            @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Small Start ***** -->
    <section class="section" id="services">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ($otobook as $item)
                    <div class="item service-item">
                        <div class="foto-bg">
                            <div class="icon">
                                <i><img src="{{ asset('img/'. $item->cover)}}" alt=""></i>
                            </div>
                            <h5 class="service-title">{{$item->title}}</h5>
                            <p>{{$item->synopsis}}</p>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->


    <!-- ***** Frequently Question Start ***** -->
    <section class="section" id="frequently-question">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="section-heading">
                        <p>Vivamus venenatis eu mi ac mattis. Maecenas ut elementum sapien. Nunc euismod risus ac
                            lobortis congue. Sed erat quam.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12">
                    <h5>Class aptent taciti sociosqu ad litora torquent per conubia</h5>
                    <div class="accordion-text">
                        <p>Curabitur placerat diam in risus lobortis, laoreet porttitor est elementum. Nulla ultricies
                            risus quis risus scelerisque, a aliquam tellus maximus. Cras pretium nulla ac convallis
                            iaculis. Aenean bibendum erat vitae odio sodales, in facilisis tellus volutpat.</p>
                        <p>Sed lobortis pellentesque magna ac congue. Suspendisse quis molestie magna, id eleifend ex.
                            Ut mollis ultricies diam nec dictum. Morbi commodo hendrerit mi vel vulputate. Proin non
                            tincidunt dui. Lorem ipsum dolor sit amet.</p>
                        <span>Email: <a href="#">email@company.com</a><br></span>
                        <a href="#contact-us" class="main-button">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>First Common Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Duis vulputate porttitor urna sit amet pretium. Phasellus sed pulvinar eros,
                                        condimentum consequat ex. Suspendisse potenti.
                                        <br><br>
                                        Pellentesque maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut
                                        eros rutrum sodales. Aliquam erat volutpat.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Second Question Answer</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Sed odio elit, cursus sed consequat at, rutrum eget augue. Cras ac eros iaculis,
                                        tempor quam sit amet, scelerisque mi. Quisque eu risus eget nunc porttitor
                                        vestibulum at a ante.
                                        <br><br>
                                        Praesent ut placerat turpis, vel pellentesque dolor. Sed rutrum eleifend tortor,
                                        eu luctus orci sagittis in. In blandit fringilla mollis.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Third Answer for you</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Proin feugiat ante ut vulputate rutrum. Nam quis erat turpis. Nullam maximus
                                        pharetra lorem, eu condimentum est iaculis ut. Pellentesque mattis ultrices
                                        dignissim.
                                        <br><br>
                                        Etiam et enim finibus, feugiat massa efficitur, finibus sapien. Sed cursus lacus
                                        quis arcu scelerisque, eget ornare risus maximus. Aenean non lectus id odio
                                        rhoncus pharetra.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Fourth Question Asked</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Phasellus eu purus ornare, eleifend orci nec, egestas nulla. Sed sed aliquet
                                        sapien. Proin placerat, ipsum eu posuere blandit, tellus quam consectetur nisi,
                                        id sollicitudin diam ex at nisi.
                                        <br><br>
                                        Aenean fermentum eget turpis egestas semper. Sed finibus mollis venenatis.
                                        Praesent at sem in massa iaculis pharetra.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Fifth Ever Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Quisque aliquet ipsum ut magna rhoncus, euismod lacinia elit rhoncus. Sed sapien
                                        elit, mollis ut ultricies quis, fermentum nec ante.
                                        <br><br>
                                        Sed nec ex nec tortor fermentum sollicitudin id ut ligula. Ut sagittis rutrum
                                        lectus, non sagittis ante euismod eu.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Sixth Sense Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Suspendisse potenti. Ut dapibus leo ut massa vulputate semper. Pellentesque
                                        maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut eros rutrum
                                        sodales. Aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!--===============================================================================================-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--===============================================================================================-->
    <script src="sweetalert2.all.min.js"></script>
    <!--===============================================================================================-->
    <script src="sweetalert2.min.js"></script>
    <!--===============================================================================================-->
    <!-- ***** Frequently Question End ***** -->

    <!--===============================================================================================-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--===============================================================================================-->
    <script src="sweetalert2.all.min.js"></script>
    <!--===============================================================================================-->
    <script src="sweetalert2.min.js"></script>
    <!--===============================================================================================-->
    
    <!-- jQuery -->
    <script src="/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/js/owl-carousel.js"></script>
    <script src="/js/scrollreveal.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="/js/custom.js"></script>

</body>

</html>
