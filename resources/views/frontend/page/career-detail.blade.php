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

$title = SM::smGetThemeOption("about_banner_title");

$subtitle = SM::smGetThemeOption("about_banner_subtitle");

$bannerImage = SM::smGetThemeOption("about_banner_image");



?>



<!-- Breadcrumb Start -->

<section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>Carrer details </h3>
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

<section class="team-area section-padding-lg bg-grey" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jobs-content-box">

                    <h2>{{$careerDetail->title}}</h2>
                    <h4>The duration of the proposed contract is up to {{$careerDetail->end_date}}.</h4>
                     <img src="{!! SM::sm_get_the_src( $careerDetail->image) !!}" style="width: 100%;margin-bottom: 20px">
                    <br>
                    <h3>Job Summary</h3>
                    <p>{!! $careerDetail->content  !!}</p>
            </ul>
                </div>
                <div class="center_btn">
                    <!--<button type="button" id="btn_career_apply" value="{{ $careerDetail->id }}" class="btn btn-success" style="padding: 15px 25px;border-radius: 0px;"><i class="fa fa-plus" aria-hidden="true"></i> Apply Now</button>-->
                    <a href="{{url('/career/apply/'.$careerDetail->id)}}" class="btn btn-success" style="margin-top: 15px;padding: 15px 25px;border-radius: 0px;"><i class="fa fa-plus" aria-hidden="true"></i> Apply Now</a>

                    {{--<a class="about_btn  btn_2" href="#" data-toggle="modal" data-target="#myModal">--}}
                            {{--<div class="button_base b05_3d_roll">--}}
                                {{--<div>APPLY NOW <span class="theme_btn_eff"></span></div>--}}
                                {{--<div>APPLY NOW <span class="theme_btn_eff"></span></div>--}}
                            {{--</div>--}}

                        {{--</a>--}}
                    </div>
            </div>
        </div>
    </div>

</section>

<!-- About Us End -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered" id="employee_detailR">

    </div>
</div>








@endsection