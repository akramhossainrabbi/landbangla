@extends('frontend.master')



@section("title", "Projects")



@section('content')







    <?php



    $construction_banner_title = SM::smGetThemeOption("construction_banner_title");



    $construction_banner_subtitle = SM::smGetThemeOption("construction_banner_subtitle");



    $bannerImage = SM::smGetThemeOption("construction_banner_image");



    ?>







    <section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3>cONTSTRUCTION </h3>
          <ul id="breadcrumb" class="breadcrumb">
            @include('frontend.common.breadcrumb')
        </ul>
    </div>
</div>
</div>
</div>
</section>



    <section class="single-portfolio cmn_bg">

        <div class="container">



            <div class="row">



                <div class="col-12">



                    <div class="slide_1 owl-carousel owl-theme">



                        @if(!empty($construction->image))



                        <div class="item">



                            <div class="portfolio_sec" data-aos="zoom-in-up">



                                <img src="{!! SM::sm_get_the_src($construction->image, 900, 600) !!}"



                                     class="img-fluid blur-up lazyload " alt="">



                            </div>



                        </div>



                        @endif



                        <?php $gallery=explode(',',$construction->image_gallery);?>



                        @if(!empty($gallery))



                            @foreach($gallery as $key=>$value)



                                <div class="item">



                                    <div class="portfolio_sec" data-aos="zoom-in-up">



                                        <img src="{!! SM::sm_get_the_src($value,900,600)!!}" class="img-fluid blur-up lazyload " alt="{{$value}}">



                                    </div>



                                </div>



                            @endforeach



                        @endif



                    </div>



                </div>





                <div class="col-md-12">



                                <ul class="nav nav-tabs">



                                    <li class="active">



                                        <a data-toggle="tab" href="#home">Details</a>



                                    </li>



                                    <li><a data-toggle="tab" href="#Location">Location</a></li>



                                    <li><a data-toggle="tab" href="#Plan">Floor Plan</a></li>



                                    <li><a data-toggle="tab" href="#video">Video</a></li>



                                </ul>







                                <div class="tab-content">



                                    <div id="home" class="tab-pane fade in active show">







                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Construction  details</h4>







                                        <table border="1" class="table table-bordered" cellpadding="0" cellspacing="0" >



                                            <tbody>

                                                <tr>

                                                    <td width="30%">Client Name:</td>

                                                    <td>{{$construction->client_name}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Project Location:</td>

                                                    <td>{{$construction->location}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Types of Project: </td>

                                                    <td>{{$construction->type_of_project}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Land Area:</td>

                                                    <td>{{$construction->land_area}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Number of Floor: </td>

                                                    <td>{{$construction->number_of_floor}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Constructed Area per floor (sft)</td>

                                                    <td>{{$construction->constructed_Area_per_floor}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Number of Basement:</td>

                                                    <td>{{$construction->number_basement}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Starting Date: </td>

                                                    <td>{{$construction->starting_date}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Construction Status: </td>

                                                    <td>{{$construction->construction_status}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Expected Completion Date:</td>

                                                    <td>{{$construction->starting_date}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Building Features:</td>

                                                    <td>{{$construction->building_features}}</td>

                                                </tr>

                                                <tr>

                                                    <td>Others Info: </td>

                                                    <td>{{$construction->other_info}}</td>

                                                </tr>

                                            </tbody>



                                        </table>



                                    </div>



                                    <div id="Location" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Project Location</h4>



                                        <iframe width="1110" height="583" id="gmap_canvas"



                                                src="https://maps.google.com/maps?q={{$construction->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed"



                                                frameborder="0" scrolling="no" marginheight="0"



                                                marginwidth="0"></iframe>



                                    </div>



                                    <div id="Plan" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Floor Plan</h4>



                                        <?php $floor=explode(',',$construction->floor_image_gallery); ?>



                                        <div class="row">



                                            @if(!empty($floor))



                                                @foreach($floor as $floor_plan)



                                                    <div class="col-md-3 plan-img">



                                                        <img src="{!! SM::sm_get_the_src($floor_plan, 350, 350) !!}"



                                                             class="img-thumbnail img-responsive">







                                                        <caption class="text-center">{{$construction_banner_title}}</caption>



                                                    </div>



                                                @endforeach



                                            @endif











                                        </div>



                                    </div>



                                    <div id="video" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Video</h4>



                                        <div class="video-panel">



                                            <iframe width="1110" height="500" src="{!! $construction->project_video  !!}"



                                                    frameborder="0"



                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"



                                                    allowfullscreen></iframe>



                                        </div>



                                    </div>



                                </div>



                                <br>



                                <p>{!! $construction->description !!}</p>



                            </div>





            </div>



        </div>



    </section>

@endsection