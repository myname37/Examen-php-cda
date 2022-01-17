<div class="widget meta-boxes form-actions form-actions-default action-<?php echo e($direction ?? 'horizontal'); ?>">
    <div class="widget-title">
        <h4>
            <span><?php echo e(trans('core/base::forms.actions')); ?></span>
        </h4>
    </div>
    <div class="widget-body">
        <div class="btn-set">
            <?php if($role && $role->id): ?>
                <a href="<?php echo e(route('roles.duplicate', [$role->id])); ?>" class="btn btn-warning"><i class="fa fa-copy"></i> <?php echo e(trans('core/acl::permissions.duplicate')); ?></a>
            <?php endif; ?>
            <button type="submit" name="submit" value="save" class="btn btn-info">
                <i class="fa fa-save"></i> <?php echo e(trans('core/base::forms.save')); ?>

            </button>
            <button type="submit" name="submit" value="apply" class="btn btn-success">
                <i class="fa fa-check-circle"></i> <?php echo e(trans('core/base::forms.save_and_continue')); ?>

            </button>
        </div>
    </div>
</div>
<div id="waypoint"></div>
<div class="form-actions form-actions-fixed-top hidden">
    <?php echo Breadcrumbs::render('main', page_title()->getTitle(false)); ?>

    <div class="btn-set">
        <?php if($role && $role->id): ?>
            <a href="<?php echo e(route('roles.duplicate', [$role->id])); ?>" class="btn btn-warning"><i class="fa fa-copy"></i> <?php echo e(trans('core/acl::permissions.duplicate')); ?></a>
        <?php endif; ?>
        <button type="submit" name="submit" value="save" class="btn btn-info">
            <i class="fa fa-save"></i> <?php echo e(trans('core/base::forms.save')); ?>

        </button>
        <button type="submit" name="submit" value="apply" class="btn btn-success">
            <i class="fa fa-check-circle"></i> <?php echo e(trans('core/base::forms.save_and_continue')); ?>

        </button>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/core/acl/resources/views//roles/actions.blade.php ENDPATH**/ ?>