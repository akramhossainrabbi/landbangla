<!-- NEW WIDGET START -->



<article class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

    <!-- Widget ID (each widget will need unique ID)-->

    <div class="jarviswidget" id="wid-add-product-main" data-widget-editbutton="false" data-widget-deletebutton="false">



        <header>

            <span class="widget-icon"> <i class="fa fa-building"></i> </span>

            <h2>{{ $f_name }} Project</h2>



        </header>



        <!-- widget div-->

        {{--<div>--}}



            <!-- widget edit box -->

            <div class="jarviswidget-editbox">

                <!-- This area used as dropdown edit box -->

                <input class="form-control" type="text">

            </div>

            <!-- end widget edit box -->



            <!-- widget content -->

            <div class="widget-body padding-10">

                <div class="row design-row">

                    <div class="col-sm-6">

                        @include("nptl-admin.common.common.title_n_slug", ['isEnabledSlug'=>true, 'table'=>'projects'])



                    </div>



                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('client_name') ? ' has-error' : '' }}">

                            {!! Form::label('client_name','Project Name')!!}

                            {!! Form::text('client_name', null,['class'=>'form-control', 'placeholder'=>'']) !!}

                            @if ($errors->has('client_name'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('client_name') }}</strong>

                              </span>

                            @endif

                        </div>





                    </div>





                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

                            {!! Form::label('location','Project Location')!!}

                            <select  class="form-control " name="location" id="location">

                                    <option value="">Please Select</option>

                                    @foreach($all_districts as  $districts)

                                    

                                    <option value="{{$districts->id}}" >{{$districts->name}}</option>

                                    @endforeach

                                    

                            </select>

                            @if ($errors->has('location'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('location') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>







                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('location_1') ? ' has-error' : '' }}">

                            {!! Form::label('location_1','Project Area')!!}

                            

                            <select  class="form-control " name="location_1" id="location_1">

                                @if(!empty($all_upazilas))

                                    <option value="">Please Select</option>

                                    @foreach($all_upazilas as  $upazilas)

                                    

                                    <option value="{{$upazilas->id}}" >{{$upazilas->name}}</option>

                                    @endforeach

                                    @endif

                                <option value="">Please Select</option>

                            </select>

                            @if ($errors->has('location_1'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('location_1') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>



                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('project_type') ? ' has-error' : '' }}">

                            {!! Form::label('project_type','Project Type')!!}

                           

                            <select  class="form-control " name="project_type" id="project_type">

                                <option value="">Please Select</option>
                                
                                
                                @foreach($all_project as  $project)

                                    

                                    <option value="{{$project->slug}}" >{{$project->title}}</option>

                                @endforeach
                                

                            </select>

                            @if ($errors->has('project_type'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('project_type') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>



                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('land_area') ? ' has-error' : '' }}">

                            {!! Form::label('land_area','Land area')!!}

                            {!! Form::text('land_area', null,['class'=>'form-control','placeholder'=>'Enter Land area']) !!}

                            @if ($errors->has('land_area'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('land_area') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_floor') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_floor','Number Of Floor')!!}

                            {!! Form::text('number_of_floor', null,['class'=>'form-control','placeholder'=>'Enter Number Of Floor']) !!}

                            @if ($errors->has('number_of_floor'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_floor') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>



                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">

                            {!! Form::label('size','Flat Size:')!!}

                            {!! Form::text('size', null,['class'=>'form-control','placeholder'=>'Enter Flat Size']) !!}

                            @if ($errors->has('size'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('size') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>



                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_unit_per_floor') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_unit_per_floor','Number of Units: ')!!}

                            {!! Form::text('number_of_unit_per_floor', null,['class'=>'form-control','placeholder'=>'Number of Units Per floor: ']) !!}

                            @if ($errors->has('number_of_unit_per_floor'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_unit_per_floor') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>



                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('facing') ? ' has-error' : '' }}">

                            {!! Form::label('facing','Facing')!!}

                            {!! Form::text('facing', null,['class'=>'form-control', 'placeholder'=>'Facing']) !!}

                            @if ($errors->has('facing'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('facing') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('surrounding_facilities') ? ' has-error' : '' }}">

                            {!! Form::label('surrounding_facilities','Surrounding Facilities')!!}

                            {!! Form::text('surrounding_facilities', null,['class'=>'form-control', 'placeholder'=>'Surrounding Facilities']) !!}

                            @if ($errors->has('surrounding_facilities'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('surrounding_facilities') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>



                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_bed_room') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_bed_room','Number of bed room')!!}

                            {!! Form::text('number_of_bed_room', null,['class'=>'form-control','placeholder'=>'Number of bed room']) !!}

                            @if ($errors->has('number_of_bed_room'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_bed_room') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_dining') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_dining','Number of Dining room')!!}

                            {!! Form::text('number_of_dining', null,['class'=>'form-control','placeholder'=>'Number of Dining room']) !!}

                            @if ($errors->has('number_of_dining'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_dining') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_drowing') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_drowing','Number of Drawing Room  ')!!}

                            {!! Form::text('number_of_drowing', null,['class'=>'form-control','placeholder'=>'Number of Drawing Room ']) !!}

                            @if ($errors->has('number_of_drowing'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_drowing') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                   <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_kitchen') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_kitchen','Number of Kitchen')!!}

                            {!! Form::text('number_of_kitchen', null,['class'=>'form-control','placeholder'=>'Number of Kitchen']) !!}

                            @if ($errors->has('number_of_kitchen'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_kitchen') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_toilet') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_toilet','Number of Toilet ')!!}

                            {!! Form::text('number_of_toilet', null,['class'=>'form-control','placeholder'=>'Number of Toilet']) !!}

                            @if ($errors->has('number_of_toilet'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_toilet') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_veranda') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_veranda','Number of Veranda ')!!}

                            {!! Form::text('number_of_veranda', null,['class'=>'form-control','placeholder'=>'Number of Veranda']) !!}

                            @if ($errors->has('number_of_veranda'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_veranda') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('servant_room') ? ' has-error' : '' }}">

                            {!! Form::label('servant_room','Servant Room  ')!!}

                            {!! Form::text('servant_room', null,['class'=>'form-control','placeholder'=>'Servant Room ']) !!}

                            @if ($errors->has('servant_room'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('servant_room') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('servant_toilet') ? ' has-error' : '' }}">

                            {!! Form::label('servant_toilet','Servant Toilet ')!!}

                            {!! Form::text('servant_toilet', null,['class'=>'form-control','placeholder'=>'Servant Toilet']) !!}

                            @if ($errors->has('servant_toilet'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('servant_toilet') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>



                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('number_of_lift') ? ' has-error' : '' }}">

                            {!! Form::label('number_of_lift','Number of Lift ')!!}

                            {!! Form::text('number_of_lift', null,['class'=>'form-control','placeholder'=>'Number of Lift']) !!}

                            @if ($errors->has('number_of_lift'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('number_of_lift') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>





                    <div class="col-sm-6">

                        <div class="form-group{{ $errors->has('other_facility') ? ' has-error' : '' }}">

                            {!! Form::label('other_facility','Others Facility ')!!}

                            {!! Form::text('other_facility', null,['class'=>'form-control','placeholder'=>'Others Facility ']) !!}

                            @if ($errors->has('other_facility'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('other_facility') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>

                    <div class="col-sm-12">

                        <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">

                            {!! Form::label('video','Flat for sale video ')!!}

                            {!! Form::text('video', null,['class'=>'form-control','placeholder'=>'Flat for sale video']) !!}

                            @if ($errors->has('video'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('video') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>





                    <div class="col-sm-12">

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

                            {!! Form::label('description','Project Description')!!}

                            {!! Form::textarea('description', null,['class'=>'form-control ckeditor']) !!}

                            @if ($errors->has('description'))

                                <span class="help-block">

                                     <strong>{{ $errors->first('description') }}</strong>

                              </span>

                            @endif

                        </div>

                    </div>



                </div>

                <!-- end widget content -->

            </div>

            <!-- end widget div -->

        </div>

        <!-- end widget -->

        

</article>

<!-- WIDGET END -->



<!-- NEW WIDGET START -->

<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

    <!-- Widget ID (each widget will need unique ID)-->

    <div class="jarviswidget" id="wid-id-product-publish" data-widget-editbutton="false"

         data-widget-deletebutton="false">

        <header>

            <span class="widget-icon"> <i class="fa fa-save"></i> </span>

            <h2>Project Publish</h2>

        </header>

        <!-- widget div-->

        <div>

            <!-- widget edit box -->

            <div class="jarviswidget-editbox">

                <!-- This area used as dropdown edit box -->

                <input class="form-control" type="text">

            </div>

            <!-- end widget edit box -->

            <!-- widget content -->

            <div class="widget-body padding-10">

                <?php

                $permission = SM::current_user_permission_array();

                if (SM::is_admin() || isset($permission) && isset($permission['project']['project_status_update']) && $permission['project']['project_status_update'] == 1)

                {

                ?>

                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">

                    {!! Form::label('status', 'Publication Status') !!}

                    {!! Form::select('status',['1'=>'Publish','2'=>'Pending / Draft', '3'=>'Cancel'],null,['required'=>'','class'=>'form-control']) !!}

                    @if ($errors->has('status'))

                        <span class="help-block">

                     <strong>{{ $errors->first('status') }}</strong>

                  </span>

                    @endif

                </div>

                <?php

                }

                ?>

                <div class="form-group">

                    <button class="btn btn-success btn-block" type="submit">

                        <i class="fa fa-save"></i>

                        {{ $btn_name }} Project

                    </button>

                </div>



            </div>

            <!-- end widget content -->

        </div>

        <!-- end widget div -->

    </div>

    <!-- end widget -->

</article>

<!-- WIDGET END -->

<!-- NEW WIDGET START -->

<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

    <!-- Widget ID (each widget will need unique ID)-->

    <div class="jarviswidget" id="wid-id-add-product-category" data-widget-editbutton="false"

         data-widget-deletebutton="false">

        <header>

            <span class="widget-icon"> <i class="fa fa-tags"></i> </span>

            <h2>Project Categories & Tags</h2>

        </header>

        <!-- widget div-->

        <div>



            <!-- widget edit box -->

            <div class="jarviswidget-editbox">

                <!-- This area used as dropdown edit box -->

                <input class="form-control" type="text">

            </div>

            <!-- end widget edit box -->



            <!-- widget content -->

            <div class="widget-body padding-10">

                <div class="sm-form form-group {{ $errors->has('parent_id') ? ' has-error' : '' }}">

                    {{ Form::label('categories', 'Project Categories', array('class' => 'requiredStar')) }}

                    <?php

                    if (isset($all_categories) && count($all_categories) > 0) {

                        foreach ($all_categories as $category) {

                            $cat_select_array[$category->id] = $category->title;

                            $return_val = SM::category_tree_for_select_option($category->id, 0);

                            $cat_select_array = SM::sm_multi_array_to_sangle_array($cat_select_array, $return_val);

                        }

                    } else {

                        $cat_select_array[0] = 'Select Project';

                    }

                    ?>



                    {!! Form::select('categories[]', $cat_select_array, null, ['class'=>'select2', 'required', 'multiple'=>'']) !!}

                    @if ($errors->has('categories'))

                        <span class="help-block dark-red">

                          <strong>{{ $errors->first('categories') }}</strong>

                       </span>

                    @endif

                </div>

                <div class="form-group">

                    {!! Form::label('tags','Project tags')!!}

                    {!! Form::text('tags', null,['placeholder'=>'Type and enter your tag','class'=>'form-control', 'data-role'=>'tagsinput']) !!}

                </div>



            </div>

            <!-- end widget content -->



        </div>

        <!-- end widget div -->



    </div>

    <!-- end widget -->



</article>

<!-- WIDGET END -->



<?php





if (old('image')) {

    $image = old('image');

} elseif (isset($edit->image)) {

    $image = $edit->image;

} else {

    $image = '';

}





if (old('fav_icon')) {

    $fav_icon = old('fav_icon');

} elseif (isset($edit->fav_icon)) {

    $fav_icon = $edit->fav_icon;

} else {

    $fav_icon = '';

}





if (old('image_gallery')) {

    $image_gallery = old('image_gallery');

} elseif (isset($edit->image_gallery)) {

    $image_gallery = $edit->image_gallery;

} else {

    $image_gallery = '';

}



?>

@include('nptl-admin.common.common.image_form',['header_name'=>'Project', 'image' => $image])

@include('nptl-admin/common/common/image_form',['header_name'=>'Project fav icon', 'image'=>$fav_icon, 'input_holder'=>'fav_icon', 'img_holder'=>'second_ph'])



<?php



$input_holder = 'image_gallery';

$img_holder = 'gallery_first_ph';

?>

@include('nptl-admin.common.common.gallary_form',['header_name'=>'Project', 'image' => $image_gallery,'input_holder'=>$input_holder,'img_holder'=>$img_holder])











<?php

if (old('floor_image_gallery')) {

    $floor_image_gallery = old('floor_image_gallery');

} elseif (isset($edit->floor_image_gallery)) {

    $floor_image_gallery = $edit->floor_image_gallery;

} else {

    $floor_image_gallery = '';

}

$floor_input_holder = 'floor_image_gallery';

$floor_img_holder = 'floor_gallery_first_ph';

?>

@include('nptl-admin.common.common.gallary_form',['header_name'=>'Floor Plan', 'image' => $floor_image_gallery,'input_holder'=>$floor_input_holder,'img_holder'=>$floor_img_holder])

@include('nptl-admin.common.common.meta_info', ['header_name'=>'Project', 'width'=>'col-lg-12'])





<script type="text/javascript">



    





        $('#location').change(function (event) {



        var districtID = $(this).val();

        $("#location_1 option").remove();

            $.ajax({

                url: "{{ route('all_upazila') }}",

                type: 'get',

                dataType: "json",

                data: {id: districtID},

                success: function (data) {

                    $('#location_1').append($('<option>', {value:'', text:'Please Select'}));

                    $.each( data, function(k, v) {

                    $('#location_1').append($('<option>', {value:v.id, text:v.name}));

                    });

                   

                }, 

                

            });

       

    });





</script>



