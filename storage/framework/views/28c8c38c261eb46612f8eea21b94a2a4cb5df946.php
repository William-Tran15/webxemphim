<?php $__env->startSection('title','Ví Của Tôi - MinMovies'); ?>
<?php $__env->startSection('content'); ?>
<br>
<div class="tittle-head">
    <h4 class="latest-text">Nạp tiền vào ví</h4>
    <div class="container">
        <div class="agileits-single-top">
            <ol class="breadcrumb">
                <li><a href="">Trang Chủ</a></li>
                <li><a href="<?php echo e(route('user.getProfile')); ?>"><?php echo e(session('username_minmovies')); ?></a></li>
                <li><a href="<?php echo e(route('user.getWallet')); ?>">Ví</a></li>
                <li class="active">Nạp tiền vào ví</li>
            </ol>
        </div>
    </div>
</div>
<div class="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                NẠP TIỀN VÀO VÍ
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="w3_login_module">
                        <div class="module form-module">
                            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                            </div>
                            <div class="form">
                                <h3>NẠP TIỀN</h3>
                                <form action="<?php echo e(route('user.postChargeWallet')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="number" name="amount" value="" placeholder="Nhập số tiền bạn muốn nạp" required="" oninvalid="this.setCustomValidity('Có phải bạn có quên mất gì đó?')"
                                    oninput="this.setCustomValidity('')">
                                    <input type="submit" value="Nạp ngay"><br><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
    $('.toggle').click(function(){
      // Switches the Icon
      $(this).children('i').toggleClass('fa-pencil');
      // Switches the forms
      $('.form').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: "toggle"
      }, "slow");
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webxemphim\resources\views/user/chargeWallet.blade.php ENDPATH**/ ?>