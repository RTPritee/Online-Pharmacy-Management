@extends('layouts.viewMedicineLayout')
@section('content')
<div class="card" style="margin: 20px;">
  <div class="card-header">Edit</div>
    <div class="card-body">
        <form action="{{ url('update/'.$medicines->medicineId) }}" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        @method('PUT')
            <div class="row">
                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-control">Name</label>
                        <div class="col-sm-10">
                         <input  type="text" name="name" id="name" class="form-control" value="{{$medicines->name}}"> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quantity" class="col-sm-2 col-form-control"> Quantity </label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" id="quantity" class="form-control" value="{{$medicines->quantity}}" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-control">Price(tk)</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" id="price" class="form-control" value="{{ $medicines->price }}"/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="discount" class="col-sm-2 col-form-control">Discount(%)</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                id="discount"
                                name="discount"
                                class="form-control"
                                value="{{ $medicines->discount }}"
                            >
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="discount" class="col-sm-2 col-form-control">Photo</label>
                        <div class="col-sm-10">
                        <img src="{{ asset($medicines->photo) }}" width= '50' height='50' class="img img-responsive">
                            <input
                                type="file"
                                id="photo"
                                name = "photo"
                                class="form-control">
                            
                        </div>
                    </div>
                    

                        <div class="col-sm-10">
                            <button
                                type="submit"
                               
                                id="Update"
                                class="btn btn-primary"
                            >
                                Update
                            </button>
                        </div>
            </div>
        </form>
    <a href = '/viewMedicine'><input type="submit" value="Cancle" class="btn btn-danger"></a>
    </div>
</div>
@endsection