@extends('layouts.frontend.frontex')

@section('title','খেলাধুলা ও বিনোদন')

@push('css')

@endpush

@section('content')

    <!-- Breacrumb Area -->
    <div class="breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cr-breadcrumb text-center">
                        <h1>{{ $sport->title }}</h1>
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
                            <a href="{{ asset('uploads/sport/'.$sport->image) }}">
                                <img src="{{ asset('uploads/sport/'.$sport->image) }}" alt="single-image">
                            </a>
                        </div>
                        <div class="pg-portfolio-details">
                            <div class="section-title text-center">
                                <h2>{{ $sport->heading }}</h2>
                                <p style="width:100% !important;">
                                    {!! $sport->paragraph !!}
                                </p>
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