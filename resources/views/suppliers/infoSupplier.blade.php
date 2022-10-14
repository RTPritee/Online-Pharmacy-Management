@extends('layouts.viewMedicineLayout')
@section('content')
<title>Supplier Info</title>
    <div class = "container"><br>
        <h5> Supplier Info... </h5>
        <div class = "row">
            <div class = "col-12" style = "padding:20px;">
            <div class="card-header">
                    <a href = "{{route('viewSupplier')}}">
                    <button class="btn btn-primary">Refresh</button>
                    </a>
                    <div class="table-responsive">
        <table class="table">
                <thead>
                <tr>
                <th>#</th>
                <th>Address</th> 
                </thead>
                </thead>
                <tbody>
                 @foreach($info as $infoSup)
                <td>{{ $loop->iteration }}</td>
                 <td>{{ $infoSup->address }}</td>
                 </tr>
                 @endforeach
                </tbody>
    </table>
@endsection