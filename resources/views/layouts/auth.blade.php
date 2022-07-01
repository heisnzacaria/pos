<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css')
</head>

<div class="header3">

 <img src="{{ asset('images/logo.png') }}"  alt="logo"/>
</div>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">

            <a href="../../index2.html">{{ config('app.name') }}</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                @yield('content')
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('js')

</body>

</html>
<style>
    body {
        background-image: url( {{ url('images/bg.png') }});

      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
        background-image:blurred;
}




.header3 img {
  float: left;
  width: 100px;
  height: 100px;
  background: #555;
  opacity: 1.0;
}
    </style>
