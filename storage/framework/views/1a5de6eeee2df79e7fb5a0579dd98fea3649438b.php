<?php if(is_plugin_active('language')): ?>
    <?php
        $supportedLocales = Language::getSupportedLocales();
    ?>
    <?php if($supportedLocales && count($supportedLocales) > 1): ?>
        <?php
            $languageDisplay = setting('language_display', 'all');
        ?>

        <div class="header-deliver">/</div>

        <div class="padtop10 mb-2 language">
            <?php if(setting('language_switcher_display', 'dropdown') == 'dropdown'): ?>
                <div class="language-switcher-wrapper">
                    <div class="d-inline-block d-sm-none language-label">
                        <?php echo e(__('Languages')); ?>:
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-secondary dropdown-toggle btn-select-language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <?php if(($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                                <?php echo language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName()); ?>

                            <?php endif; ?>
                            <?php if(($languageDisplay == 'all' || $languageDisplay == 'name')): ?>
                                <?php echo e(Language::getCurrentLocaleName()); ?>

                            <?php endif; ?>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu language_bar_chooser">
                            <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($localeCode != Language::getCurrentLocale()): ?>
                                    <li>
                                        <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>">
                                            <?php if(($languageDisplay == 'all' || $languageDisplay == 'flag')): ?><?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?><?php endif; ?>
                                            <?php if(($languageDisplay == 'all' || $languageDisplay == 'name')): ?><span><?php echo e($properties['lang_name']); ?></span><?php endif; ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php else: ?>
                <strong class="language-label"><?php echo e(__('Languages')); ?>: </strong>
                <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($localeCode != Language::getCurrentLocale()): ?>
                        <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>">
                            <?php if(($languageDisplay == 'all' || $languageDisplay == 'flag')): ?><?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?><?php endif; ?>
                            <?php if(($languageDisplay == 'all' || $languageDisplay == 'name')): ?><span><?php echo e($properties['lang_name']); ?></span><?php endif; ?>
                        </a> &nbsp;
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/language-switcher.blade.php ENDPATH**/ ?>