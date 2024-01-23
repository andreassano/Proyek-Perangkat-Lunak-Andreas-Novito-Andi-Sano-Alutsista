<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery | Wartechlog</title>
    <link rel=icon href="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/favicon.png"
        sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/css/vendor.css">
    <link rel="stylesheet" href="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/css/style.css">
    <link rel="stylesheet"
        href="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/css/responsive.css">

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    {{-- <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end--> --}}
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    {{-- <div class="navbar-area">
        <!-- navbar top start -->
        <div class="navbar-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-md-left text-center">
                        <ul>
                            <li>
                                <p><i class="fa fa-map-marker"></i> 2072 Pinnickinick Street, WA 98370</p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope-o"></i> info@website.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="topbar-right text-md-right text-center">
                            <li class="social-area">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    <nav class="navbar bg-white navbar-area-1 navbar-area navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="{{ route('user.index') }}"><img
                        src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/logo.png"
                        alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="btn btn-base" href="{{ route('auth.signout') }}">Sign Out</a>
                {{-- <a class="search-bar" href="#"><i class="fa fa-search"></i></a> --}}
            </div>
            <div class="collapse navbar-collapse" id="edumint_main_menu">
                <ul class="navbar-nav menu-open">
                    <li>
                        <a href="{{ route('user.index') }}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Produk</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('user.senjata.senjata') }}">Senjata</a></li>
                            <li><a href="{{ route('user.munisi.munisi') }}">Munisi</a></li>
                            <li><a href="course-details.html">Kendaraan Khusus</a></li>
                            <li><a href="course-details.html">Alat Berat</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Halaman</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('user.about') }}">Tentang Kami</a></li>
                            <li><a href="team-details.html">Pelatihan</a></li>
                            <li><a href="pricing.html">Panduan</a></li>
                            <li><a href="{{ route('user.gallery') }}">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Ruang Publik</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('user.berita') }}">Berita</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Kontak Kami</a></li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                <a class="btn btn-base" href="{{ route('auth.signout') }}">Sign Out</a>
                {{-- <a class="search-bar" href="#"><i class="fa fa-search"></i></a> --}}
            </div>
        </div>
    </nav>
    </div>
    <!-- navbar end -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Gallery</h2>
                    <ul class="page-list">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- team area start -->
    <div class="team-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-inner">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/gallery/1.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <span>Kendaraan Taktis 4 Roda</span>
                            <h4><a href="#">Komodo 4x4</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-inner">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/gallery/2.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <span>Senapan Sniper Jarak Jauh</span>
                            <h4><a href="#">SPR-3</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-inner">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/gallery/3.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <span>Senapan Serbu Terbaik</span>
                            <h4><a href="#">SS2-V4</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-inner">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/gallery/4.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <span>Anti Balistik | Anti Ranjau</span>
                            <h4><a href="#">Harimau Medium Tank</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-inner">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/gallery/5.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <span>Kendaraan Tempur Roda 6</span>
                            <h4><a href="#">Anoa 6x6</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-inner">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/gallery/6.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <span>Amunisi Kaliber Kecil Akurat & Teruji</span>
                            <h4><a href="#">Amunisi Kaliber Kecil</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->

    <!-- footer area start -->
    <footer class="footer-area bg-gray">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_contact">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul class="details">
                                <li><i class="fa fa-map-marker"></i> Banyumas / Central Java</li>
                                <li><i class="fa fa-envelope"></i> andre@andre.my.id</li>
                                <li><i class="fa fa-phone"></i> 081385048748</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_blog_list">
                            <h4 class="widget-title">News & Blog</h4>
                            <ul>
                                <li>
                                    <h6><a href="blog-details.html">Big Ideas Of Business Branding Info.</a></h6>
                                    <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                                </li>
                                <li>
                                    <h6><a href="blog-details.html">Ui/Ux Ideas Of Business Branding Info.</a></h6>
                                    <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 align-self-center">
                            <a href="index.html"><img
                                    src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/footer-logo.png"
                                    alt="img"></a>
                        </div>
                        <div class="col-lg-4  col-md-6 order-lg-12 text-md-right align-self-center">
                            <ul class="social-media mt-md-0 mt-3">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 order-lg-8 text-lg-center align-self-center mt-lg-0 mt-3">
                            <p>copyright 2024 by andre</p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/js/main.js"></script>
</body>

</html>
