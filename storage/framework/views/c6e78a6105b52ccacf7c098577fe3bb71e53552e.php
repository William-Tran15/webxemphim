<?php $__env->startSection('title','Thống Kê Nạp Tiền - MinMovie'); ?>
<?php $__env->startSection('content'); ?>
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-center">THỐNG KÊ NẠP TIỀN</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="m-0 font-weight-bold text-primary">
                    DANH SÁCH NGƯỜI DÙNG ĐÃ NẠP TIỀN
                    <h4 class="float-right">Tổng tiền đã nạp:
                        <?php
                        $total=0;
                        ?>
                        <?php $__currentLoopData = $charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->user_id==$item2->id): ?>
                        <?php
                        $total+=$item->money;
                        ?>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <b><?php echo e(number_format($total).' VNĐ'); ?></b>
                    </h4>
                    <br>


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
                                <th>Người dùng</th>
                                <th>Số lần nạp</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            ?>
                            <?php if(!$charge->isEmpty()): ?>
                            <?php $__currentLoopData = $charge2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->user_id==$item3->id): ?>
                            <tr>
                                <?php
                                $n=0;
                                ?>
                                <?php $__currentLoopData = $charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->user_id==$item4->user_id): ?>
                                <?php
                                $n++;
                                ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if($n!=0): ?>
                                <td><?php echo e($i++); ?></td>
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
                                <td>
                                    <?php
                                    $n=0;
                                    ?>
                                    <?php $__currentLoopData = $charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->user_id==$item4->user_id): ?>
                                    <?php
                                    $n++;
                                    ?>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($n); ?>

                                </td>
                                <td>
                                    <?php
                                    $total=0;
                                    ?>
                                    <?php $__currentLoopData = $charge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item->user_id==$item4->user_id): ?>
                                    <?php
                                    $total+=$item4->money;
                                    ?>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e(number_format($total).'đ'); ?>

                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>


                </div>
            </div>
            <div>
                <form class="m-3" action="<?php echo e(route('admin.statistic.sort_charge')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="form wide" name="sortID" data-toggle="movie-dropdown"
                                        oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')"
                                        onchange="this.setCustomValidity('')">
                                        <option value="" data-display="Duyệt theo tháng">Chưa chọn...</option>
                                        <?php for($i = 1; $i <= 12; $i++): ?> <?php if(isset($sortID)): ?> <?php if($i==$sortID): ?> <option
                                            selected value="<?php echo e($i); ?>">Tháng <?php echo e($i); ?>

                                            </option>
                                            <?php
                                            $i++;
                                            ?>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <option value="<?php echo e($i); ?>">Tháng <?php echo e($i); ?>

                                            </option>
                                            <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form wide" name="sortIDYear"
                                        data-toggle="movie-dropdown"
                                        oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')"
                                        onchange="this.setCustomValidity('')">
                                        <option value="" data-display="Duyệt theo năm">Chưa chọn...</option>
                                        <?php for($i = 2020; $i >= 2018; $i--): ?>
                                        <?php if(isset($sortIDYear)): ?>
                                        <?php if($i==$sortIDYear): ?>
                                        <option selected value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                        <?php
                                        $i--;
                                        ?>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button class="ml-3 btn btn-success btn-block">Duyệt</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <a href="https://sandbox.vnpayment.vn/merchantv2/Users/Login.htm?ReturnUrl=%2fmerchantv2%2fUsers%2fLogout.htm"
                    class="btn btn-success float-right" target="_blank">Truy cập trang quản lý doanh thu
                    VNPAY</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webxemphim2\resources\views/admin/statistic/charge.blade.php ENDPATH**/ ?>