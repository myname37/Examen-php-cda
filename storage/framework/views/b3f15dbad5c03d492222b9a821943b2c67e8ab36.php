<?php if($options['help_block']['text'] && !$options['is_child']): ?>
    <<?php echo e($options['help_block']['tag']); ?> <?php echo $options['help_block']['helpBlockAttrs']; ?>>
        <?php echo $options['help_block']['text']; ?>

    </<?php echo e($options['help_block']['tag']); ?>>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/core/base/resources/views//forms/partials/help-block.blade.php ENDPATH**/ ?>