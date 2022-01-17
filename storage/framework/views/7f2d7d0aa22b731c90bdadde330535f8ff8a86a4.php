<div class="widget meta-boxes form-actions form-actions-default action-<?php echo e($direction ?? 'horizontal'); ?>">
    <div class="widget-title">
        <h4>
            <?php if(isset($icon) && !empty($icon)): ?>
                <i class="<?php echo e($icon); ?>"></i>
            <?php endif; ?>
            <span><?php echo e($title ?? apply_filters(BASE_ACTION_FORM_ACTIONS_TITLE, trans('core/base::forms.publish'))); ?></span>
        </h4>
    </div>
    <div class="widget-body">
        <div class="btn-set">
            <?php do_action(BASE_ACTION_FORM_ACTIONS, 'default') ?>
            <button type="submit" name="submit" value="save" class="btn btn-info">
                <i class="<?php echo e($saveIcon ?? 'fa fa-save'); ?>"></i> <?php echo e($saveTitle ?? trans('core/base::forms.save')); ?>

            </button>
            <?php if(!isset($only_save) || $only_save == false): ?>
                &nbsp;
                <button type="submit" name="submit" value="apply" class="btn btn-success">
                    <i class="fa fa-check-circle"></i> <?php echo e(trans('core/base::forms.save_and_continue')); ?>

                </button>
            <?php endif; ?>
        </div>
    </div>
</div>
<div id="waypoint"></div>
<div class="form-actions form-actions-fixed-top hidden">
    <?php echo Breadcrumbs::render('main', page_title()->getTitle(false)); ?>

    <div class="btn-set">
        <?php do_action(BASE_ACTION_FORM_ACTIONS, 'fixed-top') ?>
        <button type="submit" name="submit" value="save" class="btn btn-info">
            <i class="<?php echo e($saveIcon ?? 'fa fa-save'); ?>"></i> <?php echo e($saveTitle ?? trans('core/base::forms.save')); ?>

        </button>
        <?php if(!isset($only_save) || $only_save == false): ?>
            &nbsp;
            <button type="submit" name="submit" value="apply" class="btn btn-success">
                <i class="fa fa-check-circle"></i> <?php echo e(trans('core/base::forms.save_and_continue')); ?>

            </button>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/core/base/resources/views//forms/partials/form-actions.blade.php ENDPATH**/ ?>