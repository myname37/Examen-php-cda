<div class="search-box">
    <div class="screen-darken"></div>
    <div class="search-box-content">
        <div class="d-md-none bg-primary p-2">
            <span class="text-white"><?php echo e(__('Filter')); ?></span>
            <span class="float-right toggle-filter-offcanvas text-white">
                <i class="far fa-times-circle"></i>
            </span>
        </div>
        <div class="search-box-items">
            <div class="row ml-md-0 mr-md-0">
                <div class="col-xl-3 col-lg-2 col-md-4 px-1">
                    <?php echo Theme::partial('real-estate.filters.keyword'); ?>

                </div>
                <div class="col-lg-2 col-md-4 px-1">
                    <?php echo Theme::partial('real-estate.filters.city'); ?>

                </div>
                <div class="col-lg-2 col-md-4 px-1">
                    <?php echo Theme::partial('real-estate.filters.choices', ['type' => $type, 'categories' => $categories, 'labelDefault' => __('Type, category...')]); ?>

                </div>
                <?php if($type == 'property'): ?>
                    <div class="col-lg-2 col-md-4 px-1 mb-2">
                        <label for="select-type" class="control-label"><?php echo e(__('Price range')); ?></label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuPrice" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span><?php echo e(__('All prices')); ?></span>
                            </button>
                            <div class="dropdown-menu" style="min-width: 20em;" aria-labelledby="dropdownMenuPrice">
                                <div class="dropdown-item">
                                    <?php echo Theme::partial('real-estate.filters.price'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 px-1 mb-2">
                        <label for="select-type" class="control-label"><?php echo e(__('Square range')); ?></label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuSquare" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span><?php echo e(__('All squares')); ?></span>
                            </button>
                            <div class="dropdown-menu" style="min-width: 20em;" aria-labelledby="dropdownMenuSquare">
                                <div class="dropdown-item">
                                    <?php echo Theme::partial('real-estate.filters.square'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-lg-2 col-md-4 px-1">
                        <?php echo Theme::partial('real-estate.filters.floor'); ?>

                    </div>
                    <div class="col-lg-2 col-md-4 px-1">
                        <label for="select-type" class="control-label"><?php echo e(__('Flat range')); ?></label>
                        <div class="dropdown mb-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuFlat" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span><?php echo e(__('All squares')); ?></span>
                            </button>
                            <div class="dropdown-menu" style="min-width: 20em;" aria-labelledby="dropdownMenuFlat">
                                <div class="dropdown-item">
                                    <?php echo Theme::partial('real-estate.filters.flat'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-lg-2 col-xl-1 col-md-2 px-1 button-search-wrapper" style="align-self: flex-end;">
                    <div class="btn-group text-center w-100 ">
                        <button type="submit" class="btn btn-primary btn-full"><?php echo e(__('Search')); ?></button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="reset"><?php echo e(__('Reset filters')); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/real-estate/includes/search-box.blade.php ENDPATH**/ ?>