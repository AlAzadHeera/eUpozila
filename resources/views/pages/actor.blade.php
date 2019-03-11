@extends('layouts.frontend.frontex')

@section('title','Writer')

@push('css')

@endpush

@section('content')

    <!-- Breacrumb Area -->
    <div class="breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cr-breadcrumb text-center">
                        <h1>লেখক</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breacrumb Area -->

    <div class="bg-white section-padding-lg">
        <div class="container">
            <div class="row">
                @forelse($actors as $actor)
                    <div class="col-lg-3">
                        <div class="gallery-item">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{ asset('uploads/actor/'.$actor->image) }}" alt="default.png" style="padding-top: 15px; padding-right: 15px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $actor->name }}</h5>
                                    <p class="card-text">{{ $actor->brief_note }}</p>
                                    <a href="#" class="btn btn-primary">বিস্তারিত</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="well well-sm" style="width: 75%; margin: 0 auto;">
                        <h3 class="text-center text-danger">No Data Found</h3>
                    </div>
                @endforelse
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

@endsection

@push('scripts')

@endpush