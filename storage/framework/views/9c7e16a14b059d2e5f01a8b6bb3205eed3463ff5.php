<div>
    <div class="col-lg-6 col-sm-6 col-12 pt--10">
        <div class="align-items-center d-flex post-tag">
            <div class="d-flex mr-0 social-share text-gray-900">
                <h6 class="heading heading-h6 py-2">SHARE:</h6>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($url); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo e($url); ?>text-<?php echo e($post->title); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://wa.me/?text=<?php echo e($post->title); ?><?php echo e($url); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://telegram.me/share/url?url=<?php echo e($url); ?>&text<?php echo e($post->title); ?>" target="_blank"><i class="fab fa-telegram"></i></a>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/components/social/links.blade.php ENDPATH**/ ?>