
@extends('layouts.app')
@section('content')
{{-- menu --}}
@include('backend.manu.manu')
    @include('backend.manu.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
        <div class="card">
        <h1><i class="zmdi zmdi-email"></i> Message</h1>
        <hr>

        @php
        $user = App\Models\Admin::find(Auth::user()->id);
        @endphp
      @foreach ($user->readNotifications as $notification)
      <div class="notifi__item">
          <div class="bg-c1 img-cir img-40">
              <i class="zmdi zmdi-email-open"></i>
          </div>
          <div class="content">
              <p>name:-{{  $notification->data['name'] }} </p>
              <p>email:- {{  $notification->data['email'] }}</p>
              <p>phone:- {{  $notification->data['phone'] }}</p>
              <p>message:- <h4>{{  $notification->data['messege'] }}</h4></p>
              @php $notification->markAsRead(); @endphp
              <span class="date">{{$notification->created_at  }}</span>

          </div>
      </div>
      @endforeach
      <a href="/admin/messsege/delete" class="btn btn-danger">Delete All </a>
    </div>

        </div>
</div>
@endsection
