<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('user/site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    {{-- ------------- font ------------------ --}}
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- ----------------------------------------------------------- --}}

    <style>
        #typewriter::after {
            content: "|";
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            font-family: 'Montserrat', sans-serif;
        }

        @media (max-width: 767px) {
            .btn {
                max-width: 100%;
            }

            .hero__btn a,
            .wantToWork-area .btn,
            .btn-black {
                width: 100%;
                box-sizing: border-box;
            }

            .wantToWork-area {
                overflow: hidden;
            }

            .row {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .slider-height {
                height: auto;
                padding: 80px 0;
            }

            .hero__caption h1 {
                font-size: 32px;
            }

            .hero__caption span {
                font-size: 14px;
            }

            .hero__caption p {
                font-size: 14px;
            }

            .hero__btn {
                display: flex;
                flex-direction: column;
                width: 100%;
                overflow: hidden;
            }

            .hero__btn a {
                width: 100%;
                box-sizing: border-box;
                text-align: center;
                margin: 8px 0 !important;
            }

            .row {
                margin-left: 0;
                margin-right: 0;
            }

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .ml-15 {
                margin-left: 0 !important;
            }

            /*  */

            .section-tittle h2 {
                font-size: 26px;
            }

            .single-cat {
                margin-bottom: 30px;
            }

            .wantToWork-caption h2 {
                font-size: 22px;
            }

        }

        html,
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>

    <header>
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('user/assets/img/logo/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">

                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ route('about.index') }}">About</a></li>
                                            <li><a href="{{ route('services.index') }}">Services</a></li>
                                            <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                                            <li>
                                                <a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('page.blog') }}">Blog</a></li>
                                                    <li><a href="{{ route('page.blogDetails') }}">Blog Details</a></li>
                                                    <li><a href="{{ route('page.element') }}">Element</a></li>
                                                    <li><a href="{{ route('page.portfolioDetails') }}">Portfolio
                                                            Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                    <a href="#" class="btn header-btn">Get Free Consultent</a>
                                </div>

                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
