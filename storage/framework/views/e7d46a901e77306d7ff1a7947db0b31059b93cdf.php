
<?php $__env->startSection('content'); ?>
<?php if(Session::has('status')): ?>
         <div class ="alert alert-danger"><?php echo e(Session::get('status')); ?></div>
         <?php endif; ?>
<h1> Hello Customer</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/commonFeature/customersDashboard.blade.php ENDPATH**/ ?>