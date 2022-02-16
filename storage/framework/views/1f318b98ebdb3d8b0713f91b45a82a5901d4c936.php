<!-- main navigation -->
<header
    class="br_header header-default position-from--top header-transparent black-logo--version header-fixed-width header-fixed-150 headroom--sticky header-mega-menu clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header__wrapper mr--0">
                    <!-- Header Left -->
                    <div class="header-left">
                        <div class="logo">
                            <a href="<?php echo e(url('/')); ?>">
                                <img src="<?php echo e(asset('img/logo/semech-systems-logo-1.png')); ?>" alt="Images">
                            </a>
                        </div>
                    </div>
                    <!-- Main menu Wrap -->
                    <section class="mainmenu-wrapper d-none d-lg-block">
                        <nav class="page_nav">
                            <ul class="mainmenu">

                                <li class="lavel-1"><a href="<?php echo e(url('/')); ?>"><span>Home</span></a></li>
                                <li class="lavel-1"><a href="<?php echo e(route('about')); ?>"><span>About</span></a></li>
                                <li class="lavel-1 with--drop slide-dropdown"><a href="#"><span>Services</span></a>
                                    <!-- Start Dropdown Menu -->
                                    <ul class="dropdown__menu">
                                        <li><a href="<?php echo e(route('service')); ?>"><span>Service</span></a></li>
                                        <li><a href="<?php echo e(route('team')); ?>"><span>Team</span></a></li>
                                    </ul>
                                    <!-- End Dropdown Menu -->
                                </li>

                                <li class="lavel-1"><a href="<?php echo e(route('blog.index')); ?>"><span>Blog</span></a>
                                </li>
                                <li class="lavel-1"><a href="<?php echo e(route('contact')); ?>"><span>Contact</span></a></li>
                                <?php if(auth()->check() && auth()->user()->hasAnyRole('super-admin')): ?>
                                <li class="lavel-1"><a href="<?php echo e(route('admin.index')); ?>"><span>Admin</span></a></li>
                                <?php endif; ?>
                                <?php if(auth()->user()): ?>
                                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <li class="lavel-1"><a href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault(); this.closest('form').submit();">
                                                <span>Logout</span></a>
                                        </li>
                                    </form>
                                <?php endif; ?>

                            </ul>
                        </nav>
                    </section>
                    <!-- Header Right -->
                    <div class="header-right">
                        <!-- Start Popup Search Wrap -->
                        <div class="popup-search-wrap">
                            <a class="btn-search-click" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <!-- End Popup Search Wrap -->
                        <!-- Start Hamberger -->
                        <div
                            class="manu-hamber popup-mobile-click d-block d-lg-none black-version d-block d-xl-none pl_md--10 pl_sm--10">
                            <div>
                                <i></i>
                            </div>
                        </div>
                        <!-- End Hamberger -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
<!--End navigation -->

<!-- mobile Menu -->
<div class="popup-mobile-manu popup-mobile-visiable">
    <div class="inner">
        <div class="mobileheader">
            <div class="logo">
                <a href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('img/logo/semech-systems-logo-1.png')); ?>" alt="logo">
                </a>
            </div>
            <a class="mobile-close" href="#"></a>
        </div>
        <div class="menu-content">
            <ul class="menulist object-custom-menu">
                <li><a href="<?php echo e(url('/')); ?>"><span>Home</span></a></li>
                <li><a href="<?php echo e(route('about')); ?>"><span>About</span></a></li>

                <li class="has-mega-menu"><a href="#"><span>Services</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="<?php echo e(route('service')); ?>"><span>Service</span></a></li>
                        <li><a href="<?php echo e(route('team')); ?>"><span>Team</span></a></li>
                    </ul>
                </li>


                <li class=""><a href="<?php echo e(route('blog.index')); ?>"><span>Blog</span></a>
                </li>

                <li class=""><a href="<?php echo e(route('contact')); ?>"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End mobile Menu -->

<!-- start search -->
<div class="brook-search-popup">
    <div class="inner">
        <div class="search-header">
            <div class="logo">
                <a href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('img/logo/semech-systems-logo-1.png')); ?>" alt="logo">
                </a>
            </div>
            <a href="#" class="search-close"></a>
        </div>
        <div class="search-content">
            <form action="<?php echo e(route('blog.index')); ?>" method="get">
                <label>
                    <input type="search" name="search" placeholder="Enter search keyword…">
                </label>
                <button class="search-submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- end search -->
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/components/partials/nav.blade.php ENDPATH**/ ?>