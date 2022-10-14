@extends('layouts.viewMedicineLayout')
@section('content')

<div class="card" style="margin: 20px;">
  <div class="card-header">Edit Your Profile Information</div>
  <div class="card-body">
       
      <form action="{{ url('updateInfo/'.$infos->infoId) }}" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        @method('PUT')
        <label>Name</label></br>
        <input type="text" name="name" id="name" value= "{{ $infos->name }}" class="form-control"></br>
        
        

        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value= "{{ $infos->gender }}" class="form-control"></br>
        
        <label>Blood Group</label></br>
        <input type="text" name="bloodGroup" id="bloodGroup" value= "{{ $infos->bloodGroup }}" class="form-control"></br>
        

        <label>Date of Birth (yy-mn-dy)</label></br>
        <input type="text" name="dob" id="dob" value= "{{ $infos->dob }}" class="form-control"></br>
        
      
        <label>Address</label></br>
        <input type="text" name="address" id="address" value= "{{ $infos->address }}" class="form-control"></br>
        
       
         <!-- Bootstrap provides different styles of buttons -->

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href = '/adminDashboard'><input type="submit" value="Cancle" class="btn btn-danger"></a>
  </div>
</div>
@endsection