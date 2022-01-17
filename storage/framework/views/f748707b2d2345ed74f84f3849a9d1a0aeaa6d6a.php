<?php
    $calc = [
        [
            'number'    => 0,
            'label'     => "__value__ "
        ],
    ];
    $labelAll = __('All flats');
    $flats = [
        '0-20'      => '&lt; 30',
        '20-50'     => '20 - 50',
        '50-100'    => '50 - 100',
        '100-150'   => '100 - 150',
        '150-200'   => '150 -  200',
        '200-300'   => '200 - 300',
        '300-0'     => '&gt; 300',
    ];
?>
<div class="form-group min-max-input" data-calc="<?php echo e(json_encode($calc, true)); ?>" data-all="<?php echo e($labelAll); ?>">
    <div class="row">
        <div class="col-5 pr-1">
            <label for="min_flat" class="control-label"><?php echo e(__('Flat from')); ?></label>
            <input type="number" name="min_flat" class="form-control min-input" id="min_flat"
                value="<?php echo e(request()->input('min_flat')); ?>" placeholder="<?php echo e(__('From')); ?>" min="0" step="1">
            <span class="position-absolute min-label"></span>
        </div>
        <div class="col-5 px-1">
            <label for="max_flat" class="control-label"><?php echo e(__('Flat to')); ?></label>
            <input type="number" name="max_flat" class="form-control max-input" id="max_flat"
                value="<?php echo e(request()->input('max_flat')); ?>" placeholder="<?php echo e(__('To')); ?>" min="0" step="1">
            <span class="position-absolute max-label"></span>
        </div>
        <div class="col-2 px-0" style="align-self: flex-end">
            <button class="btn btn-primary"><?php echo e(__('OK')); ?></button>
        </div>
    </div>
</div>
<?php echo Theme::partial('real-estate.filters.suggetions', ['collections' => $flats, 'labelAll' => $labelAll]); ?><?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/flat.blade.php ENDPATH**/ ?>