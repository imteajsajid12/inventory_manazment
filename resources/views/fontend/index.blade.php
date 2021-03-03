
@extends('layouts.app')
@section('content')
{{-- menu --}}
@include('fontend.manu.manu')
    @include('fontend.manu.nav')
   {{-- stock --}}
          @php

          $total1 = App\Models\sell::sum('quantity')
      @endphp

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @if($total1 < 1)
                <div class="alert alert-danger" role="alert">
                    Your Stock Out
                  </div>
                 @endif

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Welcome.</h2>


                                        <input type="text" value="{{ $qty }}" id="sell" hidden  >

                                       <input type="text" value="{{ $total1 }}" id="stock" hidden >


                                </div>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{ $coustmer }}</h2>
                                                <span>Coustomer</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{ $qty }}</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-cloud"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{ $total1 }}</h2>
                                                <span>Stock Item</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="zmdi zmdi-notifications"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{ $kk }} Tk</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                            <div class="col-lg-12">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Stock & Sell</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Sell_Product</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Sell History</h2>
                                <div class="table-responsive table--no-card">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Product Id</th>
                                                <th>Quantity</th>
                                                <th class="text-right">DATE_Time</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $pro)
                                            <tr>
                                                <td>{{ $pro->name }}</td>
                                                <td>{{ $pro->product_id }}</td>
                                                <td>{{ $pro->quamtity }}</td>
                                                <td class="text-right">{{ $pro->created_at }}</td>

                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
<br>
<br>
@endsection
