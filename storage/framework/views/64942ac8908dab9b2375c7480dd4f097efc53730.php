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

         <?php if(Session::has('status')): ?>
         <div class ="alert alert-danger"><?php echo e(Session::get('status')); ?></div>
         <?php endif; ?>
<?php echo e(@csrf_field()); ?>


<table border = "2">
<div class="form-group">
<label>Enter Email:</label>

<input class="form-control" type="text" id="email" name="email" value ="<?php echo e(old('email')); ?>">
</div>
<div class="alert-danger">
<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="form-group">
<label>Enter Password: </label>

<input class="form-control" type="password" id="password" name="password" value ="<?php echo e(old('password')); ?>">
</div>
<div class=" alert-danger">
<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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


<?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/commonFeature/login.blade.php ENDPATH**/ ?>