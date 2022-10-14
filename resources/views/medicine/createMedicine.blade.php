@extends('layouts.viewMedicineLayout')
@section('content')

<div class="card" style="margin: 20px;">
  <div class="card-header">Add New Medicine</div>
  <div class="card-body">
       
      <form action="" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <div class=" alert-danger">
        @error('name')
            {{$message}}<br>
        @enderror </div>

        <label>Quantity</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control"></br>
        <div class=" alert-danger">
        @error('quantity')
            {{$message}}<br>
        @enderror </div>

        <label>Price(tk)</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <div class=" alert-danger">
        @error('price')
            {{$message}}<br>
        @enderror </div>

        <label>Discount(%)</label></br>
        <input type="text" name="discount" id="discount" class="form-control"></br>
        <div class=" alert-danger">
        @error('discount')
            {{$message}}<br>
        @enderror </div>

        <label>Photo</label></br>
        <input class="form-control" name="photo" type="file" id="photo">
         <br>
         
         <!-- Bootstrap provides different styles of buttons -->

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href = '/viewMedicine'><input type="submit" value="Cancle" class="btn btn-danger"></a>
  </div>
</div>
@endsection