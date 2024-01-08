<?php $__env->startSection('title','Hồ Sơ Của Tôi - Movie'); ?>
<?php $__env->startSection('content'); ?>
<br>
<div class="tittle-head">
    <h4 class="latest-text">Ví của tôi</h4>
    <div class="container">
        <div class="agileits-single-top">
            <ol class="breadcrumb">
                <li><a href="">Trang Chủ</a></li>
                <li class="active">Ví Của Tôi</li>
            </ol>
        </div>
    </div>
</div>
<div class="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                VÍ CỦA TÔI
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="w3_login_module">
                        <div class="module form-module">
                            <div class="toggle"><i class="fad fa-wallet" title="Ví của tôi"></i>
                            </div>
                            <div class="form">
                                <h1 class="text-center">
                                    <?php $__currentLoopData = $wallet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->user_id==$user->id): ?>
                                    <?php echo e(number_format(round($item->money,3)).' VNĐ'); ?>

                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </h1>
                                <br><br>
                                <form action="<?php echo e(route('user.getChargeWallet')); ?>">
                                    <input type="submit" value="Nạp tiền vào ví"><br>
                                </form>
                            </div>
                        </div><br><br>
                        <div style="margin:20px">
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
            </section>
        </div>
    </div>
</div>
<div>


</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\webxemphim\resources\views/user/wallet.blade.php ENDPATH**/ ?>