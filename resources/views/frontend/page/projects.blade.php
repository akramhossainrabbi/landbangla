@extends('frontend.master')

@section("title", "Projects")

@section('content')



    <?php

    $project_banner_title = SM::smGetThemeOption("project_banner_title");

    $project_banner_subtitle = SM::smGetThemeOption("project_banner_subtitle");

    $bannerImage = SM::smGetThemeOption("project_banner_image");

    ?>



    <!-- Breadcrumb Start -->
<section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>{{$project_banner_title}}</h3>
          <ul id="breadcrumb" class="breadcrumb">
            @include('frontend.common.breadcrumb')
        </ul>
    </div>
</div>
</div>
</div>
</section>
    <!-- Breadcrumb Start -->
	<section class="portfolio-section cmn_bg">
		<div class="container our_project_2">
			<ul class="nav nav-tabs project-navtabs">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#recent">Recent</a>
				</li>
                <?php $project_cat = SM::get_project_categories(); ?>
				@foreach($project_cat as $category)
					@if(count($category->projects)>0)
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#cate_{{$category->id}}"> {{$category->title}}</a>
						</li>
					@endif
				@endforeach
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">

				<div id="recent" class="tab-pane active">
					<div class="row zoom-gallery">
						@foreach($project_data as $project)
							<div class="isotopeSelector col-lg-4 col-sm-6 cate_7">
								<div class="our-portfolio aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
									<div class="pic">
										<img src="{!! SM::sm_get_the_src($project->image, 350, 350) !!}">
										<ul class="social">
											<li class="zoom_gallery " href="{!! SM::sm_get_the_src($project->image, 800, 800) !!}">
												<img src="" class="img-fluid blur-up lazyloaded" alt="">
												<a class="fa fa-plus"></a>
											</li>
											<li><a href="{{url('project/'.$project->slug)}}" class="fa fa-link"></a></li>
										</ul>
									</div>
									<div class="team-content">
										<span class="post"><a href="{{url('project/'.$project->slug)}}">{{$project->title}}</a></span>
									</div>

								</div>

							</div>
						@endforeach
					</div>

				</div>


				@foreach($project_cat as $category)
                    <?php $project_li=$category->projects;?>
				    <div id="cate_{{$category->id}}" class="tab-pane fade">
					<div class="row zoom-gallery">
						@foreach($project_li as $project)
						<div class="isotopeSelector col-lg-4 col-sm-6 cate_7">
							<div class="our-portfolio aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
								<div class="pic">
									<img src="{!! SM::sm_get_the_src($project->image, 350, 350) !!}">
									<ul class="social">
										<li class="zoom_gallery " href="{!! SM::sm_get_the_src($project->image, 800, 800) !!}">
											<img src="" class="img-fluid blur-up lazyloaded" alt="">
											<a class="fa fa-plus"></a>
										</li>
										<li><a href="{{url('project/'.$project->slug)}}" class="fa fa-link"></a></li>
									</ul>
								</div>
								<div class="team-content">
									<span class="post"><a href="{{url('project/'.$project->slug)}}">{{$project->title}}</a></span>
								</div>

							</div>

						</div>
						@endforeach
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</section>



    <!-- Our Project End -->

    <style>

        .our-portfolio {

            text-align: center;

            transition: all 0.5s ease 0s;

            border: 1px solid #c2bdbd;

            box-shadow: 0px 0px 10px 0px #7e7c7c;

        }

        .our-portfolio:hover{

            box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;

        }

        .our-portfolio .pic{

            overflow: hidden;

            position: relative;

        }

        .our-portfolio .pic:before,

        .our-portfolio .pic:after{

            content: "";

            width: 200%;

            height: 80%;

            background: rgba(38,37,37,0.8);

            position: absolute;

            top: -100%;

            left: -4%;

            transform: rotate(45deg);

            transition: all 0.5s ease 0s;

        }

        .our-portfolio .pic:after{

            background: rgba(8,75,77,0.8);

            top: auto;

            left: auto;

            bottom: -100%;

            right: -4%;

        }

        .our-portfolio:hover .pic:before{ top: 0; }

        .our-portfolio:hover .pic:after{ bottom: 0; }

        .our-portfolio .pic img{

            width: 100%;

            height: auto;

        }

        .our-portfolio .social{

            width: 100%;

            padding: 0;

            margin: 0;

            list-style: none;

            position: absolute;

            bottom: 45%;

            left: 0;

            opacity: 0;

            z-index: 2;

            transition: all 0.5s ease 0.3s;

        }

        .our-portfolio:hover .social{ opacity: 1; }

        .our-portfolio .social li{ display: inline-block; }

        .our-portfolio .social li a {
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 20px;
    color: #fff!important;
    margin-right: 10px;
    position: relative;
    transition: all 0.3s ease 0s;
}

        .our-portfolio .social li a:after {
    content: "";
    width: 100%;
    height: 100%;
    background: #278dae;
    border-radius: 0 20px 20px 20px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}

        .our-portfolio .social li a:after {
    content: "";
    width: 100%;
    height: 100%;
    background: #278dae;
    border-radius: 0 20px 20px 20px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}

        .our-portfolio .social li a:hover:after{ transform: rotate(180deg); }

        .our-portfolio .team-content{ padding: 20px; }

        .our-portfolio .title{

            font-size: 22px;

            font-weight: 700;

            letter-spacing: 2px;

            color: #047168;

            text-transform: uppercase;

            margin-bottom: 7px;

        }

        .our-portfolio .post {

            display: block;

            font-size: 17px;

            font-weight: 600;

            color: #707070;

            text-transform: capitalize;
        }
        .our-portfolio  a{
            margin-bottom: 0px;
        }
        .our-portfolio .post a{
            margin-bottom: 0px;
        }
    </style>

@endsection