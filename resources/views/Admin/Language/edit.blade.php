@extends('layouts.app')

@section('title','উপজেলা ঐতিহ্য')

@push('css')
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/summernote.css') }}">
@endpush

@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset mg-t-30">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>উপজেলা ঐতিহ্য</h1>
                                <div class="sparkline12-outline-icon">
                                    <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form action="{{ route('admin.language.update',$language->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Title</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input name="title" type="text" class="form-control" value="{{ $language->title }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Heading</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input name="heading1" type="text" class="form-control" value="{{ $language->heading1 }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Details</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <textarea name="paragraph" id="summernote1" cols="30" rows="10">{{ $language->paragraph }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Current Image</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <img style="width: 250px; float: left;" src="{{ asset('uploads/language/'.$language->image) }}" alt="default.png">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Image</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="file-upload-inner ts-forms">
                                                                <div class="input prepend-big-btn">
                                                                    <label class="icon-right" for="prepend-big-btn">
                                                                        <i class="fa fa-download"></i>
                                                                    </label>
                                                                    <div class="file-button">
                                                                        Browse
                                                                        <input name="image" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                    </div>
                                                                    <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <button class="btn btn-white" type="submit">Cancel</button>
                                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <!-- summernote JS
		============================================ -->
    <script src="{{ asset('backend/js/summernote.min.js') }}"></script>
    <script src="{{ asset('backend/js/summernote-active.js') }}"></script>

@endpush