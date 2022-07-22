<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/>

    <!-- FilePond -->
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            color: white;
            background-color: black;
            font-family: 'Nunito', sans-serif;
        }

        .label {
            color: white;
        }

        nav {
            /* position: absolute; */
            background-color: #131618;
        }

        .card {
            background-color: #131618;
        }

        .form-outline{
            background-color: #343a40;
        }

        #label{
            color: white;
        }

    </style>

</head>
<body>
    <!-- FilePond -->
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <nav class="navbar navbar-expand-md navbar-dark shadow-sm sticky-top">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('logo_sample.png') }}" alt="logo" width="30" class="d-inline-block align-text-bottom">
                The Source Pod
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('Go to Admin Dashboard') }}</a>
                    </li> -->
                </ul>

                <a href="/admin_dashboard">Go to admin</a>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @endguest
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->email }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/subscriber/{{ Auth::user()->id }}/personal_information">{{ __('My Information') }}</a>
                                <a class="dropdown-item" href="/subscriber/{{ Auth::user()->id }}/library">{{ __('My Library') }}</a>
                                <a class="dropdown-item" href="/subscriber/{{ Auth::user()->id }}/membership">{{ __('Membership') }}</a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="/logout">{{ __('Logout') }}</a>

                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <br>
    @yield('body_content')
</body>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>

</html>
