<?php
  Theme::set('page', $page);
?>

<?php if(in_array($page->template, ['default', 'full-width'])): ?>
    <div class="bgheadproject hidden-xs" style="background: url('<?php echo e(theme_option('breadcrumb_background') ? RvMedia::url(theme_option('breadcrumb_background')) : Theme::asset()->url('images/banner-du-an.jpg')); ?>')">
        <div class="description">
            <div class="container-fluid w90">
                <h1 class="text-center"><?php echo e($page->name); ?></h1>
                <?php echo Theme::partial('breadcrumb'); ?>

            </div>
        </div>
    </div>
    <div class="<?php if($page->template != 'full-width'): ?> container <?php endif; ?> padtop50">
        <div class="row">
            <div class="col-sm-12">
                <div class="scontent">
                    <?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page); ?>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
<?php else: ?>
    <?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page); ?>

<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/page.blade.php ENDPATH**/ ?>