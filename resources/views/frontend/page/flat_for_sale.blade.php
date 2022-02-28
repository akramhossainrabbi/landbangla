@extends('frontend.master')



@section("title", "Projects")



@section('content')







    <?php



    $project_banner_title = SM::smGetThemeOption("flat_for_sale_banner_title");



    $project_banner_subtitle = SM::smGetThemeOption("project_banner_subtitle");



    $bannerImage = SM::smGetThemeOption("flat_for_sale_banner_image");



    ?>







    <!-- Breadcrumb Start -->

<section class="common-page-breadcumb">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="pagetitle-and-breadcumb">

          <h3>{{$design}}</h3>

          <ul id="breadcrumb" class="breadcrumb">

            @include('frontend.common.breadcrumb')

        </ul>

    </div>

</div>

</div>

</div>

</section>

    <!-- Breadcrumb Start -->

<section class="who-we-content-section pad-30">

  <div class="container">

    <div class="property-search-box-here">

      <div class="row">

        <div class="col-md-4">

          <div class="form-group">

            <label class="control-label">Location </label>

            <select  class="form-control location" name="location" id="location_filter">

              <option value="">Please Select</option>

                @foreach($all_districts as  $districts)

                    <option value="{{$districts->id}}" {{ ( $districts->id == $location) ? 'selected' : '' }} >{{$districts->name}}</option>

                @endforeach

            </select>

          </div>

        </div>

        <!-- --- -->

        <div class="col-md-4">

          <div class="form-group">

            <label class="control-label">Area</label>

            <select  class="form-control location_1 " name="location_1" id="location_1_filter">

              <option value="">Please Select</option>

                @foreach($all_upazilas as  $upazilas)

                    <option value="{{$upazilas->id}}" {{ ( $upazilas->id == $location_1) ? 'selected' : '' }}>{{$upazilas->name}}</option>

                    @endforeach

            </select>

          </div>

        </div>
        
        <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Size</label>
                    <select  name="size" class="form-control size" id="size">
                        <optgroup>
                                <option selected="" value="">Area(SQFT)</option>
                            @foreach($all_size as  $all_sizes)
                                <option value="{{$all_sizes->size}}" >{{$all_sizes->size}}</option>

                            @endforeach
                        </optgroup>
                    </select>
                </div>
            </div>


      </div>
      <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Beds</label>
                    <select  name="number_of_bed_room" class="form-control number_of_bed_room" id="number_of_bed_room">
                        <optgroup>
                                <option selected="" value="">Bed</option>
                            @foreach($number_of_bed_room as  $number_of_bed_rooms)
                                <option value="{{$number_of_bed_rooms->number_of_bed_room}}" >{{$number_of_bed_rooms->number_of_bed_room}}</option>

                            @endforeach
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Baths</label>
                    <select id="select2" name="number_of_toilet" class="form-control number_of_toilet" id="number_of_toilet">
                        <optgroup>
                                <option selected="" value="">Baths</option>
                            @foreach($number_of_toilet as  $number_of_toilets)
                                <option value="{{$number_of_toilets->number_of_toilet}}" >{{$number_of_toilets->number_of_toilet}}</option>

                            @endforeach
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Floor</label>
                    <select  name="number_of_floor" class="form-control number_of_floor" id="number_of_floor">
                        <optgroup>
                                <option selected="" value="">Floor</option>
                            @foreach($number_of_floor as  $number_of_floors)
                                <option value="{{$number_of_floors->number_of_floor}}" >{{$number_of_floors->number_of_floor}}</option>

                            @endforeach
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Laand Area</label>
                    <select  name="land_area" class="form-control land_area" id="land_area">
                        <optgroup>
                                <option selected="" value="">Land Area</option>
                            @foreach($land_area as  $land_areas)
                                <option value="{{$land_areas->land_area}}" >{{$land_areas->land_area}}</option>

                            @endforeach
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

    </div>

  </div>

</section>



    <input type="hidden" name="type" id="type" value="{{$type}}">

    <!-- Our Project Start -->



    <section class="portfolio-section cmn_bg">



        <div class="container">

            <div class="row">

            <div class="col-md-12">

                <div class="services-section-title text-center">

                    <h3>{{$design}}</h3>

                </div> 

            </div>

        </div>





            <div class="row zoom-gallery new_resoruce" >

                <!-- <div id="new_resoruce"> -->

                @foreach($project_data as $key=>$project)

        



             



                <div class="col-md-4 @foreach($project->categories as  $cat)cate_{{ $cat->id }}@endforeach">

                    <div class="property-conent-box">

                      <img src="{!! SM::sm_get_the_src($project->image, 350, 350) !!}" class="img-fluid">

                      <div class="overlay-details">

                        

                        <h3 class="property-title" ><a href="{{url('/flat-for-sale/'.$project->slug)}}" style="color: #222!important;">{{$project->title}}</a></h3>

                        <p>{{$design }}</p>

                        <div class="property-details">

                          <table class="table table-bordered">

                            <tbody>

                              <tr>

                                <th>Area</th>

                                <th>Beds</th>

                                <th>Baths</th>

                                <th>Kitchen</th>

                              </tr>

                              <tr>

                                <td>{{$project->land_area }}</td>

                                <td>{{$project->number_of_bed_room }}</td>

                                <td>{{$project->number_of_toilet }}</td>

                                <td>{{$project->number_of_kitchen }}</td>

                              </tr>

                            </tbody>

                          </table>

                        </div>

                      </div>

                    </div>

                  </div>



                @endforeach

                <!-- </div> -->









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