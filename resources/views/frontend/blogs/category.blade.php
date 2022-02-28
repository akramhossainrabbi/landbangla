@extends("frontend.master")

@section("title", $categoryInfo->title)

@section("content")

    <?php

    $title = $categoryInfo->title;

    $subtitle = "Category";

    $bannerImage = SM::smGetThemeOption("blog_detail_banner_image");

    ?>

    
<section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>{{$title}} </h3>
          <ul id="breadcrumb" class="breadcrumb">
            @include('frontend.common.breadcrumb')
        </ul>
    </div>
</div>
</div>
</div>
</section>
    <!-- Breadcrumb Start -->



    <!-- News Start -->

    <section class="home_1_news blog_page cmn_bg">

        <div class="container">

            <div class="row">

                @include('frontend.blogs.blog_list_item', ['blogPost'=>$blogs])

            </div>

        </div>

        <!-- pagination Start -->

    {{--<div class="pagination_sec">--}}

    {{--<div class="content_detail__pagination cdp text-center">--}}

    {{--<a href="#" class="cdp_i"><i class="fa fa-angle-double-left" aria-hidden="true"></i>prev</a>--}}

    {{--<a href="#" class="cdp_i">1</a>--}}

    {{--<a href="#" class="cdp_i">2</a>--}}

    {{--<a href="#" class="cdp_i">3</a>--}}

    {{--<a href="#" class="cdp_i">next<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>--}}

    {{--</div>--}}

    {{--</div>--}}

    <!-- pagination End -->

    </section>

    <!-- News Start -->

@endsection