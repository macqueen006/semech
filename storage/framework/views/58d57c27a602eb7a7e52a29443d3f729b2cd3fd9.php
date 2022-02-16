<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admins/css/chosen.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">CREATE POST</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="post" action="<?php echo e(route('admin.posts.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="white_box mb_30">
                            <div class="form-group input_wrap mb_20">
                                <label for="image" class="text-xs">COVER IMAGE</label>
                                <input type="file" class="mb-2" name="image" value="<?php echo e(old('image')); ?>" id="image" required><br>
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="pl-1 text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group mb_20">
                                <label for="name">Title</label>
                                <input type="text" class="form-control mb-2" name="title" id="title" placeholder="Title" value="<?php echo e(old('title')); ?>" autocomplete="off">
                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="pl-1 text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group mb_20">
                                <label for="body">content</label>
                                <textarea id="summernote" name="body"><?php echo e(old('body')); ?></textarea>
                                <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="pl-1 text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>







                            <div class="form-group mb_20">
                                <label for="body">Published At</label>
                                <input type="date" id="published_at" value="<?php echo e(old('published_at')); ?>" name="published_at" /><br>
                                <?php $__errorArgs = ['published_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="pl-1 text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group mb_20">
                                <label for="name">Type</label>
                                <select class="" name="type" id="type">
                                        <option value="standard">Standard</option>
                                        <option value="premium">Premium</option>
                                </select>
                            </div>

                            <div class="form-group mb_20">
                                <label for="tags">Tags</label>
                                <select class="my_select_box chosen-select form-control" name="tags[]" id="tags" multiple>
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group mb_20">
                                <label for="photo_credit_text">Photo Credit Text</label>
                                <input type="text" class="form-control mb-2" name="photo_credit_text" id="photo_credit_text" placeholder="photo credit text" value="<?php echo e(old('photo_credit_text')); ?>" autocomplete="off">
                            </div>

                            <div class="form-group mb_20">
                                <label for="photo_credit_link">Photo Credit Link</label>
                                <input type="text" class="form-control mb-2" name="photo_credit_link" id="photo_credit_link" placeholder="photo credit link" value="<?php echo e(old('photo_credit_link')); ?>" autocomplete="off">
                            </div>


                                <div class="form-group cs_check_box">
                                    <input type="checkbox" id="check_box" value="1" name="is_commentable" class="common_checkbox">
                                    <label for="check_box">
                                       Allow Comments
                                    </label>
                                </div>

                        </div>

                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>

                    </form>

                </div>
            </div>
        </div>

        <?php $__env->startPush('scripts'); ?>
            <script src="<?php echo e(asset('admins/js/chosen.jquery.min.js')); ?>"></script>
            <script>
                $(function () {
                    $(".my_select_box").chosen('chosen:updated');
                });
                // $('.my_select_box').trigger('chosen:updated');
            </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>