<!--FOOTER-->
<footer>
    <br>
    <div class="container-fluid w90">
        <div class="row">
            <div class="col-sm-3">
                <?php if(theme_option('logo')): ?>
                <p>
                    <a href="<?php echo e(route('public.single')); ?>">
                        <img src="<?php echo e(RvMedia::getImageUrl(theme_option('logo'))); ?>" style="max-height: 38px" alt="<?php echo e(theme_option('site_name')); ?>">
                    </a>
                </p>
                <?php endif; ?>
                <?php if(theme_option('address')): ?>
                    <p><i class="fas fa-map-marker-alt"></i> &nbsp;<?php echo e(theme_option('address')); ?></p>
                <?php endif; ?>
                <?php if(theme_option('hotline')): ?>
                    <p><i class="fas fa-phone-square"></i> <?php echo e(__('Hotline')); ?>: &nbsp;<a href="tel:<?php echo e(theme_option('hotline')); ?>"><?php echo e(theme_option('hotline')); ?></a></p>
                <?php endif; ?>
                <?php if(theme_option('email')): ?>
                    <p><i class="fas fa-envelope"></i> <?php echo e(__('Email')); ?>: &nbsp;<a href="mailto:<?php echo e(theme_option('email')); ?>"><?php echo e(theme_option('email')); ?></a></p>
                <?php endif; ?>
            </div>
            <div class="col-sm-9 padtop10">
                <div class="row">
                    <?php echo dynamic_sidebar('footer_sidebar'); ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo Theme::partial('language-switcher'); ?>

            </div>
        </div>
        <div class="copyright">
            <div class="col-sm-12">
                <p class="text-center">
                    <?php echo clean(theme_option('copyright')); ?>

                </p>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER-->

<script>
    window.trans = {
        "Price": "<?php echo e(__('Price')); ?>",
        "Number of rooms": "<?php echo e(__('Number of rooms')); ?>",
        "Number of rest rooms": "<?php echo e(__('Number of rest rooms')); ?>",
        "Square": "<?php echo e(__('Square')); ?>",
        "No property found": "<?php echo e(__('No property found')); ?>",
        "million": "<?php echo e(__('million')); ?>",
        "billion": "<?php echo e(__('billion')); ?>",
        "in": "<?php echo e(__('in')); ?>",
        "Added to wishlist successfully!": "<?php echo e(__('Added to wishlist successfully!')); ?>",
        "Removed from wishlist successfully!": "<?php echo e(__('Removed from wishlist successfully!')); ?>",
        "I care about this property!!!": "<?php echo e(__('I care about this property!!!')); ?>",
    }
    window.themeUrl = '<?php echo e(Theme::asset()->url('')); ?>';
    window.siteUrl = '<?php echo e(url('')); ?>';
    window.currentLanguage = '<?php echo e(App::getLocale()); ?>';
</script>

<!--END FOOTER-->

<div class="action_footer">
    <a href="#" class="cd-top"><i class="fas fa-arrow-up"></i></a>
    <?php if(theme_option('hotline')): ?>
        <a href="tel:<?php echo e(theme_option('hotline')); ?>" style="color: white;font-size: 17px;"><i class="fas fa-phone"></i> <span>  &nbsp;<?php echo e(theme_option('hotline')); ?></span></a>
    <?php endif; ?>
</div>

    <?php echo Theme::footer(); ?>

</body>
</html>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/footer.blade.php ENDPATH**/ ?>