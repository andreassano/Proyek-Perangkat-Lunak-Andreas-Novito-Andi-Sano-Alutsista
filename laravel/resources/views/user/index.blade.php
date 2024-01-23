<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Wartechlog</title>
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
        {{-- <!-- navbar top start -->
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
        <nav class="navbar navbar-area-1 navbar-area navbar-expand-lg">
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
                <div class="collapse navbar-collapse" id="">
                    <ul class="navbar-nav menu-open">
                        <li>
                            <a href="{{ route('user.index') }}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Produk</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('user.senjata.senjata') }}">Senjata</a></li>
                                <li><a href="{{ route('user.munisi.munisi') }}">Munisi</a></li>
                                <li><a href="#">Kendaraan Khusus</a></li>
                                <li><a href="#">Alat Berat</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Halaman</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('user.about') }}">Tentang Kami</a></li>
                                {{-- <li><a href="team-details.html">Pelatihan</a></li>
                                <li><a href="pricing.html">Panduan</a></li> --}}
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

    <!-- banner start -->
    <div class="banner-area banner-area-1 bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 order-lg-12 align-self-center">
                    <div class="thumb b-animate-thumb">
                        <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/banner/1.png"
                            alt="img">
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1 align-self-center">
                    <div class="banner-inner text-center text-lg-left mt-5 mt-lg-0">
                        <h6 class="b-animate-1 sub-title">DISCOVER RESEARCH</h6>
                        <h1 class="b-animate-2 title">Memajukan Teknologi & Strategi Pertahanan Negara</h1>
                        {{-- <a class="btn btn-base b-animate-3 mr-sm-3 mr-2" href="contact.html">Get A Quote</a>
                        <a class="btn btn-border-black b-animate-3" href="blog.html">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- intro area start -->
    <div class="intro-area intro-area--top">
        <div class="container">
            <div class="intro-area-inner bg-black">
                <div class="row no-gutters">
                    <div class="col-lg-4 text-lg-left text-center">
                        <div class="intro-title">
                            <h3>Tech Logistics </h3>
                            <p>Teknologi dengan daya cita unggul dan bersaing</p>
                            <ul>
                                <li><i class="fa fa-check"></i> Buatan Negri </li>
                                <li><i class="fa fa-check"></i> Ramah Lingkungan </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <ul class="row no-gutters">
                            <li class="col-md-4">
                                <div class="single-intro-inner style-white text-center">
                                    <div class="thumb">
                                        <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/intro/1.png"
                                            alt="img">
                                    </div>
                                    <div class="details">
                                        <h5>Tech Future</h5>
                                        <p>Teknologi Terkini</p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="single-intro-inner style-white text-center">
                                    <div class="thumb">
                                        <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/intro/2.png"
                                            alt="img">
                                    </div>
                                    <div class="details">
                                        <h5>Innovation</h5>
                                        <p>Inovasi Persenjataan</p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="single-intro-inner style-white text-center">
                                    <div class="thumb">
                                        <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/intro/3.png"
                                            alt="img">
                                    </div>
                                    <div class="details">
                                        <h5>View</h5>
                                        <p>Detail Persenjataan</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro area end -->

    <!-- about area start -->
    <div class="about-area pd-top-140">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-thumb-wrap left-icon"
                            style="background-image: url('{{ asset('laravel/vendor/alutsista/bower_components/assets/img/banner/2.png') }}');">
                            <div class="about-icon">
                                {{-- <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/4.png"
                                    alt="img"> --}}
                            </div>
                            <div class="bottom-content">
                                "Kami berdedikasi untuk memberikan layanan yang bermanfaat dan informasi yang akurat."
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-inner-wrap pl-xl-4 pt-5 pt-lg-0 mt-5 mt-lg-0">
                            <div class="section-title mb-0">
                                <h6 class="sub-title right-line">Tentang Kami</h6>
                                <h2 class="title">Pengetahuan, Inovasi, Keamanan</h2>
                                <p class="content">Sistem informasi yang akurat kepada mereka
                                    yang terlibat dalam pertahanan dan keamanan. Bersama-sama, kita dapat mencapai
                                    tujuan-tujuan strategis dalam melindungi keamanan dan kedaulatan negara.</p>
                                <ul class="single-list-wrap">
                                    <li class="single-list-inner style-check-box-grid">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="media-body">
                                                <h5>Informasi Terkini</h5>
                                                <p>Menyajikan informasi terkini tentang alat utama sistem pertahanan,
                                                    termasuk kendaraan militer, senjata, teknologi pertahanan, dan
                                                    peralatan terkait lainnya.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list-inner style-check-box-grid">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="media-body">
                                                <h5>Menyediakan Pelatihan</h5>
                                                <p>Pelatihan virtual dan simulasi yang realistis untuk personel militer
                                                    dan operator alutsista, membantu meningkatkan keterampilan
                                                    dan kesiapan operasional.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- course area start -->
    <div class="course-area pd-top-100 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-11">
                    <div class="section-title style-white text-center">
                        <h2 class="title">Alutsista Terunggul</h2>
                    </div>
                </div>
            </div>
            <div class="edmt-nav-tab style-white text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                            aria-controls="tab1" aria-selected="true">Senjata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
                            aria-controls="tab2" aria-selected="false">Munisi</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/course/1.png"
                                        alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <div class="emt-user">
                                            <span class="align-self-center">SS2-V2 A1
                                            </span>
                                        </div>
                                        <h7>Senapan serbu buatan PT Pindad yang merupakan generasi kedua dari senapan
                                            serbu Pindad sebelumnya, SS1.</h7>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/course/2.png"
                                        alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <div class="emt-user">
                                            <span class="align-self-center">SPR-4</span>
                                        </div>
                                        <h7>Sniper yang di desain untuk melengkapi jajaran produk
                                            senjata produksi PT. Pindad dalam jarak penembakan 1,5 KM.
                                        </h7>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/course/3.png"
                                        alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <div class="emt-user">
                                            <span class="align-self-center">G2 Premium kal. 9mm</span>
                                        </div>
                                        <h7>Merupakan pengembangan dari sisi desain dan
                                            frame yang berasal dari varian G2 lannya.</h7>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/course/4.png"
                                        alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <div class="emt-user">
                                            <span class="align-self-center">GT5-PEA2</span>
                                        </div>
                                        <h7>Jenis granat tangan dengan daya ledak
                                            berfrekmentasi. Dengan jenis isian TNT powder. </h7>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/course/5.png"
                                        alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <div class="emt-user">
                                            <span class="align-self-center">MU53-AR A1</span>
                                        </div>
                                        <h7>Munisi Gas Air MU53-AR Munisi Gas Air Mata.
                                            Mata Kaliber 44 mm Jenis Asap Kaliber 44 mm Jenis Serbuk.</h7>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/course/6.png"
                                        alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <div class="emt-user">
                                            <span class="align-self-center">Demolition Charge</span>
                                        </div>
                                        <h7>Peledak Jarak Jauh Epik di Unturned 3 . Ini
                                            digunakan bersama dengan Detonator dan Clacker Detonator.</h7>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area End -->

    <!-- counter area start -->
    <div class="counter-area bg-gray">
        <div class="container">
            <div class="counter-area-inner pd-top-120 pd-bottom-120"
                style="background-image: url('assets/img/other/1.png');">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="section-title mb-0">
                            <h6 class="sub-title right-line">Funfact</h6>
                            <h2 class="title">Strength in Innovation</h2>
                            <p class="content pb-3">Selamat datang di Dunia Alutsista, tempat di mana kekuatan tak
                                terbantahkan berpadu dengan teknologi canggih. Mari bersama-sama mengungkap rahasia
                                keamanan dan pertahanan, di mana 'Strength in Innovation' adalah kunci keberhasilan
                                dalam menjaga kedaulatan negara.</p>
                            <div class="btn-counter bg-base mt-4">
                                <h3 class="left-val align-self-center"><span class="counter">700</span>+</h3>
                                <div class="right-val align-self-center">
                                    Unit Data <br> Alutsista
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 align-self-center">
                        <ul class="single-list-wrap">
                            <li class="single-list-inner style-box-bg">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/1.png"
                                            alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5><span class="counter">80.000</span>+</h5>
                                        <p>Sejak abad ke-20, lebih dari 80.000 senjata nuklir telah dihasilkan di
                                            seluruh dunia</p>
                                    </div>
                                </div>
                            </li>
                            <li class="single-list-inner style-box-bg">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/2.png"
                                            alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5><span class="counter">60.000</span>+</h5>
                                        <p>Drone militer dapat terbang hingga 65.000 kaki di atas permukaan bumi</p>
                                    </div>
                                </div>
                            </li>
                            <li class="single-list-inner style-box-bg">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/3.png"
                                            alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5><span class="counter">2</span> Juta+</h5>
                                        <p>Pasukan Tiongkok adalah salah satu tentara terbesar di dunia. mencapai lebih
                                            dari 2 juta</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

    <!-- work area start -->
    <div class="work-area pd-top-110">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h6 class="sub-title right-line">Apa yang Kami Lakukan</h6>
                        <h2 class="title">Bagaimana cara kerjanya?</h2>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <p class="content mt-lg-0">Kami menyediakan sistem informasi pertahanan yang lengkap dan
                            teknologi canggih untuk memenuhi kebutuhan keamanan nasional Indonesia. Dari senjata
                            hingga alat berat, kami bekerja sama dengan mitra terbaik dalam industri pertahanan
                            untuk memberikan peralatan terbaik dan dukungan teknis yang handal.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/12.png"
                                alt="img">
                            <div class="intro-count">1</div>
                        </div>
                        <div class="details">
                            <h5>Konsultasi dan Analisis</h5>
                            <p>Kami bekerja bersama Anda untuk memahami kebutuhan pertahanan nasional Indonesia.</p>
                            {{-- <a class="read-more-text" href="course.html">Read More <i
                                    class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/13.png"
                                alt="img">
                            <div class="intro-count">2</div>
                        </div>
                        <div class="details">
                            <h5>Pengembangan Solusi</h5>
                            <p>Setelah memahami kebutuhan Anda, kami bekerja untuk mengembangkan solusi yang sesuai.</p>
                            {{-- <a class="read-more-text" href="course.html">Read More <i
                                    class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/14.png"
                                alt="img">
                            <div class="intro-count">3</div>
                        </div>
                        <div class="details">
                            <h5>Dukungan Teknis</h5>
                            <p>Kami memberikan dukungan teknis untuk memastikan operasi yang
                                lancar.Tim teknis kami siap merespons dan memecahkan masalah.
                            </p>
                            {{-- <a class="read-more-text" href="course-details.html">Read More <i
                                    class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-intro-inner style-icon-bg bg-gray text-center">
                        <div class="thumb">
                            <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/icon/15.png"
                                alt="img">
                            <div class="intro-count">4</div>
                        </div>
                        <div class="details">
                            <h5>Pemeliharaan dan Pembaruan</h5>
                            <p>Kami juga bertanggung jawab atas pemeliharaan dan pembaruan peralatan dan sistem.</p>
                            {{--  <a class="read-more-text" href="blog-details.html">Read More <i
                                    class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work area end -->

    <!--blog-area start-->
    <div class="blog-area pd-top-80 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title double-line">Berita Terbaru</h6>
                        <h2 class="title">Our Insights & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <ul class="single-blog-list-wrap mb-5 mb-lg-0">
                        <li>
                            <div class="media single-blog-list-inner">
                                <div class="media-left date">
                                    <span>JAN</span>
                                    08
                                </div>
                                <div class="media-body details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>{{-- 
                                        <li><i class="fa fa-folder-open-o"></i> Air transport</li> --}}
                                    </ul>
                                    <h5><a href="#">Dukung Penanganan Stunting, Lazis & Tjsl Pt Pindad
                                            Resmikan Program “Gemar Puding”</a></h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media single-blog-list-inner">
                                <div class="media-left date">
                                    <span>JAN</span>
                                    01
                                </div>
                                <div class="media-body details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>
                                        {{--  <li><i class="fa fa-folder-open-o"></i> Air transport</li> --}}
                                    </ul>
                                    <h5><a href="#">Arahan Direktur Utama Pt Pindad Menyambut Tahun
                                            2024</a></h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media single-blog-list-inner">
                                <div class="media-left date">
                                    <span>DES</span>
                                    29
                                </div>
                                <div class="media-body details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>
                                        {{-- <li><i class="fa fa-folder-open-o"></i> Air transport</li> --}}
                                    </ul>
                                    <h5><a href="#">Lestarikan Pohon Endemik, Tjsl Pt Pindad Bersama
                                            Dlh Jawa Barat Tanam 200 Pohon. </a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="single-blog-inner">
                                <div class="thumb">
                                    <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/blog/1.png"
                                        alt="img">
                                    <span class="date">16 JANUARY, 2024</span>
                                </div>
                                <div class="details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>
                                        {{-- <li><i class="fa fa-folder-open-o"></i> Air transport</li> --}}
                                    </ul>
                                    <h5><a href="#">Dirut Pt Pindad Hadiri Perayaan Natal Bersama
                                            Kementerian Bumn Tahun 2023
                                        </a>
                                    </h5>
                                    <a class="read-more-text" href="#">READ MORE <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-blog-inner">
                                <div class="thumb">
                                    <img src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/blog/2.png"
                                        alt="img">
                                    <span class="date">11 JANUARY, 2024</span>
                                </div>
                                <div class="details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> BY ADMIN</li>
                                        {{-- <li><i class="fa fa-folder-open-o"></i> Air transport</li> --}}
                                    </ul>
                                    <h5><a href="#l">Dukung Industri Dalam Negeri, Danpussenarmed Tinjau
                                            Produk Pt Pindad</a>
                                    </h5>
                                    <a class="read-more-text" href="#">READ MORE <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog-area end-->

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
