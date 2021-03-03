
@extends('layouts.app')
@section('content')
{{-- menu --}}
@include('fontend.manu.manu')
    @include('fontend.manu.nav')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Edite Coustomer Info</h5>
            </div>
            <form action="{{ route('costomerupdate') }}" method="POST">
                @csrf
            <div class="modal-body">

                <div class="form-grup">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $coustomer->name }}" name="name" required="" autofocus >
                    <input type="text" class="form-control" value="{{ $coustomer->id }}" name="id" hidden >
                    </div>
                    <div class="form-grup">
                        <label for="">Email </label>
                        <input type="email" class="form-control " id="country" value="{{ $coustomer->email }}" name="email" required="" autofocus >
                        </div>
                        <div class="form-grup">
                            <label for="">Phone</label>
                            <input type="number" class="form-control " id="country" value="{{ $coustomer->phone }}" name="phone" required="" autofocus >
                            </div>
                            <div class="form-grup">
                                <label for="">Address</label>
                                <textarea class="form-control" name="address" id="message-text" value="{{ $coustomer->address }}" required="" autofocus></textarea>
                                </div>
                             </div>
                      <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
        </div>
    </div>
@endsection
