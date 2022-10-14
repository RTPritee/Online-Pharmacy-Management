@extends('layouts.viewMedicineLayout')
@section('content')
    <div class = "container">
        <div class = "row">
        <div class = "col-12" style = "padding:20px;">
        <div class="card-header"> Searching Result</div>
            
            <div class="card-body" style = "float:left">
                    <a href = "{{route('index')}}">
                    <button class="btn btn-info">Refresh</button> </a>
                
                </div>
    </div>
            <div class="table-responsive">
        <table class="table">
                <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price(tk)</th> 
                <th>Discount(%)</th> 
                <th>Photo</th> 
                <th>Action</th> 
                </thead>
                </thead>
                <tbody>
                @foreach($medicines as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->discount }}</td>
                <td>
                <img src="{{ asset($item->photo) }}" width= '50' height='50' class="img img-responsive" />
                </td>
                <td>
                    
                <a href="{{route('editMedicine',['id'=>$item->medicineId])}}"> <button class = "btn btn-sm btn-info">Edit</button></a>
                <a href ="{{route('delete',['id'=>$item->medicineId])}}">
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                <!--<button class = "btn btn-sm btn-danger">Delete</button> -->
                </a>
                </td>
                </tr>
                @endforeach
                </tbody>
    </table>
@endsection