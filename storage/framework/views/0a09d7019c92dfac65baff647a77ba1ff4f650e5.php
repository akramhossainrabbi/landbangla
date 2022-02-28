<?php
$site_name = SM::sm_get_site_name();
$site_name = SM::sm_string($site_name) ? $site_name : 'Formonic Design and Construction';
$mobile = SM::get_setting_value('mobile');
$email = SM::get_setting_value('email');
$address = SM::get_setting_value('address');
$footer_logo = SM::smGetThemeOption("footer_logo", "");
$footer_widget2_title = SM::smGetThemeOption('footer_widget2_title', "Seo Services");
$footer_widget2_description = SM::smGetThemeOption('footer_widget2_description', "");
$footer_widget3_title = SM::smGetThemeOption('footer_widget3_title', "Company");
$footer_widget3_description = SM::smGetThemeOption('footer_widget3_description', "");
$footer_widget4_title = SM::smGetThemeOption('footer_widget4_title', "Technology");
$footer_widget4_description = SM::smGetThemeOption('footer_widget4_description', "");
$contact_branches = SM::smGetThemeOption("contact_branches");
$newsletter_success_title = SM::smGetThemeOption("newsletter_success_title", "Thank You For Subscribing!");
$newsletter_success_description = SM::smGetThemeOption("newsletter_success_description", "You're just one step away from being one of our dear susbcribers.Please check the Email provided and confirm your susbcription.");
$payment_method_image = SM::smGetThemeOption("payment_method_image", "");

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
?>

<!-- Newsletter Start -->
<!--<section class="newsletter_sec" style="margin-bottom: 0px;">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-7 col-md-12">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-4 col-md-5 col-sm-6 bdr_right">-->
<!--                        <div class="call_us">-->
<!--                            <div class="phone_img">-->
<!--                                <svg viewBox="-30 0 512 512" xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="m452 226c0-60.367188-23.507812-117.121094-66.191406-159.804688-42.6875-42.6875-99.441406-66.195312-159.808594-66.195312s-117.121094 23.507812-159.808594 66.195312c-42.683594 42.683594-66.191406 99.4375-66.191406 159.804688v166h59.875v30h30c33.085938 0 60-26.914062 60-60v-105c0-33.085938-26.914062-60-60-60h-30v30h-29.875v-1c0-28.597656 6.160156-55.785156 17.21875-80.304688 9.40625 4.015626 19.453125 6.007813 29.484375 6.007813 19.367187 0 38.664063-7.402344 53.132813-21.867187 25.683593-25.691407 59.835937-39.835938 96.164062-39.835938s70.480469 14.144531 96.164062 39.832031c21.957032 21.957031 55.035157 27.628907 82.617188 15.859375 11.058594 24.519532 17.21875 51.707032 17.21875 80.308594v1h-30v-30h-29.875c-33.085938 0-60 26.914062-60 60v105c0 33.042969 26.847656 59.929688 59.875 60v15c0 24.8125-20.1875 45-45 45h-18.578125c1.664063-4.695312 2.578125-9.742188 2.578125-15 0-24.8125-20.1875-45-45-45h-60c-24.8125 0-45 20.1875-45 45s20.1875 45 45 45h121c41.355469 0 75-33.644531 75-75v-45h60zm-362.125 1c16.542969 0 30 13.457031 30 30v105c0 16.542969-13.457031 30-30 30zm-30 30v105h-29.875v-105zm283.503906-148.378906c-31.351562-31.355469-73.039062-48.621094-117.378906-48.621094s-86.027344 17.265625-117.382812 48.621094c-12.46875 12.46875-30.910157 16.1875-46.871094 10.5625 35.007812-53.648438 95.554687-89.183594 164.253906-89.183594s129.246094 35.535156 164.253906 89.183594c-15.960937 5.625-34.402344 1.90625-46.875-10.5625zm-147.378906 373.378906c-8.269531 0-15-6.730469-15-15s6.730469-15 15-15h60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15zm166-90c-16.484375-.066406-29.875-13.5-29.875-30v-105c0-16.5 13.390625-29.933594 29.875-30zm30-30v-105h30v105zm0 0"/>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                            <div class="con_text">-->
<!--                                <h4>Call us</h4>-->
<!--                                <h6><?php echo e($mobile); ?></h6>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-8 col-md-7 col-sm-6">-->
<!--                        <div class="call_us">-->
<!--                            <div class="phone_img msg">-->
<!--                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"-->
<!--                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"-->
<!--                                     viewBox="0 0 485.411 485.411" xml:space="preserve">-->
<!--                                    <g>-->
<!--                                        <path d="M0,81.824v321.763h485.411V81.824H0z M242.708,280.526L43.612,105.691h398.187L242.708,280.526z-->
<!--                                             M163.397,242.649L23.867,365.178V120.119L163.397,242.649z M181.482,258.533l61.22,53.762l61.22-53.762L441.924,379.72H43.487-->
<!--                                            L181.482,258.533z M322.008,242.655l139.535-122.536v245.059L322.008,242.655z"/>-->
<!--                                    </g>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                            <div class="con_text">-->
<!--                                <h4>Newsletter</h4>-->
<!--                                <h6><?php echo e($newsletter_success_title); ?></h6>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-5 col-md-12">-->
<!--                <?php echo Form::open(["method"=>"post", "action"=>'Front\HomeController@subscribe', 'class'=>'form-inline form-subscribe', 'id'=>"newsletterForm"]); ?>-->
<!--                    <div class="input-group form-group subscribe-textbox">-->
<!--                        <input name="email" required type="email" class="form-control"-->
<!--                               placeholder="Enter E-mail Address">-->
<!--                        <button type="submit" value="Subscribe" id="newsletterFormSubmit">-->
<!--                            <div class="button_base b05_3d_roll bottom-subsceibe">-->
<!--                                <div>Subscribe <span class="theme_btn_eff"></span></div>-->
<!--                                <div>Subscribe <span class="theme_btn_eff"></span></div>-->
<!--                            </div>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                <?php echo Form::close(); ?>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- Newsletter End -->



<!-- Footer Start -->
<div class="home_2_footer">
    <div class="upper-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_first">
                        
                        <div class="footer-contant">
                            <img src="<?php echo e(SM::sm_get_the_src(SM::smGetThemeOption("footer_logo"), 120, 237)); ?>" class="foot_logo" alt="">
                            <div class="footer-title" >
                            	 <ul style="color: #fff;margin-bottom: 10px">
	                                 <li style="color: #fff;margin-bottom: 10px"><i class="fa fa-map-marker" aria-hidden="true"> </i> <?php echo e($address); ?></li>
	                                <li style="color: #fff;margin-bottom: 10px"><i class="fa fa-phone" aria-hidden="true"> </i> Call Us: <?php echo e($mobile); ?></li>
	                                <li style="color: #fff;margin-bottom: 10px"><i class="fa fa-envelope-o" aria-hidden="true"> </i> Email Us:<?php echo e($email); ?></li>
                               </ul>
                            </div>
                            <div class="footer_social">
                                <div>
                                    <ul>
                                        <?php if(empty(!SM::smGetThemeOption("social_facebook"))): ?>
                                        <li><a href="<?php echo e(SM::smGetThemeOption("social_facebook")); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(empty(!SM::smGetThemeOption("social_twitter"))): ?>
                                        <li><a href="<?php echo e(SM::smGetThemeOption("social_twitter")); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(empty(!SM::smGetThemeOption("social_linkedin"))): ?>
                                            <li><a href="<?php echo e(SM::smGetThemeOption("social_linkedin")); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(empty(!SM::smGetThemeOption("social_google_plus"))): ?>
                                        <li><a href="<?php echo e(SM::smGetThemeOption("social_google_plus")); ?>"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(empty(!SM::smGetThemeOption("social_github"))): ?>
                                        <li><a href="<?php echo e(SM::smGetThemeOption("social_github")); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(empty(!SM::smGetThemeOption("social_youtube"))): ?>
                                        <li><a href="<?php echo e(SM::smGetThemeOption("social_youtube")); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_second">
                        <div>
                            <div class="footer-title">
                                <h3><?php echo e(SM::smGetThemeOption("footer_widget2_title")); ?></h3>
                            </div>
                            <div class="footer-contant">
                                <?php echo SM::smGetThemeOption("footer_widget2_description"); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="footer_third">
                        <div>
                            <div class="footer-title">
                                <h3>Gallery</h3>
                            </div>
                            <div class="">
                                <ul>
                                    <?php $gallery=SM::getGallery();?>
                                    <?php if(count($gallery)>0): ?>
                                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallerys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $galleryssss=explode(',',$gallerys->image_gallery);?>
                                          <li><a href="<?php echo e(url('gallery/'.$gallerys->slug)); ?>"><img src="<?php echo SM::sm_get_the_src($galleryssss[0], 80, 80); ?>" alt="" style="height: 50px;width: 50px"></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer_forth">
                        <div class="footer-title">
                       
                        </div>
                        <div class="footer-contant">
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2171.3442237549016!2d90.36608254670892!3d23.756251936550072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf50d09acef5%3A0xd5f7d8422e2948e8!2s3%20Block%20%23%20F%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1603606698916!5m2!1sen!2sbd" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright section Start -->
    <section class="copyright_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cop_p">

                        <p><?php echo SM::smGetThemeOption("copyright"); ?> NextPage Technology Ltd. All rights reserved</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copy_link">
                        <ul>
                            <?php echo SM::smGetThemeOption("copyrightlink"); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Copyright section End -->
</div>
<!-- Footer End -->

<!-- Tap on Top -->
<div class="tap-top top-cls top_2">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- Tap on Ends -->