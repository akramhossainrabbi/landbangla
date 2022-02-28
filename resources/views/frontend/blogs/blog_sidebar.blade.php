
<div class="col-lg-3 blog_cat">
    <div class="blog_sidebar">
        {{--<div class="blog_side_title">--}}
            {{--<h6>Search Blogs</h6>--}}
        {{--</div>--}}
        {{--<div class="about_blog">--}}
            {{--<aside class="widget">--}}
                {{--<div class="search-widget">--}}
                    {{--<form action="{!! url("search") !!}" method="GET">--}}
                        {{--<input name="type" type="hidden" value="Blog">--}}
                        {{--<input name="s" type="search" placeholder="Search your text here" class="input-style" autocomplete="off" maxlength="100">--}}
                        {{--<button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</aside>--}}
        {{--</div>--}}
        <?php
        $blog_popular_is_enable = SM::smGetThemeOption( "blog_popular_is_enable", 1 );
        $blog_show_category = SM::smGetThemeOption( "blog_show_category", 1 );
        $blog_show_tag = SM::smGetThemeOption( "blog_show_tag", 1 );
        $blog_sidebar_add = SM::smGetThemeOption( "blog_sidebar_add", 1 );
        ?>
        @if($blog_popular_is_enable==1)
            <?php
            $blog_popular_posts_per_page = SM::smGetThemeOption( "blog_popular_posts_per_page", 5 );
            $popularPosts = SM::getPopularBlog( $blog_popular_posts_per_page );
            ?>
            @if(count($popularPosts)>0)
                <div class="blog_side_title">
                    <h6>POPULAR POSTS</h6>
                </div>
                    @foreach($popularPosts as $blog)
                        <div class="recent_post">
                            <a href="{{ url( "blog/$blog->slug" )}}">
                                <div class="r_post">
                                    <div class="r_post_img">
                                        <img src="{!! SM::sm_get_the_src( $blog->image , 112, 112) !!}" class="" alt="{{$blog->title}}">
                                    </div>
                                    <div class="text">
                                        <p>{{$blog->title}}</p>
                                        <p class="date">{{ date("d, F Y", strtotime($blog->created_at)) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
            @endif
        @endif

        @if($blog_show_category==1)
            <?php
            $getCategories = SM::getCategories(0);
            ?>
            @if(count($getCategories)>0)
                    <div class="blog_side_title">
                        <h6>CATEGORIES</h6>
                    </div>
                    <div class="blog_category">
                        @foreach($getCategories as $cat)
                        <a href="{!! url("blog/category/".$cat->slug) !!}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$cat->title}}</a>
                        @endforeach
                    </div>
                @endif
        @endif

        @if($blog_show_tag==1)
            <?php
            $getTags = SM::getTags();
            ?>
            @if(count($getTags)>0)
                <div class="blog_side_title">
                    <h6>BLOG TAGS</h6>
                </div>

                <div class="recent_post">
                    <div class="r_post">
                        <div class="text">
                            @foreach($getTags as $tag)
                                @if($tag->title == ! '')
                                    <a href="{!! url("blog/tag/".$tag->slug) !!}" class="btn btn-default btn_style">
                                        {{$tag->title}}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endif
        <?php
        $blog_sidebar_ad_link = SM::smGetThemeOption( "blog_sidebar_ad_link", "#" );
        $blog_sidebar_ad = SM::smGetThemeOption( "blog_sidebar_ad" );
        ?>
        @empty(!$blog_sidebar_ad)
            <aside class="widget-Add" >
                <div class="adspace">
                    <a href="{!! $blog_sidebar_ad_link !!}">
                        <img src="{!! SM::sm_get_the_src( $blog_sidebar_ad) !!}" alt="sidebar" class="widget-Add-img">
                    </a>
                </div>
            </aside>
        @endempty
    </div>

    <style>
        .btn_style{
            border: 1px solid #ededed;
            margin: 4px 2px;
        }
        .widget-Add-img{
            width: 100%;
        }
        .input-style {
            height: 36px;
            border: 1px solid #d6c6c6;
            padding: 18px;
        }
    </style>
</div>

