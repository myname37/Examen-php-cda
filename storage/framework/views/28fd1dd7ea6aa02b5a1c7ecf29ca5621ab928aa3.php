<?php if(Arr::get($attributes, 'without-buttons', false) != true): ?>
    <div class="d-flex mb-2">
        <?php $result = Arr::get($attributes, 'id', $name); ?>
        <div class="d-inline-block editor-action-item action-show-hide-editor">
            <button class="btn btn-primary show-hide-editor-btn" type="button" data-result="<?php echo e($result); ?>"><?php echo e(trans('core/base::forms.show_hide_editor')); ?></button>
        </div>
        <div class="d-inline-block editor-action-item">
            <a href="#" class="btn_gallery btn btn-primary"
               data-result="<?php echo e($result); ?>"
               data-multiple="true"
               data-action="media-insert-<?php echo e(BaseHelper::getRichEditor()); ?>">
                <i class="far fa-image"></i> <?php echo e(trans('core/media::media.add')); ?>

            </a>
        </div>
        <?php if(function_exists('shortcode') && Arr::get($attributes, 'with-short-code', false) == true): ?>
            <div class="d-inline-block editor-action-item list-shortcode-items">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle add_shortcode_btn_trigger" data-result="<?php echo e($result); ?>" type="button" data-bs-toggle="dropdown"><i class="fa fa-code"></i> <?php echo e(trans('core/base::forms.short_code')); ?>

                    </button>
                    <ul class="dropdown-menu">
                        <?php $__currentLoopData = shortcode()->getAll(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item['name']): ?>
                                <li>
                                    <a href="<?php echo e(route('short-codes.ajax-get-admin-config', $key)); ?>" data-has-admin-config="<?php echo e(Arr::has($item, 'admin_config')); ?>" data-key="<?php echo e($key); ?>" data-description="<?php echo e($item['description']); ?>"><?php echo e($item['name']); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <?php if (! $__env->hasRenderedOnce('9819ed4e-b622-45f9-9995-c14abc6e469a')): $__env->markAsRenderedOnce('9819ed4e-b622-45f9-9995-c14abc6e469a'); ?>
                <?php $__env->startPush('footer'); ?>
                    <div class="modal fade short_code_modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h4 class="modal-title"><i class="til_img"></i><strong><?php echo e(trans('core/base::forms.add_short_code')); ?></strong></h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>

                                <div class="modal-body with-padding">
                                    <form class="form-horizontal short-code-data-form">
                                        <input type="hidden" class="short_code_input_key">

                                        <?php echo $__env->make('core/base::elements.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <div class="short-code-admin-config"></div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="float-start btn btn-secondary" data-bs-dismiss="modal"><?php echo e(trans('core/base::tables.cancel')); ?></button>
                                    <button type="button" class="float-end btn btn-primary add_short_code_btn" data-add-text="<?php echo e(trans('core/base::forms.add')); ?>" data-update-text="<?php echo e(trans('core/base::forms.update')); ?>"><?php echo e(trans('core/base::forms.add')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $__env->stopPush(); ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php echo apply_filters(BASE_FILTER_FORM_EDITOR_BUTTONS, null); ?>

    </div>
    <div class="clearfix"></div>
<?php else: ?>
    <?php Arr::forget($attributes, 'with-short-code'); ?>
<?php endif; ?>

<?php echo call_user_func_array([Form::class, BaseHelper::getRichEditor()], [$name, $value, $attributes]); ?>

<?php /**PATH D:\wamp64\www\immo\platform/core/base/resources/views//forms/partials/editor.blade.php ENDPATH**/ ?>