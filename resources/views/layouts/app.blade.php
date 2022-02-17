<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="data:image/jpeg;base64,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mDKV+8zs1bXmq4t1UIxps6ms4G0FRCGAYDeAWxv4buswtjVYlKOGGQQRzG+VQJlQMpiBVmMyIzAqzGZEQBMZgyKILnZRWduSAv8AlwgImYtNXLmpgsFor8Xrt/SP3Mz1jq5Qp4LA1W5vgjyUbvzgarYaLq1/YT1e92yq/Xv8szbNF6Cp0cMf5lTuYjAHyju8eMy4GN0qgIiICIiAiIgIiICIiAiIgfOvaUP/AHe9+aj/APjTnh1T0iba8o1B+MD7g488Y85e17rippS/cbx6bY86aKh+6GYGmxUhhxBBHiN4m/M7xJ/0x6vW7X1ZTYMAQcggEHmDvBlyYHU28Faxt3B4Jsn/AE7h9sTOzDZ1emuXudsFfarWtUlgpoueLUzsZPVcbJ+kxNbVGuvsV0ccnQqfqpOfpN0iQloD6u3q/wCWj/I4H6gJZOhrwf8ASt5PRP8AdOixA52uhbw/9M3m9Ef3S6mr94f8pV+Z0/tzN/iBpNPVa5J9Z6SjptufpgT209UF9+4dvlVE/PM2mIGHttW7VN/o/SHm5L/Y7vtMolNVGFUKOQAA+glyICIiAiIgIiICIiAiIgIiICIiBEs3VwtNHqOcIiszHkqgkn6CXpoPa5psULH+GU/zLg7HUURg1G8CML/r6Sczu9It6nbiNxcNVqVKre07u7fM7Fj9zKIiejJ1OmG3u9u3dj91t2bofcYHyIK/2ToM5t2MUyLeu3cWTH1c/uJ0mYOT/atnH/rExETh2REQEREBERAREQEREBERAREQEREBERAREQERECzWrLTVqjMFRVLOTuAUDJJPIAT5x1x1gbSN29xvFMepQU53UVJwSO5mJLHxx3Tvms2hv461q2pqtRDgAsmCcAhsEHiDjBGRkTjuluzHSNDJpql0nNGFNsdUcj7MZdw3Mvd+quWas6jSZKjJA5z13ei7midmrbVqZz79Ooo8iRg+U3fs91Fq16iXNxTalbqcqrDZaqw7tk7wnMnjwHOadcmZO+2eY1b106J2e6KNtYUlO5n9du72gAo/pCnxJm0QJMw293tsk6nRERISREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQP/Z" alt="logo" width="40" height="34">
                </a>
            
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'CourseWeb') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-outline-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
