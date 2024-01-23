<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita | Wartechlog</title>
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
                    <h2 class="page-title">Berita</h2>
                    <ul class="page-list">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner style-border">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/blog/41.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i> BY ADMIN</li>
                                <li><i class="fa fa-calendar-check-o"></i> 22 JANUARI, 2024</li>
                            </ul>
                            <h5 class="title"><a href="#">Erick Thohir Angkat Jenderal Tni Maruli
                                    Simanjuntak Sebagai Komisaris Utama PT Pindad</a>
                            </h5>
                            <p>Menteri BUMN, Erick Thohir mengangkat Jenderal TNI Maruli Simanjuntak sebagai Komisaris
                                Utama PT Pindad menggantikan Jenderal TNI (Purn.) Dudung Abdurachman.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner style-border">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/blog/51.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i> BY ADMIN</li>
                                <li><i class="fa fa-calendar-check-o"></i> 19 JANUARI, 2024</li>
                            </ul>
                            <h5 class="title"><a href="#">Deputi V Kemenko Perekonomian Tinjau
                                    Perkembangan PT Pindad</a>
                            </h5>
                            <p>Adapun tujuan dari kunjungan kali ini adalah meninjau berbagai produk potensial yang
                                telah diproduksi PT Pindad, baik produk pertahanan maupun produk komersialnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner style-border">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/blog/61.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i> BY ADMIN</li>
                                <li><i class="fa fa-calendar-check-o"></i> 19 JANUARI, 2024</li>
                            </ul>
                            <h5 class="title"><a href="#">Verifikasi Lapangan Industri Pertahanan Dan
                                    Monitoring Evaluasi Ekspor, Pothan Kemhan Kunjungi Pindad</a>
                            </h5>
                            <p>Plt. Sekretaris Perusahaan, Dianing P. Rahayu dan VP Inovasi PT Pindad, Prima Kharisma
                                beserta jajaran menerima kunjungan kerja Tim Verifikasi dan Monitoring Potensi
                                Pertahanan Kementerian Pertahanan RI (Pothan Kemhan)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner style-border">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/blog/1.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i> BY ADMIN</li>
                                <li><i class="fa fa-calendar-check-o"></i> 16 JANUARI, 2024</li>
                            </ul>
                            <h5 class="title"><a href="#">Dirut PT Pindad Hadiri Perayaan Natal
                                    Bersama Kementerian Bumn Tahun 2023</a>
                            </h5>
                            <p>Direktur Utama PT Pindad, Abraham Mose menghadiri perayaan natal bersama Kementerian BUMN
                                tahun 2023 di Jakarta Convention Center pada Senin, 15 Januari 2024.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner style-border">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/blog/2.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i> BY ADMIN</li>
                                <li><i class="fa fa-calendar-check-o"></i> 11 JANUARI, 2024</li>
                            </ul>
                            <h5 class="title"><a href="#">Dukung Industri Dalam Negeri,
                                    Danpussenarmed Tinjau Produk PT Pindad</a>
                            </h5>
                            <p>Direktur Utama PT Pindad, Abraham Mose didampingi Wakil Direktur Utama Syaifuddin dan
                                Direktur Operasional Budhiarto menerima kunjungan Komandan Pusat Kesenjataan Artileri
                                Medan (Danpussenarmed).</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner style-border">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/blog/71.png"
                                alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i> BY ADMIN</li>
                                <li><i class="fa fa-calendar-check-o"></i> 08 JANUARI, 2024</li>
                            </ul>
                            <h5 class="title"><a href="#">Dukung Penanganan Stunting, Lazis & Tjsl PT
                            </h5>
                            <p>Dalam rangka Milad ke-6 Lazis Pindad, bekerjasama dengan TJSL PT Pindad memberikan
                                bantuan dalam program Gerakan Masyarakat Peduli Stunting (Gemar Puding).</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 text-center">
                    <nav class="td-page-navigation">
                        <ul class="pagination">
                            <li class="pagination-arrow"><a href="#"><i
                                        class="fa fa-angle-double-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li class="pagination-arrow"><a href="#"><i
                                        class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- blog area end -->

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
                                    <h6><a href="{{ route('user.berita') }}">Dukung Industri Dalam Negeri,
                                            Danpussenarmed Tinjau
                                            Produk PT Pindad.</a></h6>
                                    <span class="date"><i class="fa fa-calendar"></i>11 Januari, 2024</span>
                                </li>
                                <li>
                                    <h6><a href="{{ route('user.berita') }}">Dukung Penanganan Stunting, Lazis & Tjsl
                                            PT</a>
                                    </h6>
                                    <span class="date"><i class="fa fa-calendar"></i>08 Januari, 2024</span>
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
