<div class="container-fluid w90">
    <div class="homehouse padtop30 projecthome">
        <div class="row">
            <div class="col-12">
                <h2><?php echo e(__('Properties For Rent')); ?></h2>
                <p><?php echo e(theme_option('home_description_for_properties_for_rent')); ?></p>
            </div>
        </div>
        <property-component type="rent" url="<?php echo e(route('public.ajax.properties')); ?>"></property-component>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/short-codes/properties-for-rent.blade.php ENDPATH**/ ?>