@extends('layouts.app')
@section('content')
@include('fontend.manu.manu')
@include('fontend.manu.nav')

<div class="container">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Message Send</h5>
            </div>
            <form action="{{ route('messege') }}" method="get">

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="" name="name" required="" autofocus >
                      </div>
                      <div class="col-lg-4">
                        <label for="">Email</label>
                        <input type="email" class="form-control" value="" name="email" required="" autofocus >
                      </div>
                      <div class="col-lg-4">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" value="" name="phone" required="" autofocus >
                      </div>
                    </div>
                            <div class="form-grup">
                                <label for="">Messege</label>
                                <textarea class="form-control" name="messege" id="message-text" value="" required="" autofocus></textarea>
                                </div>

                      <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Send  <i class="fa fa-envelope"></i></button>
            </div>
        </form>
        </div>
    </div>
@endsection
