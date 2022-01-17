<?php
    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Location\Repositories\Interfaces\CityInterface;

    $cities = collect([]);
    if (is_plugin_active('location')) {
        $cities = app(CityInterface::class)->advancedGet([
            'condition' => [
                'cities.is_featured' => true,
                'cities.status'      => BaseStatusEnum::PUBLISHED,
            ],
            'take'      => (int)theme_option('number_of_featured_cities', 10),
            'select'    => ['cities.id', 'cities.name', 'cities.image', 'cities.slug']
        ]);
    }
?>

<?php if($cities->count()): ?>
    <div class="container-fluid w90">

        <div class="padtop70">
            <div class="areahome">
                <div class="row">
                    <div class="col-12">
                        <h2><?php echo e(__('Properties by locations')); ?></h2>
                        <p><?php echo e(theme_option('home_description_for_properties_by_locations')); ?></p>
                    </div>
                </div>
                <div style="position:relative;">
                    <div class="owl-carousel" id="cityslide">
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item itemarea">
                                <a href="<?php echo e(route('public.properties-by-city', $city->slug)); ?>">
                                    <img src="<?php echo e(RvMedia::getImageUrl($city->image, 'small', false, RvMedia::getDefaultImage())); ?>" alt="<?php echo e($city->name); ?>">
                                    <h4><?php echo e($city->name); ?></h4>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <i class="am-next"><img src="<?php echo e(Theme::asset()->url('images/aleft.png')); ?>" alt="pre"></i>
                    <i class="am-prev"><img src="<?php echo e(Theme::asset()->url('images/aright.png')); ?>" alt="next"></i>
                </div>
            </div>

        </div>
    </div>
<?php endif; ?>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/short-codes/properties-by-locations.blade.php ENDPATH**/ ?>