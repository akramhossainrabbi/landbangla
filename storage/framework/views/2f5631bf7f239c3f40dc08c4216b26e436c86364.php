<?php $__env->startSection("title", "About"); ?>

<?php $__env->startSection('content'); ?>

    <!-- page wapper-->

    <?php

    $wwrTitle = SM::smGetThemeOption("wwr_title");

    $wwrSubtitle = SM::smGetThemeOption("wwr_subtitle");

    $wwrDescription = SM::smGetThemeOption("wwr_description");

    $ourMission = SM::smGetThemeOption("our_mission");

    $ourVision = SM::smGetThemeOption("our_vision");

    $histories = SM::smGetThemeOption("histories");

    $historiesCount = count($histories);

    $title = SM::smGetThemeOption("about_banner_title");

    $subtitle = SM::smGetThemeOption("about_banner_subtitle");

    $bannerImage = SM::smGetThemeOption("about_banner_image");

    $ourMissionbannerImage = SM::smGetThemeOption("our_mission_banner");

    $vissionbannerImage = SM::smGetThemeOption("our_vision_banner");



    ?>
    <!-- Breadcrumb Start -->
<section class="about_page_img">
    <img src="<?php echo SM::sm_get_the_src( $bannerImage); ?>">
    <div class="about_contant">
        <h3> Where Dreams Come Home</h3>
    </div>
</section>
<section class="about_us_sec" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="who-we-are-content">
                    <h3><?php echo SM::smGetThemeOption("wwr_subtitle", ""); ?></h3>
                    <p><?php echo SM::smGetThemeOption("wwr_description", ""); ?></p>
                </div>
            </div>
        </div>
    </div>   
</section>
<section class="brand_sec brand_2 cmn_bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="our-satisfife-box">
                    <div class="section_title">
                        <h3>Our Mission</h3>
                    </div>
                    <div class="mission-vission">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-img">
                                    <img src="<?php echo SM::sm_get_the_src( $ourMissionbannerImage, 500,250 ); ?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="section-contant">
                                    <div class="media-body">
                                        <p><?php echo SM::smGetThemeOption("our_mission", ""); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="our-satisfife-box">
                    <div class="section_title">
                        <h3>Our Vission</h3>
                    </div>
                    <div class="mission-vission">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="section-contant">
                                    <p><?php echo SM::smGetThemeOption("our_vision", ""); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section-img">
                                    <img src="<?php echo SM::sm_get_the_src( $vissionbannerImage, 500,250 ); ?>" class="img-fluid">
                                </div>
                            </div>
                            
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="company-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="company-background-contant">
                    <p>GLG Assets Ltd. is a fast-growing real estate company in Bangladesh, which was established in 2015. We are a member of REHAB and also an enlisted real estate company of RAJUK. Although GLG Assets Ltd. is a new company in the real estate sector by its name, it has a mature team to build your dream home.
                    <br>
                    We consider every single associate of GLG Assets Ltd. as part of its family and most of these competent team members are involved in this industry for more than 20 years.
                    <br>
                    We believe that our experience, commitment, quality of work and architectural design have satisfied our valued clients and landowners from the very beginning. This has motivated us and enabled us to give everything we have so that we can become one of the most trusted names in the real estate sector of Bangladesh within a short period of time.</p>
                </div>            
            </div>
        </div>
    </div>
</section>

<section class="Managing-Director">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="section-img">
                    <img src="https://thumbs.dreamstime.com/b/handsome-man-hair-style-beard-beauty-face-portrait-fashion-male-model-black-hair-high-resolution-handsome-man-125031765.jpg">
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="section-contant">
                    <div class="section-title">
                        <h3> Md : Nahid Hassan </h3>
                        <h5> Managing Director </h5>
                    </div>
                    <div class="section-contant">
                        <p>
                            From day 1 of our inception, we have been providing a complete solution package to our clients. This is not just limited to identifying, matching, and implementing the exact requirements of a client in residential, commercial, retail, land, or anything related to real estate. Our after-sales service, timely effective handling of any issues, market research knowledge, capability to furnish strategic advisory for appraisal/valuation, and many other expertise have enabled us to get closer to our clients and earn their trust. That’s how we started off strong and already we have a significant number of ongoing and upcoming projects all over Dhaka city. Through our values, clear vision, and mastery, we have already been able to generate buzz in the real estate sector.

                            Our aim is to create goodwill through our services. As we act on this mindset, our customers and landowners turn into ambassadors of our company and their trust uplifts our strength.

                            It’s great to know what one wants to do – but it’s altogether another spectrum to actually ‘make it happen’ and bring it to life for the customers. I trust we can rely on your constructive support as this process of transforming creative concepts into reality continues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



   <!-- Our Team Start -->
    <?php
    $teamTitle = SM::smGetThemeOption("team_title");
    $teamSubtitle = SM::smGetThemeOption("team_subtitle");
    $teams = SM::smGetThemeOption("teams");
    ?>

    <?php if(count($teams)>0): ?>

<section class="home_1_team team-2 cmn_bg about_us_sec">
        <div class="container">
             <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3 class="text-mute"><?php echo e($teamTitle); ?></h3>
                    <!--<p class="text-mute"><?php echo e($teamSubtitle); ?></p>-->
                </div> 
            </div>
        </div>
        <div class="faundation-of-passion pad-lr">
            <div class="col-md-12">
                <div class="row">
                    <div class="owl-carousel owl-theme team_section_active">
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key>3): ?>
                                <?php break; ?>
                            <?php else: ?>
                                <div class="item">
                                    <div class="card">
                                        <div class="user-profile-box">
                                          <img src="<?php echo SM::sm_get_the_src($team["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                                                 alt="<?php echo e($team["title"]); ?>">
                                        </div>
                                        <div class="card-body">
                                            <div class="user-profile-content-box">
                                              <h3><?php echo e($team["title"]); ?></h3>
                                              <p><?php echo e($team["designation"]); ?></p>
                                              <?php if(isset($team["description"])): ?>
                                                <p class="pragraph-text"><?php echo e($team["description"]); ?></p>
                                              <?php endif; ?>  
                                              <ul class="social-icons-ql pull-left">
                                                  <?php if(!empty($team["facebook"])): ?>
                                                    <li><a href="<?php echo e($team["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                    <?php endif; ?>
                                                    <?php if(!empty($team["twitter"])): ?>
                                                    <li><a href="<?php echo e($team["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                                           title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                                    <?php endif; ?>
                                                    <?php if(!empty($team["google_plus"])): ?>
                                                    <li><a href="<?php echo e($team["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                                           title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                    <?php endif; ?>
                                                    <?php if(!empty($team["linkedin"])): ?>
                                                    <li><a href="<?php echo e($team["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                           title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                        <?php endif; ?>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>





    <?php
    $clientTitle = SM::smGetThemeOption("client_title");
    $clientSubtitle= SM::smGetThemeOption("client_subtitle");
    $client= SM::smGetThemeOption("clients");
    ?>
    <?php if(count($client)>0): ?>
    <!-- Brand Start -->
    <section class="brand_sec brand_2 cmn_bg">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <div class="our-satisfife-box">
                    <h3><?php echo e($clientTitle); ?></h3>
                    <p><?php echo e($clientSubtitle); ?></p>
                </div>
            </div>
            <div class="col-md-6">
                   <div class="brand_slide owl-carousel owl-theme">
                        <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clients): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="clients-logo-bos">
                            <img src="<?php echo SM::sm_get_the_src($clients["client_image"], 80, 80); ?>" alt="<?php echo e($clients['title']); ?>">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div> 
            </div>
        </div>
        </div>
    </section>
    <!-- Brand End -->
    <?php endif; ?>
    <?php endif; ?>
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
    
    
    
    <script>
    
        $(document).ready(function(){
            $('.team_section_active').owlCarousel({
                loop:true,
                dots:false,
                margin:10,
                nav:true,
                autoplay:true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>