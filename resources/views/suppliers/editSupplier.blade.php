@extends('layouts.viewMedicineLayout')
@section('content')

<div class="card" style="margin: 20px;">
  <div class="card-header">Edit Supplier</div>
  <div class="card-body">
       
      <form action="{{ url('updateSupplier/'.$suppliers->supplierId) }}" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        @method('PUT')
        <label>Name</label></br>
        <input type="text" name="name" value= "{{ $suppliers->name }}" id="name" class="form-control"></br>
        
        

        <label>Email</label></br>
        <input type="text" name="email" value= "{{ $suppliers->email }}" id="email" class="form-control"></br>
        
       

        <label>Date of join (yy-mn-dy)</label></br>
        <input type="text" name="dateOfJoin" value= "{{ $suppliers->dateOfJoin }}" id="dateOfJoin" class="form-control"></br>
        
       

        <label>Shift (Sat-Mon-Wed-Fri OR Sun-Tue-Thrs)</label></br>
        <input type="text" name="shift" value= "{{ $suppliers->shift }}" id="shift" class="form-control"></br>
        
       

        <label>Salary</label></br>
        <input type="text" name="salary" value= "{{ $suppliers->salary }}" id="salary" class="form-control"></br>
        
       

        <label>Bonus</label></br>
        <input type="text" name="bonus" value= "{{ $suppliers->bonus }}" id="bonus" class="form-control"></br>
        
       

        <label>Status(1 or 0? 1=Active , 0=deactive)</label></br>
        <input type="text" name="status" value= "{{ $suppliers->status }}" id="status" class="form-control"></br>
        
      

        <label>Vehicle</label></br>
        <input type="text" name="vehicle" value= "{{ $suppliers->vehicle }}" id="vehicle" class="form-control"></br>
        
   
         <!-- Bootstrap provides different styles of buttons -->

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href = '/viewSupplier'><input type="submit" value="Cancle" class="btn btn-danger"></a>
  </div>
</div>
@endsection