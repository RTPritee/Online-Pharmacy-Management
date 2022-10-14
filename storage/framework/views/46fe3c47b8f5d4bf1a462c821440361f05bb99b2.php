
<?php $__env->startSection('content'); ?>

<div class="card" style="margin: 20px;">
  <div class="card-header">Edit Your Profile Information</div>
  <div class="card-body">
       
      <form action="<?php echo e(url('updateInfo/'.$infos->infoId)); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(@csrf_field()); ?>

        <?php echo method_field('PUT'); ?>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value= "<?php echo e($infos->name); ?>" class="form-control"></br>
        
        

        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value= "<?php echo e($infos->gender); ?>" class="form-control"></br>
        
        <label>Blood Group</label></br>
        <input type="text" name="bloodGroup" id="bloodGroup" value= "<?php echo e($infos->bloodGroup); ?>" class="form-control"></br>
        

        <label>Date of Birth (yy-mn-dy)</label></br>
        <input type="text" name="dob" id="dob" value= "<?php echo e($infos->dob); ?>" class="form-control"></br>
        
      
        <label>Address</label></br>
        <input type="text" name="address" id="address" value= "<?php echo e($infos->address); ?>" class="form-control"></br>
        
       
         <!-- Bootstrap provides different styles of buttons -->

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href = '/adminDashboard'><input type="submit" value="Cancle" class="btn btn-danger"></a>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/commonFeature/editInfo.blade.php ENDPATH**/ ?>