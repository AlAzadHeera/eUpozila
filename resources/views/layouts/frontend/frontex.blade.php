<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','')</title>
    <meta name="description" content="Porta - Free Bootstrap4 Minimal Portfolio Template by CurlyArts">
    <meta name="keywords" content="portfolio, minimal portfolio, free html template, business, responsive, corporate, clean, bootstrap4, free bootstrap4 template">
    <meta name="author" content="CurlyArts">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/icon.png') }}">

    <!-- Google font (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Google font (font-family: 'Roboto Condensed', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <!-- Fontawesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" crossorigin="anonymous">
    {{-- Additional Fonts --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mirazmac/bengali-webfont-cdn@master/solaimanlipi/style.css">
    <link href="https://fonts.maateen.me/charu-chandan-3d/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/charukola-ultra-light/font.css" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">

    <!-- Modernizer js -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    @stack('css')
</head>

<body>
<!-- Top Bar -->
<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-xs-2">
                <div class="logo d-none d-sm-block" style="float: right;">
                    <a href="index.html">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="logo" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-md-8 col-xs-8 text-center banner">
                <h3 class="charu-chandan">ফুলছড়ি উপজেলা, গাইবান্ধা</h3>
            </div>
            <div class="col-md-2 d-none d-sm-block">
                <div class="logo">
                    <a href="{{ asset('frontend/') }}index.html">
                        <img src="{{ asset('frontend/images/logo2.png') }}" alt="logo" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar -->

<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
    <!-- Header -->
    <header class="header header-style transparent-header sticky-header">
        <div class="container-fluid d-none d-lg-block">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-inner">
                        <nav class="menu" style="margin: 0 auto;">
                            <ul class="solaimman-lipi">
                                <li>
                                    <a href="index.html">প্রথম পাতা</a>
                                </li>
                                <li class="cr-dropdown">
                                    <a href="javascript:;">আমদের উপজেলা</a>
                                    <ul>
                                        <li class="cr-sub-dropdown">
                                            <a href="javascript:;">ইতিহাস ও ঐতিহ্য</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('Heritage') }}">উপজেলার ঐতিহ্য</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('Language') }}">ভাষা ও সংস্কৃতি</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('Sport') }}">খেলাধুলা ও বিনোদন</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cr-sub-dropdown">
                                            <a href="javascript:;">উপজেলা পরিষদ</a>
                                            <ul>
                                                <li>
                                                    <a href="index.html">উপজেলা পরিষদ চেয়ারম্যান</a>
                                                </li>
                                                <li>
                                                    <a href="single.html">ভাইস চেয়ারম্যান</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">মহিলা ভাইস চেয়ারম্যান</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">পূর্বতন উপজেলা পরিষদ চেয়ারম্যানগণ</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">মহিলা ভাইস চেয়ারম্যান</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">উপজেলা পরিষদের কার্যাবলী</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">কর্মচারীবৃন্দ</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">উপজেলার অবস্থান</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cr-sub-dropdown">
                                            <a href="javascript:;">উপজেলা প্রশাসন</a>
                                            <ul>
                                                <li>
                                                    <a href="index.html">উপজেলা নির্বাহী অফিসার</a>
                                                </li>
                                                <li>
                                                    <a href="single.html">পূর্বতন উপজেলা নির্বাহী অফিসারগণ</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">প্রশাসনিক কর্মকর্তাগণ</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">প্রশাসনিক কর্মকর্তাগণ</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">প্রশাসনিক কর্মচারীগণ</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">ইউনিয়ন সমূহ</a>
                                        </li>
                                        <li class="cr-sub-dropdown">
                                            <a href="javascript:;">ব্যক্তিত্ব</a>
                                            <ul>
                                                <li>
                                                    <a href="index.html">লেখক</a>
                                                </li>
                                                <li>
                                                    <a href="single.html">রাজনীতিবিদ</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">অভিনেতা</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">অভিনেত্রী</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">খেলোয়াড়</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cr-sub-dropdown">
                                            <a href="javascript:;">গুরুত্বপূর্ন ওয়েবসাইট লিঙ্ক</a>
                                            <ul>
                                                <li>
                                                    <a href="index.html">সরকারী অধিদপ্তর</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">জেলা ওয়েব পোর্টাল</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">চাকুরী সাইট</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="cr-dropdown">
                                    <a href="javascript:;">স্বাস্থ্য</a>
                                    <ul>
                                        <li><a>হাসপাতাল</a></li>
                                        <li><a>উপজেলা স্বাস্থ্য কমপ্লেক্স</a></li>
                                        <li><a>কমিউনিটি ক্লিনিক</a></li>
                                        <li><a>প্রাইভেট ক্লিনিক</a></li>
                                        <li><a>ব্লাড ব্যাংক</a></li>
                                        <li><a>এ্যাম্বুলেন্স</a></li>
                                        <li><a>ডাক্তারের তালিকা</a></li>
                                        <li><a>স্বাস্থ্য কর্মীর তালিকা</a></li>
                                        <li><a>হটলাইন</a></li>
                                    </ul>
                                </li>
                                <li class="cr-dropdown">
                                    <a href="javascript:;">শিক্ষা</a>
                                    <ul>
                                        <li><a>বিশ্ববিদ্যলয়</a></li>
                                        <li><a>শিক্ষা বোর্ড</a></li>
                                        <li><a>মেডিকেল কলেজ</a></li>
                                        <li><a>কলেজ</a></li>
                                        <li><a>স্কুল</a></li>
                                        <li><a>মাদ্রাসা</a></li>
                                        <li><a>ভর্তি ও ফলাফল তথ্য</a></li>
                                    </ul>
                                </li>
                                <li class="cr-dropdown">
                                    <a href="javascript:;">দপ্তরসমুহ</a>
                                    <ul>
                                        <li><a>স্থানীয় সরকার</a></li>
                                        <li><a>সরকারী দপ্তরসমুহ</a></li>
                                    </ul>
                                </li>
                                <li class="cr-dropdown">
                                    <a href="javascript:;">উন্নয়ন কার্যক্রম</a>
                                    <ul>
                                        <li><a>উন্নয়নের তথ্যচিত্র</a></li>
                                        <li><a>উন্নয়নের বর্ননা</a></li>
                                        <li><a>প্রকল্প ১</a></li>
                                        <li><a>ভিশন ২০২১</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.html">সামাজিক নিরাপত্তা</a>
                                </li>
                                <li>
                                    <a href="index.html">প্রশিক্ষন</a>
                                </li>
                                <li>
                                    <a href="index.html">আবেদন ফরম</a>
                                </li>
                                <li>
                                    <a href="index.html">রক্তদাতা</a>
                                </li>
                                <li class="cr-dropdown">
                                    <a href="javascript:;">জনকণ্ঠ</a>
                                    <ul>
                                        <li><a>অভিযোগ/পরামর্শ</a></li>
                                        <li><a>মন্তব্য</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.html">প্রয়োজনীয় নাম্বারসমূহ</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- <a href="javascript:;" class="cr-btn cr-btn-sm">
                            <span></span>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu-wrapper">
            <div class="container d-block d-lg-none">
                <div class="mobile-menu clearfix">
                    <a class="mobile-logo d-md-none d-lg-block" href="index.html">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="mobile logo">
                    </a>
                </div>
            </div>
        </div>
        <!-- //Mobile Menu -->

    </header>
    <!-- //Header -->

    @yield('content')

    <!-- Footer Area -->
    <footer id="footer">

        <!-- Footer Top Area -->
        <div class="bg-dark-light section-padding-sm">
            <div class="container">
                <div class="footer-widgets widgets">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-widget footer-widget-about">
                                <a href="index.html">
                                    <img src="{{ asset('frontend/images/logo.png') }}" alt="footer logo">
                                </a>
                                <p>জবাবদিহিতা মুলক সেবা ব্যবস্থাপনা ও ভোগান্তি মুক্ত সেবা প্রদান ই আমাদের লক্ষ ও অঙ্গীকার। জনগনের চাহিদা ও মতামতের ভিত্তিতে সকল উন্নয়ন কার্যক্রম পরিচালনাই আমাদের উদ্যেশ্য। আমরা জানি যে, তথ্য সামাজিক সম্পদ</p>
                            </div>
                            <!--// Single Widget -->
                        </div>


                        <div class="col-lg-8 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-widget widget-quick-contact">
                                <h5 class="footer-widget-title">যোগাযোগ করুন</h5>
                                <ul>
                                    <li>
                                        <p>
                                            <a href="javascript:;">ফোন : +৮৮০১৭১১১১১</a>
                                        </p>
                                        <p>
                                            <a href="javascript:;">ই-মেইল : email@mail.com</a>
                                        </p>
                                        <p>
                                            <a href="javascript:;">ঠিকানা : ফুলছড়ি, গাইবান্ধা।</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <!--// Single Widget -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--// Footer Top Area -->

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="footer-social">
                            <li>
                                <a href="https://www.facebook.com/">Facebook</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">Twitter</a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/">Google+</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/">Linkedin</a>
                            </li>
                            <li>
                                <a href="https://dribbble.com/">Dribbble</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <p class="footer-copyright">Copyright &copy;
                            <a href="https://curlyarts.com/">CurlyArts</a> 2018. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer Bottom Area -->

    </footer>
    <!-- //Footer Area -->

</div>
<!-- //Main wrapper -->



<!-- JS Files -->
<script src="{{ asset('frontend/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/js/active.js') }}"></script>
<script src="{{ asset('frontend/js/scripts.js') }}"></script>
@stack('script')
</body>

</html>


