
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('student.create')); ?>"> Create New Student</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->email); ?></td>
            <td><?php echo e($student->address); ?></td>
            <td>
                <form action="<?php echo e(route('student.destroy',$student->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('student.show',$student->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('student.edit',$student->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $students->links(); ?>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/student/index.blade.php ENDPATH**/ ?>