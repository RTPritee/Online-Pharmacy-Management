
<?php $__env->startSection('content'); ?>
<title>Search customer</title>
    <div class = "container"><br>
        <h5> Searching Result... </h5>
        <div class = "row">
            <div class = "col-12" style = "padding:20px;">
            <div class="card-header">
            <form action="" class ="col-1.5" style ="float:right">
                    <button class="btn btn-warning">Block List</button>
                </form>
                    <a href = "<?php echo e(route('viewCustomers')); ?>">
                    <button class="btn btn-primary">Refresh</button>
                    </a>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined At </th>
                            <th>Action</th> 
                            </thead>
                            </thead>
                            <tbody>
    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($cs->name); ?></td>
            <td><?php echo e($cs->email); ?></td>
            <td><?php echo e($cs->created_at); ?></td>
            <td>
            <!--<form method="POST" action="<?php echo e(url('/viewCustomers' . '/' . $cs->customersId)); ?>" accept-charset="UTF-8" style="display:inline">
            
            <?php echo e(csrf_field()); ?>

            
            </form>-->
            <a href ="<?php echo e(route('destroy',['id'=> $cs->customersId])); ?>">
            <button type="submit" class="btn btn-danger btn-sm" title="Block customer?" onclick="return confirm(&quot;Confirm block?It will be like delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Block</button>
            <!--<button class = "btn btn-sm btn-danger">Block</button> -->
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<div>

</div>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/customers/searchCustomer.blade.php ENDPATH**/ ?>