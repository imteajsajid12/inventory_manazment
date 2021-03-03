@extends('layouts.app')
@section('content')
@include('fontend.manu.nav')
@include('fontend.manu.manu')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
<table class="table" id="example">
    <thead>
        <tr>
            <th>kk</th>
            <th>fff</th>
            <th>fff</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"></td>
            <td>ddsa</td>
            <td>dddd</td>
        </tr>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
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
