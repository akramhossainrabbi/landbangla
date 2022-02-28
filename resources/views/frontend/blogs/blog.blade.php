@extends("frontend.master")
@section("title", "Blog")
@section("content")
    <?php
    $countStickyPost = count($stickyBlogPost);
    $isBreadcrumbEnable = SM::smGetThemeOption("blog_is_breadcrumb_enable", false);

    $pagination = [
        [
            "title" => "Blog"
        ]
    ];
    $title = SM::smGetThemeOption("blog_banner_title");
    $subtitle = SM::smGetThemeOption("blog_banner_subtitle");
    $bannerImage = SM::smGetThemeOption("blog_banner_image");
    ?>
    <!-- Breadcrumb Start -->
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
                @if($countStickyPost>0)
                    @foreach($stickyBlogPost as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="news_sec" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2100">
                            <figure class="snip_con">
                                <a href="{!! url('blog/'.$blog->slug ) !!}">
                                    <img src="{!! SM::sm_get_the_src( $blog->image, 350, 350) !!}" alt="{{$blog->title}}" class="img-fluid">
                                </a>
                            </figure>
                            <div class="text_p">
                                <div class="date_sec">
                                    <div>
                                        <h4> {{date("d", strtotime($blog->created_at))}}</h4>
                                        <h6> {{date("F", strtotime($blog->created_at))}}</h6>
                                    </div>
                                </div>
                                <h4>{{$blog->title}}</h4>
                                <p>{!! mb_strimwidth($blog->short_description, 0, 100, "...") !!}</p>
                                <h6 class="readmore"><a href="{!! url('blog/'.$blog->slug ) !!}">Read More</a></h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif


                @include('frontend.blogs.blog_list_item')

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