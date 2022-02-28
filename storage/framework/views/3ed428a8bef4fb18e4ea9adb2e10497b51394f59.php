<?php $__env->startSection("title", $categoryInfo->title); ?>
<?php $__env->startSection('content'); ?>

    <?php
    $service_banner_title = SM::smGetThemeOption("service_banner_title");
    $service_banner_titlesubtitle = SM::smGetThemeOption("service_banner_subtitle");
    $bannerImage = SM::smGetThemeOption("service_banner_image");
    ?>
    <!-- Breadcrumb Start -->
    <section class="common-page-breadcumb" style="background-image: url('https://i0.wp.com/glgassets.com/wp-content/uploads/2019/10/GLG-AR-Rayyaan-Banner.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pagetitle-and-breadcumb">
                        <h3><?php echo e($service_banner_title); ?></h3>
                        <p><?php echo e($category->title); ?></p>
                        <ul id="breadcrumb" class="breadcrumb">
                            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project_details_page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="project_details_contant">
                        <div class="section_title">
                            <h4> Project Information </h4>
                        </div>
                        <div class="single_contant">
                            <ul>
                                <li> <p>Address :  <span> PLOT # 08 LAKE DRIVE ROAD, SECTOR 07, UTTARA MODEL TOWN, DHAKA </span></p></li>
                                <li> <p>Nature :   <span> RESIDENTIAL BUILDING </span></p></li>
                                <li> <p>Storey :  <span> GROUND + 08 LIVING FLOOR </span></p></li>
                                <li> <p>Land Area :  <span> 4.0KATHA </span></p></li>
                                <li> <p>No. of Apartment :   <span> 08 NOS. </span></p></li>
                                <li> <p>No. of Car Parking :  <span> 08 NOS. </span></p></li>
                                <li> <p>No. of Evevator/Lift :  <span> 01 </span></p></li>
                                <li> <p>Apartment Size :  <span> A = 1887 sft. </span></p></li>
                                <li> <p>Apartment Contains :   <span> 04 BED, 03 BATHS [02 attached), 03 VER, LIVING, DINING WITH FAMILY LIVING, KJTCHEN WITH VER & MAIO'S TOILET. </span></p></li>
                                <li> <p>Common Features :   <span> GUARD POST, RECEPTION, SUB-STATION, GENERATOR ROOM, GUARD & CARETAKER ACCOMMODATION AT GROUND FLOOR
                                PLANTATION, COMMUNITY SPACE, MACHINE ROOM, CLOTH DRYING AREA AT ROOF-TOP </span></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project_details_img">
                        <img src="https://i0.wp.com/glgassets.com/wp-content/uploads/2019/10/GLG-AR-Rayyaan.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <seciton class="google_map_seciton">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title">
                        <h3>Google Map</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="google_map">
                        
                    </div>
                </div>
            </div>
        </div>
    </seciton>
    
    <section class="booking_seciton">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title">
                        <h3> Booking Now </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="booking_img">
                        <img src="https://i0.wp.com/glgassets.com/wp-content/uploads/2019/10/GLG-AR-Rayyaan.jpg">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="booking_form">
                        <form>
                            <div class="form-group">
                                <label for="username">Name :</label>
                                <input type="text" class="form-control" id="username" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <label for="useremail">Email Address :</label>
                                <input type="email" class="form-control" id="useremail" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="contactnumber">Contact Number :</label>
                                <input type="number" class="form-control" id="contactnumber" aria-describedby="emailHelp" placeholder="Contact Number">
                            </div>
                            <div class="form-group">
                                <label for="Address">Mailling Address :</label>
                                <input type="text" class="form-control" id="Address"  placeholder="Mailling Address">
                            </div>
                            <div class="form-group">
                                <textarea  placeholder=" Your Massages ... "></textarea>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="available_project" >
        <div class= "container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title">
                        <h3>Available Projects for Sale</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme vailable_project_active">
                        <div class="item">
                            <div class="single_project_img">
                                <div class="card">
                                  <div class="project_img_contant">
                                      <img class="card-img-top" src="https://i0.wp.com/glgassets.com/wp-content/uploads/2018/08/GLG-Crescent-Building.jpg" alt="Card image cap">
                                      <div class="project_location">
                                          <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur </p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Nextpage Technology Project </h5>
                                    <a href="#" class="btn"> see more </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_project_img">
                                <div class="card">
                                  <div class="project_img_contant">
                                      <img class="card-img-top" src="https://i0.wp.com/glgassets.com/wp-content/uploads/2018/08/GLG-Crescent-Building.jpg" alt="Card image cap">
                                      <div class="project_location">
                                          <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur </p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Nextpage Technology Project </h5>
                                    <a href="#" class="btn"> see more </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_project_img">
                                <div class="card">
                                  <div class="project_img_contant">
                                      <img class="card-img-top" src="https://i0.wp.com/glgassets.com/wp-content/uploads/2018/08/GLG-Crescent-Building.jpg" alt="Card image cap">
                                      <div class="project_location">
                                          <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur </p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Nextpage Technology Project </h5>
                                    <a href="#" class="btn"> see more </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_project_img">
                                <div class="card">
                                  <div class="project_img_contant">
                                      <img class="card-img-top" src="https://i0.wp.com/glgassets.com/wp-content/uploads/2018/08/GLG-Crescent-Building.jpg" alt="Card image cap">
                                      <div class="project_location">
                                          <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur </p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Nextpage Technology Project </h5>
                                    <a href="#" class="btn"> see more </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_project_img">
                                <div class="card">
                                  <div class="project_img_contant">
                                      <img class="card-img-top" src="https://i0.wp.com/glgassets.com/wp-content/uploads/2018/08/GLG-Crescent-Building.jpg" alt="Card image cap">
                                      <div class="project_location">
                                          <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur </p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Nextpage Technology Project </h5>
                                    <a href="#" class="btn"> see more </a>
                                  </div>
                                </div>
                            </div>
                        </div><div class="item">
                            <div class="single_project_img">
                                <div class="card">
                                  <div class="project_img_contant">
                                      <img class="card-img-top" src="https://i0.wp.com/glgassets.com/wp-content/uploads/2018/08/GLG-Crescent-Building.jpg" alt="Card image cap">
                                      <div class="project_location">
                                          <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur </p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Nextpage Technology Project </h5>
                                    <a href="#" class="btn"> see more </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_project_img">
                                <div class="card">
                                  <div class="project_img_contant">
                                      <img class="card-img-top" src="https://i0.wp.com/glgassets.com/wp-content/uploads/2018/08/GLG-Crescent-Building.jpg" alt="Card image cap">
                                      <div class="project_location">
                                          <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur </p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Nextpage Technology Project </h5>
                                    <a href="#" class="btn"> see more </a>
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
    
    <section class="testimonial_seciton">
        <div class="container">
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
                        <div class="item">
                            <div class="testimonial_items">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <div class="testimonial_img">
                                            <img src="https://lh3.googleusercontent.com/proxy/1DPZw5q_6aZEBuefcuiXxGq0bRakhKxSeRUKRlwew323w6XTkDS3ZKyqvhXol91LsCd8F8cXX_cdRQMqjou5kkmpKnDFTRri1WYb9y_xev_qZ1kFZ-2JoiNmTBEPVxe7Hf4" alt="Generic placeholder image">
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
                        <div class="item">
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
                    <!--<div class="view_all_btn">-->
                    <!--    <a href="#" class="btn"> View All </a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>


    <section class="services-us-section" id="back-image">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                    <h3><?php echo e($category->title); ?></h3>
                    
                </div> 
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pKey=> $service_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="service-content-box wow slideInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="images-box">
                        <img src="<?php echo SM::sm_get_the_src($service_list->image, 350, 350); ?>" class="img-responsive"> 
                    </div>
                    <div class="service-box">
                        <h2 class="service-title"><a href="<?php echo e(url('/service-details/'.$service_list->slug)); ?>"><?php echo e($service_list->title); ?></a></h2>
                        
                    </div>
                </div>
            </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            
        </div>
    </div>
</section>




<script>
        
    $(document).ready(function(){

        $('.vailable_project_active').owlCarousel({
            loop:true,
            dots:false,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        });
        
        
        $('.testimonial_active').owlCarousel({
            loop:true,
            dots:false,
            margin:10,
            nav:true,
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
        
        
        
        
        
        
        
    });
</script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>