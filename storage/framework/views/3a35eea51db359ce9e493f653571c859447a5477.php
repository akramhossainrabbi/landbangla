<?php
/**
 * Created by PhpStorm.
 * User: NPTL
 * Date: 10/5/17
 * Time: 2:51 PM
 */
?>
<?php if($paginator->hasPages()): ?>
    <div class="pagination-blog">
        
        <?php if(!$paginator->onFirstPage()): ?>
            <a class="prev" href="<?php echo e($paginator->previousPageUrl()); ?>">
                <img src="<?php echo asset('images/arrow-left.png'); ?>" alt="">
            </a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <a href="#"><?php echo e($element); ?></a>
            <?php endif; ?>
            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <span class="current"><?php echo e($page); ?></span>
                    <?php else: ?>
                        <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php if($paginator->hasMorePages()): ?>
            <a class="next" href="<?php echo e($paginator->nextPageUrl()); ?>">
                <img src="<?php echo asset('images/arrow-right.png'); ?>" alt="">
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>