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


    ?><title>{{ $seo_title }}</title>



<!-- Load Facebook SDK for JavaScript -->
      
      <!--<script>-->
      <!--  window.fbAsyncInit = function() {-->
      <!--    FB.init({-->
      <!--      xfbml            : true,-->
      <!--      version          : 'v4.0'-->
      <!--    });-->
      <!--  };-->

      <!--  (function(d, s, id) {-->
      <!--  var js, fjs = d.getElementsByTagName(s)[0];-->
      <!--  if (d.getElementById(id)) return;-->
      <!--  js = d.createElement(s); js.id = id;-->
      <!--  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';-->
      <!--  fjs.parentNode.insertBefore(js, fjs);-->
      <!--}(document, 'script', 'facebook-jssdk'));</script>-->

      <!-- Your customer chat code -->
      <!--<div class="fb-customerchat"-->
      <!--  attribution=setup_tool-->
      <!--  page_id="2312284872420533"  theme_color="#ff7e29">-->
      <!--</div>-->






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
    <style>


        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 99;
            right: 0;
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 5px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .twitter {
            background: #55ACEE;
            color: white;
        }

        .google {
            background: #dd4b39;
            color: white;
        }

        .linkedin {
            background: #007bb5;
            color: white;
        }

        .youtube {
            background: #bb0000;
            color: white;
        }

        .content {
            margin-left: 75px;
            font-size: 30px;
        }
        .social-media {
            width: 45px;
            float: right;
        }
        a.call-now {
            background: #ff2327;
        }
        i.fa.fa-phone {
            padding-right: 5px;
        }






        /*--------------*/


        .preserve-3d {
            transform-style: preserve-3d;
            -webkit-transform-style: preserve-3d;
        }

        .button_base {
            border: 0;
            font-size: 15px;
            height: 3.4em;
            text-align: center;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-user-select: none;
            text-align: left;
        }

        .backwards {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .wrap {
            width: 10%;
            margin: 3em auto;
            text-align: center;
        }

        .flip {
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
            /* IE6,IE7 */
            ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            /* IE8 */
            -moz-transform: rotate(-180deg);
            /* FF3.5+ */
            -o-transform: rotate(-180deg);
            /* Opera 10.5 */
            -webkit-transform: rotate(-180deg);
            /* Safari 3.1+, Chrome */
            position: absolute;
        }

        #backwards {
            unicode-bidi: bidi-override;
            direction: rtl;
        }

        #flip {
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
            /* IE6,IE7 */
            ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            /* IE8 */
            -moz-transform: rotate(-180deg);
            /* FF3.5+ */
            -o-transform: rotate(-180deg);
            /* Opera 10.5 */
            -webkit-transform: rotate(-180deg);
            /* Safari 3.1+, Chrome */
            position: absolute;
        }

        .shadow {
            text-shadow: .5px .5px .5px #000;
        }

        .shadow2 {
            text-shadow: 3px 3px 3px #000;
        }

        .shad_str {
            text-shadow: 2px 2px 2px #000;
            line-height: .5em;
            font-family: "Arial Black", "Arial Bold", sans-serif;
            font-weight: bold;
            font-size: 1.4em;
            color: #CCC;
            -webkit-text-fill-color: #000;
            /* Will override color (regardless of order) */
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #FFF;
        }

        .shad_str2 {
            text-shadow: 3px 3px 3px #000;
            line-height: .5em;
            font-family: "Arial Black", "Arial Bold", sans-serif;
            font-weight: bold;
            font-size: 1.4em;
            -webkit-text-fill-color: #999;
            /* Will override color (regardless of order) */
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #FFF;
        }

        .fire_txt {
            background: -webkit-linear-gradient(#fc2f07, #fcf907);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ice_txt {
            background: -webkit-linear-gradient(#0956fc, #FFFFFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg_grad {
            background: #005DFF;
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#2e9b18), to(#005DFF));
            background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#005DFF), to(#2e9b18));
            background: -moz-linear-gradient(center top, #0096FF, #005DFF);
        }

        .bg_grad2 {
            background: #0096FF;
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#005DFF), to(#0096FF));
            background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#005DFF), to(#0096FF));
            background: -moz-linear-gradient(center top, #005DFF), to(#0096FF));
        }

        #stroke {
            margin-bottom: 5px;
            line-height: .5em;
            font-family: Impact, sans-serif;
            font-size: 1.32em;
            color: #999;
            -webkit-text-fill-color: #000;
            /* Will override color (regardless of order) */
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #FFF;
        }

        #stroke2 {
            margin-bottom: 5px;
            line-height: .5em;
            font-family: Impact, sans-serif;
            font-size: 1.32em;
            color: #000;
            -webkit-text-fill-color: #999;
            /* Will override color (regardless of order) */
            -webkit-text-stroke-width: 1.2px;
            -webkit-text-stroke-color: #FFF;
        }

        .b05_3d_roll div {
            position: absolute;
            text-align: center;
            height: 54px;
            padding: 15px;
            pointer-events: none;
            /* box-sizing: border-box; */
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }


        .b05_3d_roll div:nth-child(1) {
            color: #000000;
            background-color: #17778a;
            transform: rotateX(90deg);
            -webkit-transform: rotateX(90deg);
            -moz-transform: rotateX(90deg);
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            transform-origin: 50% 50% -25px;
            -webkit-transform-origin: 50% 50% -25px;
            -moz-transform-origin: 50% 50% -25px;
        }

        .b05_3d_roll div:nth-child(2) {
    color: #FFF;
    background-color: #17778a;
    transform: rotateX(0deg);
    -webkit-transform: rotateX(0deg);
    -moz-transform: rotateX(0deg);
    transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    transform-origin: 50% 50% -25px;
    -webkit-transform-origin: 50% 50% -25px;
    -moz-transform-origin: 50% 50% -25px;
}

        .b05_3d_roll:hover div:nth-child(1) {
            color: #ffffff;
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            transform: rotateX(0deg);
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
        }

        .b05_3d_roll:hover div:nth-child(2) {
    background-color: #17778a;
    transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    transform: rotateX(-90deg);
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
}



        .center_btn a {
            display: inline-block;
            text-align: center;
            box-shadow: 2px 4px 5px #7c7c7c;
            font-weight: 400;
        }

        .center_btn {
            float: left;
            /* width: 100%; */
        }
        .button_base {
            width: 200px;
            height: 50px;
        }
        .button_base.b05_3d_roll div {
            width: 200px;
        }
        .button_base:hover {
            cursor: pointer;
        }
        .b05_3d_roll {
            perspective: 500px;
            -webkit-perspective: 500px;
            -moz-perspective: 500px;
        }




        nav#navbar.fixed-top {
    background-color: #222!important;
    opacity: 1;
}
        a.navbar-brand img {
            height: 78px;
        }
        .slide_1.owl-carousel.owl-theme.owl-loaded.owl-drag .owl-nav i {
            font-size: 65px;
        }
    </style>
    <?php $method = strtolower(SM::current_method()); ?>
<script type="text/javascript">
    var url = '<?php echo url('') . '/'; ?>';
    var method = '<?php echo $method; ?>';
</script>
{!! SM::smGetThemeOption( "google_analytic_code"); !!}


</head>

<body>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="104684848016742">
      </div>
  

<div class="float-sm side-social">
        <div class="fl-fl float-contact" style=" background: red;">
            <i class="fa fa-phone"></i>
            <a href="tel:{{SM::get_setting_value('mobile')}}" target=""> {{SM::get_setting_value('mobile')}} </a>
        </div>


    @empty(!SM::smGetThemeOption("social_facebook"))
        <div class="fl-fl float-fb" style=" background: #3B5998;">
            <i class="fa fa-facebook"></i>
            <a href="{{SM::smGetThemeOption("social_facebook")}}" target="_blank"> Like us!</a>
        </div>
    @endif
    @empty(!SM::smGetThemeOption("social_twitter"))
        <div class="fl-fl float-tw" style=" background: #55ACEE;">
            <i class="fa fa-twitter"></i>
            <a href="{{SM::smGetThemeOption("social_twitter")}}" target="_blank">Follow us!</a>
        </div>
    @endif
    @empty(!SM::smGetThemeOption("social_google_plus"))
    <div class="fl-fl float-gp" style=" background: #dd4b39;">
        <i class="fa fa-google-plus"></i>
        <a href="{{SM::smGetThemeOption("social_google_plus")}}" target="_blank">Recommend!</a>
    </div>
    @endif

    @empty(!SM::smGetThemeOption("social_linkedin"))
        <div class="fl-fl float-rs" style=" background: #007bb5;">
            <i class="fa fa-linkedin"></i>
            <a href="{{SM::smGetThemeOption("social_linkedin")}}" target="_blank">Follow </a>
        </div>
    @endif
    @empty(!SM::smGetThemeOption("social_github"))
        <div class="fl-fl float-rs" style=" background: #000;">
            <i class="fa fa-github"></i>
            <a href="{{SM::smGetThemeOption("social_github")}}" target="_blank">Follow </a>
        </div>
    @endif
    @empty(!SM::smGetThemeOption("social_instagram"))
        <div class="fl-fl float-rs" style=" background: blue;">
            <i class="fa fa-instagram"></i>
            <a href="{{SM::smGetThemeOption("social_instagram")}}" target="_blank">Follow </a>
        </div>
    @endif

    @empty(!SM::smGetThemeOption("social_youtube"))
        <div class="fl-fl float-ig" style=" background: #bb0000;">
            <i class="fa fa-youtube"></i>
            <a href="{{SM::smGetThemeOption("social_youtube")}}" target="_blank">Follow us!</a>
        </div>
    @endif

</div>
