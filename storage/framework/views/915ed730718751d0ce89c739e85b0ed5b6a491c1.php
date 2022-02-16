<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.hero','data' => []]); ?>
<?php $component->withName('layouts.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('image', null, []); ?> 
            <?php echo e(asset('https://images.unsplash.com/photo-1567177662154-dfeb4c93b6ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80')); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('title', null, []); ?> What We Do <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <!-- Page Content -->
    <main class="page-content">

        <!-- Start Icon Boxes -->
        <div class="brook-icon-boxes-area ptb--120 ptb-md--80 ptb-sm--60 bg_color--1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brook-section-title text-center mb--70">
                            <h3 class="heading heading-h3 line-height-1-25">What we provide</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row poss_relative">
                            <!-- Start Single Icon Boxes -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow move-up">
                                <div class="icon-box text-center no-border">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?php echo e(asset('img/architecture/icon8.png')); ?>" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">Planning</h5>
                                            <p class="bk_pra">Brook embraces a modern look with various enhanced
                                                pre-defined page elements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Icon Boxes -->

                            <!-- Start Single Icon Boxes -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt_mobile--70 wow move-up">
                                <div class="icon-box text-center no-border">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?php echo e(asset('img/architecture/icon9.png')); ?>" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">Interior</h5>
                                            <p class="bk_pra">We successfully implemented numerous UI/UX projects
                                                for both global & local clients.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Icon Boxes -->

                            <!-- Start Single Icon Boxes -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt_md--70 mt_sm--70 wow move-up">
                                <div class="icon-box text-center no-border">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?php echo e(asset('img/architecture/icon10.png')); ?>" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">Exterior</h5>
                                            <p class="bk_pra">Brook is highly responsive thanks to built-in
                                                WP Bakery Page Builder & Slider Revolution.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Icon Boxes -->

                            <!-- Start Single Icon Boxes -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--70 wow move-up">
                                <div class="icon-box text-center no-border">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?php echo e(asset('img/architecture/icon11.png')); ?>" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">Decoration</h5>
                                            <p class="bk_pra">We participate in knowledge and technology transfers
                                                in resource use.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Icon Boxes -->

                            <!-- Start Single Icon Boxes -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--70 wow move-up">
                                <div class="icon-box text-center no-border">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?php echo e(asset('img/architecture/icon12.png')); ?>" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">Furniture</h5>
                                            <p class="bk_pra">We participate in knowledge and technology transfers
                                                in resource use.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Icon Boxes -->

                            <!-- Start Single Icon Boxes -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--70 wow move-up">
                                <div class="icon-box text-center no-border">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?php echo e(asset('img/architecture/icon13.png')); ?>" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">Exclusively</h5>
                                            <p class="bk_pra">Brook is highly responsive thanks to built-in
                                                WP Bakery Page Builder & Slider Revolution.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Icon Boxes -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Icon Boxes -->

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.ourwork','data' => []]); ?>
<?php $component->withName('layouts.ourwork'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="brook-pricing-table-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--5">
            <div class="container">
                <div class="row">

                    <!-- Start Single Pricing Table -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="procing-wrap pt--40 move-up wow">
                            <div class="procing-box">
                                <div class="header">
                                    <div class="price">
                                        <h3 class="currenct">$</h3>
                                        <h3 class="heading headin-h3">46</h3>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="heading heading-h5">Basic package</h5>
                                    <!-- Start Single List -->
                                    <div class="bk-list--2">
                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Business Architecture</h6>
                                            </div>
                                        </div>
                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Cognitive Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Interior Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-not-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Landscape Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-not-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">UI/UX designs</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-not-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">SEO marketing</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Single List -->
                                </div>
                                <div class="footer mt--40">
                                    <a class="brook-btn bk-btn-dark btn-sd-size btn-rounded" href="service.html#">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pricing Table -->

                    <!-- Start Single Pricing Table -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_sm--40">
                        <div class="procing-wrap move-up wow" data-wow-delay="0.16s">
                            <div class="procing-box active">
                                <div class="header">
                                    <div class="feature-mark">Popular Choice</div>
                                    <div class="price">
                                        <h3 class="currenct">$</h3>
                                        <h3 class="heading headin-h3">46</h3>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="heading heading-h5">Basic package</h5>
                                    <!-- Start Single List -->
                                    <div class="bk-list--2">
                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Business Architecture</h6>
                                            </div>
                                        </div>
                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Cognitive Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Interior Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Landscape Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">UI/UX designs</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-not-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">SEO marketing</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Single List -->
                                </div>
                                <div class="footer mt--40">
                                    <a class="brook-btn bk-btn-dark btn-sd-size btn-rounded" href="service.html#">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pricing Table -->

                    <!-- Start Single Pricing Table -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="procing-wrap pt--40 move-up wow" data-wow-delay="0.19s">
                            <div class="procing-box">
                                <div class="header">
                                    <div class="price">
                                        <h3 class="currenct">$</h3>
                                        <h3 class="heading headin-h3">248</h3>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="heading heading-h5">Premium package</h5>
                                    <!-- Start Single List -->
                                    <div class="bk-list--2">
                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Business Architecture</h6>
                                            </div>
                                        </div>
                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Cognitive Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Interior Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">Landscape Architecture</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">UI/UX designs</h6>
                                            </div>
                                        </div>

                                        <div class="list-header with-ckeck item-available">
                                            <div class="marker"></div>
                                            <div class="title-wrap">
                                                <h6 class="heading heading-h5">SEO marketing</h6>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Single List -->
                                </div>

                                <div class="footer mt--40">
                                    <a class="brook-btn bk-btn-dark btn-sd-size btn-rounded" href="service.html#">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pricing Table -->

                </div>
            </div>
        </div>

        <!-- Start Gradation Area -->
        <div class="brook-gradation-area ptb--120 ptb-md--80 ptb-sm--60 bg_color--1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="bk-title--default text-center">
                            <h5 class="heading heading-h5 theme-color">How We Do</h5>
                            <div class="bkseparator--30"></div>
                            <h3 class="heading heading-h3">Creative procedure</h3>
                        </div>

                        <div class="bk-gradation mt--30 mt_sm--5">

                            <!-- Start Single Gradation -->
                            <div class="item-grid mt--40 move-up-x wow" data-wow-delay=".13s">
                                <div class="line"></div>
                                <div class="dot-wrap">
                                    <div class="dot">
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="heading heading-h5">Lowest Price Guarantee</h5>
                                    <p class="bk_pra">study the problem and general materials to find out creative
                                        concepts.</p>
                                </div>
                            </div>
                            <!-- End Single Gradation -->

                            <!-- Start Single Gradation -->
                            <div class="item-grid mt--40 move-up-x wow" data-wow-delay=".19s">
                                <div class="line"></div>
                                <div class="dot-wrap">
                                    <div class="dot">
                                        <div class="count">2</div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="heading heading-h5">24/7 Global Support</h5>
                                    <p class="bk_pra">quickly translate the visions into reality and patent
                                        possible approaches.</p>
                                </div>
                            </div>
                            <!-- End Single Gradation -->

                            <!-- Start Single Gradation -->
                            <div class="item-grid mt--40 move-up-x wow" data-wow-delay=".2s">
                                <div class="line"></div>
                                <div class="dot-wrap">
                                    <div class="dot">
                                        <div class="count">3</div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="heading heading-h5">A trip advisor Company</h5>
                                    <p class="bk_pra">release approaches out into the world, submit it to criticism
                                        & adaptation.</p>
                                </div>
                            </div>
                            <!-- End Single Gradation -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gradation Area -->

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layouts.team','data' => []]); ?>
<?php $component->withName('layouts.team'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

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
    <!--// Page Conttent -->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/pages/service/index.blade.php ENDPATH**/ ?>