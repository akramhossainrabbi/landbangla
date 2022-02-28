<?php $__env->startSection("title", "Gallerys"); ?>

<?php $__env->startSection('content'); ?>

    <?php

    $gallery_banner_title = SM::smGetThemeOption("gallery_banner_title");

    $project_banner_subtitle = SM::smGetThemeOption("gallery_banner_subtitle");

    $bannerImage = SM::smGetThemeOption("gallery_banner_image");

    ?>



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

    <!-- Our Project Start -->

    <section class="portfolio-section cmn_bg">

        <div class="container">



            <div class="row zoom-gallery">

                <?php if(count($gallery)>0): ?>

                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$gallerys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php    $image_list=explode(",",$gallerys->image_gallery); ?>

                            <?php if(!empty($image_list[0])): ?>

                                <div class="isotopeSelector filter fashion col-lg-4 col-sm-6" data-aos="zoom-out">

                                    <div class="overlay">

                                        <div class="border-portfolio">

                                            <a  href="<?php echo e(url('gallery/'.$gallerys->slug)); ?>" data-source="">

                                                <div class="overlay-background">

                                                    <i class="ti-plus" aria-hidden="true"></i>

                                                </div>

                                                <img src="<?php echo SM::sm_get_the_src($image_list[0], 350, 350); ?>" class="img-fluid blur-up lazyload " alt="<?php echo e($gallerys->title); ?>">

                                            </a>

                                        </div>

                                        <a href="<?php echo e(url('gallery/'.$gallerys->slug)); ?>" class="text-center"><?php echo e($gallerys->title); ?></a>

                                    </div>

                                </div>

                            <?php endif; ?>



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>



            </div>

        </div>





        <!-- pagination Start -->

        

            

                

                

                

                

                

            

        

        <!-- pagination End -->

    </section>

    <!-- Our Project End -->





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>