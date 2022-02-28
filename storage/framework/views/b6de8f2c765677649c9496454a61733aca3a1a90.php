<?php $__env->startSection("title", "Blog"); ?>
<?php $__env->startSection("content"); ?>
    <?php
    $countStickyPost = count($stickyBlogPost);
    $isBreadcrumbEnable = SM::smGetThemeOption("blog_is_breadcrumb_enable", false);

    $pagination = [
        [
            "title" => "Blog"
        ]
    ];
    $title = SM::smGetThemeOption("blog_banner_title");
    $subtitle = SM::smGetThemeOption("blog_banner_subtitle");
    $bannerImage = SM::smGetThemeOption("blog_banner_image");
    ?>
    <!-- Breadcrumb Start -->
    <section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3><?php echo e($title); ?> </h3>
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
    <section class="home_1_news blog_page cmn_bg">
        <div class="container">
            <div class="row">
                <?php if($countStickyPost>0): ?>
                    <?php $__currentLoopData = $stickyBlogPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="news_sec" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2100">
                            <figure class="snip_con">
                                <a href="<?php echo url('blog/'.$blog->slug ); ?>">
                                    <img src="<?php echo SM::sm_get_the_src( $blog->image, 350, 350); ?>" alt="<?php echo e($blog->title); ?>" class="img-fluid">
                                </a>
                            </figure>
                            <div class="text_p">
                                <div class="date_sec">
                                    <div>
                                        <h4> <?php echo e(date("d", strtotime($blog->created_at))); ?></h4>
                                        <h6> <?php echo e(date("F", strtotime($blog->created_at))); ?></h6>
                                    </div>
                                </div>
                                <h4><?php echo e($blog->title); ?></h4>
                                <p><?php echo mb_strimwidth($blog->short_description, 0, 100, "..."); ?></p>
                                <h6 class="readmore"><a href="<?php echo url('blog/'.$blog->slug ); ?>">Read More</a></h6>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>


                <?php echo $__env->make('frontend.blogs.blog_list_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>
        <!-- pagination Start -->
        
            
                
                
                
                
                
            
        
        <!-- pagination End -->
    </section>
    <!-- News Start -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>