<?php if(!is_in_admin() || (Auth::check() && Auth::user()->hasPermission($route['edit']))): ?>
    <a href="<?php echo e(Route::has($route['edit']) ? route($route['edit'], $relatedLanguage) : '#'); ?>" data-bs-toggle="tooltip" data-bs-original-title="<?php echo e(trans('plugins/language::language.edit_related')); ?>"><i class="fa fa-edit"></i></a>
<?php else: ?>
    <i class="fa fa-check text-success"></i>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/plugins/language/resources/views//partials/status/edit.blade.php ENDPATH**/ ?>