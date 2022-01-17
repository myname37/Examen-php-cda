<div id="contact">
    <div class="row">
        <div class="col-md-6">
            <div class="wrapper"><h2 class="h2"><?php echo e(__('Contact information')); ?></h2>
                <div class="contact-main">
                    <p><?php echo e(theme_option('about-us')); ?></p>
                    <div class="contact-name" style="text-transform: uppercase"><?php echo e(theme_option('company_name')); ?></div>
                    <div class="contact-address"><?php echo e(__('Address')); ?>: <?php echo e(theme_option('address')); ?>

                    </div>
                    <div class="contact-phone"><?php echo e(__('Hotline')); ?>: <?php echo e(theme_option('hotline')); ?></div>
                    <div class="contact-email"><?php echo e(__('Email')); ?>: <?php echo e(theme_option('email')); ?></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form action="<?php echo e(route('public.send.contact')); ?>" method="post" class="generic-form">
                <div class="wrapper">
                    <h2 class="h2"><?php echo e(__('HOW WE CAN HELP YOU?')); ?></h2>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="<?php echo e(__('Name')); ?> *"
                               required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email"
                               placeholder="<?php echo e(__('Email')); ?> *" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phone"
                               placeholder="<?php echo e(__('Phone')); ?>">
                    </div>
                    <div class="form-group">
                                <textarea class="form-control" name="content" rows="6" minlength="10"
                                              placeholder="<?php echo e(__('Message')); ?> *" required=""></textarea>
                    </div>
                    <?php if(setting('enable_captcha') && is_plugin_active('captcha')): ?>
                        <div class="form-group">
                            <?php echo Captcha::display(); ?>

                        </div>
                    <?php endif; ?>
                    <div class="alert alert-success text-success text-left" style="display: none;">
                        <span></span>
                    </div>
                    <div class="alert alert-danger text-danger text-left" style="display: none;">
                        <span></span>
                    </div>
                    <br>
                    <div class="form-actions">
                        <button class="btn-special" type="submit"><?php echo e(__('Send message')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/short-codes/contact-form.blade.php ENDPATH**/ ?>