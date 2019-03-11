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
                @foreach($writers as $writer)
                    @if($writer !== null)
                <div class="col-lg-3">
                    <div class="gallery-item">
                        <div class="card" style="">
                            <img class="card-img-top" src="{{ asset('uploads/writer/'.$writer->image) }}" alt="default.png" style="padding-top: 15px; padding-right: 15px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $writer->name }}</h5>
                                <p class="card-text">{{ $writer->brief_note }}</p>
                                <a href="{{ route('WriterDetails',$writer->id) }}" class="btn btn-primary">বিস্তারিত</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @else
                        <p>No data found</p>
                    @endif
                @endforeach
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