<?php if($posts->count() > 0): ?>
    <div class="blog-container">
        <div class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 col-sm-6 container-grid" style="margin-bottom: 30px;">
                    <div class="grid-in">
                        <div class="grid-shadow">
                            <div class="hourseitem" style="margin-top: 0;">
                                <div class="blii">
                                    <div class="img">
                                        <img
                                            data-src="<?php echo e(RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage())); ?>"
                                            src="<?php echo e(RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage())); ?>"
                                            alt="<?php echo e($post->name); ?>" class="thumb"
                                            style="border-radius: 0;"></div>
                                    <a href="<?php echo e($post->url); ?>" title="<?php echo e($post->name); ?>" class="linkdetail"></a></div>
                            </div>
                            <div class="grid-h" data-mh="blog-post">
                                <div class="blog-title">
                                    <a href="<?php echo e($post->url); ?>" title="<?php echo e($post->name); ?>"><h2><?php echo e($post->name); ?></h2></a>
                                    <?php echo Theme::partial('post-meta', compact('post')); ?>

                                </div>
                                <div class="blog-excerpt">
                                    <p><?php echo e(Str::words($post->description, 50)); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <br>
    <div class="colm10 col-sm-12">
        <nav class="d-flex justify-content-center pt-3">
            <?php echo $posts->withQueryString()->links(); ?>

        </nav>
    </div>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/loop.blade.php ENDPATH**/ ?>