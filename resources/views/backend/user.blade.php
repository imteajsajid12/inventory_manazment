@extends('backend.layouts.app')
@section('content')
@include('backend.manu.manu')
@include('backend.manu.nav')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
                <!--MESSEGE-->
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                        <h2 class="title-1 m-b-25">System User</h2>

                        <button type="button" name="" id="" class="btn btn-primary" style="float:right;margin: 20px;" data-toggle="modal" data-target="#largeModal">+ Add User</button>


                  <!-- modal large -->
                  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Add New User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                  </div>






<div class="table-responsive table--no-card m-b-50">
    <table class="table table-striped table-bordered table-striped table" id="example" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $pro)
                <tr>
                <td>{{ $pro->name }}</td>
                <td>{{ $pro->email }}</td>
                <td>{{ $pro->phone }}</td>
                <td >{{ $pro->password }}</td>
                <td class="text-right">
                    <a href="{{ URL::TO ('/admin/user/delete/'.$pro->id) }}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="/admin/user/edit{{ $pro->id }}/edit"class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
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
