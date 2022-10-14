
<?php $__env->startSection('content'); ?>
this is admin.

<style>
        .container{
            padding:0.5%;
        }
    </style>
<div class="container">
<h2 class="alert alert-dark text-center " style="color:red; text:bold"><span class="fab fa-laravel"> LARAVEL 6.0 ADVANCE CRUD APPLICATION WITH IMAGE UPLOAD</span></h2>

</div>

<div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Admin profile <span class="fa fa"> <?php echo e($data->name); ?></span></legend>



<div class="jumbotron text-center">
 <div align="center">
 <img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="rounded-circle" width='100' height="100" />
<div align="center">
<h3><span > Name :</span> <sup><?php echo e($data->name); ?> </sup> </h3>
<h3><span>Email :  </span>  <sup><?php echo e($data->email); ?></sup> </h3>
<h3>Gender     : <sup><?php echo e($data->gender); ?></sup>  </h3>
<h3>Type     : <sup><?php echo e($data->type); ?></sup></h3>

</div>
<a href="<?php echo e(route('employee.index')); ?>" class="btn bg-dark" style="color:white">Cancel</a>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views//commonFeature/adminDashboard.blade.php ENDPATH**/ ?>