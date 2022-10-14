<html>
 <head>
  <title>Registration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <br><br>
  <div class="container box">
   <h3 align="center">Register</h3><br />
    <form method="post" action="">
        @if(Session::has('msg'))
         <div class="alert alert-success">{{Session::get('msg')}}</div>
         @endif
         @if(Session::has('msgFail'))
         <div class ="alert alert-danger">{{Session::get('msgFail')}}</div>
         @endif
        {{@csrf_field()}}
        
        <div class="form-group">
        <label>Name:</label>
        <input class="form-control" type="text" name="name" placeholder="Name" value="{{old('name')}}">
        </div>
        <div class=" alert-danger">
        @error('name')
            {{$message}}<br>
        @enderror </div>
        <div class="form-group">
        <label>Email:</label> 
        <input class="form-control" type="text" name="email" placeholder="Email" value="{{old('email')}}">
        </div>
        <div class=" alert-danger">
        @error('email')
            {{$message}} <br>
        @enderror </div>
        <div class="form-group">
        <label>Password: </label>  
        <input class="form-control" type="password" name="password" >
        </div>
        <div class=" alert-danger">
        @error('password')
            {{$message}}<br>
        @enderror </div>
        <div class="form-group">
        <label>Confirm Password: </label>
        <input class="form-control" type="password" name="conf_password">
        </div>
        <div class=" alert-danger">
        @error('conf_password')
            {{$message}}<br>
        @enderror </div>
        <div class="form-group">
        <label>Type: </label>
            <input class="form-control" type="text" name="type" placeholder ="Type" value="{{old('type')}}">
        </div>
        <div class="form-group">
        <label>Gender: </label>
            <input class="form-control" type="text" name="gender" placeholder ="Gender" value="{{old('gender')}}">
        </div>
        <div class=" alert-danger">
            @error('gender')
            {{$message}}<br>
        @enderror </div>
    
    <div class="form-group">
    <input type="submit" name="Create" class="btn btn-primary" value="Create" />
    <center><p><b>Already a user?<a href="/login">Login</a></p></center>
    </form>
</center>