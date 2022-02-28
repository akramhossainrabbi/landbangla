<?php $__env->startSection("title", "Teams"); ?>
<?php $__env->startSection('content'); ?>
<?php
$title = SM::smGetThemeOption("team_banner_title");
$subtitle = SM::smGetThemeOption("team_banner_subtitle");
$bannerImage = SM::smGetThemeOption("team_banner_image");

$teamTitle = SM::smGetThemeOption("team_title");
$teamSubtitle = SM::smGetThemeOption("team_subtitle");
$teams = SM::smGetThemeOption("teams");
?>
<style type="text/css">
    .button_base {
        width: 200px;
        height: 50px;
        margin: 0 auto;
    }
    .center_btn {
        float: none;
    }
    .center_btn a {
        display: initial;
        text-align: center;
        box-shadow: 2px 4px 5px #7c7c7c;
        font-weight: 400;
    }
</style>
<section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>Management Team</h3>
          <ul id="breadcrumb" class="breadcrumb">
            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </ul>
    </div>
</div>
</div>
</div>
</section>

<?php if(count($teams)>0): ?>
<!-- Breadcrumb Start -->
<!-- About management team -->
<section id="about_us" class="about_management_sec  about_us_sec about_page cmn_bg" >



    <div class="container about_sec about_sec_4">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3 class="text-mute">Management Team</h3>
                </div> 
            </div>
        </div>

        <div class="row">

            <div class="faundation-of-passion pad-lr">
                <div class="col-md-12">
                    <div class="row">
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($team_member['team_type']=='2'): ?>

                        <div class="col-md-6">
                            <div class="management-box">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                    <div class="user-profile-box">
                                      <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                      alt="<?php echo e($team_member["title"]); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="user-profile-content-box">
                                  <h3><?php echo e($team_member["title"]); ?></h3>
                                  <p><?php echo e($team_member["designation"]); ?></p>
                                  <?php if(isset($team_member["description"])): ?>
                                  <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                                  <?php endif; ?>  
                                  <ul class="social-icons-ql pull-left">
                                      <?php if(!empty($team_member["facebook"])): ?>
                                      <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($team_member["twitter"])): ?>
                                        <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                         title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                         <?php endif; ?>
                                         <?php if(!empty($team_member["google_plus"])): ?>
                                         <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                             title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                             <?php endif; ?>
                                             <?php if(!empty($team_member["linkedin"])): ?>
                                             <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                 title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif; ?>
                                             </ul>
                                         </div>
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
 <!--  About management team -->
 <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3>Our Advisory Team </h3>
                </div> 
            </div>
        </div>
        <div class="row">



            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($team_member['team_type']==1): ?>
            <div class="col-md-6">
                <div class="management-box">
                    <div class="row">
                      <div class="col-md-6 col-xs-6">
                        <div class="user-profile-box">
                          <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                          alt="<?php echo e($team_member["title"]); ?>">
                      </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="user-profile-content-box">
                      <h3><?php echo e($team_member["title"]); ?></h3>
                      <p><?php echo e($team_member["designation"]); ?></p>
                      <?php if(isset($team_member["description"])): ?>
                      <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                      <?php endif; ?>  
                      <ul class="social-icons-ql pull-left">
                          <?php if(!empty($team_member["facebook"])): ?>
                          <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                            class="fa fa-facebook"></i></a></li>
                            <?php endif; ?>
                            <?php if(!empty($team_member["twitter"])): ?>
                            <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                             title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                             <?php endif; ?>
                             <?php if(!empty($team_member["google_plus"])): ?>
                             <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                 title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                 <?php endif; ?>
                                 <?php if(!empty($team_member["linkedin"])): ?>
                                 <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                     title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                     <?php endif; ?>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <?php endif; ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


         </div>
     </div>

 </section>
 <section id="about_us" class="about_management_sec  about_us_sec about_page cmn_bg" >



    <div class="container about_sec about_sec_4">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3 class="text-mute">Human Resource Team</h3>
                </div> 
            </div>
        </div>

        <div class="row">

            <div class="faundation-of-passion pad-lr">
                <div class="col-md-12">
                    <div class="row">
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($team_member['team_type']=='3'): ?>

                        <div class="col-md-6">
                            <div class="management-box">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                    <div class="user-profile-box">
                                      <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                      alt="<?php echo e($team_member["title"]); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="user-profile-content-box">
                                  <h3><?php echo e($team_member["title"]); ?></h3>
                                  <p><?php echo e($team_member["designation"]); ?></p>
                                  <?php if(isset($team_member["description"])): ?>
                                  <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                                  <?php endif; ?>  
                                  <ul class="social-icons-ql pull-left">
                                      <?php if(!empty($team_member["facebook"])): ?>
                                      <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($team_member["twitter"])): ?>
                                        <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                         title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                         <?php endif; ?>
                                         <?php if(!empty($team_member["google_plus"])): ?>
                                         <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                             title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                             <?php endif; ?>
                                             <?php if(!empty($team_member["linkedin"])): ?>
                                             <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                 title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif; ?>
                                             </ul>
                                         </div>
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
 <!-- About Technical team -->
 <section class="home_1_team team_page cmn_bg">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3>Marketing Team</h3>
                </div> 
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($team_member['team_type']=='4'): ?>
           
            <div class="col-md-6">
                            <div class="management-box">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                    <div class="user-profile-box">
                                      <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                      alt="<?php echo e($team_member["title"]); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="user-profile-content-box">
                                  <h3><?php echo e($team_member["title"]); ?></h3>
                                  <p><?php echo e($team_member["designation"]); ?></p>
                                  <?php if(isset($team_member["description"])): ?>
                                  <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                                  <?php endif; ?>  
                                  <ul class="social-icons-ql pull-left">
                                      <?php if(!empty($team_member["facebook"])): ?>
                                      <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($team_member["twitter"])): ?>
                                        <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                         title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                         <?php endif; ?>
                                         <?php if(!empty($team_member["google_plus"])): ?>
                                         <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                             title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                             <?php endif; ?>
                                             <?php if(!empty($team_member["linkedin"])): ?>
                                             <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                 title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif; ?>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>
<section id="about_us" class="about_management_sec  about_us_sec about_page cmn_bg" >



    <div class="container about_sec about_sec_4">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3 class="text-mute">Sales Representative</h3>
                </div> 
            </div>
        </div>

        <div class="row">

            <div class="faundation-of-passion pad-lr">
                <div class="col-md-12">
                    <div class="row">
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($team_member['team_type']=='5'): ?>

                        <div class="col-md-6">
                            <div class="management-box">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                    <div class="user-profile-box">
                                      <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                      alt="<?php echo e($team_member["title"]); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="user-profile-content-box">
                                  <h3><?php echo e($team_member["title"]); ?></h3>
                                  <p><?php echo e($team_member["designation"]); ?></p>
                                  <?php if(isset($team_member["description"])): ?>
                                  <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                                  <?php endif; ?>  
                                  <ul class="social-icons-ql pull-left">
                                      <?php if(!empty($team_member["facebook"])): ?>
                                      <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($team_member["twitter"])): ?>
                                        <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                         title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                         <?php endif; ?>
                                         <?php if(!empty($team_member["google_plus"])): ?>
                                         <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                             title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                             <?php endif; ?>
                                             <?php if(!empty($team_member["linkedin"])): ?>
                                             <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                 title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif; ?>
                                             </ul>
                                         </div>
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
    <!-- pagination Start -->
<section class="home_1_team team_page cmn_bg">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3>Supply Procurement</h3>
                </div> 
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($team_member['team_type']=='6'): ?>
           
            <div class="col-md-6">
                            <div class="management-box">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                    <div class="user-profile-box">
                                      <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                      alt="<?php echo e($team_member["title"]); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="user-profile-content-box">
                                  <h3><?php echo e($team_member["title"]); ?></h3>
                                  <p><?php echo e($team_member["designation"]); ?></p>
                                  <?php if(isset($team_member["description"])): ?>
                                  <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                                  <?php endif; ?>  
                                  <ul class="social-icons-ql pull-left">
                                      <?php if(!empty($team_member["facebook"])): ?>
                                      <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($team_member["twitter"])): ?>
                                        <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                         title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                         <?php endif; ?>
                                         <?php if(!empty($team_member["google_plus"])): ?>
                                         <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                             title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                             <?php endif; ?>
                                             <?php if(!empty($team_member["linkedin"])): ?>
                                             <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                 title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif; ?>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
</section>

    <section id="about_us" class="about_management_sec  about_us_sec about_page cmn_bg" >



    <div class="container about_sec about_sec_4">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3 class="text-mute">OUR OVERSEAS TEAM</h3>
                </div> 
            </div>
        </div>

        <div class="row">

            <div class="faundation-of-passion pad-lr">
                <div class="col-md-12">
                    <div class="row">
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($team_member['team_type']=='9'): ?>

                        <div class="col-md-6">
                            <div class="management-box">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                    <div class="user-profile-box">
                                      <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                      alt="<?php echo e($team_member["title"]); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="user-profile-content-box">
                                  <h3><?php echo e($team_member["title"]); ?></h3>
                                  <p><?php echo e($team_member["designation"]); ?></p>
                                  <?php if(isset($team_member["description"])): ?>
                                  <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                                  <?php endif; ?>  
                                  <ul class="social-icons-ql pull-left">
                                      <?php if(!empty($team_member["facebook"])): ?>
                                      <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($team_member["twitter"])): ?>
                                        <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                         title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                         <?php endif; ?>
                                         <?php if(!empty($team_member["google_plus"])): ?>
                                         <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                             title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                             <?php endif; ?>
                                             <?php if(!empty($team_member["linkedin"])): ?>
                                             <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                 title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif; ?>
                                             </ul>
                                         </div>
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
    <!-- pagination Start -->


    
    <!-- pagination Start -->

    <!-- pagination End -->

<section class="home_1_team team_page cmn_bg">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3>OUR TECHNICAL TEAM</h3>
                </div> 
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($team_member['team_type']=='10'): ?>
           
            <div class="col-md-6">
                            <div class="management-box">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                    <div class="user-profile-box">
                                      <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                      alt="<?php echo e($team_member["title"]); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="user-profile-content-box">
                                  <h3><?php echo e($team_member["title"]); ?></h3>
                                  <p><?php echo e($team_member["designation"]); ?></p>
                                  <?php if(isset($team_member["description"])): ?>
                                  <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                                  <?php endif; ?>  
                                  <ul class="social-icons-ql pull-left">
                                      <?php if(!empty($team_member["facebook"])): ?>
                                      <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($team_member["twitter"])): ?>
                                        <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                         title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                         <?php endif; ?>
                                         <?php if(!empty($team_member["google_plus"])): ?>
                                         <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                             title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                             <?php endif; ?>
                                             <?php if(!empty($team_member["linkedin"])): ?>
                                             <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                 title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif; ?>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
</section>
<section id="about_us" class="about_management_sec  about_us_sec about_page cmn_bg" >



    <div class="container about_sec about_sec_4">
        <div class="row">
            <div class="col-md-12">
                <div class="services-section-title text-center">
                    <h3 class="text-mute">Others</h3>
                </div> 
            </div>
        </div>

        <div class="row">

            <div class="faundation-of-passion pad-lr">
                <div class="col-md-12">
                    <div class="row">
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$team_member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($team_member['team_type']=='9'): ?>

                        <div class="col-md-6">
                            <div class="management-box">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6">
                                    <div class="user-profile-box">
                                      <img src="<?php echo SM::sm_get_the_src($team_member["team_image"], 326,381); ?>" class="img-fluid blur-up lazyload "
                                      alt="<?php echo e($team_member["title"]); ?>">
                                  </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="user-profile-content-box">
                                  <h3><?php echo e($team_member["title"]); ?></h3>
                                  <p><?php echo e($team_member["designation"]); ?></p>
                                  <?php if(isset($team_member["description"])): ?>
                                  <p class="pragraph-text"><?php echo e($team_member["description"]); ?></p>
                                  <?php endif; ?>  
                                  <ul class="social-icons-ql pull-left">
                                      <?php if(!empty($team_member["facebook"])): ?>
                                      <li><a href="<?php echo e($team_member["facebook"]); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($team_member["twitter"])): ?>
                                        <li><a href="<?php echo e($team_member["twitter"]); ?>" data-toggle="tooltip" data-placement="top"
                                         title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                         <?php endif; ?>
                                         <?php if(!empty($team_member["google_plus"])): ?>
                                         <li><a href="<?php echo e($team_member["google_plus"]); ?>" data-toggle="tooltip" data-placement="top"
                                             title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                             <?php endif; ?>
                                             <?php if(!empty($team_member["linkedin"])): ?>
                                             <li><a href="<?php echo e($team_member["linkedin"]); ?>" data-toggle="tooltip" data-placement="top"
                                                 title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                 <?php endif; ?>
                                             </ul>
                                         </div>
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
  
<?php endif; ?>

<!-- Modal -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>