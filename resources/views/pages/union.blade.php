@extends('layouts.frontend.frontex')

@section('title','Union')

@push('css')

@endpush

@section('content')

    <!-- Breacrumb Area -->
    <div class="breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cr-breadcrumb text-center">
                        <h1>ইউনিয়ন সমূহ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breacrumb Area -->

    <div class="bg-white section-padding-lg">
        <div class="container">
            <div class="row">
                @forelse($unions as $union)
                    <div class="col-lg-3">
                        <div class="gallery-item">
                            <div class="card" style="">
                                <img class="card-img-top" src="{{ asset('uploads/union/'.$union->image) }}" alt="default.png" style="padding-top: 15px; padding-right: 15px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $union->name }}</h5>
                                    <p class="card-text">{{ $union->cchairman }}(<small>Chairman</small>)</p>
                                    <a href="{{ route('UnionDetails',$union->id) }}" class="btn btn-primary">বিস্তারিত</a>
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