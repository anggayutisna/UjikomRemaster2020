<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.css')}}">
  <link href="{{ asset('assets/frontend/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Halaman Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background-image: url('assets/frontend/images/build.jpg');">
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                </div>


            <div class="content">
                <div class="title m-b-md">
                   Halaman Login
                </div>

                <div class="links">
                <a href="{{url('login_guru')}}" class="small btn btn-danger px-4 py-2 rounded-0" style="margin-right:50px"><span> Login Guru</span></a>
                <a href="{{url('login_siswa')}}" class="small btn btn-info px-4 py-2 rounded-0"><span > Login Siswa</span></a>

            </div>
            </div>
        </div>
    </body>
</html>
