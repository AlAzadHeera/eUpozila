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
                                <h1>খেলোয়াড়</h1>
                                <div class="sparkline12-outline-icon">
                                    <span class="sparkline12-collapse-link"><a class="btn btn-success btn-sm" href="{{ route('admin.player.create') }}"><i class="fa fa-plus"></i> নতুন খেলোয়াড়</a></span>
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
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($players as $key=>$player)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $player->name }}</td>
                                        <td><img class="img-thumbnail" style="width: 60px;" src="{{asset('uploads/player/'.$player->image)}}" alt="default.png"></td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ route('admin.player.edit',$player->id) }}"><i class="fa fa-pencil"></i></a>
                                            <!-- Trigger the modal with a button -->
                                            <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></a>

                                            <!-- Modal -->
                                            <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">বিস্তারিত</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="writer-img" style="width: 300px; margin: 10px auto 25px auto ;">
                                                                <img src="{{asset('uploads/player/'.$player->image)}}" alt="">
                                                            </div>
                                                            <div class="writer-details">
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th>নামঃ</th>
                                                                        <td>{{ $player->name }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>জন্ম</th>
                                                                        <td><p>{{ $player->birthday }}</p></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="vertical-align: middle;">বিবরন</th>
                                                                        <td>{!! $player->description !!}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>মৃত্যু</th>
                                                                        <td><p>
                                                                                @if($player->deathday == null)
                                                                                    {{ "N/A" }}
                                                                                @else
                                                                                {{ $player->deathday }}
                                                                                @endif
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <a type="button" class="btn btn-sm btn-danger" onclick="deleteWriter({{ $player->id }})"><i class="fa fa-trash"></i></a>
                                            <form method="POST" id="delete-form-{{ $player->id }}" action="{{ route('admin.player.destroy',$player->id) }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
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
    <script type="text/javascript">
        function deleteWriter(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush