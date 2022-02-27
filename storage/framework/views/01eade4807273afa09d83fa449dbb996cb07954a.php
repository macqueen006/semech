<!doctype html>
<html lang="en">
<head>
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.partials.admin_head','data' => []]); ?>
<?php $component->withName('partials.admin_head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="crm_body_bg">


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.partials.admin_nav','data' => []]); ?>
<?php $component->withName('partials.admin_nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<section class="main_content dashboard_part">

    <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area">
                        <!-- add other content here -->
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a href="#"> <img src="<?php echo e(asset('admins/img/icon/bell.svg')); ?>" alt="images"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="<?php echo e(asset('admins/img/icon/msg.svg')); ?>" alt="images"> </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/')); ?>">Visit Site</a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="<?php echo e(asset('admins/img/client_img.png')); ?>" alt="#">
                            <div class="profile_info_iner">
                                <p>Welcome Admin!</p>
                                <h5><?php echo e(authUser()->name); ?></h5>
                                <div class="profile_info_details">
                                    <a href="<?php echo e(route('admin.profile.index')); ?>">My Profile <i class="ti-user"></i></a>
                                    <a href="<?php echo e(route('admin.settings.index')); ?>">Settings <i
                                            class="ti-settings"></i></a>
                                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                    this.closest('form').submit();">Log Out <i class="ti-shift-left"></i></a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ menu  -->

<?php echo e($slot); ?>

<!-- footer part -->
    <div class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                        <p>2022 © Semech - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Godwin</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.partials.admin_footer','data' => []]); ?>
<?php $component->withName('partials.admin_footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/layouts/admin/app.blade.php ENDPATH**/ ?>