
<?php $__env->startSection('content'); ?>
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>GENDER</th>
          <th>Address</th>
           
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $subcriber; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($subcriber->lastname); ?></td>
              <td><?php echo e($subcriber->firstname); ?></td>
              <td><?php echo e($subcriber->middlename); ?></td>
              <td><?php echo e($subcriber->gender); ?></td>
              <td><?php echo e($subcriber->address); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Pbook\resources\views/posts/index.blade.php ENDPATH**/ ?>