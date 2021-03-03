@extends('backend.layouts.app')
@section('content')
@include('backend.manu.manu')
@include('backend.manu.nav')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
      <!-- MAIN CONTENT-->
@php
    $total=App\Models\sellh::sum('total')
@endphp
                 <!--MESSEGE-->
                 @if ($message = Session::get('success'))
                 <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert">×</button>
                     <strong>{{ $message }}</strong>
                 </div>
                 @endif
<div class="container">
    <div class="row">
        <div class="col-sm-12">
                            <h3>Sell History</h3>
                              <div class="col-sm-6 col-lg-12">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="fa fa-usd"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{ $total }} Tk</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
      <div class="table-responsive table--no-card m-b-50">
        <table class="table table-striped table-bordered table-striped table" id="example" >
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Product_id</th>
                    <th>Quantaty</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Total_price</th>
                    <th>Date_time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sellh as $pro)
                    <tr>
                    <td>{{ $pro->name }}</td>
                    <td>{{ $pro->product_id }}</td>
                    <td>{{ $pro->quamtity }}</td>
                    <td >{{ $pro->price }}TK</td>
                    <td >{{ $pro->discount }}%</td>
                    <td >{{ $pro->total }}Tk</td>
                    <td >{{ $pro->created_at }}</td>
                    <td class="text-right">
                        <a href="{{ URL::TO ('/admin/sellhistory/delete/'.$pro->id) }}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach

                {{-- <tr>
                    <th>Total</th>
                    <th  colspan="5" class="text-right">{{ $total }}tk</th>
                </tr> --}}
            </tbody>
        </table>
      </div>
        <div class="col-sm-6">
            <a name="" id="" class="btn btn-danger" href="{{ asset('/admin/sellhistory/delete') }}" role="button" style="
            width: 900px;">Delete All</a>
        </div>
        </div>
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
