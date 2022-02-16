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
            <?php echo e(asset('img/bg/bg-image-136.jpg')); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('title', null, []); ?> Our Team <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <!-- Page Content -->
    <main class="page-content">
        <!-- Start Team Area -->
        <div class="brook-team-area ptb--120 ptb-md--80 ptb-sm--60 bg_color--1 slick-arrow-hover">
            <div class="brook-element-carousel slick-arrow-center slick-arrow-triggle" data-slick-options='{
                    "spaceBetween": 30,
                    "slidesToShow": 5,
                    "slidesToScroll": 1,
                    "arrows": true,
                    "infinite": true,
                    "dots": false,
                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "ion ion-ios-arrow-back" },
                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "ion ion-ios-arrow-forward" }
                }'
                 data-slick-responsive='[
                {"breakpoint":1150, "settings": {"slidesToShow": 4}},
                {"breakpoint":890, "settings": {"slidesToShow": 3}},
                {"breakpoint":590, "settings": {"slidesToShow": 2}},
                {"breakpoint":480, "settings": {"slidesToShow": 1}}
                ]'>


                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team1.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team1.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>John Doe</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team2.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team2.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>Kasahara May</h5>
                            <span>Project manager</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team3.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team3.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>Blake Hamilton</h5>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team1.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team1.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>Sarah Vagan</h5>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team2.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team2.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>John Doe</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team3.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team3.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>John Doe</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

            </div>
        </div>
        <!-- End Team Area -->
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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/pages/team/index.blade.php ENDPATH**/ ?>