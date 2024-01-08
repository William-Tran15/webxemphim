<?php $__env->startSection('title','Sửa Phim - MinMovie'); ?>
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
        left: 37px;
    }
</style>
<div class="container-fluid border-danger">
    <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.movie.edit',$movie->id)); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <h4 class="h3 mb-2 text-gray-800 text-center">SỬA PHIM</h4>
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
                        <input type="text" class="form-control" title="Tên phim bằng tiếng Việt" name="txtViename"
                            autofocus value="<?php echo e($movie->vie_name); ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tên tiếng Anh</span>
                        </div>
                        <input type="text" class="form-control" name="txtEngname" title="Tên phim bằng tiếng Anh"
                            value="<?php echo e($movie->eng_name); ?>">
                    </div>
                </div>
            </div>
            <div>

            </div>
            <div class="row">
                <div class="col-md-3 pb-3">
                    <select class="form wide" required name="cate_id" data-toggle="movie-dropdown"
                        oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')"
                        onchange="this.setCustomValidity('')">
                        <option value="" data-display="Thể Loại">Chưa chọn...</option>
                        <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->cate_id==$item->id): ?>
                        <option selected value="<?php echo e($item->id); ?>"><?php echo e($item->cate_name); ?></option>
                        <?php else: ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->cate_name); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-3 pb-3">
                    <select class="form wide" name="nation_id" required data-toggle="movie-dropdown"
                        oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')"
                        onchange="this.setCustomValidity('')">
                        <option value data-display="Quốc Gia">Chưa chọn...</option>
                        <?php $__currentLoopData = $nation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->nation_id==$item->id): ?>
                        <option selected value="<?php echo e($item->id); ?>"><?php echo e($item->nation_name); ?></option>
                        <?php else: ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nation_name); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-3 pb-3">
                    <select class="form wide" name="year_id" required="" data-toggle="movie-dropdown"
                        oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')"
                        onchange="this.setCustomValidity('')">
                        <option value data-display="Năm Sản Xuất">Chưa chọn...</option>
                        <?php $__currentLoopData = $year; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->year_id==$item->id): ?>
                        <option selected value="<?php echo e($item->id); ?>"><?php echo e($item->year); ?></option>
                        <?php else: ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->year); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-3 pb-3">
                    <select class="form wide" name="language_id" required="" data-toggle="movie-dropdown"
                        oninvalid="this.setCustomValidity('Có phải bạn có quên chọn gì đó?')"
                        onchange="this.setCustomValidity('')">
                        <option value data-display="Ngôn Ngữ">Chưa chọn...</option>
                        <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->language_id==$item->id): ?>
                        <option selected value="<?php echo e($item->id); ?>"><?php echo e($item->language); ?></option>
                        <?php else: ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->language); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 pb-3">
                <img class="img-thumbnail" src="<?php echo e(asset('storage/app/poster/'.$movie->poster_image)); ?>" alt="" title="<?php echo e(asset('storage/app/poster/'.$movie->poster_image)); ?>">
                </div>
                <div class="col-md-9">
                    <div class="pb-3">
                        <div class="custom-file">
                            <input type="file" name="poster" title="Ảnh Poster Phim" class="uploadimg custom-file-input"
                                accept=".jpg, .png, image/jpeg, image/png">
                            <label class="custom-file-label" class="uploadimg"
                                for="inputGroupFile01"><?php echo e($movie->poster_image); ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group pb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text admin_add_movie_title">Thời lượng</span>
                                </div>
                                <input type="text" class="form-control" name="txtTime" title="Thời lượng phim"
                                    value="<?php echo e($movie->time); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group pb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text admin_add_movie_title">Chất lượng</span>
                                </div>
                                <input type="text" class="form-control" name="txtQuality" title="Chất lượng phim"
                                    value="<?php echo e($movie->quality); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Điểm phim</span>
                        </div>
                        <input type="text" class="form-control" name="txtPoint" title="Điểm phim"
                            value="<?php echo e($movie->point); ?>">
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Đạo diễn</span>
                        </div>
                        <input type="text" class="form-control" name="txtDirector" title="Đạo diễn"
                            value="<?php echo e($movie->director); ?>">
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Diễn viên</span>
                        </div>
                        <input type="text" class="form-control" name="txtActor" title="Danh sách diễn viên"
                            value="<?php echo e($movie->actor); ?>">
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Trailer phim</span>
                        </div>
                        <input type="text" class="form-control" name="txtTrailer" title="Mã nhúng Trailer phim"
                            value="<?php echo e($movie->trailer); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 1</span>
                        </div>
                        <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->id==$item->movie_id): ?>
                        <input type="text" class="form-control" name="txtServer1" title="Link phim Server 1"
                            value="<?php echo e($item->link1); ?>">
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 2</span>
                        </div>
                        <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->id==$item->movie_id): ?>
                        <input type="text" class="form-control" name="txtServer2" title="Link phim Server 2"
                            value="<?php echo e($item->link2); ?>">
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 3</span>
                        </div>
                        <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->id==$item->movie_id): ?>
                        <input type="text" class="form-control" name="txtServer3" title="Link phim Server 3"
                            value="<?php echo e($item->link3); ?>">
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 4</span>
                        </div>
                        <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->id==$item->movie_id): ?>
                        <input type="text" class="form-control" name="txtServer4" title="Link phim Server 4"
                            value="<?php echo e($item->link4); ?>">
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 5</span>
                        </div>
                        <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->id==$item->movie_id): ?>
                        <input type="text" class="form-control" name="txtServer5" title="Link phim Server 5"
                            value="<?php echo e($item->link5); ?>">
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="input-group pb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text admin_add_movie_title">Server 6</span>
                        </div>
                        <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($movie->id==$item->movie_id): ?>
                        <input type="text" class="form-control" name="txtServer6" title="Link phim Server 6"
                            value="<?php echo e($item->link6); ?>">
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <h5 class="m-0 font-weight-bold text-primary pb-2">NỘI DUNG PHIM</h5>
            <textarea class="ckeditor" style="resize:none;" name="txtInfo" id="editor" cols="30"
                rows="10"><?php echo e($movie->time); ?>"</textarea>
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
        <button type="submit" class="btn btn-primary btn-block btn-lg">Sửa phim</button>
    </form><br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\webxemphim\resources\views/admin/movie/edit.blade.php ENDPATH**/ ?>