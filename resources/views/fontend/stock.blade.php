
@extends('layouts.app')
@section('content')
{{-- menu --}}
@include('fontend.manu.manu')
    @include('fontend.manu.nav')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Earnings By Items</h2>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Item_code</th>
                            <th>Item name</th>
                            <th >quantity</th>

                            <th class="text-right">price</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stock as  $pro)
                        <tr>
                            <td>{{ $pro->product_name }}</td>
                            <td>{{ $pro->name }}</td>
                            <td>{{ $pro->quantity }}</td>
                            <td class="text-right">{{ $pro->product_price }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endsection
