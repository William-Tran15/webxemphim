<?php $__env->startSection('title','Danh Sách Phim - MinMovie'); ?>
<?php $__env->startSection('content'); ?>
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-center">QUẢN LÝ PHIM</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="m-0 font-weight-bold text-primary">
                    DANH SÁCH PHIM
                    <a href="<?php echo e(route('admin.movie.create')); ?>" class="btn btn-success float-right">Thêm phim mới</a>
                </div>
            </div>
            <?php if(session('thongbao')): ?>
            <div class="alert alert-<?php echo e(session('thongbao_level')); ?>" style="border-radius:0px;">
                - <?php echo e(session('thongbao')); ?>

            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped text-center" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width:3em;">STT</th>
                                <th>Tên tiếng Việt</th>
                                <th>Tên tiếng Anh</th>
                                <th>Thể loại</th>
                                <th>Quốc gia</th>
                                <th>NSX</th>
                                <th>Poster</th>
                                <th style="width:3em;">Sửa</th>
                                <th style="width:3em;">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            ?>
                            <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($item->vie_name); ?></td>
                                <td><?php echo e($item->eng_name); ?></td>
                                <td>
                                    <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->cate_id==$item_cate->id): ?>
                                    <?php echo e($item_cate->cate_name); ?>

                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $nation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_nation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->nation_id==$item_nation->id): ?>
                                    <?php echo e($item_nation->nation_name); ?>

                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $year; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->year_id==$item_year->id): ?>
                                    <?php echo e($item_year->year); ?>

                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <div class="imgMovieList">
                                        <img src="<?php echo e('storage/app/poster/'.$item->poster_image); ?>" alt="">
                                    </div>
                                </td>
                                <td><a href="<?php echo e(route('admin.movie.edit',$item->id)); ?>"><i
                                            class="far fa-edit fa-lg"></i></a></td>
                                <td><a href="<?php echo e(route('admin.movie.del',$item->id)); ?>" data-toggle="confirm"
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\webxemphim\resources\views/admin/movie/list.blade.php ENDPATH**/ ?>