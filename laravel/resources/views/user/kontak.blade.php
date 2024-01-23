<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak Kami | Wartechlog</title>
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

    <!-- search popup start-->
    {{-- <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div> --}}
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <div class="navbar-area">
        <!-- navbar top start -->
        {{-- <div class="navbar-top">
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
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                        <li><a href="{{ route('user.kontak') }}">Kontak Kami</a></li>
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
                    <h2 class="page-title">Kontak</h2>
                    <ul class="page-list">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Kontak</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact list start -->
    <div class="contact-list pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="contact-list-inner">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/17.png"
                                    alt="img">
                            </div>
                            <div class="media-body align-self-center">
                                <h5>Our Phone</h5>
                                <p>(+62) 813-8504-8748</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-list-inner">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/18.png"
                                    alt="img">
                            </div>
                            <div class="media-body align-self-center">
                                <h5>Our Email</h5>
                                <p>andre@andre.my.id</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-list-inner">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/16.png"
                                    alt="img">
                            </div>
                            <div class="media-body align-self-center">
                                <h5>Our Address</h5>
                                <p>Banyumas, Central Java</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact list end -->

    <!-- counter area start -->
    <div class="counter-area pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title mb-0">
                        <h6 class="sub-title right-line">Get in touch</h6>
                        <h2 class="title">Write Us a Message</h2>
                        <p class="content pb-3">Kami siap untuk memberikan solusi yang tepat untuk keperluan pertahanan
                            dan keamanan Anda. Tim kami yang berpengalaman akan dengan senang hati menjawab pertanyaan
                            Anda dan bekerja sama untuk memenuhi kebutuhan Anda.</p>
                        {{-- <ul class="social-media style-base pt-3">
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form class="contact-form-inner  mt-5 mt-md-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-base">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

    <!-- contact area start -->
    <div class="contact-g-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3096713259392!2d109.24412377588199!3d-7.4309433732079055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fce009a3a07%3A0xbbfaab08d05ad915!2sKontrakan%20Gaming%20TM!5e0!3m2!1sid!2sus!4v1705944218505!5m2!1sid!2sus"></iframe>
    </div>
    <!-- contact area end -->

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
                            <a href="{{ route('user.index') }}"><img
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
