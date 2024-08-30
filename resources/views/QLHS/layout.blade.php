<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/qlhs(homePage).css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
    <title>@yield('title')</title>
</head>
<header>
    <div class="nav-bar">
        <div class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">D.A.D</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about-section">About us</a></li>
                    <li><a href="#creater-section">Creater</a></li>
                </ul>
                <form action="./QLHS.html" class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="searchbtn">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="nav navbar-nav navbar-right btn-group">
                    <!-- <form action="{{ route('home') }}" method="POST"> -->
                    <button id="regis-btn" class="btn regis-btn"><a href="{{ route('login') }}">Đăng kí</a></button>
                    <button class="btn login-btn"><a href="{{ route('login') }}">Đăng nhập</a></button>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="background">
        <h1 id="text-intro" class="text-intro text-danger text-center"></h1>
    </div>
</header>
<body>
<div class="container">
    @yield('content')
    </div>
</body>
<footer>
    <div class="brand">
        <h1>D.A.D<span class="text-danger">Cooperation</span></h1>
        <h2>Copyright &copy : 2024 made by Duc Anh</h2>
    </div>
</footer>
<script src="{{ asset('js/qlhs(homePage).js') }}"></script>
</html>