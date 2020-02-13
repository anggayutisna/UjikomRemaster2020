<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="{{ asset('assets/frontend/images/logosmk.png')}}">
  <title>Sistem Informasi Akademik | Smk Assalaam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.css')}}">
  <link href="{{ asset('assets/frontend/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>08xx-xxxx-xxxx</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> email@gmail.com</a>
          </div>

        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="{{ asset('assets/frontend/images/logosmk.png')}}" alt="Image" class="img-fluid" width="100px" height="40px">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="{{url('')}}" class="nav-link text-left">Beranda</a>
                </li>

                {{-- <li>
                  <a href="{{url('administrasi')}}" class="nav-link text-left">Administrasi</a>
                </li> --}}
                <li>
                <a href="{{url('tentang')}}" class="nav-link text-left">About</a>
                  </li>
                  @if(Auth::user()->hasRole('admin'))
                  <li>
                  <a href="{{url('admin/siswa')}}">Admin</a>
                  </li>
                  @endif
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="col-lg-3 text-right">
          <a href="{{url('halaman_login')}}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-unlock-alt"></span> Masuk</a>

          <a class="nav-link" data-toggle="dropdown" href="#">
          <i></i>


        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    </a>
           <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

        </div>

        </div>
      </div>

    </header>



