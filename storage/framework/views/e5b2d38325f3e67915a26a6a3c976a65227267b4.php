<?php
    Assets::addScriptsDirectly(config('core.base.general.editor.ckeditor.js'))
        ->addScriptsDirectly('vendor/core/core/base/js/editor.js');

    $attributes['class'] = Arr::get($attributes, 'class', '') . ' form-control editor-ckeditor';
    $attributes['id'] = Arr::get($attributes, 'id', $name);
    $attributes['rows'] = Arr::get($attributes, 'rows', 4);
?>

<?php echo Form::textarea($name, BaseHelper::cleanEditorContent($value), $attributes); ?>

<?php /**PATH D:\wamp64\www\immo\platform/core/base/resources/views//forms/partials/ckeditor.blade.php ENDPATH**/ ?>