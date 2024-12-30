<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="{{url('')}}/include/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('include/css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/20dd01c86d.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--============================== Header Start ==============================-->
    <header id="header">
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <div class="nav-inside d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="#">
                        <img src="{{url('')}}/include/images/121-clinic-logo.png" alt="">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNav">
                        <div class="navbar-inside ms-auto">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="{{route('index')}}">HOME</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">ABOUT US</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#!" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                                    <ul class="dropdown-menu" aria-labelledby="about">
                                        <li><a class="dropdown-item" href="weight-loss-service.html">Weight Loss</a></li>
                                        <li><a class="dropdown-item" href="#!">Skincare</a></li>
                                        <li><a class="dropdown-item" href="menopause.html">Menopause</a></li>
                                        <li><a class="dropdown-item" href="#!">Erectile Dysfunction</a></li>
                                        <li><a class="dropdown-item" href="#!">Stop Smoking</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">GALLERY</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <button class="cst-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{url('')}}/include/images/about-img.png" alt="">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('login')}}">login</a></li>
                                {{-- <li><a class="dropdown-item" href="{{route('register')}}">Dashboard</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>