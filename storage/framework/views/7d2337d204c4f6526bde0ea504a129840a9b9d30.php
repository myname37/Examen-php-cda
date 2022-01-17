<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=<?php echo e(urlencode(theme_option('primary_font', 'Nunito Sans'))); ?>:300,600,700,800" rel="stylesheet" type="text/css">
    <!-- CSS Library-->

    <style>
        :root {
            --primary-color: <?php echo e(theme_option('primary_color', '#1d5f6f')); ?>;
            --primary-color-rgb: <?php echo e(hex_to_rgba(theme_option('primary_color', '#1d5f6f'), 0.8)); ?>;
            --primary-color-hover: <?php echo e(theme_option('primary_color_hover', '#063a5d')); ?>;
            --primary-font: '<?php echo e(theme_option('primary_font', 'Nunito Sans')); ?>';
        }
    </style>

    <?php echo Theme::header(); ?>

</head>
<body <?php if(BaseHelper::siteLanguageDirection() == 'rtl'): ?> dir="rtl" <?php endif; ?>>
<?php echo apply_filters(THEME_FRONT_BODY, null); ?>

<div id="alert-container"></div>
<div class="bravo_topbar d-none d-sm-block">
    <div class="container-fluid w90">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="topbar-left">
                        <?php if(theme_option('social_links')): ?>
                            <div class="top-socials">
                                <?php $__currentLoopData = json_decode(theme_option('social_links'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($socialLink) == 3): ?>
                                        <a href="<?php echo e($socialLink[2]['value']); ?>"
                                           title="<?php echo e($socialLink[0]['value']); ?>">
                                            <i class="<?php echo e($socialLink[1]['value']); ?>"></i>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <span class="line"></span>
                        <?php endif; ?>
                        <a href="mailto:<?php echo e(theme_option('email')); ?>"><?php echo e(theme_option('email')); ?></a>
                    </div>
                    <div class="topbar-right">
                        <?php if(is_plugin_active('real-estate')): ?>
                            <ul class="topbar-items">
                                <li><a href="<?php echo e(route('public.wishlist')); ?>"><i class="fas fa-heart"></i> <?php echo e(__('Wishlist')); ?>(<span class="wishlist-count">0</span>)</a></li>
                            </ul>
                            <?php $currencies = get_all_currencies(); ?>
                            <?php if(count($currencies) > 1): ?>
                                <div class="language currency-switcher">
                                    <div class="language-switcher-wrapper">
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-secondary dropdown-toggle btn-select-language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <?php echo e(get_application_currency()->title); ?>

                                            </button>
                                            <ul class="dropdown-menu language_bar_chooser">
                                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('public.change-currency', $currency->title)); ?>" <?php if(get_application_currency_id() == $currency->id): ?> class="active" <?php endif; ?>><span><?php echo e($currency->title); ?></span></a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php echo Theme::partial('language-switcher'); ?>

                        <?php if(is_plugin_active('real-estate') && RealEstateHelper::isRegisterEnabled()): ?>
                            <ul class="topbar-items">
                                <?php if(auth('account')->check()): ?>
                                    <li class="login-item"><a href="<?php echo e(route('public.account.dashboard')); ?>" rel="nofollow"><i class="fas fa-user"></i> <span><?php echo e(auth('account')->user()->name); ?></span></a></li>
                                    <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout')); ?></a></li>
                                <?php else: ?>
                                    <li class="login-item">
                                        <a href="<?php echo e(route('public.account.login')); ?>"><i class="fas fa-sign-in-alt"></i>  <?php echo e(__('Login')); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                            <?php if(auth('account')->check()): ?>
                                <form id="logout-form" action="<?php echo e(route('public.account.logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="topmenu bg-light">
    <div <?php if(theme_option('enable_sticky_header', 'yes') == 'yes'): ?> id="header-waypoint" <?php endif; ?> class="main-header">
        <div class="container-fluid w90">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <?php if(theme_option('logo')): ?>
                            <a class="navbar-brand" href="<?php echo e(route('public.single')); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl(theme_option('logo'))); ?>"
                                     class="logo" height="40" alt="<?php echo e(theme_option('site_name')); ?>">
                            </a>
                        <?php endif; ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                id="header-waypoint"                   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end animation" id="navbarSupportedContent">
                            <div class="main-menu-darken"></div>
                            <div class="main-menu-content">
                                <div class="d-lg-none bg-primary p-2">
                                    <span class="text-white"><?php echo e(__('Menu')); ?></span>
                                    <span class="float-right toggle-main-menu-offcanvas text-white">
                                        <i class="far fa-times-circle"></i>
                                    </span>
                                </div>
                                <div class="main-menu-nav d-lg-flex">
                                    <?php echo Menu::renderMenuLocation('main-menu', [
                                            'options' => ['class' => 'navbar-nav justify-content-end menu menu--mobile'],
                                            'view'    => 'main-menu',
                                        ]); ?>

                                    <?php if(is_plugin_active('real-estate') && RealEstateHelper::isRegisterEnabled()): ?>
                                        <a class="btn btn-primary add-property" href="<?php echo e(route('public.account.properties.index')); ?>">
                                            <i class="fas fa-plus-circle"></i> <?php echo e(__('Add Property')); ?>

                                        </a>
                                    <?php endif; ?>

                                    <div class="d-sm-none">
                                        <div>
                                            <?php if(is_plugin_active('real-estate')): ?>
                                                <ul class="topbar-items d-block">
                                                    <li class="login-item">
                                                        <a href="<?php echo e(route('public.wishlist')); ?>"><i class="fas fa-heart"></i> <?php echo e(__('Wishlist')); ?>(<span class="wishlist-count">0</span>)</a>
                                                    </li>
                                                </ul>
                                                <?php if(count($currencies) > 1): ?>
                                                    <div class="language">
                                                        <div class="language-switcher-wrapper">
                                                            <div class="d-inline-block language-label">
                                                                <?php echo e(__('Currencies')); ?>:
                                                            </div>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-secondary dropdown-toggle btn-select-language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                    <?php echo e(get_application_currency()->title); ?>

                                                                </button>
                                                                <ul class="dropdown-menu language_bar_chooser">
                                                                    <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li>
                                                                            <a href="<?php echo e(route('public.change-currency', $currency->title)); ?>" <?php if(get_application_currency_id() == $currency->id): ?> class="active" <?php endif; ?>><span><?php echo e($currency->title); ?></span></a>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php echo Theme::partial('language-switcher'); ?>

                                            <?php if(is_plugin_active('real-estate')): ?>
                                                <ul class="topbar-items d-block">
                                                    <?php if(auth('account')->check()): ?>
                                                        <li class="login-item"><a href="<?php echo e(route('public.account.dashboard')); ?>" rel="nofollow"><i class="fas fa-user"></i> <span><?php echo e(auth('account')->user()->name); ?></span></a></li>
                                                        <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout')); ?></a></li>
                                                    <?php else: ?>
                                                        <li class="login-item">
                                                            <a href="<?php echo e(route('public.account.login')); ?>"><i class="fas fa-sign-in-alt"></i>  <?php echo e(__('Login')); ?></a>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                                <?php if(is_plugin_active('real-estate') && auth('account')->check()): ?>
                                                    <form id="logout-form" action="<?php echo e(route('public.account.logout')); ?>" method="POST" style="display: none;">
                                                        <?php echo csrf_field(); ?>
                                                    </form>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php
        $page = Theme::get('page');
    ?>
    <?php if(is_plugin_active('real-estate') && url()->current() == route('public.single') || ($page && $page->template === 'homepage')): ?>
        <?php
            $categories = get_property_categories(['indent' => '↳', 'conditions' => ['status' => \Botble\Base\Enums\BaseStatusEnum::PUBLISHED]]);
        ?>
        <div class="home_banner" style="background-image: url(<?php echo e(theme_option('home_banner') ? RvMedia::getImageUrl(theme_option('home_banner')) : Theme::asset()->url('images/banner.jpg')); ?>)">
            <div class="topsearch">
                <?php if(theme_option('home_banner_description')): ?><h1 class="text-center text-white mb-4 banner-text-description"><?php echo e(theme_option('home_banner_description')); ?></h1><?php endif; ?>
                <form <?php if(theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes'): ?> action="<?php echo e(route('public.projects')); ?>" <?php else: ?> action="<?php echo e(route('public.properties')); ?>" <?php endif; ?> method="GET" id="frmhomesearch">
                        <div class="typesearch" id="hometypesearch">
                            <?php if(theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes'): ?>
                                <a href="javascript:void(0)" class="active" rel="project" data-url="<?php echo e(route('public.projects')); ?>"><?php echo e(__('Projects')); ?></a>
                            <?php endif; ?>
                            <a href="javascript:void(0)" rel="sale" <?php if(theme_option('enable_search_projects_on_homepage_search', 'yes') != 'yes'): ?> class="active" <?php endif; ?> data-url="<?php echo e(route('public.properties')); ?>"><?php echo e(__('Sale')); ?></a>
                            <a href="javascript:void(0)" rel="rent" data-url="<?php echo e(route('public.properties')); ?>"><?php echo e(__('Rent')); ?></a>
                        </div>
                        <div class="input-group input-group-lg">

                            <input type="hidden" name="type" <?php if(theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes'): ?> value="project" <?php else: ?> value="sale" <?php endif; ?> id="txttypesearch">

                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-search"></i></span>
                            </div>
                            <div class="keyword-input">
                                <input type="text" class="form-control" name="k" placeholder="<?php echo e(__('Enter keyword...')); ?>" id="txtkey" autocomplete="off">
                                <div class="spinner-icon">
                                    <i class="fas fa-spin fa-spinner"></i>
                                </div>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-location"></i></span>
                            </div>
                            <div class="location-input" data-url="<?php echo e(route('public.ajax.cities')); ?>">
                                <input type="hidden" name="city_id">
                                <input class="select-city-state form-control" name="location" value="<?php echo e(request()->input('location')); ?>" placeholder="<?php echo e(__('City, State')); ?>" autocomplete="off">
                                <div class="spinner-icon">
                                    <i class="fas fa-spin fa-spinner"></i>
                                </div>
                                <div class="suggestion">

                                </div>
                            </div>
                            <div class="input-group-append search-button-wrapper">
                                <button class="btn btn-orange" type="submit"><?php echo e(__('Search')); ?></button>
                            </div>

                            <div class="advanced-search d-none d-sm-block">
                                <a href="#" class="advanced-search-toggler"><?php echo e(__('Advanced')); ?> <i class="fas fa-caret-down"></i></a>
                                <div class="advanced-search-content property-advanced-search">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 pr-md-1">
                                                <?php echo Theme::partial('real-estate.filters.categories', compact('categories')); ?>

                                            </div>
                                            <div class="col-md-3 col-sm-6 px-md-1">
                                                <?php echo Theme::partial('real-estate.filters.bedroom'); ?>

                                            </div>
                                            <div class="col-md-3 col-sm-6 px-md-1">
                                                <?php echo Theme::partial('real-estate.filters.bathroom'); ?>

                                            </div>
                                            <div class="col-md-3 col-sm-6 pl-md-1">
                                                <?php echo Theme::partial('real-estate.filters.floor'); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="advanced-search-content project-advanced-search">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <?php echo Theme::partial('real-estate.filters.categories', compact('categories')); ?>

                                            </div>
                                            <div class="col-md-8">
                                                <?php echo Theme::partial('real-estate.filters.price'); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listsuggest">

                        </div>
                    </form>
            </div>
        </div>
        </div>
    <?php endif; ?>
</header>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/header.blade.php ENDPATH**/ ?>