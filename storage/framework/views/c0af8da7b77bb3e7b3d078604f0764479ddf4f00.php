<div class="post-meta">
    <p class="d-inline-block"><i class="fa fa-calendar"></i> <?php echo e($post->created_at->translatedFormat('M d, Y')); ?> <?php echo e(__('in')); ?> <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($category->url); ?>"><?php echo e($category->name); ?></a>
            <?php if(!$loop->last): ?>
                ,
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
    - <p class="d-inline-block"><i class="fa fa-eye"></i> <?php echo e(number_format($post->views)); ?></p>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/post-meta.blade.php ENDPATH**/ ?>