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



    <?php //var_dump($project)?>



    <?php //var_dump(explode(',',$project->floor_image_gallery))?>



    <!-- Single-portfolio -->



    <section class="single-portfolio cmn_bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slide_1 owl-carousel owl-theme">
                        @if(!empty($project->image))
                        <div class="item">
                            <div class="portfolio_sec" data-aos="zoom-in-up">
                                <img src="{!! SM::sm_get_the_src($project->image, 900, 600) !!}" class="img-fluid " alt="">
                            </div>
                        </div>
                        @endif
                        <?php $gallery=explode(',',$project->image_gallery);?>
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
                <div class="col-md-12 mar-top-20">
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







                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Project details</h4>







                                        <table  class="table table-bordered">



                                            <tbody>



                                            <tr>



                                                <th colspan="2" rowspan="2" style="height:27px; width:414px">

                                                    <p>Project Name:</p>

                                                    <p>&nbsp;{{$project->client_name}}</p>



                                                </th>



                                                <th style="height:27px; width:304px">



                                                    <p><strong>OUR SERVICES</strong></p>



                                                </th>



                                            </tr>



                                            <tr>

                                                <td rowspan="9">

                                                    <ul class="other_service_table">

                                                        @if(!empty($project->other_service ))

                                                            <?php $other_service=json_decode($project->other_service )?>

                                                            @if(!empty($other_service))

                                                                    @foreach($other_service as $service)

                                                                       <li><img src="{{asset('frontend/assets/images/check.png')}}" class="table_image_check"> {{$service}} </li>

                                                                    @endforeach

                                                             @endif

                                                        @endif

                                                    </ul>

                                                    <p>&nbsp;</p>

                                                </td>

                                            </tr>



                                            <tr>



                                                <th style="height:27px; width:218px">



                                                    Project Location:



                                                </th>



                                                <td style="height:27px; width:196px">



                                                    <p>{{$project->location }}</p>



                                                </td>







                                            </tr>



                                            <tr>



                                                <th style="height:27px; width:218px">



                                                    Type of Project:



                                                </th>



                                                <td style="height:27px; width:196px">



                                                    <p>{{$project->project_type  }}</p>



                                                </td>







                                            </tr>



                                            <tr>



                                                <th style="height:26px; width:218px">



                                                    Land Area:



                                                </th>



                                                <td style="height:26px; width:196px">



                                                    <p>{{$project->land_area }}</p>



                                                </td>







                                            </tr>



                                            <tr>



                                                <th style="height:27px; width:218px">



                                                    Number of Floors:



                                                </th>



                                                <td style="height:27px; width:196px">



                                                    <p>{{$project->number_of_floor  }}</p>

                                                </td>







                                            </tr>



                                            <tr>



                                                <th style="height:27px; width:218px">



                                                    Number of Units:



                                                </th>



                                                <td style="height:27px; width:196px">



                                                    <p>{{$project->number_of_unit  }}</p>



                                                </td>







                                            </tr>



                                            <tr>



                                                <th style="height:27px; width:218px">



                                                    Flat Size:



                                                </th>



                                                <td style="height:27px; width:196px">



                                                    <p>{{$project->size   }}</p>



                                                </td>







                                            </tr>



                                            <tr>



                                                <th style="height:26px; width:218px">



                                                    Present Status:



                                                </th>



                                                <td style="height:26px; width:196px">



                                                    <p>{{$project->present_status   }}</p>



                                                </td>







                                            </tr>



                                            <tr>



                                                <th colspan="2" style="height:109px;">



                                                    Main Features:&nbsp;

                                                    <p>{{$project->main_featurs    }}</p>



                                                </th>







                                            </tr>



                                            <tr>



                                                <th colspan="2">



                                                    Others:  {{$project->other1  }}



                                                </th>



                                                <td>



                                                    Others:  {{$project->other2  }}



                                                </td>







                                            </tr>



                                            </tbody>



                                        </table>



                                    </div>



                                    <div id="Location" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Project Location</h4>



                                        <iframe width="1088" height="583" id="gmap_canvas"



                                                src="https://maps.google.com/maps?q={{$project->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed"



                                                frameborder="0" scrolling="no" marginheight="0"



                                                marginwidth="0"></iframe>



                                    </div>



                                    <div id="Plan" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Floor Plan</h4>



                                        <?php $floor=explode(',',$project->floor_image_gallery); ?>



                                        <div class="row">



                                            @if(!empty($floor))



                                                @foreach($floor as $floor_plan)



                                                    <div class="col-md-3 plan-img">



                                                        <img src="{!! SM::sm_get_the_src($floor_plan, 350, 350) !!}"



                                                             class="img-thumbnail img-responsive">







                                                        <caption class="text-center">{{$project_banner_title}}</caption>



                                                    </div>



                                                @endforeach



                                            @endif











                                        </div>



                                    </div>



                                    <div id="video" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Video</h4>



                                        <div class="video-panel">



                                            <iframe width="1110" height="500" src="{!! $project->project_video !!}"



                                                    frameborder="0"



                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"



                                                    allowfullscreen></iframe>



                                        </div>



                                    </div>



                                </div>



                                <br>



                                <p>{!! $project->description !!}</p>



                            </div>





            </div>



        </div>



    </section>

@endsection