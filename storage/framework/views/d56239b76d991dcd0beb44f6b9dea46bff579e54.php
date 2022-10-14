
<?php $__env->startSection('content'); ?>

<div class="card" style="margin: 20px;">
  <div class="card-header">Add New Medicine</div>
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

        <label>Quantity</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Price(tk)</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Discount(%)</label></br>
        <input type="text" name="discount" id="discount" class="form-control"></br>
        <div class=" alert-danger">
        <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?><br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>

        <label>Photo</label></br>
        <input class="form-control" name="photo" type="file" id="photo">
         <br>
         
         <!-- Bootstrap provides different styles of buttons -->

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href = '/viewMedicine'><input type="submit" value="Cancle" class="btn btn-danger"></a>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/medicine/createMedicine.blade.php ENDPATH**/ ?>