<?php $__env->startSection("title", "Customer"); ?>

<?php $__env->startSection('content'); ?>

    <?php

    $mobile = SM::get_setting_value('mobile');

    $email = SM::get_setting_value('email');

    $address = SM::get_setting_value('address');

    $client_banner_title= SM::smGetThemeOption("client_banner_title");

    $client_banner_subtitle= SM::smGetThemeOption("client_banner_subtitle");

    $client_banner_image= SM::smGetThemeOption("client_banner_image");

    $testimonial= SM::smGetThemeOption("testimonials");



    ?>



    <!-- Breadcrumb Start -->
<section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3><?php echo e($client_banner_title); ?></h3>
          <ul id="breadcrumb" class="breadcrumb">
            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </ul>
    </div>
</div>
</div>
</div>
</section>
    <?php
    $testimonialTitle = SM::smGetThemeOption("testimonial_title");
    $testimonial= SM::smGetThemeOption("testimonials");
    ?>
    <?php if(count($testimonial)>0): ?>
    <!-- Testimonial Start -->
    <section class="testimonial home_2_testimonial blur-up lazyload">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial_slide owl-carousel owl-theme">
                        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial_sec">
                            <div>
                                <img src="<?php echo SM::sm_get_the_src($testimonials["testimonial_image"], 80, 80); ?>" alt="<?php echo e($testimonials['title']); ?>">
                                <i class="fa fa-quote-left img_quote" aria-hidden="true"></i>
                                <p>
                                    <span class="quote_left"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                    <?php echo $testimonials['description']; ?>

                                    <span class="quote_right"><i class="fa fa-quote-right"
                                                                 aria-hidden="true"></i></span>
                                </p>
                                <h3><?php echo e($testimonials['title']); ?></h3>
                                <h5><?php echo e($testimonials['designation']); ?></h5>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->
    <?php endif; ?>
    
    <?php
    $faqTitle = SM::smGetThemeOption("faq_title");
    $faqbanner = SM::smGetThemeOption("faq_banner_image");
    $faqSubtitle = SM::smGetThemeOption("faq_subtitle");
    $faq = SM::smGetThemeOption("faq_sections");
    ?>
    <?php if(count($faq)>0): ?>
    <section id="faq" class="faq_section home_faq_2">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3><?php echo e($faqTitle); ?></h3>
                    <p><?php echo e($faqSubtitle); ?></p>
                </div> 
            </div>
        </div>
            <div class="row">
                
                 <div class="col-md-6">
                     <div class="accordion faq_sec" id="accordionExample">
                         <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$faqs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <?php if($key<3): ?>
                                <?php if($key==0){
          $collapse='show';
          $collapsed='';
      }else{
          $collapse='';
           $collapsed='collapsed';
      }
      ?>
                                <div class="card">
                                    <div class="card-header" id="headingOne_<?php echo e($key); ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link <?php echo e($collapsed); ?>" type="button" data-toggle="collapse" data-target="#collapseOne_<?php echo e($key); ?>" aria-expanded="true" aria-controls="collapseOne">
                                                <?php echo e($faqs['faq_title']); ?>

                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne_<?php echo e($key); ?>" class="collapse <?php if($key==0): ?><?php echo e('show'); ?><?php endif; ?>" aria-labelledby="headingOne_<?php echo e($key); ?>" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                <?php echo e($faqs['faq_description']); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo SM::sm_get_the_src($faqbanner, 800, 800); ?>" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <!-- FAQ End -->





    <!-- Contact-us Start -->

    <section style="background: #f5f5f5">

        <!-- leave comment sectopn starts-->

        <div class="comment_form contact_form contect_f">

            <div class="text-xl-left">

                <div class="container">

                    <div class="row">



                        <div class="col-lg-4 contact_text">

                            <div class="angle angle-left"></div>

                            <h3 class="title">Query Form </h3>

                            <p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit Intense in one of our comfortable offices.</p>

                            <div class="contect_info">

                                <div class="contect-title">

                                    <h3 class="title">Information</h3>

                                </div>

                                <div class="contant-text">

                                    <ul>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo e($address); ?></li>

                                        <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: <?php echo e($mobile); ?></li>

                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>Email Us: <?php echo e($email); ?></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <!-- leave comment sectopn starts-->

                        <div class="col-lg-8 center">

                            <div class="angle angle-right"></div>

                            <div class="quote_2 comment_form_sec">

                                <div class="container bg-transparent">

                                    <div class="row">

                                        <div class="col-12 quote_form">

                                            <h3 class="page-header-comment mb-4">Leave you comment :</h3>

                                            <form>

                                                <div class="form-row">

                                                    <div class="form-group col-md-6">

                                                        <label>Name :</label>

                                                        <input type="text" class="form-control" placeholder="Enter Your Name" required="">

                                                    </div>

                                                    <div class="form-group col-md-6">

                                                        <label for="inputEmail4">Email :</label>

                                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" required="">

                                                    </div>

                                                    <div class="form-group col-md-6">

                                                        <label for="inputEmail4">Phone No :</label>

                                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" required="">

                                                    </div>

                                                    <div class="form-group col-md-12">

                                                        <label for="inputEmail4">Subject :</label>

                                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" required="">

                                                    </div>

                                                    <div class="form-group col-md-12">

                                                        <label for="exampleTextarea">Query :</label>

                                                        <textarea class="form-control msg_coment" id="exampleTextarea" rows="3" placeholder="Leave a Comment" required=""></textarea>

                                                    </div>

                                                </div>

                                                <!-- <a class="quote_btn theme_btn" href="#">

                                                    Send Your Message

                                                    <span class="theme_btn_eff"></span>

                                                </a> -->
                                                <div class="center_btn">

                                <a class="about_btn  btn_2" href="#">
                                    <div class="button_base b05_3d_roll">
                                        <div>View More <span class="theme_btn_eff"></span></div>
                                        <div>View More <span class="theme_btn_eff"></span></div>
                                    </div>

                                </a>
                            </div>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- leave comment section end-->

                    </div>

                </div>

            </div>

        </div>

        <!-- leave comment section end-->

    </section>

    <!-- Contact-us End -->





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>