<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.partials.header','data' => []]); ?>
<?php $component->withName('partials.header'); ?>
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
<body class="template-color-40 template-font-1">

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- start preloader  -->
<div id="page-preloader" class="page-loading clearfix">
    <div class="page-load-inner">
        <div class="preloader-wrap">
            <div class="wrap-2">
                <div class=""><img src="<?php echo e(asset('img/logo/semech-systems-logo-1.png')); ?>" width="200" alt="Semech Preloader"></div>
            </div>
        </div>
    </div>
</div>
<!-- end preloader  -->

<section id="wrapper" class="wrapper">
    <!-- main navigation -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.partials.nav','data' => []]); ?>
<?php $component->withName('partials.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <!-- end navigation -->
        <?php echo e($slot); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.partials.footer','data' => []]); ?>
<?php $component->withName('partials.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</section>

<?php echo $__env->yieldPushContent('modals'); ?>

<script src="<?php echo e(asset('scripts/js/vendor/vendor.min.js')); ?>"></script>

<script src="<?php echo e(asset('scripts/js/plugins.min.js')); ?>"></script>



<!-- REVOLUTION JS FILES -->
<?php echo \Livewire\Livewire::scripts(); ?>

<script src="<?php echo e(asset('scripts/js/revolution.tools.min.js')); ?>"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="<?php echo e(asset('scripts/js/revolution.extension.min.js')); ?>"></script>
<script src="<?php echo e(asset('scripts/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('scripts/js/revoulation.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/layouts/app.blade.php ENDPATH**/ ?>