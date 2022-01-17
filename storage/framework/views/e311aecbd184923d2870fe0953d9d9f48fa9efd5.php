<div class="padtop70">
    <div class="box_shadow">
        <div class="container-fluid w90">
            <div class="homehouse projecthome">
                <div class="row">
                    <div class="col-12">
                        <h2><?php echo clean($title); ?></h2>
                        <?php if($description): ?>
                            <p><?php echo clean($description); ?></p>
                        <?php endif; ?>
                        <?php if($subtitle): ?>
                            <p><?php echo clean($subtitle); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <featured-agents-component url="<?php echo e(route('public.ajax.featured-agents')); ?>" :limit="<?php echo e($limit ? (int)$limit : 4); ?>"></featured-agents-component>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/short-codes/featured-agents.blade.php ENDPATH**/ ?>