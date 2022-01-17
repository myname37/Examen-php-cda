<ul id='auto-checkboxes' data-name='foo' class="list-unstyled list-feature">
    <li id="mainNode">
        <input type="checkbox"  id="expandCollapseAllTree">&nbsp;&nbsp;
        <label for="expandCollapseAllTree" class="label label-default allTree"><?php echo e(trans('core/acl::permissions.all')); ?></label>
        <ul>
            <?php $__currentLoopData = $children['root']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elementKey => $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="collapsed" id="node<?php echo e($elementKey); ?>">
                    <input type="checkbox"  id="checkSelect<?php echo e($elementKey); ?>" name="flags[]" value="<?php echo e($flags[$element]['flag']); ?>" <?php if(in_array($flags[$element]['flag'], $active)): ?> checked <?php endif; ?>>
                    <label for="checkSelect<?php echo e($elementKey); ?>" class="label label-warning" style="margin: 5px;"><?php echo e($flags[$element]['name']); ?></label>
                    <?php if(isset($children[$element])): ?>
                        <ul>
                            <?php $__currentLoopData = $children[$element]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subKey => $subElements): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="collapsed" id="node_sub_<?php echo e($elementKey); ?>_<?php echo e($subKey); ?>">
                                    <input type="checkbox"  id="checkSelect_sub_<?php echo e($elementKey); ?>_<?php echo e($subKey); ?>" name="flags[]" value="<?php echo e($flags[$subElements]['flag']); ?>" <?php if(in_array($flags[$subElements]['flag'], $active)): ?> checked <?php endif; ?>>
                                    <label for="checkSelect_sub_<?php echo e($elementKey); ?>_<?php echo e($subKey); ?>" class="label label-primary nameMargin"><?php echo e($flags[$subElements]['name']); ?></label>
                                    <?php if(isset($children[$subElements])): ?>
                                        <ul>
                                            <?php $__currentLoopData = $children[$subElements]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubKey => $subSubElements): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="collapsed" id="node_sub_sub_<?php echo e($subSubKey); ?>">
                                                    <input type="checkbox"  id="checkSelect_sub_sub<?php echo e($subSubKey); ?>" name="flags[]" value="<?php echo e($flags[$subSubElements]['flag']); ?>" <?php if(in_array($flags[$subSubElements]['flag'], $active)): ?> checked <?php endif; ?>>
                                                    <label for="checkSelect_sub_sub<?php echo e($subSubKey); ?>" class="label label-success nameMargin"><?php echo e($flags[$subSubElements]['name']); ?></label>
                                                    <?php if(isset($children[$subSubElements])): ?>
                                                        <ul>
                                                            <?php $__currentLoopData = $children[$subSubElements]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grandChildrenKey => $grandChildrenElements): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="collapsed" id="node_grand_child<?php echo e($grandChildrenKey); ?>">
                                                                    <input type="checkbox"  id="checkSelect_grand_child<?php echo e($grandChildrenKey); ?>" name="flags[]" value="<?php echo e($flags[$grandChildrenElements]['flag']); ?>" <?php if(in_array($flags[$grandChildrenElements]['flag'], $active)): ?> checked <?php endif; ?>>
                                                                    <label for="checkSelect_grand_child<?php echo e($grandChildrenKey); ?>" class="label label-danger nameMargin"><?php echo e($flags[$grandChildrenElements]['name']); ?></label>
                                                                    <?php if(isset($children[$grandChildrenElements])): ?>
                                                                        <ul>
                                                                            <?php $__currentLoopData = $children[$grandChildrenElements]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grandChildrenKeySub => $greatGrandChildrenElements): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <li class="collapsed" id="node<?php echo e($grandChildrenKey); ?>">
                                                                                    <input type="checkbox"  id="checkSelect_grand_child<?php echo e($grandChildrenKeySub); ?>" name="flags[]" value="<?php echo e($flags[$grandChildrenElements]['flag']); ?>" <?php if(in_array($flags[$grandChildrenElements]['flag'], $active)): ?> checked <?php endif; ?>>
                                                                                    <label for="checkSelect_grand_child<?php echo e($grandChildrenKeySub); ?>" class="label label-info nameMargin"><?php echo e($flags[$grandChildrenElements]['name']); ?></label>
                                                                                </li>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
</ul>
<?php /**PATH D:\wamp64\www\immo\platform/core/acl/resources/views//roles/permissions.blade.php ENDPATH**/ ?>