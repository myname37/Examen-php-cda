<?php if(!is_in_admin() || (Auth::check() && Auth::user()->hasPermission($route['edit']))): ?>
    <a href="<?php echo e(Route::has($route['edit']) ? route($route['edit'], $item->id) : '#'); ?>" data-bs-toggle="tooltip" data-bs-original-title="<?php echo e(trans('plugins/language::language.current_language')); ?>"><i class="fa fa-check text-success"></i></a>
<?php else: ?>
    <i class="fa fa-check text-success"></i>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/plugins/language/resources/views//partials/status/active.blade.php ENDPATH**/ ?>