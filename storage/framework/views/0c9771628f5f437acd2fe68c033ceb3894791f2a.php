<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <!--Google Map Area Start-->
    <div class="google-map-area bg_color--1 section text-center">
        <div class="ht-gmap3" id="htmap2" data-height="500" data-width="100%" data-zoom_enable="" data-zoom="10"
             data-map_type="roadmap" data-map_style="style11">
        </div>
    </div>
    <!--Google Map Area Start-->

    <!-- Page Content -->
    <main class="page-content">

        <!-- Start Contact Area -->
        <div class="bk_contact_classic bg_color--1 ptb--160 ptb-md--80 ptb-sm--80">
            <div class="container">
                <div class="row">

                    <!-- Start Single Slide -->
                    <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 wow move-up">
                        <div class="classic-address text-center">
                            <h4 class="heading heading-h4">Visit our studio at</h4>
                            <div class="desc mt--15">
                                <p class="bk_pra line-height-2-22">2005 Stokes Isle Apt. 896, <br> Vacaville 10010, USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Slide -->

                    <!-- Start Single Slide -->
                    <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 wow move-up mt_sm--40">
                        <div class="classic-address text-center">
                            <h4 class="heading heading-h4">Message us</h4>
                            <div class="desc mt--15">
                                <p class="bk_pra line-height-2-22">info@yourdomain.com <br> (+68) 120034509</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Slide -->

                    <!-- Start Single Slide -->
                    <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 wow move-up mt_md--40 mt_sm--40">
                        <div class="classic-address text-center">
                            <h4 class="heading heading-h4">Follow us</h4>
                            <div class="desc mt--15">
                                <ul class="social-icon icon-solid-rounded icon-size-medium text-center move-up wow">
                                    <li class="facebook"><a href="contact.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="contact.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="instagram"><a href="contact.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li class="dribbble"><a href="contact.html#" class="link" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="pinterest"><a href="contact.html#" class="link" aria-label="Pinterest"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Slide -->

                </div>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- Start Contact Form  -->
        <div class="brook-contact-form-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brook-section-title text-center mb--40">
                            <h4 class="heading heading-h4">Send us a message</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="contact-form" >
                            <form id="contact-form" action="http://whizthemes.com/shohel/php/mail.php">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input name="con_name" type="text" placeholder="Name *">
                                    </div>

                                    <div class="col-lg-12 mt--30">
                                        <input name="con_email" type="email" placeholder="Email *">
                                    </div>

                                    <div class="col-lg-12 mt--30">
                                        <input type="text" placeholder="Phone number">
                                    </div>

                                    <div class="col-lg-12 mt--30">
                                        <textarea name="con_message" placeholder="Your message"></textarea>
                                    </div>

                                    <div class="col-lg-12 mt--30">
                                        <input type="submit" value="Send message">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Form  -->

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
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/pages/contact/index.blade.php ENDPATH**/ ?>