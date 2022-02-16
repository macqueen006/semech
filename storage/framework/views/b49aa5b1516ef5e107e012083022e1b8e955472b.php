<div class="creative-blog wow move-up">
    <div class="blog-grid blog-creative">
        <div class="post-thumb">
            <a href="<?php echo e(route('blog.show', $post)); ?>">
                <img src="<?php echo e(asset('storage/'. $post->image)); ?>" alt="<?php echo e($post->title . ' image'); ?>">
            </a>
        </div>
        <div class="post-content">
            <div class="post-inner">
                <h4 class="heading heading-h4"><a href="<?php echo e(route('blog.show', $post)); ?>"><?php echo e($post->title); ?></a></h4>
                <div class="post-meta">
                    <div class="post-date"><?php echo e($post->published_at->format('M d, Y')); ?></div>
                    <?php $__currentLoopData = $post->tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post-category"><a href="<?php echo e(route('tags.show', $tag)); ?>"><?php echo e($tag->name); ?></a></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="desc pl_md--20 pl_sm--10 mt--20">
                    <p class="bk_pra"><?php echo e($post->excerpt()); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/components/post/latest.blade.php ENDPATH**/ ?>