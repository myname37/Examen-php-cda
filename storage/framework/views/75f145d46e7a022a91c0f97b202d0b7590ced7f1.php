<div class="form-group" style="position: relative;">
    <input type="hidden" name="city_id">
    <label for="location" class="control-label"><?php echo e(__('Location')); ?></label>
    <div class="location-input" data-url="<?php echo e(route('public.ajax.cities')); ?>" style="position: relative;">
        <div class="input-has-icon">
            <input class="select-city-state form-control" id="location" name="location"
                value="<?php echo e(request()->input('location')); ?>" placeholder="<?php echo e(__('City, State')); ?>"
                autocomplete="off">
            <i class="far fa-location"></i>
        </div>
        <div class="spinner-icon">
            <i class="fas fa-spin fa-spinner"></i>
        </div>
        <div class="suggestion">

        </div>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/city.blade.php ENDPATH**/ ?>