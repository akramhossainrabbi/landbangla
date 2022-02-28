@extends('frontend.master')

@section("title", $service_details->title)

@section('content')



    <?php

    $service_banner_title = SM::smGetThemeOption("service_banner_title");

    $service_banner_titlesubtitle = SM::smGetThemeOption("service_banner_subtitle");

    $bannerImage = SM::smGetThemeOption("service_banner_image");

    ?>

    <!-- Breadcrumb Start -->
<section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>Service Details</h3>
          <ul id="breadcrumb" class="breadcrumb">
            @include('frontend.common.breadcrumb')
        </ul>
    </div>
</div>
</div>
</div>
</section>
    <!-- Breadcrumb Start -->



    <!-- Single-portfolio -->

    <section class="single-portfolio cmn_bg">
        <div class="container">

            <div class="row">

                <div class="col-12">

                    <h2>{{$service_details->title}}</h2>

                    <br>

                    <div class="portfolio_sec" data-aos="zoom-in-up">

                        <img src="{!! SM::sm_get_the_src($service_details->image, 900,350) !!}" class="img-fluid blur-up lazyload " alt="" style="width: 100%">

                    </div>

                    <br>

                    <p>

                        {!! $service_details->description !!}

                    </p>

                </div>



            </div>

        </div>

    </section>

    <!-- End-Single-portfolio -->









@endsection