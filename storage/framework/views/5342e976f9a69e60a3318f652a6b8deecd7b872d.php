<tr data-id="<?php echo e($item->lang_id); ?>">
    <td class="text-start">
        <a data-bs-original-title="<?php echo e(trans('plugins/language::language.edit_tooltip')); ?>" class="edit-language-button" data-bs-toggle="tooltip" data-id="<?php echo e($item->lang_id); ?>" href="#"><?php echo e($item->lang_name); ?></a>
    </td>
    <td class="text-center"><?php echo e($item->lang_locale); ?></td>
    <td class="text-center"><?php echo e($item->lang_code); ?></td>
    <td class="text-center">
        <?php if($item->lang_is_default): ?>
            <i class="fa fa-star" data-id="<?php echo e($item->lang_id); ?>" data-name="<?php echo e($item->lang_name); ?>"></i>
        <?php else: ?>
            <a data-section="<?php echo e(route('languages.set.default')); ?>?lang_id=<?php echo e($item->lang_id); ?>" class="set-language-default" data-bs-toggle="tooltip" data-bs-original-title="<?php echo e(trans('plugins/language::language.choose_default_language', ['language' => $item->lang_name])); ?>"><i class="fa fa-star" data-id="<?php echo e($item->lang_id); ?>" data-name="<?php echo e($item->lang_name); ?>"></i></a>
        <?php endif; ?>
    </td>
    <td class="text-center"><?php echo e($item->lang_order); ?></td>
    <td class="text-center">
        <?php echo language_flag($item->lang_flag, $item->lang_name); ?>

    </td>
    <td class="text-center">
        <span>
            <a data-bs-original-title="<?php echo e(trans('plugins/language::language.edit_tooltip')); ?>" class="edit-language-button" data-bs-toggle="tooltip" data-id="<?php echo e($item->lang_id); ?>" href="#"><?php echo e(trans('plugins/language::language.edit')); ?></a> |
        </span>
        <span>
            <a href="#" class="deleteDialog text-danger" data-bs-toggle="tooltip" data-section="<?php echo e(route('languages.destroy', $item->lang_id)); ?>" role="button" data-bs-original-title="<?php echo e(trans('plugins/language::language.delete_tooltip')); ?>"><?php echo e(trans('plugins/language::language.delete')); ?></a>
        </span>
    </td>
</tr>
<?php /**PATH D:\wamp64\www\immo\platform/plugins/language/resources/views//partials/language-item.blade.php ENDPATH**/ ?>