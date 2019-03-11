@extends('layouts.frontend.frontex')

@section('title','হোম')

@push('css')

@endpush

@section('content')
    <!-- Breacrumb Area -->
    <div class="breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 img-thumbnail" src="{{ asset('frontend/images/slider/slider1.jpg') }}" alt="First slide" style="height: 530px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-thumbnail" src="{{ asset('frontend/images/slider/slider2.jpg') }}" alt="Second slide" style="height: 530px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-thumbnail" src="{{ asset('frontend/images/slider/slider3.jpg') }}" alt="Third slide" style="height: 530px;">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breacrumb Area -->

    <!-- at a glance section -->
    <div class="glance-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="glance-item text-center card card-body">
                        <div class="glance-logo">
                            <span class="glance-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        </div>
                        <div class="glance-heading">
                            <h4>জনসংখ্যা</h4>
                        </div>
                        <div class="glance-details"><p>১,৩৭,৭৯৫ জন</p></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="glance-item text-center card card-body">
                        <div class="glance-logo">
                            <span class="glance-icon"><i class="far fa-map"></i></span>
                        </div>
                        <div class="glance-heading">
                            <h4>আয়তন</h4>
                        </div>
                        <div class="glance-details"><p>৭৭,৬০০একর(৩১৪ বর্গকিলোমিটার)</p></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="glance-item text-center card card-body">
                        <div class="glance-logo">
                            <span class="glance-icon"><i class="fas fa-user-edit"></i></span>
                        </div>
                        <div class="glance-heading">
                            <h4>শিক্ষার হার</h4>
                        </div>
                        <div class="glance-details"><p>৯৯%</p></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="glance-item text-center card card-body">
                        <div class="glance-logo">
                            <span class="glance-icon"><i class="fas fa-venus-mars"></i></span>
                        </div>
                        <div class="glance-heading">
                            <h4>বাল্য বিবাহ</h4>
                        </div>
                        <div class="glance-details"><p>০%</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- at a glance section -->


    <!-- Page Content -->
    <main class="page-content">

        <!-- Portfolio Area -->
        <section class="portfolio-area section-padding-lg bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                        <div class="section-title text-center">
                            <h2>ফুলছড়ি উপজেলা, গাইবান্ধা</h2>
                            <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা।</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="port-item text-center">
                                    <img src="{{ asset('frontend/images/port/uno.jpg') }}" class="img-thumbnail" style="width:225px; height: 250px";>
                                    <h5 style="padding-top: 25px;">মুহাম্মদ আবদুল হালিম টলষ্টয়</h5>
                                    <small>উপজেলা নির্বাহী অফিসার, ফুলছড়ি, গাইবান্ধা</small>
                                    <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের ।</p>

                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="cr-btn cr-btn-sm" data-toggle="modal" data-target="#unoModal">বিস্তারিত</button>

                                    <!-- The Modal -->
                                    <div class="modal" id="unoModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-center">বিস্তারিত</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="details-img">
                                                        <img src="{{ asset('frontend/images/port/uno.jpg') }}" class="img-thumbnail" style="width:225px";></div>
                                                    <div class="details-name">
                                                        <h4>মুহাম্মদ আবদুল হালিম টলষ্টয়</h4>
                                                        <small>ব্যাচ (বিসিএস) : ২৮</small>
                                                    </div>
                                                    <div class="details-contact">
                                                        <ul>
                                                            <li> <b>মোবাইল:</b> 01762695077</li>
                                                            <li> <b>ফোন (অফিস):</b> 0542256002</li>
                                                            <li> <b>ইমেইল:</b>  uno.phulgai5@gmail.com</li>
                                                            <li> <b>ফ্যাক্স :</b>  0542256004</li>
                                                        </ul>
                                                    </div>
                                                    <div class="details-join">
                                                        <ul>
                                                            <li> <b>বর্তমান কর্মস্থলে যোগদানের তারিখ:</b> 2016-08-31</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Close Modal Box -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="port-item text-center">
                                    <img src="{{ asset('frontend/images/port/chairman.jpg') }}" class="img-thumbnail" style="width:205px; height: 250px";>
                                    <h5 style="padding-top: 25px;">মোঃ হাবিবুর রহমান</h5>
                                    <small>উপজেলা পরিষদ চেয়ারম্যান</small>
                                    <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের ।</p>


                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="cr-btn cr-btn-sm" data-toggle="modal" data-target="#chairModal">বিস্তারিত</button>

                                    <!-- The Modal -->
                                    <div class="modal" id="chairModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-center">বিস্তারিত</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="details-img">
                                                        <img src="{{ asset('frontend/images/port/chairman.jpg') }}" class="img-thumbnail" style="width:225px";></div>
                                                    <div class="details-name">
                                                        <h4>মোঃ হাবিবুর রহমান</h4>
                                                        <small>উপজেলা পরিষদ চেয়ারম্যান</small>
                                                    </div>
                                                    <div class="details-contact">
                                                        <ul>
                                                            <li> <b>মোবাইল:</b>  01712-516167</li>
                                                            <li> <b>ফোন (অফিস):</b>নেই</li>
                                                            <li> <b>ইমেইল:</b> zamanfulchari@gmail.com</li>
                                                            <li> <b>ফ্যাক্স :</b> নেই</li>
                                                        </ul>
                                                    </div>
                                                    <div class="details-join">
                                                        <ul>
                                                            <li> <b>বর্তমান কর্মস্থলে যোগদানের তারিখ:</b>নেই</li>
                                                        </ul>
                                                    </div>


                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Close Modal Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="notice-box well">
                            <div class="card">
                                <div class="card-header bg-dark text-white"><h3>নোটিস</h3></div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><a href="">যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর</a></li>
                                        <li class="list-group-item"><a href="">যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর</a></li>
                                        <li class="list-group-item"><a href="">যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর</a></li>
                                        <li class="list-group-item"><a href="">যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর</a></li>
                                        <li class="list-group-item"><a href="">যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর</a></li>
                                        <li class="list-group-item"><a href="">যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--// Portfolio Area -->

        <!-- Officers Area -->
        <section class="portfolio-area section-padding-lg bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                        <div class="section-title text-center">
                            <h2>কর্মকর্তাবৃন্দ </h2>
                            <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা।</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="port-item text-center">
                            <img src="{{ asset('frontend/images/officer/officer1.png') }}" class="img-thumbnail">
                            <h5 style="padding-top: 25px;">মোঃ আশরাফুল হক</h5>
                            <small>উপজেলা সমাজসেবা কর্মকর্তা</small>
                            <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের ।</p>

                            <!-- Button to Open the Modal -->
                            <button type="button" class="cr-btn cr-btn-sm" data-toggle="modal" data-target="#officer1">বিস্তারিত</button>

                            <!-- The Modal -->
                            <div class="modal" id="officer1">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center">বিস্তারিত</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="details-img">
                                                <img src="{{ asset('frontend/images/officer/officer1.png') }}" class="img-thumbnail"></div>
                                            <div class="details-name">
                                                <h4>মোঃ আশরাফুল হক</h4>
                                                <small>ব্যাচ (বিসিএস) : ২৯</small>
                                            </div>
                                            <div class="details-contact">
                                                <ul>
                                                    <li> <b>মোবাইল:</b> 01733390662</li>
                                                    <li> <b>ফোন (অফিস):</b> 0552375021</li>
                                                    <li> <b>ইমেইল:</b>  unodomar@mopa.gov.bd</li>
                                                    <li> <b>ফ্যাক্স :</b> ০৫৫২৩৭৫০০১</li>
                                                </ul>
                                            </div>
                                            <div class="details-join">
                                                <ul>
                                                    <li> <b>বর্তমান কর্মস্থলে যোগদানের তারিখ:</b> 2017-09-11</li>
                                                </ul>
                                            </div>


                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Close Modal Box -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="port-item text-center">
                            <img src="{{ asset('frontend/images/officer/officer2.jpg') }}" class="img-thumbnail">
                            <h5 style="padding-top: 25px;">মোঃ আব্দুর রাজ্জাক বসুনিয়া</h5>
                            <small>উপজেলা শিক্ষা অফিসার</small>
                            <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের ।</p>


                            <!-- Button to Open the Modal -->
                            <button type="button" class="cr-btn cr-btn-sm" data-toggle="modal" data-target="#officer2">বিস্তারিত</button>

                            <!-- The Modal -->
                            <div class="modal" id="officer2">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center">বিস্তারিত</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="details-img">
                                                <img src="{{ asset('frontend/images/officer/officer2.jpg') }}" class="img-thumbnail"></div>
                                            <div class="details-name">
                                                <h5>মোঃ আব্দুর রাজ্জাক বসুনিয়া</h4>
                                                    <small>উপজেলা শিক্ষা অফিসার</small>
                                            </div>
                                            <div class="details-contact">
                                                <ul>
                                                    <li> <b>মোবাইল:</b> ০১৭২১৩০৬৯০৯</li>
                                                    <li> <b>ফোন (অফিস):</b> 0552375350</li>
                                                    <li> <b>ইমেইল:</b> arazzak.basunia@gmail.com</li>
                                                    <li> <b>ফ্যাক্স :</b> নেই</li>
                                                </ul>
                                            </div>
                                            <div class="details-join">
                                                <ul>
                                                    <li> <b>বর্তমান কর্মস্থলে যোগদানের তারিখ:</b> 2014-04-28</li>
                                                </ul>
                                            </div>


                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Close Modal Box -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="port-item text-center">
                            <img src="{{ asset('frontend/images/officer/officer3.jpg') }}" class="img-thumbnail">
                            <h5 style="padding-top: 25px;">ফখরুল ইসলাম</h5>
                            <small>উপজেলা মৎস্য অফিসার</small>
                            <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের ।</p>

                            <!-- Button to Open the Modal -->
                            <button type="button" class="cr-btn cr-btn-sm" data-toggle="modal" data-target="#officer3">বিস্তারিত</button>

                            <!-- The Modal -->
                            <div class="modal" id="officer3">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center">বিস্তারিত</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="details-img">
                                                <img src="{{ asset('frontend/images/officer/officer2.jpg') }}" class="img-thumbnail"></div>
                                            <div class="details-name">
                                                <h4>জসিম উদ্দিন</h4>
                                                <small>ব্যাচ (বিসিএস) : ২৯</small>
                                            </div>
                                            <div class="details-contact">
                                                <ul>
                                                    <li> <b>মোবাইল:</b> 01733390662</li>
                                                    <li> <b>ফোন (অফিস):</b> 0552375021</li>
                                                    <li> <b>ইমেইল:</b>  unodomar@mopa.gov.bd</li>
                                                    <li> <b>ফ্যাক্স :</b> ০৫৫২৩৭৫০০১</li>
                                                </ul>
                                            </div>
                                            <div class="details-join">
                                                <ul>
                                                    <li> <b>বর্তমান কর্মস্থলে যোগদানের তারিখ:</b> 2017-09-11</li>
                                                </ul>
                                            </div>


                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Close Modal Box -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="port-item text-center">
                            <img src="{{ asset('frontend/images/officer/officer4.jpg') }}" class="img-thumbnail">
                            <h5 style="padding-top: 25px;">উম্মে ফাতিমা</h5>
                            <small>উপজেলা-মহিলা-বিষয়ক-কর্মকর্তা </small>
                            <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের ।</p>


                            <!-- Button to Open the Modal -->
                            <button type="button" class="cr-btn cr-btn-sm" data-toggle="modal" data-target="#officer4">বিস্তারিত</button>

                            <!-- The Modal -->
                            <div class="modal" id="officer4">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center">বিস্তারিত</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="details-img">
                                                <img src="{{ asset('frontend/images/port/chairman.jpg') }}" class="img-thumbnail"></div>
                                            <div class="details-name">
                                                <h4>উম্মে ফাতিমা</h4>
                                                <small>উপজেলা পরিষদ চেয়ারম্যান</small>
                                            </div>
                                            <div class="details-contact">
                                                <ul>
                                                    <li> <b>মোবাইল:</b> ০১৭২১৩০৬৯০৯</li>
                                                    <li> <b>ফোন (অফিস):</b> 0552375350</li>
                                                    <li> <b>ইমেইল:</b> arazzak.basunia@gmail.com</li>
                                                    <li> <b>ফ্যাক্স :</b> নেই</li>
                                                </ul>
                                            </div>
                                            <div class="details-join">
                                                <ul>
                                                    <li> <b>বর্তমান কর্মস্থলে যোগদানের তারিখ:</b> 2014-04-28</li>
                                                </ul>
                                            </div>


                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Close Modal Box -->
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--// Officeers Area -->

        <!-- Display Area -->
        <section class="portfolio-area section-padding-lg bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                        <div class="section-title text-center">
                            <h2> ছবিতে আমাদের সেবা সমূহ </h2>
                            <p> যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের । </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="portfolio-wrap">
                    <!-- Poftfolio Filters -->
                    <div class="portfolio-filters">
                        <button class="is-checked" data-filter="*">সব</button>
                        <button data-filter=".pfolio-filter-design">সামাজিক উন্নয়ন</button>
                        <button data-filter=".pfolio-filter-creative">অবকাঠাম উন্নয়ন</button>
                        <button data-filter=".pfolio-filter-photoshop">অর্থনৈতিক উন্নয়ন</button>
                    </div>
                    <!--// Poftfolio Filters -->


                    <!-- Portfolios -->
                    <div class="row no-gutters portfolios portfolios-style portfolios-zoom-button-holder" data-show="6" data-load="3">

                        <!-- Single Portfolio 1 -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-creative pfolio-filter-design">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-1.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-1.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Design</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 1 -->

                        <!-- Single Portfolio 2 -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-creative pfolio-filter-design">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-2.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-2.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Artwork</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 2 -->

                        <!-- Single Portfolio 3 -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-design">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-3.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-3.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Artwork</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 3 -->

                        <!-- Single Portfolio 4 -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-creative">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-4.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-4.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Design</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 4 -->

                        <!-- Single Portfolio 5 -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-5.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-5.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Artwork</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 5 -->

                        <!-- Single Portfolio 6 -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-photoshop pfolio-filter-design">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-6.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-6.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Design</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 6 -->

                        <!-- Single Portfolio 7 -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-design">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-7.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-7.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Artwork</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 7 -->

                        <!-- Single Portfolio 8 -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 portfolio-single">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-8.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-8.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Design</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 8 -->

                        <!-- Single Portfolio 9 -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-creative pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-9.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-9.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Artwork</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 9 -->

                        <!-- Single Portfolio 10 -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-design pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-10.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-10.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Design</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 10 -->

                        <!-- Single Portfolio 11 -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-creative pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-11.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-11.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Artwork</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 11 -->

                        <!-- Single Portfolio 12 -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 portfolio-single pfolio-filter-creative pfolio-filter-photoshop">
                            <div class="portfolio">
                                <div class="portfoilo-thumb">
                                    <img src="{{ asset('frontend/images/portfolio/showcase/portfolio-thumb-12.jpg') }}" alt="portfolio thumb">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-content-inner text-center">
                                        <a href="{{ asset('frontend/images/portfolio/showcase/large/large-thumb-12.jpg') }}" class="portfolio-zoom-trigger">
                                            <i class="icofont-search-2"></i>
                                        </a>
                                        <h3>
                                            <a href="single.html">Creative Design</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Portfolio 12 -->

                    </div>
                    <!--// Portfolios -->

                    <div class="portfolio-load-more-button text-center">
                        <button class="load-more-toggle cr-btn">
                            <span>Load More</span>
                        </button>
                    </div>

                </div>
            </div>

        </section>
        <!--// Display Area -->

        <!-- Call To Action Area -->
        <section class="callto-action-area bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                        <div class="callto-action">
                            <div class="callto-action-inner">
                                <h2>অভিযোগ?</h2>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-info com-btn" data-toggle="modal" data-target="#complainModal">দাখিল করুন</button>

                                <!-- The Modal -->
                                <div class="modal" id="complainModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-center">অভিযোগ লিখুন</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <form>

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">নাম</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="নাম">
                                                        <small id="emailHelp" class="form-text text-muted">গোপনীয়তা রক্ষা করা হবে।</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">ইমেইল</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ই-মেইল">
                                                        <small id="emailHelp" class="form-text text-muted">গোপনীয়তা রক্ষা করা হবে।</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">অভিযোগ লিখুন</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">দাখিল করুন</button>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Close Modal Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Call To Action Area -->

        <!-- Location Section -->
        <section class="portfolio-area section-padding-lg bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                        <div class="section-title text-center">
                            <h2>মানচিত্রে ফুলছুড়ি উপজেলা </h2>
                            <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা।</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="google-map">
                            <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.827342434713!2d89.57718996492021!3d25.27639293468588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd17d0c89ce245%3A0x1fce18070b6c9fd4!2z4Kar4KeB4Kay4Kab4Kec4Ka_IOCmieCmquCmnOCnh-CmsuCmviDgpqrgprDgpr_gprfgpqYsIDU3NjA!5e0!3m2!1sbn!2sbd!4v1549737704974" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--// Location Section -->

    </main>
    <!--// Page Content -->
@endsection

@push('scripts')

@endpush

