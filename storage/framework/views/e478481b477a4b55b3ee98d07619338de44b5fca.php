<?php
    if (theme_option('show_map_on_properties_page', 'yes') == 'yes') {
        Theme::asset()->usePath()->add('leaflet-css', 'libraries/leaflet.css');
        Theme::asset()->container('footer')->usePath()->add('leaflet-js', 'libraries/leaflet.js');
        Theme::asset()->container('footer')->usePath()->add('leaflet.markercluster-src-js', 'libraries/leaflet.markercluster-src.js');
    }
?>

<section class="main-homes pb-3">
    <div class="bgheadproject hidden-xs" style="background: url('<?php echo e(theme_option('breadcrumb_background') ? RvMedia::url(theme_option('breadcrumb_background')) : Theme::asset()->url('images/banner-du-an.jpg')); ?>')">
        <div class="description">
            <div class="container-fluid w90">
                <h1 class="text-center"><?php echo e(SeoHelper::getTitle()); ?></h1>
                <p class="text-center"><?php echo e(theme_option('properties_description')); ?></p>
                <?php echo Theme::partial('breadcrumb'); ?>

            </div>
        </div>
    </div>
    <div class="container-fluid w90 padtop30">
        <div class="projecthome">
            <form action="<?php echo e(url()->current()); ?>" method="get" id="ajax-filters-form">
                <?php echo $__env->make(Theme::getThemeNamespace() . '::views.real-estate.includes.search-box', ['type' => 'property', 'categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="row rowm10">
                    <div class="<?php if(theme_option('show_map_on_properties_page', 'yes') == 'yes' && Arr::get($_COOKIE, 'show_map_on_properties', 1)): ?> col-lg-7 left-page-content <?php else: ?> col-lg-12 full-page-content <?php endif; ?>"
                        <?php if(theme_option('show_map_on_properties_page', 'yes') == 'yes'): ?>
                            data-class-full="col-lg-12 full-page-content"
                            data-class-left="col-lg-7 left-page-content"
                        <?php endif; ?>
                         id="properties-list">
                        <?php echo $__env->make(Theme::getThemeNamespace() . '::views.real-estate.includes.filters', ['isChangeView' => theme_option('show_map_on_properties_page', 'yes') == 'yes'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="data-listing mt-2">
                            <?php echo Theme::partial('real-estate.properties.items', compact('properties')); ?>

                        </div>
                    </div>
                    <?php if(theme_option('show_map_on_properties_page', 'yes') == 'yes'): ?>
                        <div class="col-md-5 <?php if(!Arr::get($_COOKIE, 'show_map_on_properties', 1)): ?> d-none <?php endif; ?>" id="properties-map">
                            <div class="rightmap h-100">
                                <div
                                    id="map"
                                    data-type="<?php echo e(request()->input('type')); ?>"
                                    data-url="<?php echo e(route('public.ajax.properties.map')); ?><?php echo e(isset($city) && $city ? '?city_id=' . $city->id : ''); ?>"
                                    data-center="<?php echo e(json_encode([43.615134, -76.393186])); ?>"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</section>

<?php if(theme_option('show_map_on_properties_page', 'yes') == 'yes'): ?>
    <script id="traffic-popup-map-template" type="text/x-custom-template">
        <?php echo Theme::partial('real-estate.properties.map', ['property' => get_object_property_map()]); ?>

    </script>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/real-estate/properties.blade.php ENDPATH**/ ?>