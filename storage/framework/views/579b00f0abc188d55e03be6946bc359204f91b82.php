
<?php if($paginator->hasPages()): ?>
    <div class="col-lg-8">
        <div class="brook-pagination-wrapper text-center pt--80">
            <ul class="brook-pagination">

                <?php if($paginator->onFirstPage()): ?>
                    <li><a class="d-none"><i class="fa fa-angle-left"></i></a></li>
                <?php else: ?>
                    <li><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><i class="fa fa-angle-left"></i></a></li>
                <?php endif; ?>

                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if(is_string($element)): ?>
                        <li class="disabled"><a><?php echo e($element); ?></a></li>
                    <?php endif; ?>

                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="active"><a><?php echo e($page); ?></a></li>
                            <?php else: ?>
                                <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                <?php if($paginator->hasMorePages()): ?>
                        <li><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="fa fa-angle-right"></i></a></li>
                <?php else: ?>
                        <li><a class="d-none"><i class="fa fa-angle-right"></i></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/vendor/pagination/tags-pagination.blade.php ENDPATH**/ ?>