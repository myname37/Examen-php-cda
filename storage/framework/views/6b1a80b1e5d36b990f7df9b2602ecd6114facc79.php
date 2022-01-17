<ul class="list-of-suggetions mt-4">
    <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li data-value="<?php echo e($key); ?>"><?php echo $value; ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <li data-value=""><?php echo e($labelAll); ?></li>
</ul><?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/suggetions.blade.php ENDPATH**/ ?>