<?php $__env->startSection('title','Thêm Người Dùng - Movie'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid w-50 border p-3 rounded-lg">
    <form method="POST" action="<?php echo e(route('admin.user.create')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <h4 class="text-center">THÊM NGƯỜI DÙNG</h4>
            <div class="row p-2">
                <div class="col-md-8 border rounded p-2">
                    <div>
                        <h5>Thông tin</h5>
                    <input type="text" name="txtName" class="mb-3 form-control" placeholder="Họ và tên" required
                        oninvalid="this.setCustomValidity('Có phải bạn có quên mất gì đó?')"
                        oninput="this.setCustomValidity('')">
                    <input type="text" name="txtUsername" class="mb-3 form-control" placeholder="Tài khoản" required
                        oninvalid="this.setCustomValidity('Có phải bạn có quên mất gì đó?')"
                        oninput="this.setCustomValidity('')">
                    <input type="password" name="txtPassword" class="mb-3 form-control" placeholder="Mật khẩu" required
                        oninvalid="this.setCustomValidity('Có phải bạn có quên mất gì đó?')"
                        oninput="this.setCustomValidity('')">
                    <input type="email" name="txtEmail" class="mb-3 form-control" placeholder="Email" required
                        oninvalid="this.setCustomValidity('Có phải bạn có quên mất gì đó?')"
                        oninput="this.setCustomValidity('')">
                    </div>
                </div>
                <div class="col-md-4 border rounded p-2">
                    <h5>Cấp quyền</h5>
                    <input class="magic-radio" type="radio" checked name="rdoLevel" id="1" value="0">
                    <label for="1">
                        Người dùng
                    </label>
                    <input class="magic-radio" type="radio" name="rdoLevel" id="2" value="1">
                    <label for="2">
                        Quản trị viên
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Thêm người dùng</button>
    </form>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger pt-3">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        - <?php echo e($error); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\webxemphim\resources\views/admin/user/add.blade.php ENDPATH**/ ?>