<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Web của Đức Anh') }}</title> -->
     <title>Student Management</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/qlhs(mainPage).css') }}">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- Đảm bảo chỉ giữ một phiên bản jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a style="font-size:30px;color:brown;" class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Web của Đức Anh') }} -->
                      Main Page
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
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="head">
                                <div class="info">
                                   <div class="avatar">
                                       <img src="./London.jpg" alt="">
                                    </div>
                                    <div class="tt">
                                       <ul class="tt_user">
                                       @if($latestUserInfo)
                                           <li>Name: <span class="names">{{ $latestUserInfo->Name }}</span></li>
                                           <li>Date of Birth: <span class="birthdays">{{ $latestUserInfo->Birthday }}</span></li>
                                           <li>Job: <span class="jobs">{{ $latestUserInfo->Job }}</span></li>
                                       @else
                                           <li>No information</li>
                                       @endif
                                        </ul>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                   <li class="addnew active text-center"><a data-toggle="tab" href="#AddNew">Update Your Infor</a></li>
                                   <li><a class="danhsach text-center" data-toggle="tab" href="#Danhsach">Student List</a></li>
                                   <li class="lich text-center"><a data-toggle="tab" href="#TrucNhat">Duty Schedule</a></li>
                                   <li class="todo text-center"><a data-toggle="tab" href="#ToDo">To Do List</a></li>
                                   <li class="upload text-center"><a data-toggle="tab" href="#UpLoad">Upload Image</a></li>
                                </ul>
                            </div>
                                <div id="Logout-btn" class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> -->
                                    <!-- Logout Form -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button style="margin-left:45px;" type="submit" class="btn btn-primary">Logout</button>
                                </form>
                                </div>
                            </li>
            <!-- <div class="header">
            <div class="info">
                <div class="avatar">
                    <img src="./London.jpg" alt="">
                </div>
                <div class="tt">
                    <ul class="tt_user">
                        <li>Ten: <span class="names"></span></li>
                        <li>Ngay Sinh <span class="birthdays"></span></li>
                        <li>Nghe nghiep <span class="jobs"></span></li>
                    </ul>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="addnew active text-center"><a data-toggle="tab" href="#AddNew">Tao Thong Tin</a></li>
                <li><a class="danhsach text-center" data-toggle="tab" href="#DanhSach">Danh Sach</a></li>
                <li class="lich text-center"><a data-toggle="tab" href="#TrucNhat">Lich Truc</a></li>
                <li class="todo text-center"><a data-toggle="tab" href="#ToDo">To Do list</a></li>
            </ul>
          </div> -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- <div class="container">
    @yield('content')
    </div> -->
    <script>
</script>
    <script src="{{ asset('js/qlhs(mainPage).js') }}"></script>
</body>
</html>
