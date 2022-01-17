<?php $__env->startSection('content'); ?>
    <div class="widget meta-boxes">
        <div class="widget-title">
            <h4>&nbsp; <?php echo e(trans('plugins/translation::translation.locales')); ?></h4>
        </div>
        <div class="widget-body box-translation">
            <div class="row">
                <div class="col-md-5">
                    <div class="main-form">
                        <div class="form-wrap">
                            <form class="add-locale-form" action="<?php echo e(route('translations.locales')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-3">
                                    <label for="locale_id" class="control-label"><?php echo e(trans('plugins/translation::translation.locale')); ?></label>
                                    <div class="ui-select-wrapper form-group">
                                        <select id="locale_id" name="locale" class="form-control select-search-full">
                                            <option value=""><?php echo e(trans('plugins/translation::translation.select_language')); ?></option>
                                            <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"> <?php echo e($name); ?> - <?php echo e($key); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <svg class="svg-next-icon svg-next-icon-size-16">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                        </svg>
                                    </div>
                                </div>
                                <p class="submit">
                                    <button class="btn btn-primary" type="submit"><?php echo e(trans('plugins/translation::translation.add_new_language')); ?></button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="table-responsive">
                        <table class="table table-hover table-language table-header-color" style="background: #f1f1f1;">
                            <thead>
                            <tr>
                                <th class="text-start"><span><?php echo e(trans('plugins/translation::translation.name')); ?></span></th>
                                <th class="text-center"><span><?php echo e(trans('plugins/translation::translation.locale')); ?></span></th>
                                <th class="text-center"><span><?php echo e(trans('plugins/translation::translation.actions')); ?></span></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $existingLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $__env->make('plugins/translation::partials.locale-item', compact('item'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <?php echo $__env->make('core/table::partials.modal-item', [
        'type'        => 'danger',
        'name'        => 'modal-confirm-delete',
        'title'       => trans('core/base::tables.confirm_delete'),
        'content'     => trans('plugins/translation::translation.confirm_delete_message'),
        'action_name' => trans('core/base::tables.delete'),
        'action_button_attributes' => [
            'class' => 'delete-crud-entry',
        ],
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\immo\platform/plugins/translation/resources/views//locales.blade.php ENDPATH**/ ?>