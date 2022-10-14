<html>
 <head>
  <title>Login </title>
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
   <h3 align="center">Login</h3><br />

<form  method = "post" action="">

         @if(Session::has('status'))
         <div class ="alert alert-danger">{{Session::get('status')}}</div>
         @endif
{{@csrf_field()}}

<table border = "2">
<div class="form-group">
<label>Enter Email:</label>

<input class="form-control" type="text" id="email" name="email" value ="{{old('email')}}">
</div>
<div class="alert-danger">
@error('email')
            {{$message}}<br>
        @enderror
</div>
<div class="form-group">
<label>Enter Password: </label>

<input class="form-control" type="password" id="password" name="password" value ="{{old('password')}}">
</div>
<div class=" alert-danger">
@error('password')
            {{$message}}<br>
        @enderror
</div>

<br>
<!--<input type="checkbox" style="border: outset; border-color:#3CB371; float:middle" name="check" value="Remember Me">&nbsp;<b>Remember Me</b><br><br>-->
<div class="form-group">
<input type="submit" name="login" class="btn btn-primary" value="Login" />
</div>
<center><p><b>New user?<a href="/register">Register here</a></p></center>
   </form>
  </div>
 </body>
</html>


