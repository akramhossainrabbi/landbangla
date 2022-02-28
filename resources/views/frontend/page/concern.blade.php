@extends('frontend.master')

@section("title", "About")

@section('content')

<!-- page wapper-->

<?php

$wwrTitle = SM::smGetThemeOption("wwr_title");

$wwrSubtitle = SM::smGetThemeOption("wwr_subtitle");

$wwrDescription = SM::smGetThemeOption("wwr_description");

$ourMission = SM::smGetThemeOption("our_mission");

$ourVision = SM::smGetThemeOption("our_vision");

$histories = SM::smGetThemeOption("histories");

$historiesCount = count($histories);

$title = SM::smGetThemeOption("concern_banner_title");

$subtitle = SM::smGetThemeOption("about_banner_subtitle");

$bannerImage = SM::smGetThemeOption("concern_banner_image");

$concern_section = SM::smGetThemeOption("concern_section");

?>



<!-- Breadcrumb Start -->
<section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>Concern</h3>
          <ul id="breadcrumb" class="breadcrumb">
            @include('frontend.common.breadcrumb')
        </ul>
    </div>
</div>
</div>
</div>
</section>
<!-- Breadcrumb End -->

<!-- About Us Start -->
    <!-- Testimonial Start -->
    <section class="testimonial home_2_testimonial blur-up lazyload">
        <div class="container">

            <div class="row">
                @foreach($concern_section as $concern)
            @if($concern["concern_is_enable"]==1)
            <div class="col-md-4">
                <div class="text-center concern-box">
                    <div class="card">
                        <div class="card-body">
                            <img src="{!! SM::sm_get_the_src($concern["concern_image"], 80,80) !!}" class="img-height">
                        </div>
                        <div class="card-footer text-center concern-title">
                            <a href="{{$concern["site_url"]}}"><h3 class="text-uppercase">{{$concern["title"]}}</h3></a>
                            <p class="text-justify">{{$concern["short_description"]}}</p>
                        </div>
                    </div>
                  </div>
             </div>
             @endif
             @endforeach
            </div>
        </div>
    </section>
    <!-- Testimonial End -->
   

<!-- About Us End -->




@endsection
