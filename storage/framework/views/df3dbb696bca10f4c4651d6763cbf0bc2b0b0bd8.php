<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
<meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">



<meta property="og:description" content="<?php echo $__env->yieldContent('description'); ?>">
<meta property="og:description" content="<?php echo $__env->yieldContent('metaImage'); ?>">
<meta property="og:description" content="image/jpeg">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?php echo e(config('settings.twitter.handle')); ?>">
<meta name="twitter:image" content="<?php echo $__env->yieldContent('metaImage'); ?>">
<meta name="twitter:description" content="<?php echo $__env->yieldContent('description'); ?>">
<meta name="twitter:title" content="<?php echo $__env->yieldContent('title'); ?>">


<title><?php echo $__env->yieldContent('title', 'Semechsystems'); ?></title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


<link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
<link rel="apple-touch-icon" href="<?php echo e(asset('img/icon.png')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('styles/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('styles/css/revoulation.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('styles/css/plugins.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('styles/css/style.min.css')); ?>">

<?php echo \Livewire\Livewire::styles(); ?>

<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/components/partials/header.blade.php ENDPATH**/ ?>