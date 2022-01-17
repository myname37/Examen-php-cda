<div class="item" data-lat="<?php echo e($property->latitude); ?>" data-long="<?php echo e($property->longitude); ?>">
    <div class="blii">
        <div class="img">
            <img class="thumb"
                data-src="<?php echo e(RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage())); ?>"
                src="<?php echo e(RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage())); ?>"
                alt="<?php echo e($property->name); ?>">
        </div>
        <a href="<?php echo e($property->url); ?>" class="linkdetail"></a>
        <div class="media-count-wrapper">
            <div class="media-count">
                <img src="<?php echo e(Theme::asset()->url('images/media-count.svg')); ?>" alt="media">
                <span><?php echo e(count($property->images)); ?></span>
            </div>
        </div>
        <div class="status"><?php echo $property->status->toHtml(); ?></div>
        <ul class="item-price-wrap hide-on-list">
            <li class="h-type"><span><?php echo e($property->category->name); ?></span></li>
            <li class="item-price"><?php echo e(format_price($property->price, $property->currency)); ?></li>
        </ul>
    </div>

    <div class="description">
        <a href="#" class="text-orange heart add-to-wishlist" data-id="<?php echo e($property->id); ?>"
            title="<?php echo e(__('I care about this property!!!')); ?>"><i class="far fa-heart"></i></a>
        <a href="<?php echo e($property->url); ?>">
            <h5><?php echo e($property->name); ?></h5>
            <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> <?php echo e($property->city->name); ?>,
                <?php echo e($property->city->state->name); ?></p>
        </a>
        <p class="threemt bold500">
            <?php if($property->number_bedroom): ?>
                <span data-toggle="tooltip" data-placement="top" data-original-title="<?php echo e(__('Number of rooms')); ?>">
                    <i><img src="<?php echo e(Theme::asset()->url('images/bed.svg')); ?>" alt="icon"></i> <i
                        class="vti"><?php echo e($property->number_bedroom); ?></i>
                </span>
            <?php endif; ?>
            <?php if($property->number_bathroom): ?>
                <span data-toggle="tooltip" data-placement="top"
                    data-original-title="<?php echo e(__('Number of rest rooms')); ?>"> <i><img
                            src="<?php echo e(Theme::asset()->url('images/bath.svg')); ?>" alt="icon"></i> <i
                        class="vti"><?php echo e($property->number_bathroom); ?></i></span>
            <?php endif; ?>
            <?php if($property->square): ?>
                <span data-toggle="tooltip" data-placement="top" data-original-title="<?php echo e(__('Square')); ?>"> <i><img
                            src="<?php echo e(Theme::asset()->url('images/area.svg')); ?>" alt="icon"></i> <i
                        class="vti"><?php echo e($property->square_text); ?></i> </span>
            <?php endif; ?>
            <?php echo apply_filters('property_item_listing_extra_info', null, $property); ?>

        </p>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/properties/item.blade.php ENDPATH**/ ?>