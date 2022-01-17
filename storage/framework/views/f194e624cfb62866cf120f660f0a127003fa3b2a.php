<?php if(is_plugin_active('blog')): ?>
    <div class="box_shadow" style="margin-bottom: 0;padding-bottom: 80px;">
        <div class="container-fluid w90">
            <div class="discover">
                <div class="row">
                    <div class="col-12">
                        <h2><?php echo e(__('News')); ?></h2>
                        <p><?php echo e(theme_option('home_description_for_news')); ?></p>
                        <br>
                        <div class="blog-container">
                            <news-component url="<?php echo e(route('public.ajax.posts')); ?>"></news-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/short-codes/latest-news.blade.php ENDPATH**/ ?>