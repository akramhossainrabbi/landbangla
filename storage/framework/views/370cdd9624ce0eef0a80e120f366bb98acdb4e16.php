<?php $__env->startSection("title", "Contact"); ?>

<?php $__env->startSection('content'); ?>

    <!-- page wapper-->

    <?php

    $contact_form_title = SM::smGetThemeOption("contact_form_title");

    $contact_title = SM::smGetThemeOption("contact_title");

    $contact_subtitle = SM::smGetThemeOption("contact_subtitle");

    $title = SM::smGetThemeOption("contact_banner_title");

    $bannerImage = SM::smGetThemeOption("contact_banner_image");



    $contact_location_title = SM::smGetThemeOption("contact_location_title");

    $contact_location_subtitle = SM::smGetThemeOption("contact_location_subtitle");



    $mobile = SM::get_setting_value('mobile');

    $email = SM::get_setting_value('email');

    $address = SM::get_setting_value('address');

    ?>
    <!-- Breadcrumb Start -->

<section class="common-page-breadcumb" style="background-image: url('https://i0.wp.com/glgassets.com/wp-content/uploads/2020/11/Contact-us.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>CONTACT US</h3>
          <ul id="breadcrumb" class="breadcrumb">
            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </ul>
    </div>
</div>
</div>
</div>
</section>
    <!-- Breadcrumb Start -->



    <!-- Contact-us Start -->

    <section class="contact-section cmn_bg">

        <!-- leave comment sectopn starts-->

        <div class="comment_form contact_form contect_f">

            <div class="text-xl-left">

                <div class="container">

                    <div class="row">



                        <div class="col-lg-4 contact_text">

                            <div class="angle angle-left"></div>

                            <h3 class="title"><?php echo e($contact_location_title); ?></h3>

                            <p><?php echo $contact_location_subtitle; ?></p>

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

                                            <h3 class="page-header-comment mb-4"><?php echo e($contact_form_title); ?></h3>

                                            <?php echo Form::open(['method'=>'post', 'action'=>'Front\HomeController@send_mail', 'id'=>'contactMail']); ?>


                                                <div class="form-row">

                                                    <div class="form-group col-md-6">

                                                        <label>Name :</label>

                                                        <input type="text" name="fullname" required="true" placeholder="Name *" id="fullname" class="form-control">

                                                     </div>

                                                    <div class="form-group col-md-6">

                                                        <label for="inputEmail4">Email :</label>

                                                        <input type="email" name="email" required="true" placeholder="Email *" id="email" class="form-control">

                                                    </div>

                                                    <div class="form-group col-md-12">

                                                        <label for="inputEmail4">Subject :</label>

                                                        <input type="text" name="subject" required="true" placeholder="Subject *" id="subject" class="form-control">

                                                    </div>

                                                    <div class="form-group col-md-12">

                                                        <label for="inputEmail4">Phone No :</label>

                                                        <input type="text" name="phone" required="true" placeholder="Phone / Mobile *" id="phone" class="form-control">

                                                    </div>

                                                    <div class="form-group col-md-12">

                                                        <label for="exampleTextarea">Message :</label>

                                                        <textarea class="form-control msg_coment" name="message"id="message" rows="3" placeholder="Leave a Comment" required="true"></textarea>

                                                    </div>

                                                </div>
                                                <div class="center_btn">
                                                    <a class="about_btn  btn_2" href="">
                                                         <input type="submit" id="btn-send-contact" name="contact_form_submit_btn" class="quote_btn theme_btn">
                                                    </a>
                                                </div>
                                            <?php echo Form::close(); ?>

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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>