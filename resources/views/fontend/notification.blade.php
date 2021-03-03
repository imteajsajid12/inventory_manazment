
@extends('layouts.app')
@section('content')
{{-- menu --}}
@include('fontend.manu.manu')
    @include('fontend.manu.nav')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
        <div class="card">
        <h1><i class="fa fa-bell"></i> Notification</h1>
        <hr>
        @php
          $user = App\Models\User::find(Auth::user()->id);
          @endphp
        @foreach ($user->readNotifications as $notification)
        <div class="notifi__item">
            <div class="bg-c1 img-cir img-40">
                <i class="zmdi zmdi-email-open"></i>
            </div>
            <div class="content">
                <p>{{  $notification->data['message'] }}</p>
                @php $notification->markAsRead(); @endphp
                <span class="date">{{$notification->created_at  }}</span>
            </div>
        </div>
        @endforeach
    </div>
        </div>
</div>
@endsection
