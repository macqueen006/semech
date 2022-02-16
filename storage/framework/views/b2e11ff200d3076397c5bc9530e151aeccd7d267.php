<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title', "Blog: $post->title"); ?>
    <?php $__env->startSection('keywords'); ?>
        <?php $__currentLoopData = $post->tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($tag->name); ?> ,
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('description'); ?>
        <?php echo e($post->title); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('metaImage'); ?>
        <?php echo e(asset('storage/'. $post->image)); ?>

    <?php $__env->stopSection(); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.hero','data' => []]); ?>
<?php $component->withName('layouts.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('image', null, []); ?> 
            <?php echo e(asset('img/bg/bg-image-136.jpg')); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('title', null, []); ?> Our Blog <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <!-- Page Content -->
    <?php if($request): ?>
    <main class="page-content">

        <!-- Start BLog Area -->
        <div class="blog-creative-area bg_color--5 ptb--120 ptb-md--80 ptb-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pr--100 pr_lg--15 pr_md--15 pr_sm--15">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.latest-post', ['search' => $request])->html();
} elseif ($_instance->childHasBeenRendered('vI4xe8w')) {
    $componentId = $_instance->getRenderedChildComponentId('vI4xe8w');
    $componentTag = $_instance->getRenderedChildComponentTagName('vI4xe8w');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vI4xe8w');
} else {
    $response = \Livewire\Livewire::mount('home.latest-post', ['search' => $request]);
    $html = $response->html();
    $_instance->logRenderedChild('vI4xe8w', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.blog-sidebar','data' => ['tags' => $tags]]); ?>
<?php $component->withName('layouts.blog-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tags' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
        <!-- End BLog Area -->

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

    </main>
    <?php else: ?>
        <main class="page-content">
            <!-- Start Blog Details -->
            <div class="brook-blog-details-area bg_color--1 ptb--120 ptb-md--80 ptb-sm--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="blog-details-wrapper">
                                <article class="blog-post standard-post">
                                    <!-- Start Header -->
                                    <div class="header mb--40 text-center">
                                        <h3 class="heading heading-h3 font-32"><?php echo e($post->title); ?></h3>
                                        <div class="post-meta mt--20">
                                            <div class="post-date"><?php echo e($post->published_at->format('M d, Y')); ?></div>
                                            <?php $__currentLoopData = $post->tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="post-category"><a href="<?php echo e(route('tags.show', $tag)); ?>"><?php echo e($tag->name); ?></a></div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <!-- Start Thumbnail -->
                                    <div class="thumbnail mb--60">
                                        <img class="w-100" src="<?php echo e(asset('storage/'. $post->image)); ?>" alt="Multipurpose">
                                    </div>
                                    <!-- Start Content -->
                                    <div class="content basic-dark2-line-1px pb--50 mb--35">
                                        <div class="inner">
                                            <?php echo e($post->body); ?>

                                        </div>
                                    </div>

                                    <!-- Start Footer -->
                                    <div class="blog-footer mb--85 wow move-up">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="post-tag d-flex align-items-center">
                                                    <h6 class="heading heading-h6">TAGS:</h6>
                                                    <div class="blog-tag-list ">
                                                        <?php $__currentLoopData = $post->tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <a href="<?php echo e(route('tags.show', $tag)); ?>"><?php echo e($tag->name); ?></a>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if (isset($component)) { $__componentOriginal483f4712b3720e8e8eda8367d3412e4054c7d90b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Social\Links::class, ['post' => $post,'url' => ''.e(\Request::url()).'']); ?>
<?php $component->withName('social.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal483f4712b3720e8e8eda8367d3412e4054c7d90b)): ?>
<?php $component = $__componentOriginal483f4712b3720e8e8eda8367d3412e4054c7d90b; ?>
<?php unset($__componentOriginal483f4712b3720e8e8eda8367d3412e4054c7d90b); ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </article>
                                <!-- Start Post Nav Links -->
                                <div class="post-nav-lisnt mb--45 wow move-up">
                                    <div class="nav-item previous">
                                        <a href="blog-details.html#">
                                            <div class="link-text">
                                                <span class="fa fa-arrow-left"></span>
                                                <p class="">Prev</p>
                                            </div>
                                            <span>US Ranks Near Bottom on Development Commitment</span>
                                        </a>
                                    </div>
                                    <div class="nav-item next mt_sm--30">
                                        <a href="blog-details.html#">
                                            <div class="link-text">
                                                <p class="">Next</p>
                                                <span class="fa fa-arrow-right"></span>
                                            </div>
                                            <span>Career Tips For Emerging Photographers</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Post Nav Links -->
                                <?php echo $__env->make('comments::components.comments', ['model' => $post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                            </div>
                        </div>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.blog-sidebar','data' => ['tags' => $tags]]); ?>
<?php $component->withName('layouts.blog-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tags' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    </div>
                </div>
            </div>
            <!-- End Blog Details -->

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

        </main>
    <?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/pages/posts/show.blade.php ENDPATH**/ ?>