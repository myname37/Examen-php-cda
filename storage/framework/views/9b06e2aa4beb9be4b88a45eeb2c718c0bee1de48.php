<?php $__env->startSection('content'); ?>
    <div class="tabbable-custom tabbable-tabdrop">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#tab_detail" class="nav-link active" data-bs-toggle="tab"><?php echo e(trans('core/base::tabs.detail')); ?></a>
            </li>
            <li class="nav-item">
                <a href="#tab_settings" class="nav-link" data-bs-toggle="tab"><?php echo e(trans('plugins/language::language.settings')); ?></a>
            </li>
            <?php echo apply_filters(BASE_FILTER_REGISTER_CONTENT_TABS, null, new \Botble\Language\Models\Language); ?>

        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_detail">
                <div class="row">
                    <div class="col-md-5">
                        <?php do_action(BASE_ACTION_META_BOXES, 'top', new \Botble\Language\Models\Language) ?>
                        <div class="main-form">
                            <div class="form-wrap">
                                <div class="form-group mb-3">
                                    <input type="hidden" id="language_flag_path" value="<?php echo e(BASE_LANGUAGE_FLAG_PATH); ?>">
                                    <label for="language_id" class="control-label"><?php echo e(trans('plugins/language::language.choose_language')); ?></label>
                                    <select id="language_id" class="form-control select-search-full">
                                        <option><?php echo e(trans('plugins/language::language.select_language')); ?></option>
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>" data-language="<?php echo e(json_encode($language)); ?>"> <?php echo e($language[2]); ?> - <?php echo e($language[1]); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php echo Form::helper(trans('plugins/language::language.choose_language_helper')); ?>

                                </div>

                                <div class="form-group mb-3">
                                    <label for="lang_name" class="control-label required"><?php echo e(trans('plugins/language::language.language_name')); ?></label>
                                    <input id="lang_name" type="text" class="form-control">
                                    <?php echo Form::helper(trans('plugins/language::language.language_name_helper')); ?>

                                </div>

                                <div class="form-group mb-3">
                                    <label for="lang_locale" class="control-label required"><?php echo e(trans('plugins/language::language.locale')); ?></label>
                                    <input id="lang_locale" type="text" class="form-control">
                                    <?php echo Form::helper(trans('plugins/language::language.locale_helper')); ?>

                                </div>

                                <div class="form-group mb-3">
                                    <label for="lang_code" class="control-label"><?php echo e(trans('plugins/language::language.language_code')); ?></label>
                                    <input id="lang_code" type="text" class="form-control">
                                    <?php echo Form::helper(trans('plugins/language::language.language_code_helper')); ?>

                                </div>

                                <div class="form-group mb-3">
                                    <label for="lang_text_direction" class="control-label"><?php echo e(trans('plugins/language::language.text_direction')); ?></label>
                                    <p>
                                        <label class="me-2">
                                            <input name="lang_rtl" class="lang_is_ltr" type="radio" value="0" checked="checked"> <?php echo e(trans('plugins/language::language.left_to_right')); ?>

                                        </label>
                                        <label>
                                            <input name="lang_rtl" class="lang_is_rtl" type="radio" value="1"> <?php echo e(trans('plugins/language::language.right_to_left')); ?>

                                        </label>
                                    </p>
                                    <?php echo Form::helper(trans('plugins/language::language.text_direction_helper')); ?>

                                </div>

                                <div class="form-group mb-3">
                                    <label for="flag_list" class="control-label"><?php echo e(trans('plugins/language::language.flag')); ?></label>
                                    <select id="flag_list" class="form-control select-search-language">
                                        <option><?php echo e(trans('plugins/language::language.select_flag')); ?></option>
                                        <?php $__currentLoopData = $flags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $flag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($flag); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php echo Form::helper(trans('plugins/language::language.flag_helper')); ?>

                                </div>

                                <div class="form-group mb-3">
                                    <label for="lang_order" class="control-label"><?php echo e(trans('plugins/language::language.order')); ?></label>
                                    <input id="lang_order" type="number" value="0" class="form-control">
                                    <?php echo Form::helper(trans('plugins/language::language.order_helper')); ?>

                                </div>
                                <input type="hidden" id="lang_id" value="0">
                                <p class="submit">
                                    <button class="btn btn-primary" id="btn-language-submit"><?php echo e(trans('plugins/language::language.add_new_language')); ?></button>
                                </p>
                            </div>
                        </div>
                        <?php do_action(BASE_ACTION_META_BOXES, 'advanced', new \Botble\Language\Models\Language) ?>
                    </div>
                    <div class="col-md-7">
                        <div class="table-responsive">
                            <table class="table table-hover table-language">
                                <thead>
                                <tr>
                                    <th class="text-start"><span><?php echo e(trans('plugins/language::language.language_name')); ?></span></th>
                                    <th class="text-center"><span><?php echo e(trans('plugins/language::language.locale')); ?></span></th>
                                    <th class="text-center"><span><?php echo e(trans('plugins/language::language.code')); ?></span></th>
                                    <th class="text-center"><span><?php echo e(trans('plugins/language::language.default_language')); ?></span></th>
                                    <th class="text-center"><span><?php echo e(trans('plugins/language::language.order')); ?></span></th>
                                    <th class="text-center"><span><?php echo e(trans('plugins/language::language.flag')); ?></span></th>
                                    <th class="text-center"><span><?php echo e(trans('plugins/language::language.actions')); ?></span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $activeLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $__env->make('plugins/language::partials.language-item', compact('item'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab_settings">
                <?php echo Form::open(['route' => 'languages.settings']); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <div class="form-group mb-3 <?php if($errors->has('language_hide_default')): ?> has-error <?php endif; ?>">
                                <label class="text-title-field"
                                       for="language_hide_default"><?php echo e(trans('plugins/language::language.language_hide_default')); ?>

                                </label>
                                <label class="me-2">
                                    <input type="radio" name="language_hide_default"
                                           value="1"
                                           <?php if(setting('language_hide_default', true)): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                                </label>
                                <label>
                                    <input type="radio" name="language_hide_default"
                                           value="0"
                                           <?php if(!setting('language_hide_default', true)): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                                </label>
                            </div>
                            <div class="form-group mb-3 <?php if($errors->has('language_display')): ?> has-error <?php endif; ?>">
                                <label for="language_display"><?php echo e(trans('plugins/language::language.language_display')); ?></label>
                                <div class="ui-select-wrapper">
                                    <?php echo Form::select('language_display', ['all' => trans('plugins/language::language.language_display_all'), 'flag' => trans('plugins/language::language.language_display_flag_only'), 'name' => trans('plugins/language::language.language_display_name_only')], setting('language_display', 'all'), ['class' => 'ui-select', 'id' => 'language_display']); ?>

                                    <svg class="svg-next-icon svg-next-icon-size-16">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="form-group mb-3 <?php if($errors->has('language_switcher_display')): ?> has-error <?php endif; ?>">
                                <label for="language_switcher_display"><?php echo e(trans('plugins/language::language.switcher_display')); ?></label>
                                <div class="ui-select-wrapper">
                                    <?php echo Form::select('language_switcher_display', ['dropdown' => trans('plugins/language::language.language_switcher_display_dropdown'), 'list' => trans('plugins/language::language.language_switcher_display_list')], setting('language_switcher_display', 'dropdown'), ['class' => 'ui-select', 'id' => 'language_switcher_display']); ?>

                                    <svg class="svg-next-icon svg-next-icon-size-16">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="form-group mb-3 <?php if($errors->has('language_hide_languages')): ?> has-error <?php endif; ?>">
                                <label for="language_hide_languages"><?php echo e(trans('plugins/language::language.hide_languages')); ?></label>
                                <p><span style="font-size: 90%;"><?php echo e(trans('plugins/language::language.hide_languages_description')); ?></span></p>
                                <ul class="list-item-checkbox">
                                    <?php $__currentLoopData = Language::getActiveLanguage(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!$language->lang_is_default): ?>
                                            <li style="padding-left: 10px;">
                                                <input type="checkbox" name="language_hide_languages[]" value="<?php echo e($language->lang_id); ?>" id="language_hide_languages_item-<?php echo e($language->lang_code); ?>" <?php if(in_array($language->lang_id, json_decode(setting('language_hide_languages', '[]'), true))): ?> checked="checked" <?php endif; ?>>
                                                <label for="language_hide_languages_item-<?php echo e($language->lang_code); ?>"><?php echo e($language->lang_name); ?></label>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php echo Form::helper(trans_choice('plugins/language::language.hide_languages_helper_display_hidden', count(json_decode(setting('language_hide_languages', '[]'), true)), ['language' => Language::getHiddenLanguageText()])); ?>

                            </div>

                            <div class="form-group mb-3">
                                <label class="text-title-field"
                                       for="language_show_default_item_if_current_version_not_existed"><?php echo e(trans('plugins/language::language.language_show_default_item_if_current_version_not_existed')); ?>

                                </label>
                                <label class="me-2">
                                    <input type="radio" name="language_show_default_item_if_current_version_not_existed"
                                           value="1"
                                           <?php if(setting('language_show_default_item_if_current_version_not_existed', true)): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                                </label>
                                <label>
                                    <input type="radio" name="language_show_default_item_if_current_version_not_existed"
                                           value="0"
                                           <?php if(!setting('language_show_default_item_if_current_version_not_existed', true)): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                                </label>
                            </div>

                            <div class="form-group mb-3">
                                <label class="text-title-field"
                                       for="language_auto_detect_user_language"><?php echo e(trans('plugins/language::language.language_auto_detect_user_language')); ?>

                                </label>
                                <label class="me-2">
                                    <input type="radio" name="language_auto_detect_user_language"
                                           value="1"
                                           <?php if(setting('language_auto_detect_user_language', false)): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                                </label>
                                <label>
                                    <input type="radio" name="language_auto_detect_user_language"
                                           value="0"
                                           <?php if(!setting('language_auto_detect_user_language', false)): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                                </label>
                            </div>

                            <div class="text-start">
                                <button type="submit" name="submit" value="save" class="btn btn-info button-save-language-settings">
                                    <i class="fa fa-save"></i> <?php echo e(trans('core/base::forms.save')); ?>

                                </button>
                            </div>
                        </div>
                    </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
    <?php echo $__env->make('core/table::partials.modal-item', [
        'type'        => 'danger',
        'name'        => 'modal-confirm-delete',
        'title'       => trans('core/base::tables.confirm_delete'),
        'content'     => trans('plugins/language::language.delete_confirmation_message'),
        'action_name' => trans('core/base::tables.delete'),
        'action_button_attributes' => [
            'class' => 'delete-crud-entry',
        ],
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\immo\platform/plugins/language/resources/views//index.blade.php ENDPATH**/ ?>