@extends('frontend.master')

@section("title", "Gallerys")

@section('content')

    <?php

    $gallery_banner_title = SM::smGetThemeOption("gallery_banner_title");

    $project_banner_subtitle = SM::smGetThemeOption("gallery_banner_subtitle");

    $bannerImage = SM::smGetThemeOption("gallery_banner_image");

    ?>





    <!-- Breadcrumb Start -->
    <!-- Breadcrumb Start -->
    <section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>{{$gallery_banner_title}} </h3>
          <ul id="breadcrumb" class="breadcrumb">
            @include('frontend.common.breadcrumb')
        </ul>
    </div>
</div>
</div>
</div>
</section>


    <!-- section start -->

    <section class="portfolio-section port-col zoom-gallery fullwidth-portfolio cmn_bg">

        <ul class="plus_decore">

            <li></li>

            <li></li>

        </ul>

        <div class="section_title">
            <h3>{{$gallery_photo->title}}</h3>
        </div>

        <?php   $image= explode(",",$gallery_photo->image_gallery);  ?>

        <p><span>Total Image : @if(count($image)>0){{count($image)}}@endif </span></p>

        <div class="container">

          @if(!empty($image))

            <div class="isotopeContainer row">

              @foreach($image as $key=>$images)

                <div class="col-lg-4 col-md-4 col-sm-6 isotopeSelector shoes">

                    <div class="overlay">

                        <div class="border-portfolio">

                            <a class="zoom_gallery" href="{!! SM::sm_get_the_src($images,800,800) !!}" data-source="{!! SM::sm_get_the_src($images,350,350) !!}">

                                <div class="overlay-background">

                                    <i class="ti-plus" aria-hidden="true"></i>

                                </div>

                                <img class="img-fluid blur-up lazyload " alt="" src="{!! SM::sm_get_the_src($images,350,350) !!}">

                            </a>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

          @endif

        </div>

        <!-- pagination Start -->

        {{--<div class="pagination_sec">--}}

            {{--<div class="content_detail__pagination cdp">--}}

                {{--<a href="#" class="cdp_i"><i class="fa fa-angle-double-left" aria-hidden="true"></i>prev</a>--}}

                {{--<a href="#" class="cdp_i">1</a>--}}

                {{--<a href="#" class="cdp_i">2</a>--}}

                {{--<a href="#" class="cdp_i">3</a>--}}

                {{--<a href="#" class="cdp_i">next<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>--}}

            {{--</div>--}}

        {{--</div>--}}

        <!-- pagination End -->

    </section>

    <!-- Section ends -->





@endsection