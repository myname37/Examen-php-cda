<div class="form-group">
    <label for="select-floor" class="control-label"><?php echo e(__('Floors')); ?></label>
    <div class="select--arrow">
        <select name="floor" id="select-floor" class="form-control">
            <option value=""><?php echo e(__('-- Select --')); ?></option>
            <?php for($i = 1; $i < 5; $i++): ?>
                <option value="<?php echo e($i); ?>" <?php if(request()->input('floor') == $i): ?> selected <?php endif; ?>>
                    <?php echo e($i); ?> <?php echo e($i == 1 ? __('floor') : __('floors')); ?>

                </option>
            <?php endfor; ?>
            <option value="5" <?php if(request()->input('floor') == 5): ?> selected <?php endif; ?>><?php echo e(__('5+ floors')); ?></option>
        </select>
        <i class="fas fa-angle-down"></i>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/floor.blade.php ENDPATH**/ ?>