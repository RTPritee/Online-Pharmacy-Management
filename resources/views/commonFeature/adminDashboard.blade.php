@extends('layouts.viewMedicineLayout')
@section('content')
<title>Admin Dashboard</title>
@if(Session::has('logged'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">{{Session::get('logged')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
		 </div>
@endif
<style>
        .container{
            padding:0.5%;
        }
</style>
<div class="container">
<h2 class="alert text-center " style="color:red; text:bold"><span class="fab fa-laravel"> Welcome Back! </span></h2>
<hr style="border-top: 2px solid #ff5252;">  
        <div class="row">
        <div class="row col col-xs-8 col-sm-8 col-md-8 col-lg-8">
         <table class="table table-bordered table-striped">
          <tr class="text-danger">
            <th> Total Customers </th>
            <th> Total Delivary Man </th>
            <th> Total Type of Product </th>
			<th> Total Product </th>
          </tr>  
          <tr>
            <td><a class="text-success" href="viewCustomers"><b>{{$customers}}</b></a></td>
            <td><a class="text-success" href="viewSupplier"><b>{{$supplier}}</b></td>
            <td><a class="text-success" href="viewMedicine"><b>{{$medicines}}</b></td>
			<td><b>4510</b></td>
          </tr>
          </table>
        </div>
            <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding: 7px 0; margin-left: 15px;">
            <div class="todays-report">
              <div class="h5">Todays Report</div>
              <table class="table table-bordered table-striped">
                <tbody>
                  
                  <tr>
                    
                    <th>Total Sales</th>
                    <th class="text-success">Rs70</th>
                  </tr>
                  <tr>
                   
                    <th>Total Purchase</th>
                    <th class="text-danger">Rs 55</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>   
        <hr style="border-top: 2px solid #ff5252;"> 
		<h2 class="alert text-center " style="color:green; text:bold"><span class="fab fa-laravel"> Your Profile Info </span></h2>
		<div class="row">
        <div class="row col col-xs-8 col-sm-8 col-md-8 col-lg-8">
         
		
		<div class="card" style="width: 18rem;">
  			<img class="card-img-top" src="picture/pritee.jpg" alt="Profile Picture">
  			<div class="card-body">
    			<p class="card-text">Rehnuma Tabassum Pritee</p>
  			</div>
		</div>
	</div> 
	
    <div class="col col-xs-4 col-sm-3 col-md-3 col-lg-4" style="padding: 7px 0; margin-left: 15px;">
	<div class="table-responsive" >
    <table class="table">
     @foreach($infos as $in)
		<tr>
			<td><b>Name </b><br></td>
			<td>:<br></td>
			<td class="up">{{$in->name}}</td>
		</tr>	
		<tr>
			<td><b>Gender</b><br></td>
			<td>:<br></td>
			<td class="up">{{$in->gender}}</td>
		</tr>	
	
		<tr>
			<td><b>Date of Birth </b><br></td>
			<td>:<br></td>
			<td class="up">{{$in->dob}}</td>
		</tr>
		<tr>
			<td><b>Blood Group</b><br></td>
			<td>:<br></td>
			<td class="up">{{$in->bloodGroup}}</td>
		</tr>
		<tr>
			<td><b>Address</b><br></td>
			<td>:<br></td>
			<td class="up">{{$in->address}}</td>
		</tr>	
		<tr>
			<td>
			<center>
		<a href ="{{url('editInfo/'.$in->infoId)}}" >   
                        <button class = "btn btn-sm btn-info">Edit Info</button>
                    </a></center></td>
		</tr>
    @endforeach
	
	</table>	
	</div>
</div>
@endsection 