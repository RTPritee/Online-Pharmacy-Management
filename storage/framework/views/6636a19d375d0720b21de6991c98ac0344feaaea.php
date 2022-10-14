
<?php $__env->startSection('content'); ?>
<?php if(Session::has('success')): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert"><?php echo e(Session::get('success')); ?>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
		 </div>
<?php endif; ?>
<title>Medicine List</title>
    <div class = "container">
        <div class = "row">
        <div class = "col-12" style = "padding:20px;">
        <div class="card-body" >
            <a href="<?php echo e(url('/createMedicine')); ?>" class="btn btn-success btn-sm" title="Add New Contact">
                     <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
                <form action="search" class ="col-4" style ="float:right">
                    <div class ="form-group" style ="float:left">
                      <input type="search" name="search" id ="" class ="form-control" placeholder ="Search by name..">
                    </div> 
                    &nbsp;&nbsp;&nbsp;<button class="btn btn-primary">Search</button>
                </form>
        </div>
        <div class="card-header"> Medicine List</div>
    </div>
            <div class="table-responsive">
        <table class="table">
                <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price(tk)</th> 
                <th>Discount(%)</th> 
                <th>Photo</th> 
                <th>Action</th> 
                </thead>
                </thead>
                <tbody>
                <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->quantity); ?></td>
                <td><?php echo e($item->price); ?></td>
                <td><?php echo e($item->discount); ?></td>
                <td>
                <img src="<?php echo e(asset($item->photo)); ?>" width= '50' height='50' class="img img-responsive" />
                </td>
                <td>
                    
                <a href="<?php echo e(route('editMedicine',['id'=>$item->medicineId])); ?>"> <button class = "btn btn-sm btn-info">Edit</button></a>
                <a href ="<?php echo e(route('delete',['id'=>$item->medicineId])); ?>">
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                <!--<button class = "btn btn-sm btn-danger">Delete</button> -->
                </a>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
    </table>
    <div>
    <?php echo e($medicines->links()); ?>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.viewMedicineLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdvWebTec\projectOnlineFarmacy\resources\views/medicine/viewMedicine.blade.php ENDPATH**/ ?>