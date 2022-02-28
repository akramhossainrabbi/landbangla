<!-- NEW WIDGET START -->

<article class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget" id="wid-add-product-main" data-widget-editbutton="false" data-widget-deletebutton="false">

        <header>
            <span class="widget-icon"> <i class="fa fa-building"></i> </span>
            <h2><?php echo e($f_name); ?> Project</h2>

        </header>

        <!-- widget div-->
        

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
                        <?php echo $__env->make("nptl-admin.common.common.title_n_slug", ['isEnabledSlug'=>true, 'table'=>'projects'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('client_name') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('client_name','Client Name'); ?>

                            <?php echo Form::text('client_name', null,['class'=>'form-control', 'placeholder'=>'Enter Project Location']); ?>

                            <?php if($errors->has('client_name')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('client_name')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>


                    </div>


                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('location') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('location','Project Location'); ?>

                            <select  class="form-control " name="location" id="location">
                                    <option value="">Please Select</option>
                                    <?php $__currentLoopData = $all_districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $districts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <option value="<?php echo e($districts->id); ?>" <?php echo e(( $districts->id == $edit->location) ? 'selected' : ''); ?>><?php echo e($districts->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                            </select>
                            <?php if($errors->has('location')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('location')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('location_1') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('location_1','Project Area'); ?>

                            
                            <select  class="form-control " name="location_1" id="location_1">
                                <?php if(!empty($all_upazilas)): ?>
                                    <option value="">Please Select</option>
                                    <?php $__currentLoopData = $all_upazilas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upazilas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <option value="<?php echo e($upazilas->id); ?>" <?php echo e(( $upazilas->id == $edit->location_1) ? 'selected' : ''); ?>><?php echo e($upazilas->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <option value="">Please Select</option>
                            </select>
                            <?php if($errors->has('location_1')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('location_1')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('project_type') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('project_type','Project Type'); ?>

                           
                            <select  class="form-control " name="project_type" id="project_type">
                                <option value="">Please Select</option>
                                
                                <?php $__currentLoopData = $all_project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <option value="<?php echo e($project->slug); ?>" <?php echo e(( $project->slug == $edit->project_type) ? 'selected' : ''); ?>><?php echo e($project->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                
                                
                            </select>
                            <?php if($errors->has('project_type')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('project_type')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('land_area') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('land_area','Land area'); ?>

                            <?php echo Form::text('land_area', null,['class'=>'form-control','placeholder'=>'Enter Land area']); ?>

                            <?php if($errors->has('land_area')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('land_area')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_floor') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_floor','Number Of Floor'); ?>

                            <?php echo Form::text('number_of_floor', null,['class'=>'form-control','placeholder'=>'Enter Number Of Floor']); ?>

                            <?php if($errors->has('number_of_floor')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_floor')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('size') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('size','Flat Size:'); ?>

                            <?php echo Form::text('size', null,['class'=>'form-control','placeholder'=>'Enter Flat Size']); ?>

                            <?php if($errors->has('size')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('size')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_unit_per_floor') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_unit_per_floor','Number of Units: '); ?>

                            <?php echo Form::text('number_of_unit_per_floor', null,['class'=>'form-control','placeholder'=>'Number of Units Per floor: ']); ?>

                            <?php if($errors->has('number_of_unit_per_floor')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_unit_per_floor')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('facing') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('facing','Facing'); ?>

                            <?php echo Form::text('facing', null,['class'=>'form-control', 'placeholder'=>'Facing']); ?>

                            <?php if($errors->has('facing')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('facing')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('surrounding_facilities') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('surrounding_facilities','Surrounding Facilities'); ?>

                            <?php echo Form::text('surrounding_facilities', null,['class'=>'form-control', 'placeholder'=>'Surrounding Facilities']); ?>

                            <?php if($errors->has('surrounding_facilities')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('surrounding_facilities')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_bed_room') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_bed_room','Number of bed room'); ?>

                            <?php echo Form::text('number_of_bed_room', null,['class'=>'form-control','placeholder'=>'Number of bed room']); ?>

                            <?php if($errors->has('number_of_bed_room')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_bed_room')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_dining') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_dining','Number of Dining room'); ?>

                            <?php echo Form::text('number_of_dining', null,['class'=>'form-control','placeholder'=>'Number of Dining room']); ?>

                            <?php if($errors->has('number_of_dining')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_dining')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_drowing') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_drowing','Number of Drawing Room  '); ?>

                            <?php echo Form::text('number_of_drowing', null,['class'=>'form-control','placeholder'=>'Number of Drawing Room ']); ?>

                            <?php if($errors->has('number_of_drowing')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_drowing')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                   <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_kitchen') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_kitchen','Number of Kitchen'); ?>

                            <?php echo Form::text('number_of_kitchen', null,['class'=>'form-control','placeholder'=>'Number of Kitchen']); ?>

                            <?php if($errors->has('number_of_kitchen')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_kitchen')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_toilet') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_toilet','Number of Toilet '); ?>

                            <?php echo Form::text('number_of_toilet', null,['class'=>'form-control','placeholder'=>'Number of Toilet']); ?>

                            <?php if($errors->has('number_of_toilet')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_toilet')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_veranda') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_veranda','Number of Veranda '); ?>

                            <?php echo Form::text('number_of_veranda', null,['class'=>'form-control','placeholder'=>'Number of Veranda']); ?>

                            <?php if($errors->has('number_of_veranda')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_veranda')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('servant_room') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('servant_room','Servant Room  '); ?>

                            <?php echo Form::text('servant_room', null,['class'=>'form-control','placeholder'=>'Servant Room ']); ?>

                            <?php if($errors->has('servant_room')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('servant_room')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('servant_toilet') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('servant_toilet','Servant Toilet '); ?>

                            <?php echo Form::text('servant_toilet', null,['class'=>'form-control','placeholder'=>'Servant Toilet']); ?>

                            <?php if($errors->has('servant_toilet')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('servant_toilet')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('number_of_lift') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_lift','Number of Lift '); ?>

                            <?php echo Form::text('number_of_lift', null,['class'=>'form-control','placeholder'=>'Number of Lift']); ?>

                            <?php if($errors->has('number_of_lift')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_lift')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('other_facility') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('other_facility','Others Facility '); ?>

                            <?php echo Form::text('other_facility', null,['class'=>'form-control','placeholder'=>'Others Facility ']); ?>

                            <?php if($errors->has('other_facility')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('other_facility')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group<?php echo e($errors->has('video') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('video','Flat for sale video '); ?>

                            <?php echo Form::text('video', null,['class'=>'form-control','placeholder'=>'Flat for sale video']); ?>

                            <?php if($errors->has('video')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('video')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('description','Project Description'); ?>

                            <?php echo Form::textarea('description', null,['class'=>'form-control ckeditor']); ?>

                            <?php if($errors->has('description')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('description')); ?></strong>
                              </span>
                            <?php endif; ?>
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
                <div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                    <?php echo Form::label('status', 'Publication Status'); ?>

                    <?php echo Form::select('status',['1'=>'Publish','2'=>'Pending / Draft', '3'=>'Cancel'],null,['required'=>'','class'=>'form-control']); ?>

                    <?php if($errors->has('status')): ?>
                        <span class="help-block">
                     <strong><?php echo e($errors->first('status')); ?></strong>
                  </span>
                    <?php endif; ?>
                </div>
                <?php
                }
                ?>
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">
                        <i class="fa fa-save"></i>
                        <?php echo e($btn_name); ?> Project
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
                <div class="sm-form form-group <?php echo e($errors->has('parent_id') ? ' has-error' : ''); ?>">
                    <?php echo e(Form::label('categories', 'Project Categories', array('class' => 'requiredStar'))); ?>

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

                    <?php echo Form::select('categories[]', $cat_select_array, null, ['class'=>'select2', 'required', 'multiple'=>'']); ?>

                    <?php if($errors->has('categories')): ?>
                        <span class="help-block dark-red">
                          <strong><?php echo e($errors->first('categories')); ?></strong>
                       </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('tags','Project tags'); ?>

                    <?php echo Form::text('tags', null,['placeholder'=>'Type and enter your tag','class'=>'form-control', 'data-role'=>'tagsinput']); ?>

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
<?php echo $__env->make('nptl-admin.common.common.image_form',['header_name'=>'Project', 'image' => $image], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('nptl-admin/common/common/image_form',['header_name'=>'Project fav icon', 'image'=>$fav_icon, 'input_holder'=>'fav_icon', 'img_holder'=>'second_ph'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php

$input_holder = 'image_gallery';
$img_holder = 'gallery_first_ph';
?>
<?php echo $__env->make('nptl-admin.common.common.gallary_form',['header_name'=>'Project', 'image' => $image_gallery,'input_holder'=>$input_holder,'img_holder'=>$img_holder], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





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
<?php echo $__env->make('nptl-admin.common.common.gallary_form',['header_name'=>'Floor Plan', 'image' => $floor_image_gallery,'input_holder'=>$floor_input_holder,'img_holder'=>$floor_img_holder], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('nptl-admin.common.common.meta_info', ['header_name'=>'Project', 'width'=>'col-lg-12'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script type="text/javascript">

    


        $('#location').change(function (event) {

        var districtID = $(this).val();
        $("#location_1 option").remove();
            $.ajax({
                url: "<?php echo e(route('all_upazila')); ?>",
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

