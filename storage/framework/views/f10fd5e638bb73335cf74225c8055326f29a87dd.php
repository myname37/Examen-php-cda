<?php if(count($languages) > 1): ?>
    <input type="hidden" name="language" value="<?php echo e($currentLanguage->lang_code); ?>">
    <div id="list-others-language">
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($language->lang_code != $currentLanguage->lang_code): ?>
                <?php echo language_flag($language->lang_flag, $language->lang_name); ?>

                <a href="<?php echo e(Route::has($route['edit']) ? Request::url() . ($language->lang_code != Language::getDefaultLocaleCode() ? '?ref_lang=' . $language->lang_code : null) : '#'); ?>" target="_blank"><?php echo e($language->lang_name); ?> <i class="fa fa-external-link"></i></a>
                <br>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/plugins/language-advanced/resources/views//language-box.blade.php ENDPATH**/ ?>