<section class="main-homes">
    <div class="bgheadproject hidden-xs" style="background: url('<?php echo e(theme_option('breadcrumb_background') ? RvMedia::url(theme_option('breadcrumb_background')) : Theme::asset()->url('images/banner-du-an.jpg')); ?>')">
        <div class="description">
            <div class="container-fluid w90">
                <h1 class="text-center"><?php echo e(__('Agents')); ?></h1>
                <?php echo Theme::partial('breadcrumb'); ?>

            </div>
        </div>
    </div>
    <div class="container-fluid w90 padtop30">
        <div class="rowm10">
            <?php if($accounts->count()): ?>
                <div class="container-fluid">
                    <div class="row rowm10 list-agency">
                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <?php echo Theme::partial('real-estate.agents.item', compact('account')); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="colm10 col-sm-12">
                            <nav class="d-flex justify-content-center pt-3">
                                <?php echo $accounts->withQueryString()->links(); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <p class="item"><?php echo e(__('0 results')); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<br>
<br>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/real-estate/agents.blade.php ENDPATH**/ ?>