@extends('frontend.master')

@section("title", "Gallerys")

@section('content')

    <?php

    $gallery_banner_title = SM::smGetThemeOption("gallery_banner_title");

    $project_banner_subtitle = SM::smGetThemeOption("gallery_banner_subtitle");

    $bannerImage = SM::smGetThemeOption("gallery_banner_image");

    ?>



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

    <!-- Our Project Start -->

    <section class="portfolio-section cmn_bg">

        <div class="container">



            <div class="row zoom-gallery">

                @if(count($gallery)>0)

                    @foreach($gallery as $key=>$gallerys)

                        <?php    $image_list=explode(",",$gallerys->image_gallery); ?>

                            @if(!empty($image_list[0]))

                                <div class="isotopeSelector filter fashion col-lg-4 col-sm-6" data-aos="zoom-out">

                                    <div class="overlay">

                                        <div class="border-portfolio">

                                            <a  href="{{url('gallery/'.$gallerys->slug)}}" data-source="">

                                                <div class="overlay-background">

                                                    <i class="ti-plus" aria-hidden="true"></i>

                                                </div>

                                                <img src="{!! SM::sm_get_the_src($image_list[0], 350, 350) !!}" class="img-fluid blur-up lazyload " alt="{{$gallerys->title}}">

                                            </a>

                                        </div>

                                        <a href="{{url('gallery/'.$gallerys->slug)}}" class="text-center">{{$gallerys->title}}</a>

                                    </div>

                                </div>

                            @endif



                    @endforeach

                @endif



            </div>

        </div>





        <!-- pagination Start -->

        {{--<div class="pagination_sec pagination_portfolio">--}}

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

    <!-- Our Project End -->





@endsection