<!DOCTYPE html>
{{--<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <title>Elotcom.uz - Mahallabay Portali
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="CreateX - Multipurpose Bootstrap Theme">
    <meta name="keywords" content="multipurpose, portfolio, blog, shop, e-commerce, modern, flat style, responsive,  business, corporate, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#343b43" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('html/elotcom.uz.io-main/css/vendor.min.css')}}">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('html/elotcom.uz.io-main/css/theme.min.css')}}">
    <!-- Modernizr-->
    <script src="{{asset('html/elotcom.uz.io-main/js/modernizr.min.js')}}"></script>
</head>
<!-- Body-->
<body>
<!-- Off-Canvas Menu-->
<div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
    <div class="px-4 pb-4">
        <h6>Menu</h6>
        <div class="d-flex justify-content-between pt-2">
            <div class="btn-group w-100 mr-2"><a class="btn btn-secondary btn-sm btn-block dropdown-toggle" href="#" data-toggle="dropdown"><img src="html/elotcom.uz.io-main/img/flags/en.png" alt="English"/>English</a>
                <div class="dropdown-menu" style="  min-width: 150px;"><a class="dropdown-item" href="#"><img src="html/elotcom.uz.io-main/img/flags/fr.png" alt="Français"/>Français</a><a class="dropdown-item" href="#"><img src="html/elotcom.uz.io-main/img/flags/de.png" alt="Deutsch"/>Deutsch</a><a class="dropdown-item" href="#"><img src="html/elotcom.uz.io-main/img/flags/it.png" alt="Italiano"/>Italiano</a></div>
            </div><a class="btn btn-primary btn-sm btn-block" href="account-login.html"><i class="fe-icon-user"></i>&nbsp;Login</a>
        </div>
    </div>
    <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
        <!-- Mobile Menu-->
        <div class="accordion mobile-menu" id="accordion-menu">
            <!-- Home-->
            <div class="card">
                <div class="card-header"><a class="mobile-menu-link active" href="index.html">Bosh sahifa</a></div>
            </div>
            <!-- Portfolio-->
            <div class="card">
                <div class="card-header"><a class="mobile-menu-link" href="#">Kasb kurslari</a></div>
            </div>
            <!-- Blog-->
            <div class="card">
                <div class="card-header"><a class="mobile-menu-link" href="#">Ilmiy Kurslar</a></div>
            </div>
            <!-- Shop-->
            <div class="card">
                <div class="card-header"><a class="mobile-menu-link" href="#">Vebinarlar</a></div>
            </div>
            <!-- Account-->
            <div class="card">
                <div class="card-header"><a class="mobile-menu-link" href="#">Biz bilan aloqa</a></div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar: Simple Ghost-->
<header class="navbar-wrapper navbar-boxed navbar-simple-ghost">
    <div class="container-fluid">
        <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index.html"><img src="html/elotcom.uz.io-main/img/logo/logo-light.png" alt="CreateX"/></a></div>
        <div class="d-table-cell w-100 align-middle pl-md-3">
            <div class="navbar justify-content-end justify-content-lg-between">
                <!-- Search-->
                <form class="search-box" method="get">
                    <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
                </form>
                <!-- Main Menu-->
                <ul class="navbar-nav d-none d-lg-block">
                    <!-- Home-->
                    <li class="nav-item mega-dropdown-toggle active"><a class="nav-link" href="#">Bosh sahifa</a>
                    </li>
                    <!-- Portfolio-->
                    <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">Kasb kurslari</a>
                    </li>
                    <!-- Blog-->
                    <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="#">Ilmiy kurslar</a>
                    </li>
                    <!-- Shop-->
                    <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="#">Vebinarlar</a>
                    </li>
                    <!-- Account-->
                    <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">Biz bilan aloqa</a>
                    </li>
                </ul>
                <div>
                    <ul class="navbar-buttons d-inline-block align-middle">
                        <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                        <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
                    </ul><a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="{{ route('login') }}" target="_blank">Kirish</a>


                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Content-->


<main>
    @yield('content')
</main>


<!-- Footer-->
<footer class="bg-dark pt-5" >
    <!-- Subscription-->
    <div class="container pt-5 mt-5">
        <div class="pt-5 mt-5">
            <h5 class="text-white text-center pt-5">Bizga Obuna bo'ling!</h5>
            <div class="row justify-content-center pb-4 mb-3">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <form action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" target="_blank" novalidate>
                        <div class="input-group">
                            <input class="form-control form-control-light-skin" type="email" name="EMAIL" placeholder="Email manzil">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Obuna bo'lish</button>
                            </div>
                        </div><small class="form-text text-white opacity-50 pt-1 text-center">Yangiliklarda birinchilardan habardor bo'lish uchun bizga obuna bo'ling.</small>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                        </div>
                    </form>
                </div>
            </div>
            <!-- Follow Me-->
            <h5 class="text-white text-center">Ijtimoiy tarmoqlarda Kuzating.</h5>
            <div class="text-center pt-2 pb-4 mb-4"><a class="social-btn sb-style-6 sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-6 sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-6 sb-telegram sb-light-skin" href="#"><i class="socicon-telegram"></i></a><a class="social-btn sb-style-6 sb-youtube sb-light-skin" href="#"><i class="socicon-youtube"></i></a><a class="social-btn sb-style-6 sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a></div>
            <hr class="hr-light">
            <div class="d-md-flex justify-content-between align-items-center py-4 text-center text-md-left">
                <p class="m-0 text-sm order-1"><span class='text-white opacity-60'>© Barcha huquqlar himoyalangan <a href='#' class='d-inline-block nav-link text-white opacity-80 p-0' target='_blank'>ATAR KHOREZM GROUP</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="{{asset('html/elotcom.uz.io-main/js/vendor.min.js')}}"></script>
<script src="{{asset('html/elotcom.uz.io-main/js/theme.min.js')}}"></script>
</body>
</html>
