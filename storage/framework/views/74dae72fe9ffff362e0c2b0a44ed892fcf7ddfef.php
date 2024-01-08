<?php $__env->startSection('title','Tủ Phim Của Tôi - Movie'); ?>
<?php $__env->startSection('content'); ?>
<div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">
        <!-- /movie-browse-agile -->
        <div class="movie-browse-agile">
            <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <h4 class="latest-text">
                        Tủ phim của tôi
                    </h4>
                    <div class="container">
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo e(route('user.index')); ?>">Trang Chủ</a></li>
                                <li class="active">Tủ Phim Của Tôi</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="browse-inner">
                        <?php if(session('thongbaotrong')): ?>
                            <h3 class="text-center">Tủ phim trống!</h3><br>
                        <?php else: ?>
                        <?php if(!$movie->isEmpty()): ?>
                        <h3 class="text-center">Bạn có "<b><?php echo e(count($movie)); ?></b>" phim trong tủ</h3><br>
                        <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="<?php echo e(route('user.movie',$item->id)); ?>"
                                title="<?php echo e($item->vie_name.' ('.$item->eng_name.')'); ?>"
                                class="hvr-shutter-out-horizontal"><img
                                    src="<?php echo e('storage/app/poster/'.$item->poster_image); ?>"
                                    title="<?php echo e($item->vie_name.' ('.$item->eng_name.')'); ?>" class="img-responsive"
                                    alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="<?php echo e(route('user.movie',$item->id)); ?>"
                                            title="<?php echo e($item->vie_name.' ('.$item->eng_name.')'); ?>"><?php echo e($item->vie_name); ?></a>
                                    </h6>
                                </div>
                                <div class="mid-2">
                                    <p>
                                        <?php $__currentLoopData = $year; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item2->id==$item->year_id): ?>
                                        <?php echo e($item2->year); ?>

                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <p><?php echo e($item->time); ?></p>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->language_id==$lang->id): ?>
                                <a href="<?php echo e(route('user.movie',$item->id)); ?>"
                                    title="<?php echo e($item->vie_name.' ('.$item->eng_name.')'); ?>">
                                    <p><?php echo e($item->quality.'-'.$lang->language); ?></p>
                                </a>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="ribbennew4">
                                <span
                                    class="badge badge-pill badge-danger price2 text-center" style="margin-top:5px;">
                                    <?php if($item->price==0): ?>
                                        Miễn phí
                                    <?php else: ?>
                                    <?php echo e(number_format(round($item->price)).'đ'); ?>

                                    <?php endif; ?>
                                </span>
                            </div>
                            <div>
                            <a title="Xoá khỏi tủ phim" href="<?php echo e(route('user.deleteCabinet',[session('username_minmovies'),$item->id])); ?>" class="btn btn-danger btn-block" style="color:#FFFFFF">Xoá</a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <?php endif; ?>

                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--//browse-agile-w3ls -->
            <?php if(session('thongbaotrong')): ?>
                <?php
                    session()->forget('thongbaotrong');
                ?>
            <?php else: ?>
            <div class="blog-pagenat-wthree">
                <ul>
                    <?php echo e($movie->links()); ?>

                </ul>
            </div>
            <?php endif; ?>
        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\webxemphim\resources\views/user/cabinet.blade.php ENDPATH**/ ?>