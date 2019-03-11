<div class="header-top-area">
    <div class="fixed-header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="admin-logo logo-wrap-pro">
                        <a href="#"><img src="{{ asset('backend/img/logo/log.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-1 col-sm-1 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                        <ul class="nav navbar-nav mai-top-nav">
                            @if(Request::is('admin*'))
                                <li class="nav-item dropdown">
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">স্বাস্থ্য<span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                    <div role="menu" class="dropdown-menu animated flipInX">
                                        <a href="#" class="dropdown-item">হাসপাতাল</a>
                                        <a href="#" class="dropdown-item">উপজেলা স্বাস্থ্য কমপ্লেক্স</a>
                                        <a href="#" class="dropdown-item">কমিউনিটি ক্লিনিক</a>
                                        <a href="#" class="dropdown-item">প্রাইভেট ক্লিনিক</a>
                                        <a href="#" class="dropdown-item">ব্লাড ব্যাংক</a>
                                        <a href="#" class="dropdown-item">এ্যাম্বুলেন্স</a>
                                        <a href="#" class="dropdown-item">ডাক্তারের তালিকা</a>
                                        <a href="#" class="dropdown-item">স্বাস্থ্য কর্মীর তালিকা</a>
                                        <a href="#" class="dropdown-item">হটলাইন</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">শিক্ষা<span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                    <div role="menu" class="dropdown-menu animated flipInX">
                                        <a href="#" class="dropdown-item">বিশ্ববিদ্যলয়</a>
                                        <a href="#" class="dropdown-item">শিক্ষা বোর্ড</a>
                                        <a href="#" class="dropdown-item">মেডিকেল কলেজ</a>
                                        <a href="#" class="dropdown-item">কলেজ</a>
                                        <a href="#" class="dropdown-item">স্কুল</a>
                                        <a href="#" class="dropdown-item">মাদ্রাসা</a>
                                        <a href="#" class="dropdown-item">ভর্তি ও ফলাফল তথ্য</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">রক্তদাতা </a>
                                <li class="nav-item"><a href="#" class="nav-link">আবেদন ফর্ম </a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">অভিযোগ</a>
                                </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">ওয়েবসাইট লিঙ্ক<span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                <div role="menu" class="dropdown-menu animated flipInX">
                                    <a href="#" class="dropdown-item">সরকারী অধিদপ্তর</a>
                                    <a href="#" class="dropdown-item">জেলা ওয়েব পোর্টাল</a>
                                    <a href="#" class="dropdown-item">চাকুরী সাইট</a>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                    <div class="notification-single-top">
                                        <h1>Notifications</h1>
                                    </div>
                                    <ul class="notification-menu">
                                        <li>
                                            <a href="#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-checked-pro"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">16 Sept</span>
                                                    <h2>Advanda Cro</h2>
                                                    <p>Please done this project as soon possible.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-cloud-computing-down"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">16 Sept</span>
                                                    <h2>Sulaiman din</h2>
                                                    <p>Please done this project as soon possible.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-shield"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">16 Sept</span>
                                                    <h2>Victor Jara</h2>
                                                    <p>Please done this project as soon possible.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-analytics-arrow"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">16 Sept</span>
                                                    <h2>Victor Jara</h2>
                                                    <p>Please done this project as soon possible.</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="notification-view">
                                        <a href="#">View All Notification</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name">Advanda Cro</span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>My Account</a>
                                    </li>
                                    <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                    </li>
                                    <li><a href="#"><span class="adminpro-icon adminpro-money author-log-ic"></span>User Billing</a>
                                    </li>
                                    <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                    </li>
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();getElementById('logoutForm').submit();"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out <form id="logoutForm" action="{{route('logout')}}" method="post" style="display:none">
                                                @csrf
                                            </form></a></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>