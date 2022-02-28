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
          <h3>Carrer </h3>
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

    <section class="portfolio-section cmn_bg" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                        
                            <?php
                            $count=1;
                            ?>
                            @forelse($careers as $key=> $career)
                            <div class="row ">
                                <div class=" col-md-6">
                                    <div class="jobs-post-box">
                                        <a href="career/detail/full-stack-php-developer-1"><h3>{{$career->title}}</h3></a>
                                        <h4><span>Deadline : </span> {{$career->end_date}}</h4>

                                        <a class="btn btn-default career-btn" href="{{url('/career/detail',$career->slug)}}">View Details</a>
                                    </div>

                                </div>
                            </div>
                            @empty
                               
                                    <div style="color: red; font-weight: bold; font-size: 16px;">  SORRY! No Data Found.</div>
                                
                            @endforelse
                           
                    
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