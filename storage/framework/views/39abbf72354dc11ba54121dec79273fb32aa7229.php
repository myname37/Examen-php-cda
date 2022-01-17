<div class="form-group">
    <label for="select-bedroom" class="control-label"><?php echo e(__('Bedrooms')); ?></label>
    <div class="select--arrow">
        <select name="bedroom" id="select-bedroom" class="form-control">
            <option value=""><?php echo e(__('-- Select --')); ?></option>
            <?php for($i = 1; $i < 5; $i++): ?>
                <option value="<?php echo e($i); ?>" <?php if(request()->input('bedroom') == $i): ?> selected <?php endif; ?>>
                    <?php echo e($i); ?> <?php echo e($i == 1 ? __('room') : __('rooms')); ?>

                </option>
            <?php endfor; ?>
            <option value="5" <?php if(request()->input('bedroom') == 5): ?> selected <?php endif; ?>><?php echo e(__('5+ rooms')); ?></option>
        </select>
        <i class="fas fa-angle-down"></i>
    </div>
</div><?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/bedroom.blade.php ENDPATH**/ ?>