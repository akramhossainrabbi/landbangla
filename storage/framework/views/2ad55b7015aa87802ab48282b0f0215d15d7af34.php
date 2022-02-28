<?php $__env->startSection("title", $blog->title); ?>
<?php $__env->startSection("content"); ?>
    <?php
    if ($blog->comments == 1) {
        $commentTitle = '1 Comment';
    } elseif ($blog->comments > 1) {
        $commentTitle = $blog->comments . ' Comments';
    } else {
        $commentTitle = 'No Comments';
    }
    if ($blog->views == 1) {
        $viewsTitle = '1 View';
    } elseif ($blog->views > 1) {
        $viewsTitle = $blog->views . ' Views';
    } else {
        $viewsTitle = 'No View';
    }
    if ($blog->likes == 1) {
        $likesTitle = '1 Like';
    } elseif ($blog->likes > 1) {
        $likesTitle = $blog->likes . ' Likes';
    } else {
        $likesTitle = 'No Likes';
    }

    $blogUrl = (url("blog/$blog->slug"));
    $bannerImage = SM::smGetThemeOption("blog_detail_banner_image");
    ?>



    <!-- Breadcrumb Start -->
    <section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>BLOG DETAILS </h3>
          <ul id="breadcrumb" class="breadcrumb">
            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </ul>
    </div>
</div>
</div>
</div>
</section>
    <!-- Breadcrumb Start -->

    <!-- News Start -->
    <section class="home_1_news blog_side_sec cmn_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-shadow">
                        <div class="row">
                            <!-- blog details starts-->
                            <div class="col-sm-12">
                                <div class="single_blog_item">
                                    <div class="blog-block">
                                        <div class="blog-box">
                                            <?php if(empty(!$blog->image)): ?>
                                                <div class="overflow-hidden">
                                                    <img class="img-fluid" src="<?php echo SM::sm_get_the_src( $blog->image , 900, 600); ?>" alt="<?php echo e($blog->title); ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h6><?php echo e(date("d - F - Y", strtotime($blog->created_at))); ?></h6>
                                        <a href="#"><h3 class="blog-head"><?php echo e($blog->title); ?></h3></a>
                                        <div class="blog-divider"></div>
                                        <div class="blog-description">
                                            <p><?php echo $blog->short_description; ?></p>
                                            <p><?php echo $blog->long_description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog details end-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                

                                
                            </div>
                        </div>

                    </div>
                </div>
                <?php echo $__env->make("frontend.blogs.blog_sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>
    </section>
    <!-- News Start -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>