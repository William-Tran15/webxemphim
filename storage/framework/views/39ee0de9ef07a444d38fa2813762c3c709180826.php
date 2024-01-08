<?php $__env->startSection('title','Thống Kê - MinMovie'); ?>
<?php $__env->startSection('content'); ?>
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-center">THỐNG KÊ DOANH THU</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="m-0 font-weight-bold text-primary">
                    DANH SÁCH PHIM ĐÃ BÁN
                    <h4 class="float-right">Tổng doanh thu:
                        <?php
                            $total=0;
                        ?>
                        <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->movie_id==$item2->id): ?>
                                    <?php
                                        $total+=$item2->price;
                                    ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <b><?php echo e(number_format($total).' VNĐ'); ?></b>
                    </h4>
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
                                <th style="width:1em;">STT</th>
                                <th>Phim</th>
                                <th>Số lần mua</th>
                                <th>Giá</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            ?>
                            <?php $__currentLoopData = $payment2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->movie_id==$item3->id): ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><a class="text-decoration-none" href="<?php echo e(route('user.movie',$item->movie_id)); ?>"
                                        title="Mở trong tab mới" target="_blank"><b>
                                            <?php echo e($item3->vie_name); ?>

                                        </b></a></td>
                                <td>
                                    <?php
                                        $n=0;
                                    ?>
                                    <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->movie_id==$item4->movie_id): ?>
                                            <?php
                                                $n++;
                                            ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($n); ?>

                                </td>
                                <td>
                                    <?php echo e(number_format(round($item3->price)).'đ'); ?>

                                </td>
                                <td>
                                    <?php echo e(number_format(round($item3->price)*$n).'đ'); ?>

                                </td>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webxemphim\resources\views/admin/statistic/list.blade.php ENDPATH**/ ?>