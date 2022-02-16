<div class="col-lg-4 pl--40 pl_lg--15 pl_md--15 pl_sm--15 mt_md--40 mt_sm--40">
    <div class="blog-sidebar-container">
        <div class="blog-sidebar-wrapper">

            <!-- Start Single Widget -->
            <div class="bl-sidebar search">
                <h5 class="widget-title">Search</h5>
                <form class="inner" method="get">
                    <div class="search-box">
                        <input  type="text" name="search" placeholder="Enter search keyword…">
                        <button type="submit"><span class="fa fa-search"></span></button>
                    </div>
                </form>
            </div>
            <!-- End Single Widget -->
            <div class="bl-sidebar">

            </div>

            <!-- Start Single Widget -->
            <div class="bl-sidebar banner mt--50 wow move-up">
                <div class="inner">
                    <div class="thumb">
                        <img class="w-100" src="../../img/blog/big-img/banner-image.jpg" alt="banner">
                    </div>
                    <div class="content">
                        <h4 class="heading heading-h4 text-white">Spot for banner</h4>
                        <div class="banner-btn mt--25">
                            <a class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between"
                               href="blog.html#">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Widget -->

            <!-- Start Single Widget -->
            <div class="bl-sidebar tag mt--50 wow move-up">
                <h5 class="widget-title">Tags</h5>
                <div class="inner">
                    <ul class="tagcloud">
                        <?php $__empty_1 = true; $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li><a href="<?php echo e(route('tags.show', $tag)); ?>"><?php echo e($tag->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li><a href="#">No Tags</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <!-- End Single Widget -->

        </div>
    </div>
    <!-- End Sidebar Area -->
</div>

<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/components/layouts/blog-sidebar.blade.php ENDPATH**/ ?>