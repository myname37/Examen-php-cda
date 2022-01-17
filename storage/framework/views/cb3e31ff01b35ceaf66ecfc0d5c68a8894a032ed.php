<ul <?php echo $options; ?>>
    <?php $__currentLoopData = $menu_nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="menu-item <?php if($row->has_child): ?> menu-item-has-children <?php endif; ?> <?php echo e($row->css_class); ?> <?php if($row->active): ?> current-menu-item <?php endif; ?>">
            <a href="<?php echo e(url($row->url)); ?>" target="<?php echo e($row->target); ?>">
                <?php if($row->icon_font): ?><i class='<?php echo e(trim($row->icon_font)); ?>'></i> <?php endif; ?><?php echo e($row->title); ?>

            </a>
            <?php if($row->has_child): ?>
                <span class="fas fa-angle-down sub-toggle-desktop"></span>
                <span class="sub-toggle"></span>
                <?php echo Menu::generateMenu([
                        'menu'       => $menu,
                        'view'       => 'main-menu',
                        'options'    => ['class' => 'sub-menu'],
                        'menu_nodes' => $row->child,
                    ]); ?>

            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/partials/main-menu.blade.php ENDPATH**/ ?>