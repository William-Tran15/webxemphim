<?php $__env->startSection('title','Sửa Năm Sản Xuất - MinMovie'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <form method="POST" action="<?php echo e(route('admin.year.edit',$year->id)); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <h4 class="text-center">SỬA NĂM SẢN XUẤT</h4>
            <input type="text" name="txtYear" class="form-control" placeholder="Nhập năm sản xuất"
                value="<?php echo e($year->year); ?>" required oninvalid="this.setCustomValidity('Có phải bạn có quên mất gì đó?')" oninput="this.setCustomValidity('')">
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Sửa năm sản xuất</button>
    </form><br>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        - <?php echo e($error); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\webxemphim\resources\views/admin/year/edit.blade.php ENDPATH**/ ?>