
<?php $__env->startSection('content'); ?>

<div class="card" style="margin: 20px;">
  <div class="card-header">Edit Supplier</div>
  <div class="card-body">
       
      <form action="<?php echo e(url('updateSupplier/'.$suppliers->supplierId)); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(@csrf_field()); ?>

        <?php echo method_field('PUT'); ?>
        <label>Name</label></br>
        <input type="text" name="name" value= "<?php echo e($suppliers->name); ?>" id="name" class="form-control"></br>
        
        

        <label>Email</label></br>
        <input type="text" name="email" value= "<?php echo e($suppliers->email); ?>" id="email" class="form-control"></br>
        
       

        <label>Date of join (yy-mn-dy)</label></br>
        <input type="text" name="dateOfJoin" value= "<?php echo e($suppliers->dateOfJoin); ?>" id="dateOfJoin" class="form-control"></br>
        
       

        <label>Shift (Sat-Mon-Wed-Fri OR Sun-Tue-Thrs)</label></br>
        <input type="text" name="shift" value= "<?php echo e($suppliers->shift); ?>" id="shift" class="form-control"></br>
        
       

        <label>Salary</label></br>
        <input type="text" name="salary" value= "<?php echo e($suppliers->salary); ?>" id="salary" class="form-control"></br>
        
       

        <label>Bonus</label></br>
        <input type="text" name="bonus" value= "<?php echo e($suppliers->bonus); ?>" id="bonus" class="form-control"></br>
        
       

        <label>Status(1 or 0? 1=Active , 0=deactive)</label></br>
        <input type="text" name="status" value= "<?php echo e($suppliers->status); ?>" id="status" class="form-control"></br>
        
      

        <label>Vehicle</label></br>
        <input type="text" name="vehicle" value= "<?php echo e($suppliers->vehicle); ?>" id="vehicle" class="form-control"></br>
        
   
         <!-- Bootstrap provides different styles of buttons -->

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href = '/viewSupplier'><input type="submit" value="Cancle" class="btn btn-danger"></a>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/suppliers/editSupplier.blade.php ENDPATH**/ ?>