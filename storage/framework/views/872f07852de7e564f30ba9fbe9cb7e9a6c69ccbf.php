<ul>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="#" data-id="<?php echo e($item->id); ?>"><?php echo e($item->name); ?>, <?php echo e($item->state->name); ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/city-suggestion.blade.php ENDPATH**/ ?>