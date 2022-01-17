<div class="form-group">
    <label for="select-category" class="control-label"><?php echo e(__('Category')); ?></label>
    <div class="select--arrow">
        <select name="category_id" id="select-category" class="form-control">
            <option value=""><?php echo e(__('-- Select --')); ?></option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>" <?php if(request()->input('category_id') == $category->id): ?> selected <?php endif; ?>><?php echo e($category->indent_text . ' ' . $category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <i class="fas fa-angle-down"></i>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/categories.blade.php ENDPATH**/ ?>