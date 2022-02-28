    <?php if(Route::current()->getName() != 'home'): ?>
            <?php
                $link = url('/');
            ?>
            <a href="/"><i class="fa fa-home"></i> Home</a><i class="fa fa-chevron-right"  style="padding: 2px 10px;"></i>
            <?php $link = "" ?>
            <?php for($i = 1; $i <= count(Request::segments()); $i++): ?>
                <?php if($i < count(Request::segments()) & $i > 0): ?>
                    <?php $link .= "/" . Request::segment($i); ?>
                    <a href="<?= $link ?>"><?php echo e(ucwords(str_replace('-',' ',Request::segment($i)))); ?></a> <i
                            class="fa fa-chevron-right" style="padding: 2px 10px;"></i>
                <?php else: ?> <?php echo e(ucwords(str_replace('-',' ',Request::segment($i)))); ?>

                <?php endif; ?>
            <?php endfor; ?>
    <?php endif; ?>
    <style>
        ul#breadcrumb a {
            color: #fff;
            font-size: 13px;
        }
    </style>