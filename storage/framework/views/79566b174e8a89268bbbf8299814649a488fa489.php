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
        <?php if(Session::has('msg')): ?>
         <div class="alert alert-success"><?php echo e(Session::get('msg')); ?></div>
         <?php endif; ?>
         <?php if(Session::has('msgFail')): ?>
         <div class ="alert alert-danger"><?php echo e(Session::get('msgFail')); ?></div>
         <?php endif; ?>
        <?php echo e(@csrf_field()); ?>

        
        <div class="form-group">
        <label>Name:</label>
        <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>">
        </div>
        <div class=" alert-danger">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>
        <div class="form-group">
        <label>Email:</label> 
        <input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
        </div>
        <div class=" alert-danger">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?> <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>
        <div class="form-group">
        <label>Password: </label>  
        <input class="form-control" type="password" name="password" >
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
unset($__errorArgs, $__bag); ?> </div>
        <div class="form-group">
        <label>Confirm Password: </label>
        <input class="form-control" type="password" name="conf_password">
        </div>
        <div class=" alert-danger">
        <?php $__errorArgs = ['conf_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>
        <div class="form-group">
        <label>Type: </label>
            <input class="form-control" type="text" name="type" placeholder ="Type" value="<?php echo e(old('type')); ?>">
        </div>
        <div class="form-group">
        <label>Gender: </label>
            <input class="form-control" type="text" name="gender" placeholder ="Gender" value="<?php echo e(old('gender')); ?>">
        </div>
        <div class=" alert-danger">
            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>
    
    <div class="form-group">
    <input type="submit" name="Create" class="btn btn-primary" value="Create" />
    <center><p><b>Already a user?<a href="/login">Login</a></p></center>
    </form>
</center><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/commonFeature/register.blade.php ENDPATH**/ ?>