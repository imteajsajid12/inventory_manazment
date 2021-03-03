
@extends('layouts.app')
@section('content')
{{-- menu --}}
@include('fontend.manu.manu')
    @include('fontend.manu.nav')
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
        <form action="{{ url('/coustomer/Save') }}" method="get">
        <button type="button" name="" id="" class="btn btn-primary" style="float:right;margin: 20px;" data-toggle="modal" data-target="#largeModal">+ Add Item</button>
    </div>

  <!-- modal large -->
  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Add Coustomer Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-grup">
                    <label for="">Name</label>
                    <input type="text" class="form-control " name="name" required="" autofocus >
                    </div>
                    <div class="form-grup">
                        <label for="">Email </label>
                        <input type="email" class="form-control " id="country" name="email" required="" autofocus >
                        </div>
                        <div class="form-grup">
                            <label for="">Phone</label>
                            <input type="number" class="form-control " id="country" name="phone" required="" autofocus >
                            </div>
                            <div class="form-grup">
                                <label for="">Address</label>
                                <textarea class="form-control" name="address" id="message-text" required="" autofocus></textarea>
                                </div>
                             </div>
                      <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
        </div>
    </div>
</div>



<!-- end modal large -->
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
                            <a href="coustomer/{{ $pro->id }}/edit"class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{{ URL::TO ('coustomer/delete/'.$pro->id) }}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
