<?php $__env->startSection('title','Trailer Phim Mới Cập Nhật - MinMovies'); ?>
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
                        Trailer Phim Mới Cập Nhật
                    </h4>
                    <div class="container">
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo e(route('user.index')); ?>">Trang Chủ</a></li>
                                <li class="active">Trailer Phim Mới</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="browse-inner">
                        <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="movietrailer">
                            <a href="<?php echo e(route('user.movie',$item->id)); ?>"
                                title="<?php echo e($item->vie_name.' ('.$item->eng_name.')'); ?>"><?php echo e($item->vie_name.' ('.$item->eng_name.')'); ?></a>
                            <div class="video-responsive">
                                <?php echo $item->trailer; ?>

                            </div><br><br>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--//browse-agile-w3ls -->
            <div class="blog-pagenat-wthree">
                <ul>
                    <?php echo e($movie->links()); ?>

                </ul>
            </div>
        </div>
        <!-- //movie-browse-agile -->
        <!--body wrapper start-->
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\webxemphim\resources\views/user/trailer.blade.php ENDPATH**/ ?>