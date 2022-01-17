<div id="loading">
    <div class="half-circle-spinner">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>
</div>

<input type="hidden" name="page" data-value="<?php echo e($properties->currentPage()); ?>">
<?php if($properties->count()): ?>
    <div class="row">
        <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="colm10 property-item" data-lat="<?php echo e($property->latitude); ?>" data-long="<?php echo e($property->longitude); ?>">
                <?php echo Theme::partial('real-estate.properties.item', compact('property')); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br>
<?php else: ?>
    <div class="alert alert-warning" role="alert">
        <?php echo e(__('0 results')); ?>

    </div>
<?php endif; ?>

<div class="col-sm-12">
    <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation example">
        <?php echo $properties->withQueryString()->onEachSide(1)->links(); ?>

    </nav>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/properties/items.blade.php ENDPATH**/ ?>