<div>
    <table width="100%">
        <tr>
            <td width="90">
                <div class="blii"><img src="<?php echo e($property->image_thumb); ?>" width="80" alt="<?php echo e($property->name); ?>">
                    <div class="status"><?php echo $property->status_html; ?></div>
                </div>
            </td>
            <td>
                <div class="infomarker">
                    <h5><a href="<?php echo e($property->url); ?>" target="_blank"><?php echo e($property->name); ?></a></h5>
                    <div class="text-info"><strong><?php echo e($property->price_html); ?></strong></div>
                    <div><?php echo e($property->city_name); ?></div>
                    <div>
                        <span><?php echo e($property->square_text); ?></span> &nbsp; &nbsp;
                        <span>
                            <i><img src="<?php echo e(Theme::asset()->url('images/bed.svg')); ?>" alt="icon"></i>
                            <i class="vti"><?php echo e($property->number_bedroom); ?></i></span> &nbsp; &nbsp; <span>
                            <i><img src="<?php echo e(Theme::asset()->url('images/bath.svg')); ?>" alt="icon"></i>
                            <i class="vti"><?php echo e($property->number_bathroom); ?></i>
                        </span>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/properties/map.blade.php ENDPATH**/ ?>