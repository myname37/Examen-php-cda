<div class="padtop70">
    <div class="box_shadow">
        <div class="container-fluid w90">
            <div class="homehouse projecthome">
                <div class="row">
                    <div class="col-12">
                        <h2><?php echo e(__('Properties For Sale')); ?></h2>
                        <p><?php echo e(theme_option('home_description_for_properties_for_sale')); ?></p>
                    </div>
                </div>
                <property-component type="sale" url="<?php echo e(route('public.ajax.properties')); ?>"></property-component>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/short-codes/properties-for-sale.blade.php ENDPATH**/ ?>