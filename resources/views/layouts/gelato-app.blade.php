<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <meta name="current-locale" content="en-US">

    <title>{{ config('app.name', 'Gelato the Clown') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="app">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <a href="{{ url('/') }}">
                   <img src="{{url('images/headerTent2.png')}}" alt="Tent Image" class="img-responsive center-block"></a>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Gelato the Clown') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{ route('characters') }}">Characters</a></li>
                            <li><a href="{{route('chapters')}}">Chapters</a></li>
                            <li><a href="{{route('mobile-app')}}">Mobile App</a></li>
                            <li><a href="{{route('store')}}">Store</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; {{\Carbon\Carbon::now()->format('Y')}} Gelato The Clown. All rights reserved.
                </div>
            </div>
           
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
