<div class="agents-grid">

    <div class="agents-grid-wrap">

        <div class="fr-grid-thumb">
            <?php if($account->username): ?>
                <a href="<?php echo e(route('public.agent', $account->username)); ?>">
                    <img src="<?php echo e($account->avatar_url); ?>" class="img-fluid mx-auto" alt="<?php echo e($account->name); ?>">
                </a>
            <?php else: ?>
                <img src="<?php echo e($account->avatar_url); ?>" class="img-fluid mx-auto" alt="<?php echo e($account->name); ?>">
            <?php endif; ?>
        </div>

        <div class="fr-grid-detail">
            <div class="fr-grid-detail-flex">
                <h5 class="fr-can-name">
                    <?php if($account->username): ?>
                        <a href="<?php echo e(route('public.agent', $account->username)); ?>"><?php echo e($account->name); ?></a>
                    <?php else: ?>
                        <?php echo e($account->name); ?>

                    <?php endif; ?>
                </h5>
            </div>
            <div class="fr-grid-detail-flex-right">
                <div class="agent-email"><a href="mailto:<?php echo e($account->email); ?>"><i class="fa fa-envelope"></i></a></div>
            </div>
        </div>

    </div>

    <div class="fr-grid-info">
        <ul>
            <li><strong><?php echo e(__('Phone')); ?>:</strong> <?php echo e($account->phone); ?></li>
            <li><strong><?php echo e(__('Email')); ?>:</strong> <?php echo e($account->email); ?></li>
        </ul>
    </div>

    <div class="fr-grid-footer">
        <div class="fr-grid-footer-flex">
            <span class="fr-position"><i class="fa fa-home"></i><?php echo e(__(':count properties', ['count' => $account->properties_count])); ?></span>
        </div>
        <?php if($account->username): ?>
            <div class="fr-grid-footer-flex-right">
                <a href="<?php echo e(route('public.agent', $account->username)); ?>" class="prt-view" tabindex="0"><?php echo e(__('View')); ?></a>
            </div>
        <?php endif; ?>
    </div>

</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/agents/item.blade.php ENDPATH**/ ?>