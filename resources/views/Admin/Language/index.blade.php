@extends('layouts.app')

@section('title','উপজেলা ঐতিহ্য')

@push('css')

@endpush

@section('content')

    <!-- Static Table Start -->
    <div class="static-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset mg-t-30">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Hover Table</h1>
                                <div class="sparkline12-outline-icon">
                                    <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="static-table-list">
                                <table class="table hover-table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($languages as $key=>$language)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $language->title }}</td>
                                        <td><a class="btn btn-sm btn-info" href="{{ route('admin.language.edit',$language->id) }}"><i class="fa fa-pencil"></i></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush