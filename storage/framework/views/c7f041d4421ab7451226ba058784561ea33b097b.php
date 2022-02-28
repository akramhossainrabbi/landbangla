<?php
$blogSecondLoop = 1;
$countBlogPost = count( $blogPost );
?>
<?php if($countBlogPost > 0): ?>
    <?php $__currentLoopData = $blogPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $sdTitle = strip_tags( stripslashes( $blog->title ), "<br><span><i><b>" );
        $sdSubTitle = substr( $sdTitle, 0, 50 );
        $sdTitle = ( strlen( $sdTitle ) > 50 ) ? $sdSubTitle . " ....." : $sdSubTitle;
        $likeInfo['id'] = $blog->id;
        $likeInfo['type'] = 'blog';

        $blogUrl = url( "blog/" . $blog->slug );
        ?>
        <div class="col-lg-4 col-md-6">

            <div class="news_sec" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2100">
                <figure class="snip_con">
                    <a href="<?php echo url('blog/'.$blog->slug ); ?>">
                        <img src="<?php echo SM::sm_get_the_src($blog->image, 350, 350); ?>" alt="<?php echo e($sdTitle); ?>" class="img-fluid blur-up lazyload ">
                    </a>
                </figure>
                <div class="text_p">
                    <div class="date_sec">
                        <div>
                            <h4><?php echo e(date("d", strtotime($blog->created_at))); ?></h4>
                            <h6><?php echo e(date("F", strtotime($blog->created_at))); ?></h6>
                        </div>
                    </div>
                    <h4>Sandford improvements</h4>
                    <?php
                    $des = $blog->short_description;
                    $des = ( $des != '' ) ? $des : $blog->long_description;
                    $sd = strip_tags( stripslashes( $des ), "<br><b>" );
                    $sdSub = substr( $sd, 0, 100 );
                    $sd = ( strlen( $sd ) > 100 ) ? $sdSub . " ....." : $sdSub;
                    ?>
                    <p><?php echo e($sd); ?></p>
                    <h6 class="readmore"><a href="<?php echo $blogUrl; ?>">Read More</a></h6>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-12">
        <?php echo $blogPost->links('common.pagination'); ?>

    </div>
<?php else: ?>
    <div class="alert alert-info"><i class="fa fa-info"></i> No Blog Post Found!</div>
<?php endif; ?>


