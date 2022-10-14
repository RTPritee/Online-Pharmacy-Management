@extends('layouts.viewMedicineLayout')
@section('content')
<title>Search Suppliers</title>
    <div class = "container"><br>
        <h5> Searching Result... </h5>
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
                <th>Name</th>
                <th>Email</th>
                <th>Date of Joining</th> 
                <th>Shift</th> 
                <th>Salary</th> 
                <th>Bonus</th> 
                <th>Status</th> 
                <th>Using Vehicle</th> 
                <th>Action</th> 
                </thead>
                </thead>
                <tbody>
                 @foreach($suppliers as $sup)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sup->name }}</td>
                <td>{{ $sup->email }}</td>
                <td>{{ $sup->dateOfJoin}}</td>
                <td>{{ $sup->shift}}</td>
                <td>{{ $sup->salary}}</td>
                <td>{{ $sup->bonus}}</td>
                <td>
                @if($sup->status == "1")
                <i class = "badge badge-success">Active</i>
                @else
                <i class = "badge badge-danger">dective</i>
                @endif
                </td>
                <td>{{ $sup->vehicle}}</td>
                <td>
                    <a href ="{{url('editSupplier/'.$sup->supplierId)}}" >   
                        <button class = "btn btn-sm btn-info">Edit</button>
                    </a>
                <!--<button class = "btn btn-sm btn-warning">View</button> -->
                <a href = "{{url('deleteSupplier/'.$sup->supplierId)}}">
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                </a>
                <!--<button class = "btn btn-sm btn-danger">Delete</button> -->
                </td>
                </tr>
                @endforeach
                </tbody>
    </table>
@endsection