<?php

 $seo_title = stripslashes(
        (
            isset($seo_title)
            && SM::sm_string($seo_title)
        )
            ? $seo_title
            : SM::get_setting_value('seo_title')
    );
    ?>
    
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
<section class="topbar-section hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="topaddressbar">
                    <ul>
                        <li><a href=""><marquee>আবাসনে আভিজাত্যের ছোঁয়া</marquee> </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contant-info">
                    <ul>
                        <li><a href="tel:{{SM::get_setting_value('mobile')}}"><img src="https://glgassets.com/wp-content/themes/glg/assets/images/callNow.png">  {{SM::get_setting_value('mobile')}}.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="topsocialaddress">
                    <ul>
                        <li> <span> Share Now :</span> </li>
               @empty(!SM::smGetThemeOption("social_facebook"))          
                <li><a href="{{SM::smGetThemeOption("social_facebook")}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                @endif
                 @empty(!SM::smGetThemeOption("social_facebook"))
            <li><a href="{{SM::smGetThemeOption("social_twitter")}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
             @endif
             @empty(!SM::smGetThemeOption("social_facebook"))
            <li><a href="{{SM::smGetThemeOption("social_linkedin")}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
             @endif
             @empty(!SM::smGetThemeOption("social_facebook"))
            <li><a href="{{SM::smGetThemeOption("social_instagram")}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
             @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@if (request()->is('/'))
    <nav class="navbar nav_2 navbar-expand-lg navbar-light construct nav-home" id="navbar">
    @else
    <nav class="navbar nav_2 navbar-expand-lg navbar-light construct" id="navbar">
@endif
    <div class="container main-menu" id="main-menu">
        <a class="navbar-brand" href="{{url('/')}}">
            <img class="img-responsive" src="{{ SM::sm_get_the_src(SM::sm_get_site_logo()) }}" alt="{{ SM::get_setting_value('site_name') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse default-nav" id="navbarSupportedContent">
            <?php
            $menu = array(
            'nav_wrapper' => 'ul',
            'start_class' => 'navbar-nav ml-auto',
            'link_wrapper' => 'li',
            'home_class' => 'nav-item ',
            'a_class' => 'nav-link',
            'dropdown_class' => 'dropdown',
            'subNavUlClass' => 'dropdown-menu subSub',
            'has_dropdown_wrapper_class' => 'dropdown ',
            'show' => TRUE
            );
            SM::sm_get_menu($menu);
            ?>

        </div>
    </div>
</nav>

<script>
    
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});
</script>
