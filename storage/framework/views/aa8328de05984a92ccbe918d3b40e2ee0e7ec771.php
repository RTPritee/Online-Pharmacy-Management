
<?php $__env->startSection('content'); ?>

<div class="card" style="margin: 20px;">
  <div class="card-header">Add New Supplier</div>
  <div class="card-body">
       
      <form action="" method="post" enctype="multipart/form-data">
        <?php echo e(@csrf_field()); ?>

        
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
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

        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Date of join (yy-mn-dy)</label></br>
        <input type="text" name="dateOfJoin" id="dateOfJoin" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['dateOfJoin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Shift (Sat-Mon-Wed-Fri OR Sun-Tue-Thrs)</label></br>
        <input type="text" name="shift" id="shift" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['shift'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Bonus</label></br>
        <input type="text" name="bonus" id="bonus" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['bonus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Status(1 or 0? 1=Active , 0=deactive)</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Vehicle</label></br>
        <input type="text" name="vehicle" id="vehicle" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['vehicle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

       
         
         <!-- Bootstrap provides different styles of buttons -->

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href = '/viewSupplier'><input type="submit" value="Cancle" class="btn btn-danger"></a>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/suppliers/addSupplier.blade.php ENDPATH**/ ?>