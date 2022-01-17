<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['url' => route('real-estate.settings'), 'class' => 'main-setting-form']); ?>

    <div class="max-width-1200">

        <div class="flexbox-annotated-section">
            <div class="flexbox-annotated-section-annotation">
                <div class="annotated-section-title pd-all-20">
                        <h2><?php echo e(trans('plugins/real-estate::settings.general')); ?></h2>
                </div>
                <div class="annotated-section-description pd-all-20 p-none-t">
                    <p class="color-note"><?php echo e(trans('plugins/real-estate::settings.general_description')); ?></p>
                </div>
            </div>
            <div class="flexbox-annotated-section-content">
                <div class="wrapper-content pd-all-20">
                    <div class="form-group mb-3">
                        <label class="text-title-field" for="real_estate_square_unit"><?php echo e(trans('plugins/real-estate::settings.square_unit')); ?></label>
                        <div class="ui-select-wrapper">
                            <select class="ui-select" name="real_estate_square_unit" id="real_estate_square_unit">
                                <option value="" <?php if(setting('real_estate_square_unit', 'm²') == null): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.square_unit_none')); ?></option>
                                <option value="m²" <?php if(setting('real_estate_square_unit', 'm²') === 'm²'): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.square_unit_meter')); ?></option>
                                <option value="ft2" <?php if(setting('real_estate_square_unit', 'm²') === 'ft2'): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.square_unit_feet')); ?></option>
                                <option value="yd2" <?php if(setting('real_estate_square_unit', 'm²') === 'yd2'): ?> selected <?php endif; ?>><?php echo e(__('Square Yard (yd2)')); ?></option>
                            </select>
                            <svg class="svg-next-icon svg-next-icon-size-16">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-title-field"
                               for="real_estate_display_views_count_in_detail_page"><?php echo e(trans('plugins/real-estate::settings.display_views_count_in_detail_page')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_display_views_count_in_detail_page"
                                   value="1"
                                   <?php if(setting('real_estate_display_views_count_in_detail_page', 0) == 1): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_display_views_count_in_detail_page"
                                   value="0"
                                   <?php if(setting('real_estate_display_views_count_in_detail_page', 0) == 0): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flexbox-annotated-section">
            <div class="flexbox-annotated-section-annotation">
                <div class="annotated-section-title pd-all-20">
                    <h2><?php echo e(trans('plugins/real-estate::currency.currencies')); ?></h2>
                </div>
                <div class="annotated-section-description pd-all-20 p-none-t">
                    <p class="color-note"><?php echo e(trans('plugins/real-estate::currency.setting_description')); ?></p>
                </div>
            </div>
            <div class="flexbox-annotated-section-content">
                <div class="wrapper-content pd-all-20">
                    <div class="form-group mb-3">
                        <label class="text-title-field"
                               for="real_estate_convert_money_to_text_enabled"><?php echo e(trans('plugins/real-estate::settings.real_estate_convert_money_to_text_enabled')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_convert_money_to_text_enabled"
                                   value="1"
                                   <?php if(setting('real_estate_convert_money_to_text_enabled', config('plugins.real-estate.real-estate.display_big_money_in_million_billion')) == 1): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_convert_money_to_text_enabled"
                                   value="0"
                                   <?php if(setting('real_estate_convert_money_to_text_enabled', config('plugins.real-estate.real-estate.display_big_money_in_million_billion')) == 0): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-title-field"
                               for="real_estate_enable_auto_detect_visitor_currency"><?php echo e(trans('plugins/real-estate::settings.enable_auto_detect_visitor_currency')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_enable_auto_detect_visitor_currency"
                                   value="1"
                                   <?php if(setting('real_estate_enable_auto_detect_visitor_currency', 0) == 1): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_enable_auto_detect_visitor_currency"
                                   value="0"
                                   <?php if(setting('real_estate_enable_auto_detect_visitor_currency', 0) == 0): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                        </label>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-sm-6">
                            <label class="text-title-field" for="real_estate_thousands_separator"><?php echo e(trans('plugins/real-estate::settings.thousands_separator')); ?></label>
                            <div class="ui-select-wrapper">
                                <select class="ui-select" name="real_estate_thousands_separator" id="real_estate_thousands_separator">
                                    <option value="," <?php if(setting('real_estate_thousands_separator', ',') == ','): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.separator_comma')); ?></option>
                                    <option value="." <?php if(setting('real_estate_thousands_separator', ',') == '.'): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.separator_period')); ?></option>
                                    <option value="space" <?php if(setting('real_estate_thousands_separator', ',') == 'space'): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.separator_space')); ?></option>
                                </select>
                                <svg class="svg-next-icon svg-next-icon-size-16">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="text-title-field" for="real_estate_decimal_separator"><?php echo e(trans('plugins/real-estate::settings.decimal_separator')); ?></label>
                            <div class="ui-select-wrapper">
                                <select class="ui-select" name="real_estate_decimal_separator" id="real_estate_decimal_separator">
                                    <option value="." <?php if(setting('real_estate_decimal_separator', '.') == '.'): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.separator_period')); ?></option>
                                    <option value="," <?php if(setting('real_estate_decimal_separator', '.') == ','): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.separator_comma')); ?></option>
                                    <option value="space" <?php if(setting('real_estate_decimal_separator', '.') == 'space'): ?> selected <?php endif; ?>><?php echo e(trans('plugins/real-estate::settings.separator_space')); ?></option>
                                </select>
                                <svg class="svg-next-icon svg-next-icon-size-16">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                </svg>
                            </div>
                        </div>
                    </div>

                <textarea name="currencies"
                          id="currencies"
                          class="hidden"><?php echo json_encode($currencies); ?></textarea>
                    <textarea name="deleted_currencies"
                              id="deleted_currencies"
                              class="hidden"></textarea>
                    <div class="swatches-container">
                        <div class="header clearfix">
                            <div class="swatch-item">
                                <?php echo e(trans('plugins/real-estate::currency.name')); ?>

                            </div>
                            <div class="swatch-item">
                                <?php echo e(trans('plugins/real-estate::currency.symbol')); ?>

                            </div>
                            <div class="swatch-item swatch-decimals">
                                <?php echo e(trans('plugins/real-estate::currency.number_of_decimals')); ?>

                            </div>
                            <div class="swatch-item swatch-exchange-rate">
                                <?php echo e(trans('plugins/real-estate::currency.exchange_rate')); ?>

                            </div>
                            <div class="swatch-item swatch-is-prefix-symbol">
                                <?php echo e(trans('plugins/real-estate::currency.is_prefix_symbol')); ?>

                            </div>
                            <div class="swatch-is-default">
                                <?php echo e(trans('plugins/real-estate::currency.is_default')); ?>

                            </div>
                            <div class="remove-item"><?php echo e(trans('plugins/real-estate::currency.remove')); ?></div>
                        </div>
                        <ul class="swatches-list">

                        </ul>
                        <a href="#" class="js-add-new-attribute">
                            <?php echo e(trans('plugins/real-estate::currency.new_currency')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flexbox-annotated-section">
            <div class="flexbox-annotated-section-annotation">
                <div class="annotated-section-title pd-all-20">
                    <h2><?php echo e(trans('plugins/real-estate::settings.title')); ?></h2>
                </div>
                <div class="annotated-section-description pd-all-20 p-none-t">
                    <p class="color-note"><?php echo e(trans('plugins/real-estate::settings.description')); ?></p>
                </div>
            </div>

            <div class="flexbox-annotated-section-content">
                <div class="wrapper-content pd-all-20">
                    <div class="form-group mb-3">
                        <label class="text-title-field"
                               for="real_estate_enabled_register"><?php echo e(trans('plugins/real-estate::settings.real_estate_enabled_register')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_enabled_register"
                                   value="1"
                                   <?php if(setting('real_estate_enabled_register', 1) == 1): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                        </label>
                        <label>
                            <input type="radio" name="real_estate_enabled_register"
                                   value="0"
                                   <?php if(setting('real_estate_enabled_register', 1) == 0): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-title-field"
                               for="verify_account_email"><?php echo e(trans('plugins/real-estate::settings.verify_account_email')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="verify_account_email"
                                   value="1"
                                   <?php if(setting('verify_account_email', config('plugins.real-estate.real-estate.verify_email')) == 1): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                        </label>
                        <label>
                            <input type="radio" name="verify_account_email"
                                   value="0"
                                   <?php if(setting('verify_account_email', config('plugins.real-estate.real-estate.verify_email')) == 0): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-title-field"
                               for="real_estate_enable_credits_system"><?php echo e(trans('plugins/real-estate::settings.enable_credits_system')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_enable_credits_system"
                                   value="1"
                                   <?php if(RealEstateHelper::isEnabledCreditsSystem()): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="real_estate_enable_credits_system"
                                   value="0"
                                   <?php if(!RealEstateHelper::isEnabledCreditsSystem()): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-title-field"
                               for="enable_post_approval"><?php echo e(trans('plugins/real-estate::settings.enable_post_approval')); ?>

                        </label>
                        <label class="me-2">
                            <input type="radio" name="enable_post_approval"
                                   value="1"
                                   <?php if(setting('enable_post_approval', 1) == 1): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                        </label>
                        <label>
                            <input type="radio" name="enable_post_approval"
                                   value="0"
                                   <?php if(setting('enable_post_approval', 1) == 0): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-title-field"
                               for="property_expired_after_days"><?php echo e(trans('plugins/real-estate::settings.property_expired_after_days')); ?>

                        </label>
                        <input type="number" class="form-control" name="property_expired_after_days" value="<?php echo e(RealEstateHelper::propertyExpiredDays()); ?>">
                    </div>

                    <?php if(is_plugin_active('captcha')): ?>
                        <div class="form-group mb-3">
                            <label class="text-title-field"
                                   for="real_estate_enable_recaptcha_in_register_page"><?php echo e(trans('plugins/real-estate::settings.enable_recaptcha_in_register_page')); ?>

                            </label>
                            <label class="me-2">
                                <input type="radio" name="real_estate_enable_recaptcha_in_register_page"
                                       value="1"
                                       <?php if(setting('real_estate_enable_recaptcha_in_register_page', 0) == 1): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

                            </label>
                            <label class="me-2">
                                <input type="radio" name="real_estate_enable_recaptcha_in_register_page"
                                       value="0"
                                       <?php if(setting('real_estate_enable_recaptcha_in_register_page', 0) == 0): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

                            </label>
                            <span class="help-ts"><?php echo e(trans('plugins/real-estate::settings.enable_recaptcha_in_register_page_description')); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <div class="flexbox-annotated-section" style="border: none">
            <div class="flexbox-annotated-section-annotation">
                &nbsp;
            </div>
            <div class="flexbox-annotated-section-content">
                <button class="btn btn-info" type="submit"><?php echo e(trans('plugins/real-estate::currency.save_settings')); ?></button>
            </div>
        </div>
    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer'); ?>
    <script id="currency_template" type="text/x-custom-template">
        <li data-id="__id__" class="clearfix">
            <div class="swatch-item" data-type="title">
                <input type="text" class="form-control" value="__title__">
            </div>
            <div class="swatch-item" data-type="symbol">
                <input type="text" class="form-control" value="__symbol__">
            </div>
            <div class="swatch-item swatch-decimals" data-type="decimals">
                <input type="number" class="form-control" value="__decimals__">
            </div>
            <div class="swatch-item swatch-exchange-rate" data-type="exchange_rate">
                <input type="number" class="form-control" value="__exchangeRate__" step="0.00000001">
            </div>
            <div class="swatch-item swatch-is-prefix-symbol" data-type="is_prefix_symbol">
                <div class="ui-select-wrapper">
                    <select class="ui-select">
                        <option value="1" __isPrefixSymbolChecked__><?php echo e(trans('plugins/real-estate::currency.before_number')); ?></option>
                        <option value="0" __notIsPrefixSymbolChecked__><?php echo e(trans('plugins/real-estate::currency.after_number')); ?></option>
                    </select>
                    <svg class="svg-next-icon svg-next-icon-size-16">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                    </svg>
                </div>
            </div>
            <div class="swatch-is-default" data-type="is_default">
                <input type="radio" name="currencies_is_default" value="__position__" __isDefaultChecked__>
            </div>
            <div class="remove-item"><a href="#" class="font-red"><i class="fa fa-trash"></i></a></div>
        </li>
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\immo\platform/plugins/real-estate/resources/views//settings/index.blade.php ENDPATH**/ ?>