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
    $total=App\Models\Month::sum('total_price');
    $total1=App\Models\Year::sum('total_price');
@endphp
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h3>Monthly</h3>
            <div class="col-sm-12 col-lg-12">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                               <i class="fa fa-usd"></i>
                            </div>
                            <div class="text">
                                <h2>{{ $total }} Tk</h2>
                                <span>monthly total earnings</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead class="table-dark">
               <tr>
                   <td>Date_Time</td>
                   <td>Total_Product</td>
                   <td>Total_Product</td>
               </tr>
                </thead>
                <tbody>
                    @foreach($month as $pro)
                  <tr>
                      <td>{{ $pro->created_at }}</td>
                      <td>{{ $pro->total_product }}</td>
                      <td>{{ $pro->total_price }}</td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
              <a name="" id="" class="btn btn-danger" href="{{ asset('/admin/sellhistory/month/delete') }}" role="button">Delete All</a>
        </div>
        <div class="col-sm-6">
            <h3>Yearly</h3>
            <div class="col-sm-12 col-lg-12">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                               <i class="fa fa-usd"></i>
                            </div>
                            <div class="text">
                                <h2>{{ $total1 }} Tk</h2>
                                <span>yearly total earnings</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead class="table-dark">
               <tr>
                   <td>Date_Time</td>
                   <td>Total_Product</td>
                   <td>Total_Product</td>
               </tr>
                </thead>
                <tbody>
                    @foreach($year as $pro)
                  <tr>
                      <td>{{ $pro->created_at }}</td>
                      <td>{{ $pro->total_product }}</td>
                      <td>{{ $pro->total_price }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <a name="" id="" class="btn btn-danger" href="{{ asset('/admin/sellhistory/year/delete') }}" role="button">Delete All</a>
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
