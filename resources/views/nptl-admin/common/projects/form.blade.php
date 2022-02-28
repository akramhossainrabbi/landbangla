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
                            {!! Form::text('client_name', null,['class'=>'form-control', 'placeholder'=>'Enter Project Location']) !!}
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
                            {!! Form::text('location', null,['class'=>'form-control', 'placeholder'=>'Enter Project Location']) !!}
                            @if ($errors->has('location'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('location') }}</strong>
                              </span>
                            @endif
                        </div>

                      
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('project_type') ? ' has-error' : '' }}">
                            {!! Form::label('project_type','Project Type')!!}
                            {!! Form::text('project_type', null,['class'=>'form-control', 'placeholder'=>'Enter Project Type']) !!}
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
                        <div class="form-group{{ $errors->has('number_of_unit') ? ' has-error' : '' }}">
                            {!! Form::label('number_of_unit','Number of Units: ')!!}
                            {!! Form::text('number_of_unit', null,['class'=>'form-control','placeholder'=>'Number of Units: ']) !!}
                            @if ($errors->has('number_of_unit'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('number_of_unit') }}</strong>
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
                        <div class="form-group{{ $errors->has('present_status') ? ' has-error' : '' }}">
                            {!! Form::label('present_status','Present Status')!!}
                            {!! Form::text('present_status', null,['class'=>'form-control', 'placeholder'=>'Present Status']) !!}
                            @if ($errors->has('present_status'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('present_status') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('main_featurs') ? ' has-error' : '' }}">
                            {!! Form::label('main_featurs','Main Features ')!!}
                            {!! Form::text('main_featurs', null,['class'=>'form-control','placeholder'=>'Main Features']) !!}
                            @if ($errors->has('main_featurs'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('main_featurs') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('other1') ? ' has-error' : '' }}">
                            {!! Form::label('other1','Others1 ')!!}
                            {!! Form::text('other1', null,['class'=>'form-control','placeholder'=>'Others']) !!}
                            @if ($errors->has('other1'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('other1') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group{{ $errors->has('other2') ? ' has-error' : '' }}">
                            {!! Form::label('other2','Others2 ')!!}
                            {!! Form::text('other2', null,['class'=>'form-control','placeholder'=>'Others']) !!}
                            @if ($errors->has('other2'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('other2') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>

                 
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('project_video') ? ' has-error' : '' }}">
                            {!! Form::label('project_video','Project Video ')!!}
                            {!! Form::text('project_video', null,['class'=>'form-control','placeholder'=>'Enter Project Video']) !!}
                            @if ($errors->has('project_video'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('project_video') }}</strong>
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
                    <div class="col-sm-12">
                         {!! Form::label('servicce','Other Service')!!}
                         
                         
                          @if(!empty($edit->other_service))   

                            <?php   $other_service=json_decode($edit->other_service);        ?>
                               @if(!empty($other_service))
                      
                                 @foreach($other_service as $key=>$service)
                                <div class="tr"><div class="col-md-11"><input type="text" name="other_service[]" class="form-control" value="{{$service}}" placeholder="Enter Other Service"></div>
                                    <div  class="col-md-1"><button type="button" class="btn btn-danger remove"><i class="fa fa-times"></i></button></div></div>
                                   
                                @endforeach
                             @endif
                               @endif
                            <div id="customersDataShow"></div>

                        	<a class="btn btn-info addRow"  style="margin-top: 10px"><i class="fa fa-plus"></i> Add More service</a>

                        	<script>
					        	 $('.addRow').on('click', function () {
							        addRow();
							        // $('select').select2();
							    });

							    //==============End Format Number============
							    function addRow() {
							        var tr = '<div class="tr"><div class="col-md-11"><input type="text" name="other_service[]" class="form-control" value="" placeholder="Enter Other Service"></div>'+
							        '<div  class="col-md-1"><button type="button" class="btn btn-danger remove"><i class="fa fa-times"></i></button></div></tr>';
							        $('#customersDataShow').append(tr);

							    };
							    //==============End Create Function By User============
							    $('body').on('click', '.remove', function () {
							        var l = $('#customersDataShow tr').length;
							        if (l == 1) {
							            alert('You can not Remove last one');
							        } else {
							            $(this).parent().parent().remove();
							            calculation();
							        }
							    });
        					</script>
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
