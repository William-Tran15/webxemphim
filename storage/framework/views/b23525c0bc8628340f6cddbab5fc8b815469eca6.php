<?php $__env->startSection('title','Danh Sách Phim - MinMovies'); ?>
<?php $__env->startSection('content'); ?>
<!-- /w3l-medile-movies-grids -->
<div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">
        <!-- /movie-browse-agile -->
        <div class="movie-browse-agile">
            <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <h4 class="latest-text">
                        lịch sử giao dịch
                    </h4>
                    <div class="container">
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo e(route('user.index')); ?>">Trang Chủ</a></li>
                                <li class="active">Lịch Sử Giao Dịch</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-center">LỊCH SỬ MUA PHIM</h3><br>
                            <table class="table table-striped table-bordered text-center table-hover" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Phim</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Thời gian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                    ?>
                                    <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->movie_id==$item2->id): ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo e($i++); ?>

                                        </th>
                                        <td><?php echo e($item2->vie_name); ?></td>
                                        <td><?php echo e(number_format(round($item2->price)).'đ'); ?></td>
                                        <td>
                                            <?php
                                            \Carbon\Carbon::setLocale('vi');
                                            $commentTime=$item->created_at;
                                            $commentTime=\Carbon\Carbon::parse($commentTime);
                                            $currentTime= \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
                                            echo $commentTime->diffForHumans($currentTime);
                                            ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="blog-pagenat-wthree">
                                <ul>
                                    <?php echo e($payment->links()); ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-center">LỊCH SỬ NẠP TIỀN</h3><br>
                            <table class="table table-striped table-bordered text-center table-hover">
                                <thead class="text-center">
                                    <tr class="text-center pull-center">
                                        <th scope="col">STT</th>
                                        <th scope="col">Số hoá đơn</th>
                                        <th scope="col">Số tiền</th>
                                        <th scope="col">Thời gian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                    ?>
                                    <?php $__currentLoopData = $walletCharge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo e($i++); ?>

                                        </th>
                                        <td><?php echo e($item->orderId); ?></td>
                                        <td><?php echo e(number_format(round($item->money)).'đ'); ?></td>
                                        <td>
                                            <?php
                                            \Carbon\Carbon::setLocale('vi');
                                            $commentTime=$item->created_at;
                                            $commentTime=\Carbon\Carbon::parse($commentTime);
                                            $currentTime= \Carbon\Carbon::now('Asia/Ho_Chi_Minh');
                                            echo $commentTime->diffForHumans($currentTime);
                                            ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="blog-pagenat-wthree">
                                <ul>
                                    <?php echo e($walletCharge->links()); ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //movie-browse-agile -->
        <!--body wrapper start-->
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webxemphim\resources\views/user/history.blade.php ENDPATH**/ ?>