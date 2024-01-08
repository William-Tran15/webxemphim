<?php $__env->startSection('title','Thêm Phim Mới - MinMovie'); ?>
<?php $__env->startSection('content'); ?>
<style>
    select {
        display: block !important;
        margin: 0;
        border: 0;
        padding: 0;
        height: 1px;
        opacity: 0;
        position: relative;
        /* Top should be the same as the height of your */
        /* unfocused, nice select replacement element! */
        top: 35px;
        left:37px;
}
</style>
<div class="container-fluid border-danger">
    <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.movie.create')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <h4 class="h3 mb-2 text-gray-800 text-center">THÊM PHIM MỚI</h4>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                - <?php echo e($error); ?><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
            <h5 class="m-0 font-weight-bold text-primary pb-2">THÔNG TIN PHIM</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tên tiếng Việt</span>
                        </div>
                        <input type="text" class="form-control" title="Tên phim bằng tiếng Việt" name="txtViename" autofocus>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tên tiếng Anh</span>
                        </div>
                        <input type="text" class="form-control" name="txtEngname" title="Tên phim bằng tiếng Anh">
                    </div>
                </div>
            </div>
            <div>

            </div>
            <div class="row">
                <div class="col-md-3 pb-3">
                    <select class="form wide" required name="cate_id" data-toggle="movie-dropdown" oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')" onchange="this.setCustomValidity('')">
                        <option value="" data-display="Thể Loại">Chưa chọn...</option>
                        <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->cate_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-3 pb-3">
                    <select class="form wide" name="nation_id" required data-toggle="movie-dropdown" oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')" onchange="this.setCustomValidity('')">
                        <option value data-display="Quốc Gia">Chưa chọn...</option>
                        <?php $__currentLoopData = $nation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nation_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-3 pb-3">
                    <select class="form wide" name="year_id" required="" data-toggle="movie-dropdown" oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')" onchange="this.setCustomValidity('')">
                        <option value data-display="Năm Sản Xuất">Chưa chọn...</option>
                        <?php $__currentLoopData = $year; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->year); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-3 pb-3">
                    <select class="form wide" name="language_id" required="" data-toggle="movie-dropdown" oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')" onchange="this.setCustomValidity('')">
                        <option value data-display="Ngôn Ngữ">Chưa chọn...</option>
                        <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->language); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="pb-3">
                <div class="custom-file">
                    <input type="file" name="poster" title="Ảnh Poster Phim" class="uploadimg custom-file-input" accept=".jpg, .png, image/jpeg, image/png">
                    <label class="custom-file-label" class="uploadimg" for="inputGroupFile01">Chọn Poster...</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group pb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text admin_add_movie_title">Thời lượng</span>
                                </div>
                                <input type="text" class="form-control" name="txtTime" title="Thời lượng phim">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group pb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text admin_add_movie_title">Chất lượng</span>
                                </div>
                                <input type="text" class="form-control" name="txtQuality" title="Chất lượng phim">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group pb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text admin_add_movie_title">Điểm phim</span>
                                </div>
                                <input type="text" class="form-control" name="txtPoint" title="Điểm phim">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group pb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text admin_add_movie_title">Đạo diễn</span>
                                </div>
                                <input type="text" class="form-control" name="txtDirector" title="Đạo diễn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-group pb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text admin_add_movie_title">Diễn viên</span>
                </div>
                <input type="text" class="form-control" name="txtActor" title="Danh sách diễn viên">
            </div>
            <div class="input-group pb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text admin_add_movie_title">Trailer phim</span>
                </div>
                <input type="text" class="form-control" name="txtTrailer" title="Mã nhúng Trailer phim">
            </div>
            <div class="input-group pb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text admin_add_movie_title">Giá phim</span>
                </div>
                <input type="number" class="form-control" name="txtPrice" title="Giá phim" maxlength="8">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 1</span>
                        </div>
                        <input type="text" class="form-control" name="txtServer1" title="Link phim Server 1">
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 2</span>
                        </div>
                        <input type="text" class="form-control" name="txtServer2" title="Link phim Server 2">
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 3</span>
                        </div>
                        <input type="text" class="form-control" name="txtServer3" title="Link phim Server 3">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 4</span>
                        </div>
                        <input type="text" class="form-control" name="txtServer4" title="Link phim Server 4">
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 5</span>
                        </div>
                        <input type="text" class="form-control" name="txtServer5" title="Link phim Server 5">
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 6</span>
                        </div>
                        <input type="text" class="form-control" name="txtServer6" title="Link phim Server 6">
                    </div>
                </div>
            </div>
            <h5 class="m-0 font-weight-bold text-primary pb-2">NỘI DUNG PHIM</h5>
            <textarea class="ckeditor" style="resize:none;" name="txtInfo" id="editor" cols="30"
                rows="10"></textarea>
            <script>
                var editor = CKEDITOR.replace( 'editor',{
                    language:'vi',
                    height:'25em',
                    width: '100%',
                    placeholder: 'Nội dung phim'
                } );
                editor.config.removePlugins = 'resize';
                CKFinder.setupCKEditor( editor );
                CKFinder.widget( 'ckfinder-widget', {
                id: 'custom-instance-id',
                thumbnailDefaultSize: 400
            } );
            </script>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Thêm phim</button>
    </form><br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webxemphim\resources\views/admin/movie/add.blade.php ENDPATH**/ ?>