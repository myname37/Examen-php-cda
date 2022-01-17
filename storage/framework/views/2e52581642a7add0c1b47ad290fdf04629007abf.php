<?php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fire('beforeRenderTheme', app(\Botble\Theme\Contracts\Theme::class));
?>

<?php echo Theme::partial('header'); ?>

<style>
    .error-code {
        color: #22292f;
        font-size: 6rem;
    }

    .error-border {
        background-color: var(--primary-color);
        height: .25rem;
        width: 6rem;
        margin-bottom: 1.5rem;
    }

    .error-page a {
        color: var(--primary-color);
    }

    .error-page ul li {
        margin-bottom : 5px;
    }
</style>
<div class="container padtop50">
    <div class="row">
        <div class="col-sm-12">
            <div class="scontent error-page">
                <div class="error-code">
                    404
                </div>

                <div class="error-border"></div>

                <h4><?php echo e(__('This may have occurred because of several reasons')); ?>:</h4>
                <ul>
                    <li><?php echo e(__('The page you requested does not exist.')); ?></li>
                    <li><?php echo e(__('The link you clicked is no longer.')); ?></li>
                    <li><?php echo e(__('The page may have moved to a new location.')); ?></li>
                    <li><?php echo e(__('An error may have occurred.')); ?></li>
                    <li><?php echo e(__('You are not authorized to view the requested resource.')); ?></li>
                </ul>

                <strong><?php echo clean(__('Please try again in a few minutes, or alternatively return to the homepage by <a href=":link">clicking here</a>.', ['link' => route('public.single')])); ?></strong>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<?php echo Theme::partial('footer'); ?>



<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/404.blade.php ENDPATH**/ ?>