
@extends('backend.layouts.app')
@section('content')
{{-- menu --}}
@include('backend.manu.manu')
    @include('backend.manu.nav')
    @push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    @endpush

<div id="app">
    <div class="row" >
    <div class="col-lg-12">
        <div class="continer">
                 <!--MESSEGE-->
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

        <h2 class="title-1 m-b-25">Coustomer Info</h2>
        {{-- <form action="{{ url('/coustomer/Save') }}" method="get"> --}}

    </div>


        <div class="table-responsive table--no-card m-b-50">
            <table class="table table-striped table-bordered table-striped table" id="example" >


                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phome</th>
                        <th >Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($coustomer as $pro)
                        <tr>
                        <td>{{ $pro->name }}</td>
                        <td>{{ $pro->email }}</td>
                        <td>{{ $pro->phone }}</td>
                        <td >{{ $pro->address }}</td>
                        <td class="text-right">
                            <a href="{{ URL::TO ('admin/coustomer/delete/'.$pro->id) }}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    @push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
    @endpush
    @endsection
