<div>
    <!-- Start Single Blog -->

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.post.latest','data' => ['post' => $post]]); ?>
<?php $component->withName('post.latest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- End Single Blog -->
    <div class="brook-btn mt-sm-5 text-center">

        <!-- This is from the paginator class-->

        <?php if($posts->hasMorePages()): ?>
            <button wire:click="loadMore" class="brook-btn bk-btn-dark btn-sd-size mt-10 btn-rounded space-between">
                Load More
                <div wire:loading class="ml-1">
                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </button>
        <?php else: ?>
            <?php if($search && empty($post)): ?>
                <h4 class="">Empty search result</h4>
            <?php endif; ?>
            <h4 class="">No more Posts...</h4>
        <?php endif; ?>
    </div>

</div>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/livewire/home/latest-post.blade.php ENDPATH**/ ?>