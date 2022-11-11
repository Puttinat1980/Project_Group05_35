<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>เว็บไซต์อภิสราการพิมพ์</title>
    <meta charset="UTF-8">
    <meta name="description" content="เว็บไซต์อภิสราการพิมพ์">
    <meta name="keywords" content="warrior, game, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />


    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="container">
            <!-- logo -->
            <a class="site-logo" href="index.html">
                <img src="{{ asset('frontend/img/logo.png') }}" alt="">
            </a>
            <div class="user-panel">
                <a href="{{ route('login') }}">Login</a> / <a href="{{ route('register') }}">Register</a>
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <!-- site menu -->
            <nav class="main-menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="review.html">Games</a></li>
                    <li><a href="categories.html">Blog</a></li>
                    <li><a href="community.html">Forums</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/img/slider-1.jpg') }}">
                <div class="hs-text">
                    <div class="container">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus
                            mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus
                            faucibus finibus.</p>
                        <a href="#" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/img/slider-2.jpg') }}">
                <div class="hs-text">
                    <div class="container">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus
                            mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus
                            faucibus finibus.</p>
                        <a href="#" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Latest news section -->
    <div class="latest-news-section">
        <div class="ln-title">Latest News</div>
        <div class="news-ticker">
            <div class="news-ticker-contant">
                <div class="nt-item"><span class="new">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. </div>
                <div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur adipiscing
                    elit. </div>
                <div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
        </div>
    </div>
    <!-- Latest news section end -->
    @yield('content')
    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <ul class="footer-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="review.html">Games</a></li>
                <li><a href="categories.html">Blog</a></li>
                <li><a href="community.html">Forums</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <p class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                    aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
    <!-- Footer section end -->


    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
