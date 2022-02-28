<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <?php
    $site_name = SM::sm_get_site_name();
    $fb_app_id = SM::get_setting_value('fb_app_id');
    $shop_url = SM::get_setting_value('shop_url');
    $site_name = SM::sm_string($site_name) ? $site_name : 'Landbangla Development Ltd.';
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

    <title>{{ $seo_title }}</title>


    <meta name="keywords" content="{!!$meta_key!!}">

    <meta name="description" content="{!! $meta_description !!}"/>



    <!-- Schema.org markup for Google+ -->

    <meta itemprop="name" content="{{$seo_title}}">

    <meta itemprop="description" content="{!! $meta_description !!}">

    <meta itemprop="image" content="{!!$image!!}">



    <!-- Twitter Card data -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:site" content="{{$site_name}}">

    <meta name="twitter:title" content="{{ $seo_title }}">

    <meta name="twitter:description" content="{!! $meta_description !!}">

    <meta name="twitter:image:src" content="{!!$image!!}">



    <!-- Open Graph data -->

    <meta property="og:title" content="{{ $seo_title }}"/>

    <meta property="og:type" content="article"/>

    <meta property="og:image" content="{!!$image!!}"/>

    <meta property="og:description" content="{!! $meta_description !!}"/>

    <meta property="og:site_name" content="{{$site_name}}"/>

    <meta property="og:url" content="{!! $shop_url !!}"/>

    <meta property="fb:app_id" content="{!! $fb_app_id !!}"/>

    <link rel="icon" href="<?php echo SM::sm_get_the_src(SM::sm_get_site_favicon(), 30, 30); ?>" type="image/x-icon">

    <!-- Font Family-->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">



    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" >



    <!-- Themify icon -->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/themify.css')}}" >



    <!-- Flat icon icon -->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}" >



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">



    <!-- Animation CSS -->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/aos.css')}}">



    <!-- Owl carousel css-->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">



    <!-- zoom css-->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">



    <!-- Style css-->

    <link rel="stylesheet" type="text/css"  href="{{asset('frontend/assets/css/color2.css')}}"  media="screen" id="color">

    <link rel="stylesheet" media="screen" href="{{asset('frontend/assets/particles/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {!!Html::style('additional/toastr/toastr.min.css')!!}



    <!-- master css-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/master.css')}}">
    <!-- <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  {!!Html::script('frontend/assets/js/jquery-3.3.1.min.js')!!}
    <?php $method = strtolower(SM::current_method()); ?>
    <script type="text/javascript">
        var url = '<?php echo url('') . '/'; ?>';
        var method = '<?php echo $method; ?>';
    </script>
    {!! SM::smGetThemeOption( "google_analytic_code"); !!}
</head>
<body>

  <!-- <div id="fb-root"></div> -->



    @include('frontend.inc.social_link')

        @include('frontend.inc.header')
        
        @include('frontend.inc.s_w_message')

            @yield('content')

        @include('frontend.inc.footer2')

    

    @include('frontend.inc.js')

    @include('frontend.common.additional_js')

    @stack('script')





</body>

</html>

