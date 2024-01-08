<?php $__env->startSection('title','Thêm Quốc Gia - MinMovie'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <form method="POST" action="<?php echo e(route('admin.nation.create')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <h4 class="text-center">THÊM QUỐC GIA</h4>
            <input type="text" name="txtNationName" class="form-control" placeholder="Nhập tên cho quốc gia" required oninvalid="this.setCustomValidity('Có phải bạn có quên mất gì đó?')" oninput="this.setCustomValidity('')">
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Thêm quốc gia</button>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\webxemphim\resources\views/admin/nation/add.blade.php ENDPATH**/ ?>