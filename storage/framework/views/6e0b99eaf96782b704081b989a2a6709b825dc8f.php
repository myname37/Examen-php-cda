<?php if(!empty($errors) && $errors->has($name)): ?>
    <div class="text-danger">
        <small><?php echo e($errors->first($name)); ?></small>
    </div>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/core/base/resources/views//forms/partials/error.blade.php ENDPATH**/ ?>