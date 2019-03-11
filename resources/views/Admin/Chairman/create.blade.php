@extends('layouts.app')

@section('title','Chairman')

@push('css')
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/summernote.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css'>
@endpush

@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset mg-t-30">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>খেলোয়াড়</h1>
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
                                            <form action="{{ route('admin.chairman.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Name</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input name="name" type="text" class="form-control" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Description</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <textarea name="description" id="summernote1" cols="30" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Mobile</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input name="mobile" type="text" class="form-control" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Tele Phone</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input name="phone" type="text" class="form-control" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Email</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input name="email" type="email" class="form-control" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Joining Date</label>
                                                        </div>
                                                        <div class="col-lg-9" data-date-format="dd.mm.yyyy">
                                                            <input type="text" name="joining_date" class="form-control input-group date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Leaving Date</label>
                                                        </div>
                                                        <div class="col-lg-9" data-date-format="dd.mm.yyyy">
                                                            <input type="text" name="leaving_date" class="form-control input-group date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="bt-df-checkbox pull-left">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="i-checks pull-left">
                                                            <label>
                                                                <input type="checkbox" value="" checked=""> <i></i> Option two checked </label>
                                                        </div>
                                                    </div>
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
                                                                    <button class="btn btn-white" type="button" onclick="location.href='{{ route('admin.player.index') }}';">Cancel</button>
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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js'></script>

    <script>
        $('.input-group.date').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true
        });
    </script>


@endpush