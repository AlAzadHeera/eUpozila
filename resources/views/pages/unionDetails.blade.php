@extends('layouts.frontend.frontex')

@section('title','ইউনিয়ন সমূহ')

@push('css')

@endpush

@section('content')

    <!-- Breacrumb Area -->
    <div class="breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cr-breadcrumb text-center">
                        <h1>{{ $union->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breacrumb Area -->

    <!-- Page Content -->
    <main class="page-content">

        <div class="bg-white section-padding-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pg-portfolio-images cr-slider-navigation">
                            <a href="{{ asset('uploads/union/'.$union->image) }}">
                                <img class="img-responsive" style="height: 500px;" src="{{ asset('uploads/union/'.$union->image) }}" alt="single-image">
                            </a>
                        </div>
                        <div class="pg-portfolio-details">
                            <div class="section-title text-center">
                                <p style="width:100% !important;">
                                    {!! $union->details !!}
                                </p>
                            </div>
                        </div>
                        <div class="pg-portfolio-infos text-center">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="pg-portfolio-single-info">
                                        <h5>বর্তমান চ্যায়ারম্যান</h5>
                                        <p>{{ $union->cchairman }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12" style="">
                                    <div class="pg-portfolio-single-info">
                                        <h5>ঠিকানা</h5>
                                        <p>{{ $union->location }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12" style="">
                                    <div class="pg-portfolio-single-info">
                                        <h5>ফোন</h5>
                                        <p>{{ $union->phone }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="pg-portfolio-single-info">
                                        <h5>মোবাইল</h5>
                                        <p>{{ $union->mobile }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call To Action Area -->
        <section class="callto-action-area bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                        <div class="callto-action">
                            <div class="callto-action-inner">
                                <h2>To start your project with us</h2>
                                <a href="javascript:;" class="cr-btn cr-btn-white">
                                    <span>Purchase Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Call To Action Area -->

    </main>
    <!--// Page Content -->

@endsection

@push('scripts')

@endpush