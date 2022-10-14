@extends('layouts.app')
@section('contentment')
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Online Pharmacy</a>
  
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
  </ul>
</nav>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 py-4">
            <h4 class="text">Dashboard</h4>
            <form class="form-inline my-2 my-lg-0" style ="float:left">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
            </div>
            </div>
            </div>
            <center>
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
          <tr class="text-success">
            <td><b>90</b></td>
            <td><b>55</b></td>
            <td><b>39</b></td>
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
        <table>
		<tr>
			<td><b>Name</b><br></td>
			<td>:<br></td>
			<td class="up">Pritee</td>
		</tr>
		<tr>
			<td><b>Email</b><br></td>
			<td>:<br></td>
			<td class="up">pritee593@gmail.com</td>
		</tr>
		<tr>
			<td><b>Gender</b><br></td>
			<td>:<br></td>
			<td class="up">Female</td>
		</tr>
		<tr>
			<td><b>Blood Group</b><br></td>
			<td>:<br></td>
			<td class="up">O+</td>
		</tr>
		<tr>
			<td><b>Date of Birth</b><br></td>
			<td>:<br></td>
			<td class="up">10/10/1999</td>
		</tr>
		<tr>
			<td><b>Address</b><br></td>
			<td>:<br></td>
			<td class="up">477 8th St Imperial Beach, California(CA), 91932</td>
		</tr>
	
		</table>
    </center>
@endsection