<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.common.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php
    $service_category = SM::get_Service_category();
    ?>
    
    <!-- About Us Start -->
    <section class="ongoing_project project-background-img" style=" width:100%; background-image: url('/background-white-sand.jpg')">
        <div class= "container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title">
                        <h3>Latest Projects</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme ongoing_project_active">
                          <?php  $project_cat = SM::get_project_categories(); ?>
                          <?php $__currentLoopData = $project_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $project_list=$category->projects->take(5);
                              ?>
                                 <?php $__currentLoopData = $project_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item owl-slide d-flex align-items-center cover">
                                        <div class="single_project_img">
                                            <div class="card">
                                              <div class="project_img_contant">
                                                  <img class="card-img-top img-fluid" src="<?php echo SM::sm_get_the_src($project->image, 481, 642); ?>" alt="<?php echo e($project->title); ?>">
                                                  <div class="project_location">
                                                      <p> <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo e($project->location); ?> </p>
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                                <h5 class="card-title"><?php echo e($project->title); ?> </h5>
                                                <a href="<?php echo e(url('project/'.$project->slug)); ?>" class="btn"> see more </a>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="view_all_btn">
                        <a href="#" class="btn"> View All </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="upcoming_project" > 
    
        <div class= "container-fluid">
           <?php  $project_cat = SM::get_project_categories(); ?>
            <?php $__currentLoopData = $project_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($category->projects)>0): ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title">
                            </br></br></br>
                            <h3> <?php echo e($category->title); ?></h3>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                 
                   
                    <?php  
                    
                    $project_list=$category->projects->take(12); ?>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme upcoming_project_active">
                            
                        <?php $__currentLoopData = $project_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item owl-slide d-flex align-items-center cover">
                                <div class="single_project_img">
                                    <div class="card">
                                      <div class="project_img_contant">
                                          <img class="card-img-top img-fluid" src="<?php echo SM::sm_get_the_src($project->image, 481, 642); ?>" alt="Card image cap">
                                          <div class="project_location">
                                              <p> <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo e($project->location); ?> </p>
                                          </div>
                                      </div>
                                      <div class="card-body">
                                        <h5 class="card-title"><?php echo e($project->title); ?> </h5>
                                        <a href="<?php echo e(url('project/'.$project->slug)); ?>" class="btn"> See more </a>
                                      </div>
                                    </div>
                                </div>
                            </div> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                        </div>
                    </div>
                   
                   
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>  
        
        
    </section>
    
   
    <section class="testimonial_seciton">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title">
                        <h3>Testimonials</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme testimonial_active">
                        <div class="item owl-slide d-flex align-items-center cover">
                            <div class="testimonial_items">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <div class="testimonial_img">
                                            <img class="img-fluid" src="https://lh3.googleusercontent.com/proxy/1DPZw5q_6aZEBuefcuiXxGq0bRakhKxSeRUKRlwew323w6XTkDS3ZKyqvhXol91LsCd8F8cXX_cdRQMqjou5kkmpKnDFTRri1WYb9y_xev_qZ1kFZ-2JoiNmTBEPVxe7Hf4" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12">
                                        <div class="testimonial_contant">
                                            <p>  Throughout my adult years, I have had the experience of purchasing a 
                                             few different flats. As my family began to grow, I recently found the need 
                                             and desire to purchase a larger flat. I spoke to a variety of different 
                                             companies that showed me a variety of flats until I found GLG Assets Ltd. 
                                             When making such a large decision, I wanted to work with someone that I could trust. 
                                             Throughout the past several months, GLG Asset Ltd.’s sales-personnel has been there 
                                             every step of the way. Their professionalism, mentorship, knowledge, honesty, and hard
                                             work ethic are much respected and appreciated. I never felt that they were just trying
                                             to sell me a house, they were there to help me to make the best decision for my family. 
                                             Thanks to GLG Assets Ltd. for being such a pleasure to work with.   </p>
                                             
                                             <div class="client_information">
                                                 <h5> Md : Nahid Hassan</h5>
                                                 <p> Location : <span> Nikunja #2 Road: #20 House: #41</span></p>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item owl-slide d-flex align-items-center cover">
                            <div class="testimonial_items">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <div class="testimonial_img">
                                            <iframe width="100%" height="315"
                                                src="https://www.youtube.com/watch?v=FjU_x1106pg">
                                            </iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12">
                                        <div class="testimonial_contant">
                                            <p>  Throughout my adult years, I have had the experience of purchasing a 
                                             few different flats. As my family began to grow, I recently found the need 
                                             and desire to purchase a larger flat. I spoke to a variety of different 
                                             companies that showed me a variety of flats until I found GLG Assets Ltd. 
                                             When making such a large decision, I wanted to work with someone that I could trust. 
                                             Throughout the past several months, GLG Asset Ltd.’s sales-personnel has been there 
                                             every step of the way. Their professionalism, mentorship, knowledge, honesty, and hard
                                             work ethic are much respected and appreciated. I never felt that they were just trying
                                             to sell me a house, they were there to help me to make the best decision for my family. 
                                             Thanks to GLG Assets Ltd. for being such a pleasure to work with.   </p>
                                             
                                             <div class="client_information">
                                                 <h5> Md : Nahid Hassan</h5>
                                                 <p> Location : <span> Nikunja #2 Road: #20 House: #41</span></p>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view_all_btn">
                        <a href="#" class="btn"> View All </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    <!-- About Us End -->

    <!-- Our Service Start -->
    <?php if(count($service_category) > 0): ?>
    <section class="services-us-section" id="back-image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                    <h3>My Construction Services</h3>
                    
                </div> 
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $service_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="service-content-box wow slideInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="images-box">
                        <img class="img-fluid" src="<?php echo SM::sm_get_the_src($service->fav_icon, 350, 350); ?>" class="img-responsive"> 
                    </div>
                    <div class="service-box">
                        <h2 class="service-title"><a href="<?php echo e(url('category/'.$service->slug)); ?>"><?php echo e($service->title); ?></a></h2>
                        <?php echo mb_strimwidth($service->description, 0, 100,'...'); ?>

                    </div>
                </div>
            </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            
        </div>
    </div>
</section>
    <?php endif; ?>
 

    <!-- Rating Start -->
    <section id="rating" class="rating_sec home_rate_2">
        <div class="container-fluid">
            <div class="row">
                <?php
                $totl_Project = SM::smGetThemeOption("total_complete_project", array());
                $totl_Project_icon = SM::smGetThemeOption("total_complete_project_icon", array());
                $happy_client = SM::smGetThemeOption("total_happy_client", array());
                $happy_client_icon = SM::smGetThemeOption("total_happy_client_icon", array());
                $qualified_staff = SM::smGetThemeOption("qualified_staff", array());
                $qualified_staff_icon = SM::smGetThemeOption("qualified_staff_icon", array());
                ?>
                <?php if(count($totl_Project)>0): ?>
                        <div class="col-md-4 col">
                            <div class="rating_cls">
                                <div class="counter-box">
                                    <img class="img-fluid" src="<?php echo SM::sm_get_the_src($totl_Project_icon, 80, 80); ?>" alt="complete project">
                                     <h5>PROJECTS</h5>
                                    <h2 class="counter"><?php echo e($totl_Project); ?></h2>
                                   
                                </div>
                            </div>
                        </div>
                <?php endif; ?>
                <?php if(count($happy_client)>0): ?>
                    <div class="col-md-4 col">
                        <div class="rating_cls">
                            <div  class="counter-box">
                                <img class="img-fluid" src="<?php echo SM::sm_get_the_src($happy_client_icon, 80, 80); ?>" alt="happy_client">
                                <h5>HAPPY CLIENTS</h5>
                                <h2 class="counter"><?php echo e($happy_client); ?></h2>
                                
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(count($qualified_staff)>0): ?>
                    <div class="col-md-4 col">
                        <div class="rating_cls">
                            <div class="counter-box">
                                <img class="img-fluid" src="<?php echo SM::sm_get_the_src($qualified_staff_icon, 80, 80); ?>" alt="qualified_staff">
                                <h5>QUALIFIED STAFF</h5>
                                <h2 class="counter"><?php echo e($qualified_staff); ?></h2>
                                
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Rating End -->

    <!-- Our Facilities Start -->
    <section class="home_1_team team-2 cmn_bg services-us-section">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3>Why Chouse Us</h3>
                    
                </div> 
            </div>
        </div>
            <div class="row">
              <?php   $extra_facil = SM::smGetThemeOption("extra_facilities");?>

                <div class="main-timeline4">
                        <?php $__currentLoopData = $extra_facil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$facelity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="inner-content">
 					              <img class="img-fluid" src="<?php echo SM::sm_get_the_src($facelity['facilities_image'], 80, 80); ?>"/>
                                    <div class="facilities-content">
                                        <h3 class="title"><?php echo e($facelity['facilities_title']); ?></h3>
                                    <p class="description">
                                       <?php echo e($facelity['facilities_description']); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      		</div>
            </div>
        </div>

    </section>
    <!-- Facilities End -->


    <!-- FAQ Start -->
    <?php
    $faqTitle = SM::smGetThemeOption("faq_title");
    $faqbanner = SM::smGetThemeOption("faq_banner_image");
    $faqSubtitle = SM::smGetThemeOption("faq_subtitle");
    $faq = SM::smGetThemeOption("faq_sections");
    ?>
    <?php if(count($faq)>0): ?>
  
    <?php endif; ?>
    <!-- FAQ End -->

    <?php
    $testimonialTitle = SM::smGetThemeOption("testimonial_title");
    $testimonial= SM::smGetThemeOption("testimonials");
    ?>
    <?php if(count($testimonial)>0): ?>
    <!-- Testimonial Start -->
    <section class="testimonial home_2_testimonial blur-up lazyload">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial_slide owl-carousel owl-theme">
                        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial_sec">
                            <div>
                                <img class="img-fluid" src="<?php echo SM::sm_get_the_src($testimonials["testimonial_image"], 80, 80); ?>" alt="<?php echo e($testimonials['title']); ?>">
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
    $clientTitle = SM::smGetThemeOption("client_title");
    $clientSubtitle= SM::smGetThemeOption("client_subtitle");
    $client= SM::smGetThemeOption("clients");
    ?>
    <?php if(count($client)>0): ?>
    <!-- Brand Start -->
    <section class="brand_sec brand_2 cmn_bg">
        <div class="container-fluid">
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
                            <img class="img-fluid" src="<?php echo SM::sm_get_the_src($clients["client_image"], 80, 80); ?>" alt="<?php echo e($clients['title']); ?>">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div> 
            </div>
        </div>
        </div>
    </section>
    <!-- Brand End -->
    <?php endif; ?>



<script>
    
    $(document).ready(function(){
        $('.ongoing_project_active').owlCarousel({
            loop:true,
            dots:false,
            autoplay:true,
            margin:20,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });
        
        
        $('.upcoming_project_active').owlCarousel({
            loop:true,
            dots:false,
            margin:20,
            // autoplay:true,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });
        
        
        $('.handedover_project_active').owlCarousel({
            loop:true,
            dots:false,
            margin:20,
            nav:true,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });
        
        
        $('.testimonial_active').owlCarousel({
            loop:true,
            dots:false,
            margin:20,
            nav:true,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        
        
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