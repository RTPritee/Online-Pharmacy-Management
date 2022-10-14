
<?php $__env->startSection('content'); ?>
<?php if(Session::has('status')): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert"><?php echo e(Session::get('status')); ?>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
		 </div>
<?php endif; ?>
<title>Suppliers List</title>
    <div class = "container">
        <div class = "row">
        <div class = "col-12" style = "padding:20px;">
        <div class="card-body" >
            <a href="<?php echo e(url('addSupplier')); ?>" class="btn btn-success btn-sm" title="Add New">
                     <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <a href="<?php echo e(url('infoSupplier')); ?>">
                <button class = "btn btn-sm btn-warning">Suppliers Info</button>
                </a>
                <form action="searchSupplier" class ="col-4" style ="float:right">
                    <div class ="form-group" style ="float:left">
                      <input type="search" name="searchSupplier" id ="" class ="form-control" placeholder ="Search by name..">
                    </div> 
                    &nbsp;&nbsp;&nbsp;<button class="btn btn-primary">Search</button>
                </form>
        </div>
        <div class="card-header"> Supplier List</div>
    </div>
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
<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/suppliers/viewSupplier.blade.php ENDPATH**/ ?>