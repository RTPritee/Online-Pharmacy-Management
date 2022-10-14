@extends('layouts.viewMedicineLayout')
@section('content')
@if(Session::has('status'))
         <div class ="alert alert-danger">{{Session::get('status')}}</div>
         @endif
<h1> Hello Customer</h1>
@endsection
