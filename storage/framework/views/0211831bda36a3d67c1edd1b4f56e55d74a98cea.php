<div class="form-group">
    <label for="select-type" class="control-label"><?php echo e(__('Type')); ?></label>
    <div class="select--arrow">
        <select name="type" id="select-type" class="form-control">
            <option value=""><?php echo e(__('-- Select --')); ?></option>
            <?php $__currentLoopData = \Botble\RealEstate\Enums\PropertyTypeEnum::labels(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>" <?php if(request()->input('type') == $key): ?> selected
                    <?php endif; ?>><?php echo e($label); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <i class="fas fa-angle-down"></i>
    </div>
</div><?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/type.blade.php ENDPATH**/ ?>