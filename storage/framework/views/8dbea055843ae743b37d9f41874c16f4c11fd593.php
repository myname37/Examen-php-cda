<?php
    $calc = [
        [
            'number' => 1000000000,
            'label' => '__value__ ' . __('billion')
        ],
        [
            'number' => 1000000,
            'label' => '__value__ ' . __('million')
        ],
        [
            'number' => 1000,
            'label' => '__value__ ' . __('thousand')
        ],
        [
            'number' => 0,
            'label' => '__value__'
        ],
    ];
    $symbol = '';
    $currency = get_application_currency();
    if ($currency) {
        $symbol = ' (' . $currency->symbol . ')';
    }
?>
<div class="form-group min-max-input" data-calc="<?php echo e(json_encode($calc, true)); ?>" data-all="<?php echo e(__('All prices')); ?>">
    <div class="row">
        <div class="col-5 pr-1">
            <label for="min_price" class="control-label"><?php echo e(__('Price from') . $symbol); ?></label>
            <input type="number" name="min_price" class="form-control min-input" id="min_price"
                value="<?php echo e(request()->input('min_price')); ?>" placeholder="<?php echo e(__('From')); ?>" min="0" step="1" >
            <span class="position-absolute min-label"></span>
        </div>
        <div class="col-5 px-1">
            <label for="max_price" class="control-label"><?php echo e(__('Price to') . $symbol); ?></label>
            <input type="number" name="max_price" class="form-control max-input" id="max_price"
                value="<?php echo e(request()->input('max_price')); ?>" placeholder="<?php echo e(__('To')); ?>" min="0" step="1">
            <span class="position-absolute max-label"></span>
        </div>
        <div class="col-2 px-0 btn-min-max" style="align-self: flex-end">
            <button class="btn btn-primary"><?php echo e(__('OK')); ?></button>
        </div>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/price.blade.php ENDPATH**/ ?>