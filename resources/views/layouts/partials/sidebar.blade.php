<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="{{ asset('backend/img/message/1.jpg') }}" alt="" />
            </a>
            <h3>Andrar Son</h3>
            <p>Developer</p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboardd') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>ড্যাশবোর্ড</a>
                </li>
                @if(Request::is('admin*'))
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>ইতিহাস ও ঐতিহ্য<span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="{{ route('admin.heritage.index') }}" class="dropdown-item">উপজেলার ঐতিহ্য</a>
                            <a href="dashboard-2.html" class="dropdown-item">ভাষা ও সংস্কৃতি</a>
                            <a href="analytics.html" class="dropdown-item">খেলাধুলা ও বিনোদন</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>উপজেলা পরিষদ<span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="dashboard.html" class="dropdown-item">উপজেলা পরিষদ চ্যায়ারম্যান</a>
                            <a href="dashboard-2.html" class="dropdown-item">ভাইস চ্যায়ারম্যান</a>
                            <a href="analytics.html" class="dropdown-item">মহিলা ভাইস চ্যায়ারম্যান</a>
                            <a href="analytics.html" class="dropdown-item">পূর্বতন উপজেলা পরিষদ চেয়ারম্যানগণ</a>
                            <a href="analytics.html" class="dropdown-item">উপজেলা পরিষদের কার্যাবলী</a>
                            <a href="analytics.html" class="dropdown-item">কর্মচারীবৃন্দ</a>
                            <a href="analytics.html" class="dropdown-item">উপজেলার অবস্থান</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>উপজেলা প্রশাসন<span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="dashboard.html" class="dropdown-item">উপজেলা নির্বাহী অফিসার</a>
                            <a href="dashboard-2.html" class="dropdown-item">পূর্বতন উপজেলা নির্বাহী অফিসারগণ</a>
                            <a href="analytics.html" class="dropdown-item">প্রশাসনিক কর্মকর্তাগণ</a>
                            <a href="analytics.html" class="dropdown-item">প্রশাসনিক কর্মচারীগন</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>ইউনিয়ন সমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>সামাজিক নিরাপত্তা</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>প্রশিক্ষন</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>ব্যাক্তিত্ব<span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="{{ route('admin.writer.index') }}" class="dropdown-item">লেখক</a>
                            <a href="{{ route('admin.politician.index') }}" class="dropdown-item">রাজনীতিবিদ</a>
                            <a href="{{ route('admin.player.index') }}" class="dropdown-item">খেলোয়াড়</a>
                            <a href="{{ route('admin.actor.index') }}" class="dropdown-item">অভিনেতা</a>
                            <a href="{{ route('admin.actress.index') }}" class="dropdown-item">অভিনেত্রী</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>দপ্তর সমূহ<span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="dashboard.html" class="dropdown-item">স্থানীয় সরকার</a>
                            <a href="dashboard-2.html" class="dropdown-item">সরকারী দপ্তর সমূহ</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"></span>উন্নয়ন কার্য্যক্রম<span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="dashboard.html" class="dropdown-item">নতুন উন্নয়ন কার্য্যক্রম</a>
                            <a href="dashboard-2.html" class="dropdown-item">সমস্ত উন্নয়ন কার্য্যক্রম</a>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>