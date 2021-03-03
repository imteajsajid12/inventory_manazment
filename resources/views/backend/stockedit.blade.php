
@extends('layouts.app')
@section('content')
{{-- menu --}}
@include('backend.manu.manu')
    @include('backend.manu.nav')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Edite Coustomer Info</h5>
            </div>
            <form action="{{ route('stockupdate') }}" method="POST">
                @csrf
            <div class="modal-body">

                <div class="form-grup">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $show->name }}" name="name" required="" autofocus >
                    <input type="text" class="form-control" value="{{ $show->id }}" name="id" hidden >
                    </div>
                    <div class="form-grup">
                        <label for="">Product_id </label>
                        <input type="text" class="form-control " id="country" value="{{ $show->product_name }}" name="product_id" required="" autofocus >
                        </div>
                        <div class="form-grup">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control " id="country" value="{{ $show->quantity }}" name="quantity" required="" autofocus >
                            </div>
                            <div class="form-grup">
                                <label for="">Price</label>
                                <input class="form-control" name="Price" id="message-text" value="{{ $show->product_price}}" required="" autofocus>
                                </div>
                             </div>
                      <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
@endsection
