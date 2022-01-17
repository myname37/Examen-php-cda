<div class="form-group">
    <label for="select-blocks" class="control-label"><?php echo e(__('Number of blocks')); ?></label>
    <div class="select--arrow">
        <select name="blocks" id="select-blocks" class="form-control">
            <option value=""><?php echo e(__('-- Select --')); ?></option>
            <?php for($i = 1; $i < 5; $i++): ?>
                <option value="<?php echo e($i); ?>" <?php if(request()->input('blocks') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?> <?php echo e($i == 1 ? __('block') : __('blocks')); ?></option>
            <?php endfor; ?>
            <option value="5" <?php if(request()->input('blocks') == 5): ?> selected <?php endif; ?>><?php echo e(__('5+ blocks')); ?></option>
        </select>
        <i class="fas fa-angle-down"></i>
    </div>
</div><?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/block.blade.php ENDPATH**/ ?>