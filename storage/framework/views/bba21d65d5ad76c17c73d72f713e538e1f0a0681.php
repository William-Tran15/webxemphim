<?php $__env->startSection('title','Sửa Thể Loại - MinMovie'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid w-50 text-center">
    <form method="POST" action="<?php echo e(route('admin.cate.edit',$cate->id)); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <h4 class="text-center">SỬA THỂ LOẠI</h4>
            <input type="text" name="txtCateName" class="form-control" required oninvalid="this.setCustomValidity('Có phải bạn có quên mất gì đó?')" oninput="this.setCustomValidity('')" placeholder="Đặt tên cho thể loại"
                value="<?php echo e($cate->cate_name); ?> ">
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Sửa thể loại</button>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webxemphim\resources\views/admin/cate/edit.blade.php ENDPATH**/ ?>