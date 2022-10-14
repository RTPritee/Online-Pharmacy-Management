@extends('layouts.viewMedicineLayout')
@section('content')

<div class="card" style="margin: 20px;">
  <div class="card-header">Add New Supplier</div>
  <div class="card-body">
       
      <form action="" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <div class=" alert-danger">
        @error('name')
            {{$message}}<br>
        @enderror </div>

        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <div class=" alert-danger">
        @error('email')
            {{$message}}<br>
        @enderror </div>

        <label>Date of join (yy-mn-dy)</label></br>
        <input type="text" name="dateOfJoin" id="dateOfJoin" class="form-control"></br>
        <div class=" alert-danger">
        @error('dateOfJoin')
            {{$message}}<br>
        @enderror </div>

        <label>Shift (Sat-Mon-Wed-Fri OR Sun-Tue-Thrs)</label></br>
        <input type="text" name="shift" id="shift" class="form-control"></br>
        <div class=" alert-danger">
        @error('shift')
            {{$message}}<br>
        @enderror </div>

        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" class="form-control"></br>
        <div class=" alert-danger">
        @error('salary')
            {{$message}}<br>
        @enderror </div>

        <label>Bonus</label></br>
        <input type="text" name="bonus" id="bonus" class="form-control"></br>
        <div class=" alert-danger">
        @error('bonus')
            {{$message}}<br>
        @enderror </div>

        <label>Status(1 or 0? 1=Active , 0=deactive)</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <div class=" alert-danger">
        @error('status')
            {{$message}}<br>
        @enderror </div>

        <label>Vehicle</label></br>
        <input type="text" name="vehicle" id="vehicle" class="form-control"></br>
        <div class=" alert-danger">
        @error('vehicle')
            {{$message}}<br>
        @enderror </div>

       
         
         <!-- Bootstrap provides different styles of buttons -->

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href = '/viewSupplier'><input type="submit" value="Cancle" class="btn btn-danger"></a>
  </div>
</div>
@endsection