<div class="form-group">
    <label for="select-bathroom" class="control-label"><?php echo e(__('Bathrooms')); ?></label>
    <div class="select--arrow">
        <select name="bathroom" id="select-bathroom" class="form-control">
            <option value=""><?php echo e(__('-- Select --')); ?></option>
            <?php for($i = 1; $i < 5; $i++): ?>
                <option value="<?php echo e($i); ?>" <?php if(request()->input('bathroom') == $i): ?> selected <?php endif; ?>>
                    <?php echo e($i); ?> <?php echo e($i == 1 ? __('room') : __('rooms')); ?>

                </option>
            <?php endfor; ?>
            <option value="5" <?php if(request()->input('bathroom') == 5): ?> selected <?php endif; ?>><?php echo e(__('5+ rooms')); ?></option>
        </select>
        <i class="fas fa-angle-down"></i>
    </div>
</div><?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/bathroom.blade.php ENDPATH**/ ?>