<label for="select-type" class="control-label"><?php echo e(__('Choices')); ?></label>
<div class="dropdown mb-2 select-dropdown" data-text-default="<?php echo e($labelDefault); ?>">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuChoise" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span><?php echo e($labelDefault); ?></span>
    </button>
    <div class="dropdown-menu keep-open" style="min-width: 20em" aria-labelledby="dropdownMenuChoise">
        <?php if($type == 'property'): ?>
            <div class="dropdown-item">
                <div class="row">
                    <div class="col-6 pr-1">
                        <?php echo Theme::partial('real-estate.filters.type'); ?>

                    </div>
                    <div class="col-6 pl-1">
                        <?php echo Theme::partial('real-estate.filters.categories', ['categories' => $categories]); ?>

                    </div>
                </div>
            </div>
            <div class="dropdown-item">
                <div class="row">
                    <div class="col-6 pr-1">
                        <?php echo Theme::partial('real-estate.filters.bedroom'); ?>

                    </div>
                    <div class="col-6 pl-1">
                        <?php echo Theme::partial('real-estate.filters.bathroom'); ?>

                    </div>
                </div>
            </div>
            <div class="dropdown-item">
                <div class="row">
                    <div class="col-6 pr-1">
                        <?php echo Theme::partial('real-estate.filters.floor'); ?>

                    </div>
                    <div class="col-6" style="align-self: flex-end">
                        <div class="form-group">
                            <div class="col-xs-auto">
                                <button class="btn btn-primary"><?php echo e(__('OK')); ?></button>
                                <button type="button" class="btn btn-primary bg-secondary float-right btn-clear"><?php echo e(__('Clear')); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="dropdown-item">
                <?php echo Theme::partial('real-estate.filters.categories', ['categories' => $categories]); ?>

            </div>
            <div class="dropdown-item">
                <?php echo Theme::partial('real-estate.filters.block'); ?>

            </div>
            <div class="dropdown-item">
                <div class="form-group">
                    <div class="col-xs-auto">
                        <button class="btn btn-primary"><?php echo e(__('OK')); ?></button>
                        <button type="button" class="btn btn-primary bg-secondary float-right btn-clear"><?php echo e(__('Clear')); ?></button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/real-estate/filters/choices.blade.php ENDPATH**/ ?>