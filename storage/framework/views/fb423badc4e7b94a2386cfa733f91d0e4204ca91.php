<section class="main-homes">
    <div class="bgheadproject hidden-xs" style="background: url('<?php echo e(theme_option('breadcrumb_background') ? RvMedia::url(theme_option('breadcrumb_background')) : Theme::asset()->url('images/banner-du-an.jpg')); ?>')">
        <div class="description">
            <div class="container-fluid w90">
                <h1 class="text-center"><?php echo e(__('Discover our projects')); ?></h1>
                <p class="text-center"><?php echo e(theme_option('home_project_description')); ?></p>
                <?php echo Theme::partial('breadcrumb'); ?>

            </div>
        </div>
    </div>
    <div class="container-fluid w90 padtop30">
        <div class="projecthome">
            <form action="<?php echo e(route('public.projects')); ?>" method="get" id="ajax-filters-form">
                <?php echo $__env->make(Theme::getThemeNamespace() . '::views.real-estate.includes.search-box', ['type' => 'project', 'categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="row rowm10">
                    <div class="col-md-12">
                        <?php echo $__env->make(Theme::getThemeNamespace() . '::views.real-estate.includes.filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="data-listing mt-2">
                            <?php echo Theme::partial('real-estate.projects.items', compact('projects')); ?>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<br>
<div class="col-sm-12">
    <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation example">
        <?php echo $projects->withQueryString()->onEachSide(1)->links(); ?>

    </nav>
</div>
<br>
<br>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/real-estate/projects.blade.php ENDPATH**/ ?>