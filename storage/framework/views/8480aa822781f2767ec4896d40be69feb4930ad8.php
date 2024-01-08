<?php $__env->startSection('title','Giới Thiệu Về Chúng Tôi - Movie'); ?>
<?php $__env->startSection('content'); ?>
<div class="faq">
    <h4 class="latest-text w3_faq_latest_text w3_latest_text">Giới Thiệu</h4>
    <div class="container">
        <div class="agileits-news-top">
            <ol class="breadcrumb">
                <li><a href="<?php echo e(route('user.index')); ?>">Trang Chủ</a></li>
                <li class="active">Giới Thiệu</li>
            </ol>
            <div>
                <h4>Với niềm đam mê về phim ảnh, chúng tôi những người xây dựng nên Website này mong muốn đưa tới cho
                    mọi người những bộ phim hay nhất trên thị trường hiện tại, mới nhất và cập nhật liên tục. Chúng tôi
                    cam đoan tất cả phim trên Website của chúng tôi đều miễn phí và chất lượng tốt nhất để phục vụ cho
                    mọi người.<br><br></h4>
            </div>
        </div>
    </div>
    <h4 class="latest-text w3_faq_latest_text w3_latest_text">Liên Hệ</h4>
    <div class="container">
        <h4 class="pt-1"><b>Quản trị viên: </b>Trần Xuân Phương</h4>
        <h4 class="pt-1"><b>Số điện thoại: </b>0349******</h4>
        <h4><b>Email: </b>txp******@gmail.com</h4>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\webxemphim\resources\views/user/about.blade.php ENDPATH**/ ?>