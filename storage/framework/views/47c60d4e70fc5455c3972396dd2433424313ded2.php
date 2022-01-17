<div id="loading">
    <div class="half-circle-spinner">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>
</div>

<input type="hidden" name="page" data-value="<?php echo e($projects->currentPage()); ?>">
<?php if($projects->count()): ?>
    <div class="row">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 colm10">
                <?php echo Theme::partial('real-estate.projects.item', compact('project')); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php else: ?>
    <div class="alert alert-warning" role="alert">
        <?php echo e(__('0 results')); ?>

    </div>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/projects/items.blade.php ENDPATH**/ ?>