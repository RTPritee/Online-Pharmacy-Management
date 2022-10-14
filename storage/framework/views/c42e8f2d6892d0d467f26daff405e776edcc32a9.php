
<?php $__env->startSection('content'); ?>
<title>Search Suppliers</title>
    <div class = "container"><br>
        <h5> Searching Result... </h5>
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
                <th>Name</th>
                <th>Email</th>
                <th>Date of Joining</th> 
                <th>Shift</th> 
                <th>Salary</th> 
                <th>Bonus</th> 
                <th>Status</th> 
                <th>Using Vehicle</th> 
                <th>Action</th> 
                </thead>
                </thead>
                <tbody>
                 <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($sup->name); ?></td>
                <td><?php echo e($sup->email); ?></td>
                <td><?php echo e($sup->dateOfJoin); ?></td>
                <td><?php echo e($sup->shift); ?></td>
                <td><?php echo e($sup->salary); ?></td>
                <td><?php echo e($sup->bonus); ?></td>
                <td>
                <?php if($sup->status == "1"): ?>
                <i class = "badge badge-success">Active</i>
                <?php else: ?>
                <i class = "badge badge-danger">dective</i>
                <?php endif; ?>
                </td>
                <td><?php echo e($sup->vehicle); ?></td>
                <td>
                    <a href ="<?php echo e(url('editSupplier/'.$sup->supplierId)); ?>" >   
                        <button class = "btn btn-sm btn-info">Edit</button>
                    </a>
                <!--<button class = "btn btn-sm btn-warning">View</button> -->
                <a href = "<?php echo e(url('deleteSupplier/'.$sup->supplierId)); ?>">
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                </a>
                <!--<button class = "btn btn-sm btn-danger">Delete</button> -->
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/suppliers/searchSupplier.blade.php ENDPATH**/ ?>