<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/nav-style.css')}}">
    <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/Inscription.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    @include('layouts.navbar')
</head>
 
<body>
        @yield('content')
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.0/wow.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.js"></script>
    <script src="/js/vue.js"></script>  
    <script src="/js/script.js"></script>
    <script src="{{asset('js/inscription.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js" ></script>
</html>