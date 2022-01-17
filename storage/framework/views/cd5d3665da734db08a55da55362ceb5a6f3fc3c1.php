<div class="item">
    <div class="blii">
        <div class="img"><img class="thumb" data-src="<?php echo e(RvMedia::getImageUrl($project->image, 'small', false, RvMedia::getDefaultImage())); ?>" src="<?php echo e(RvMedia::getImageUrl($project->image, 'small', false, RvMedia::getDefaultImage())); ?>" alt="<?php echo e($project->name); ?>">
        </div>
        <a href="<?php echo e($project->url); ?>" class="linkdetail"></a>
        <ul class="item-price-wrap hide-on-list"><li class="h-type"><span><?php echo e($project->category->name); ?></span></li></ul>
    </div>

    <div class="description">
        <a href="<?php echo e($project->url); ?>"><h5><?php echo e($project->name); ?></h5>
            <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> <?php echo e($project->city->name); ?>, <?php echo e($project->city->state->name); ?></p>
            <?php if($project->price_from || $project->price_to): ?>
                <p class="bold500"><?php echo e(__('Price')); ?>: <?php if($project->price_from): ?> <span class="from"><?php echo e(__('From')); ?></span> <?php echo e(format_price($project->price_from, $project->currency)); ?> <?php endif; ?> <?php if($project->price_to): ?> - <?php echo e(format_price($project->price_to, $project->currency)); ?> <?php endif; ?></p>
            <?php endif; ?>
        </a>
    </div>
</div><?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/projects/item.blade.php ENDPATH**/ ?>