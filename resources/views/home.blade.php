<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="Santins">
        <meta name="author" content="Pedro da Silveira Azeredo" />
        <meta name="generator" content="PhpStorm" />
        <link rel="shortcut icon" href="{{asset('assets/img/logoAerovile.png')}}" type="img/x-icon" sizes="192x192">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        
        <!--Title -->
        <title>{{config('app.name', 'Aerovale')}}</title>
    </head>

    <body>
        
        @yield('header', View::make('elements.header'))

        @yield('content')

        @yield('footer', View::make('elements.footer'))

        @yield('modalSingIn', View::make('admin.modals.modalAdmin'))

        <script src="{{asset('assets/js/app.js')}}"></script>
        

    </body>
</html>
