<ul class="breadcrumb">
    <?php $__currentLoopData = $crumbs = Theme::breadcrumb()->getCrumbs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($i != (count($crumbs) - 1)): ?>
            <li class="breadcrumb-item"><a href="<?php echo e($crumb['url']); ?>"><?php echo $crumb['label']; ?></a></li>
        <?php else: ?>
            <li class="breadcrumb-item active"><?php echo $crumb['label']; ?></li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/breadcrumb.blade.php ENDPATH**/ ?>