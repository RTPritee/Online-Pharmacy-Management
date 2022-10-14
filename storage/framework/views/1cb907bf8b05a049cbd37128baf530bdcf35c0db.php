
<?php $__env->startSection('content'); ?>
<title>Supplier Info</title>
    <div class = "container"><br>
        <h5> Supplier Info... </h5>
        <div class = "row">
            <div class = "col-12" style = "padding:20px;">
            <div class="card-header">
                    <a href = "<?php echo e(route('viewSupplier')); ?>">
                    <button class="btn btn-primary">Refresh</button>
                    </a>
                    <div class="table-responsive">
        <table class="table">
                <thead>
                <tr>
                <th>#</th>
                <th>Address</th> 
                </thead>
                </thead>
                <tbody>
                 <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infoSup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($loop->iteration); ?></td>
                 <td><?php echo e($infoSup->address); ?></td>
                 </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/suppliers/infoSupplier.blade.php ENDPATH**/ ?>