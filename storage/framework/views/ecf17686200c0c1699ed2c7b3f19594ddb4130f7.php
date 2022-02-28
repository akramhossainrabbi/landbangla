<?php $__env->startSection("title", "Gallerys"); ?>

<?php $__env->startSection('content'); ?>

    <?php

    $gallery_banner_title = SM::smGetThemeOption("gallery_banner_title");

    $project_banner_subtitle = SM::smGetThemeOption("gallery_banner_subtitle");

    $bannerImage = SM::smGetThemeOption("gallery_banner_image");

    ?>





    <!-- Breadcrumb Start -->
    <!-- Breadcrumb Start -->
    <section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3><?php echo e($gallery_banner_title); ?> </h3>
          <ul id="breadcrumb" class="breadcrumb">
            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </ul>
    </div>
</div>
</div>
</div>
</section>


    <!-- section start -->

    <section class="portfolio-section port-col zoom-gallery fullwidth-portfolio cmn_bg">

        <ul class="plus_decore">

            <li></li>

            <li></li>

        </ul>

        <div class="section_title">
            <h3><?php echo e($gallery_photo->title); ?></h3>
        </div>

        <?php   $image= explode(",",$gallery_photo->image_gallery);  ?>

        <p><span>Total Image : <?php if(count($image)>0): ?><?php echo e(count($image)); ?><?php endif; ?> </span></p>

        <div class="container">

          <?php if(!empty($image)): ?>

            <div class="isotopeContainer row">

              <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-4 col-md-4 col-sm-6 isotopeSelector shoes">

                    <div class="overlay">

                        <div class="border-portfolio">

                            <a class="zoom_gallery" href="<?php echo SM::sm_get_the_src($images,800,800); ?>" data-source="<?php echo SM::sm_get_the_src($images,350,350); ?>">

                                <div class="overlay-background">

                                    <i class="ti-plus" aria-hidden="true"></i>

                                </div>

                                <img class="img-fluid blur-up lazyload " alt="" src="<?php echo SM::sm_get_the_src($images,350,350); ?>">

                            </a>

                        </div>

                    </div>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

          <?php endif; ?>

        </div>

        <!-- pagination Start -->

        

            

                

                

                

                

                

            

        

        <!-- pagination End -->

    </section>

    <!-- Section ends -->





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>