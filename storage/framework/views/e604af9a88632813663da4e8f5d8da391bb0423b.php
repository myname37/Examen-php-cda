<?php if(session()->has('status')): ?>
    <div class="alert alert-success">
        <span><?php echo clean(session('status')); ?></span>
    </div>
<?php endif; ?>

<?php if(session()->has('success_msg')): ?>
    <div class="alert alert-success">
        <span><?php echo clean(session('success_msg')); ?></span>
    </div>
<?php endif; ?>

<?php if(session()->has('error_msg')): ?>
    <div class="alert alert-danger">
        <span><?php echo clean(session('error_msg')); ?></span>
    </div>
<?php endif; ?>

<?php if(isset($errors) && $errors->count() > 0): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p <?php if($loop->last): ?> class="mb-0" <?php endif; ?>><?php echo clean($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/real-estate/account/auth/includes/messages.blade.php ENDPATH**/ ?>