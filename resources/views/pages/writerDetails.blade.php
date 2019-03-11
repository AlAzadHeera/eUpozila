@extends('layouts.frontend.frontex')

@section('title','উপজেলার ঐতিহ্য')

@push('css')

@endpush

@section('content')

    <!-- Breacrumb Area -->
    <div class="breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cr-breadcrumb text-center">
                        <h1>{{ $writer->name }}</h1>
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
                            <a href="{{ asset('uploads/writer/'.$writer->image) }}">
                                <img class="img-responsive" style="height: 500px;" src="{{ asset('uploads/writer/'.$writer->image) }}" alt="single-image">
                            </a>
                        </div>
                        <div class="pg-portfolio-details">
                            <div class="section-title text-center">
                                <h2>{{ $writer->brief_note }}</h2>
                                <p style="width:100% !important;">
                                    {!! $writer->description !!}
                                </p>
                            </div>
                        </div>
                        <div class="pg-portfolio-infos text-center">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="pg-portfolio-single-info">
                                        <h5>জন্ম</h5>
                                        <p>{{ $writer->birthday }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12" style="visibility: hidden;">
                                    <div class="pg-portfolio-single-info">
                                        <h5>Director Of Pannel</h5>
                                        <p>CurlyArts</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12" style="visibility: hidden;">
                                    <div class="pg-portfolio-single-info">
                                        <h5>Completed</h5>
                                        <p>25th August, 2018</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="pg-portfolio-single-info">
                                        <h5>মৃত্যু</h5>
                                        <p>{{ $writer->deathday }}</p>
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