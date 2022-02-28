<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="_token" content="<?php echo e(csrf_token()); ?>"/>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php

    $site_name = SM::sm_get_site_name();

    $fb_app_id = SM::get_setting_value('fb_app_id');

    $shop_url = SM::get_setting_value('shop_url');

    $site_name = SM::sm_string($site_name) ? $site_name : 'Next Page Technology Ltd.';



    $seo_title = stripslashes(

        (

            isset($seo_title)

            && SM::sm_string($seo_title)

        )

            ? $seo_title

            : SM::get_setting_value('seo_title')

    );

    $meta_key = stripslashes(

        (

            isset($meta_key)

            && SM::sm_string($meta_key)

        )

            ? $meta_key

            : SM::get_setting_value('site_meta_keywords')

    );

    $meta_description = stripslashes(

        (

            isset($meta_description)

            && SM::sm_string($meta_description)

        )

            ? $meta_description

            : SM::get_setting_value('site_meta_description')

    );

    $image = (isset($image)

        && SM::sm_string($image)) ? $image

        : asset(SM::sm_get_the_src(SM::get_setting_value('site_screenshot')));





    ?>

    <title><?php echo e($seo_title); ?></title>


    <meta name="keywords" content="<?php echo $meta_key; ?>">

    <meta name="description" content="<?php echo $meta_description; ?>"/>



    <!-- Schema.org markup for Google+ -->

    <meta itemprop="name" content="<?php echo e($seo_title); ?>">

    <meta itemprop="description" content="<?php echo $meta_description; ?>">

    <meta itemprop="image" content="<?php echo $image; ?>">



    <!-- Twitter Card data -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:site" content="<?php echo e($site_name); ?>">

    <meta name="twitter:title" content="<?php echo e($seo_title); ?>">

    <meta name="twitter:description" content="<?php echo $meta_description; ?>">

    <meta name="twitter:image:src" content="<?php echo $image; ?>">



    <!-- Open Graph data -->

    <meta property="og:title" content="<?php echo e($seo_title); ?>"/>

    <meta property="og:type" content="article"/>

    <meta property="og:image" content="<?php echo $image; ?>"/>

    <meta property="og:description" content="<?php echo $meta_description; ?>"/>

    <meta property="og:site_name" content="<?php echo e($site_name); ?>"/>

    <meta property="og:url" content="<?php echo $shop_url; ?>"/>

    <meta property="fb:app_id" content="<?php echo $fb_app_id; ?>"/>

    <link rel="icon" href="<?php echo SM::sm_get_the_src(SM::sm_get_site_favicon(), 30, 30); ?>" type="image/x-icon">

    <!-- Font Family-->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">



    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/font-awesome.min.css')); ?>" >



    <!-- Themify icon -->

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/themify.css')); ?>" >



    <!-- Flat icon icon -->

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/flaticon.css')); ?>" >



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.css')); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">



    <!-- Animation CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/animate.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/aos.css')); ?>">



    <!-- Owl carousel css-->

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.carousel.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.theme.default.min.css')); ?>">



    <!-- zoom css-->

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/magnific-popup.css')); ?>">



    <!-- Style css-->

    <link rel="stylesheet" type="text/css"  href="<?php echo e(asset('frontend/assets/css/color2.css')); ?>"  media="screen" id="color">

    <link rel="stylesheet" media="screen" href="<?php echo e(asset('frontend/assets/particles/css/style.css')); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo Html::style('additional/toastr/toastr.min.css'); ?>




    <!-- master css-->

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/master.css')); ?>">

    <!-- <script

  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  <?php echo Html::script('frontend/assets/js/jquery-3.3.1.min.js'); ?>




    <?php $method = strtolower(SM::current_method()); ?>

    <script type="text/javascript">

        var url = '<?php echo url('') . '/'; ?>';

        var method = '<?php echo $method; ?>';

    </script>

    <?php echo SM::smGetThemeOption( "google_analytic_code");; ?>




</head>



<body>

  <!-- <div id="fb-root"></div> -->



    <?php echo $__env->make('frontend.inc.social_link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('frontend.inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <?php echo $__env->make('frontend.inc.s_w_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('frontend.inc.footer2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    

    <?php echo $__env->make('frontend.inc.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('frontend.common.additional_js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldPushContent('script'); ?>





</body>

</html>

