@extends('layouts.viewMedicineLayout')
@section('content')
@if(Session::has('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">{{Session::get('status')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
		 </div>
@endif
<title>Suppliers List</title>
    <div class = "container">
        <div class = "row">
        <div class = "col-12" style = "padding:20px;">
        <div class="card-body" >
            <a href="{{url('addSupplier')}}" class="btn btn-success btn-sm" title="Add New">
                     <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <a href="{{url('infoSupplier')}}">
                <button class = "btn btn-sm btn-warning">Suppliers Info</button>
                </a>
                <form action="searchSupplier" class ="col-4" style ="float:right">
                    <div class ="form-group" style ="float:left">
                      <input type="search" name="searchSupplier" id ="" class ="form-control" placeholder ="Search by name..">
                    </div> 
                    &nbsp;&nbsp;&nbsp;<button class="btn btn-primary">Search</button>
                </form>
        </div>
        <div class="card-header"> Supplier List</div>
    </div>
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