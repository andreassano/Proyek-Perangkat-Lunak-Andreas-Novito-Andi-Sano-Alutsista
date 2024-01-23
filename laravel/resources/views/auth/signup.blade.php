<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Wartechlog</title>
    <link rel=icon href="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/favicon.png"
        sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-T8p/iVgF5wZVQ1HUXJFLV2WS2I2zOsGpDl4oh5E79c1z8QnCSm2HvVU7xYzUCxn5kJphGsnqCyn7F6D9ODhptvA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a href="index.html"><img
                        src="{{ url('') }}/laravel/vendor/alutsista/bower_components/assets/img/logo.png"
                        alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="signin-btn" href="{{ route('auth.signin') }}">Sign In</a>
                <a class="btn btn-base" href="{{ route('auth.signup') }}">Sign Up</a>
                <a class="search-bar" href="#"><i class="fa fa-search"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="edumint_main_menu">
                <ul class="navbar-nav menu-open">
                    <li>
                        <a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Produk</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('user.senjata.senjata') }}">Senjata</a></li>
                            <li><a href="course-details.html">Amunisi</a></li>
                            <li><a href="course-details.html">Kendaraan Khusus</a></li>
                            <li><a href="course-details.html">Alat Berat</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Halaman</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">Tentang Kami</a></li>
                            <li><a href="team-details.html">Pelatihan</a></li>
                            <li><a href="pricing.html">Panduan</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Ruang Publik</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Berita</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Kontak Kami</a></li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                <a class="signin-btn" href="{{ route('auth.signin') }}">Sign In</a>
                <a class="btn btn-base" href="{{ route('auth.signin') }}">Sign Up</a>
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
                    <h2 class="page-title">Sign Up</h2>
                    <ul class="page-list">
                        <li><a href="{{ route('dashboard') }}">Home</a></li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>s
    <!-- breadcrumb end -->

    <!-- signup-page-Start -->
    <div class="signup-page-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    @if (session()->has('pesan'))
                        <div class="alert alert-success">
                            {{ session()->get('pesan') }}
                        </div>
                    @endif
                    <form action="{{ route('auth.insert') }}" method="POST" class="signin-inner">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Username"
                                        class="form-control @error('username') is-invalid @enderror" id="username"
                                        name="username" value="{{ old('username') }}">
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text"
                                        placeholder="Email"class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        name="password" value="{{ old('password') }}">
                                    <span class="show-password" onclick="togglePassword()">Tampilkan Sandi</span>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <button type="submit" class="btn btn-base w-100">Create Account</button>
                            </div>
                            <div class="col-12">
                                <a href="{{ route('auth.signin') }}"><strong>Sign In</strong></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- signup-page-end -->

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
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 align-self-center">
                        <a href="{{ route('dashboard') }}"><img
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
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>

</html>
