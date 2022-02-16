<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="shop-slider-area">
        <div class="shop-slide-wrapper">

            <!-- Slide Info -->
            <div class="shop-slide-inner shop-slide-info">
                <div class="inner">
                    <h1 class="heading heading-h1 font-60 line-height-1-42">Tag Collection <?php echo e($tag->name()); ?> <span
                            class="fa fa-quote-right"></span></h1>

                    <div class="shop-btn mt--45">
                        <div class="content mt--35 mb--65">
                            <p class="bk_pra font-18 line-height-1-63"><?php echo e($tag->description); ?></p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Shop Thumbnail -->
            <?php if($tag->image()): ?>
                <div class="shop-slide-inner thumbnail shop-slide-bg-1"
                     style="background-image: url(<?php echo e(asset('storage/' . $tag->image())); ?>)">
                    <?php else: ?>
                        <div class="shop-slide-inner thumbnail shop-slide-bg-1"
                             style="background-image: url(<?php echo e(asset('img/bg/bg-image-53.jpg')); ?>)">
                            <?php endif; ?>

                        </div>

                </div>
        </div>
    </div>

    <div class="bk-blog-grid-area ptb--130 ptb-md--80 ptb-sm--60 bg_color--5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-6 col-sm-12 col-12">
                    <div class="brook-section-title">
                        <h2 class="heading heading-h2">Tag Posts</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 col-sm-12 col-12">
                    <div class="blog-btn text-md-end text-start view-more-btn heding-color font-700 mt_sm--30">
                        <a href="<?php echo e(route('blog.index')); ?>"><span>View all posts</span><span class="btn-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt--70">
                    <div class="blog-grid blog-grid--modern blog-standard blog-yellow-color">
                        <div class="post-thumb">
                            <a href="blog-details.html">
                                <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>">
                            </a>
                        </div>
                        <div class="post-content text-center">
                            <div class="post-inner">
                                <div class="post-meta mb--10">
                                    <div class="post-date"><?php echo e($post->created_at->format('M d, Y')); ?></div>
                                    <div class="">
                                    <?php $__currentLoopData = $post->tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('tags.show', $tag)); ?>"><?php echo e(' | ' . $tag->name); ?> </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <h5 class="heading heading-h5 line-height-1-39"><a href="<?php echo e(route('blog.show', $post)); ?>"><?php echo e($post->title); ?></a></h5>
                                <a href="<?php echo e(route('blog.show', $post)); ?>" class="post-read-more"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
                <div>
                    <?php echo e($posts->links('vendor.pagination.tags-pagination')); ?>

                </div>

        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.block','data' => []]); ?>
<?php $component->withName('layouts.block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/pages/tags/show.blade.php ENDPATH**/ ?>