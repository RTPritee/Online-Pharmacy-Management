@extends('layouts.viewMedicineLayout')
@section('content')
<title>Search customer</title>
    <div class = "container"><br>
        <h5> Searching Result... </h5>
        <div class = "row">
            <div class = "col-12" style = "padding:20px;">
            <div class="card-header">
            <form action="" class ="col-1.5" style ="float:right">
                    <button class="btn btn-warning">Block List</button>
                </form>
                    <a href = "{{route('viewCustomers')}}">
                    <button class="btn btn-primary">Refresh</button>
                    </a>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined At </th>
                            <th>Action</th> 
                            </thead>
                            </thead>
                            <tbody>
    @foreach($customers as $cs)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$cs->name}}</td>
            <td>{{$cs->email}}</td>
            <td>{{$cs->created_at}}</td>
            <td>
            <!--<form method="POST" action="{{ url('/viewCustomers' . '/' . $cs->customersId) }}" accept-charset="UTF-8" style="display:inline">
            
            {{ csrf_field() }}
            
            </form>-->
            <a href ="{{route('destroy',['id'=> $cs->customersId])}}">
            <button type="submit" class="btn btn-danger btn-sm" title="Block customer?" onclick="return confirm(&quot;Confirm block?It will be like delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Block</button>
            <!--<button class = "btn btn-sm btn-danger">Block</button> -->
            </td>
        </tr>
        @endforeach
</table>
<div>

</div>
@endsection
</html>