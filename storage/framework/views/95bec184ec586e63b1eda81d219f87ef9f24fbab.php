<?php $__env->startSection('title','Danh Sách Tủ Phim - MinMovie'); ?>
<?php $__env->startSection('content'); ?>
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-center">QUẢN LÝ TỦ PHIM</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="m-0 font-weight-bold text-primary">
                    DANH SÁCH TỦ PHIM
                </div>
            </div>
            <?php if(session('thongbao')): ?>
            <div class="alert alert-<?php echo e(session('thongbao_level')); ?>" style="border-radius:0px;">
                - <?php echo session('thongbao'); ?>

            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped text-center" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width:3em;">STT</th>
                                <th>Phim</th>
                                <th>Người dùng</th>
                                <th style="width:3em;">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            ?>
                            <?php $__currentLoopData = $cabinet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><a class="text-decoration-none" href="<?php echo e(route('user.movie',$item->movie_id)); ?>"
                                        title="Mở trong tab mới" target="_blank"><b>
                                            <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item2->id==$item->movie_id): ?>
                                            <?php echo e($item2->vie_name.' ('.$item2->eng_name.')'); ?>

                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </b></a></td>
                                <td>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item2->id==$item->user_id): ?>
                                    <a class="text-decoration-none" href="<?php echo e(route('admin.user.edit',$item2->id)); ?>"
                                        title="Mở người dùng trong tab mới" target="_blank"><b>
                                            <?php echo e($item2->name); ?>

                                        </b></a>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td><a href=" <?php echo e(route('admin.cabinet.del',$item->id)); ?> " data-toggle="confirm"
                                        role="button"><i class="far fa-trash-alt fa-lg text-danger"></i></a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webxemphim\resources\views/admin/cabinet/list.blade.php ENDPATH**/ ?>