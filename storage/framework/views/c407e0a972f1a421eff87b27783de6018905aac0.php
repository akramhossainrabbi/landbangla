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
                            <?php echo Form::label('client_name','Project Name'); ?>

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

                            <?php echo Form::text('location', null,['class'=>'form-control', 'placeholder'=>'Enter Project Location']); ?>

                            <?php if($errors->has('location')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('location')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>

                      
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('project_type') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('project_type','Project Type'); ?>

                            <?php echo Form::text('project_type', null,['class'=>'form-control', 'placeholder'=>'Enter Project Type']); ?>

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
                        <div class="form-group<?php echo e($errors->has('number_of_unit') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('number_of_unit','Number of Units: '); ?>

                            <?php echo Form::text('number_of_unit', null,['class'=>'form-control','placeholder'=>'Number of Units: ']); ?>

                            <?php if($errors->has('number_of_unit')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('number_of_unit')); ?></strong>
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
                        <div class="form-group<?php echo e($errors->has('present_status') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('present_status','Present Status'); ?>

                            <?php echo Form::text('present_status', null,['class'=>'form-control', 'placeholder'=>'Present Status']); ?>

                            <?php if($errors->has('present_status')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('present_status')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('main_featurs') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('main_featurs','Main Features '); ?>

                            <?php echo Form::text('main_featurs', null,['class'=>'form-control','placeholder'=>'Main Features']); ?>

                            <?php if($errors->has('main_featurs')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('main_featurs')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('other1') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('other1','Others1 '); ?>

                            <?php echo Form::text('other1', null,['class'=>'form-control','placeholder'=>'Others']); ?>

                            <?php if($errors->has('other1')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('other1')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group<?php echo e($errors->has('other2') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('other2','Others2 '); ?>

                            <?php echo Form::text('other2', null,['class'=>'form-control','placeholder'=>'Others']); ?>

                            <?php if($errors->has('other2')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('other2')); ?></strong>
                              </span>
                            <?php endif; ?>
                        </div>
                    </div>

                 
                    <div class="col-sm-12">
                        <div class="form-group<?php echo e($errors->has('project_video') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('project_video','Project Video '); ?>

                            <?php echo Form::text('project_video', null,['class'=>'form-control','placeholder'=>'Enter Project Video']); ?>

                            <?php if($errors->has('project_video')): ?>
                                <span class="help-block">
                                     <strong><?php echo e($errors->first('project_video')); ?></strong>
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
                    <div class="col-sm-12">
                         <?php echo Form::label('servicce','Other Service'); ?>

                         
                         
                          <?php if(!empty($edit->other_service)): ?>   

                            <?php   $other_service=json_decode($edit->other_service);        ?>
                               <?php if(!empty($other_service)): ?>
                      
                                 <?php $__currentLoopData = $other_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tr"><div class="col-md-11"><input type="text" name="other_service[]" class="form-control" value="<?php echo e($service); ?>" placeholder="Enter Other Service"></div>
                                    <div  class="col-md-1"><button type="button" class="btn btn-danger remove"><i class="fa fa-times"></i></button></div></div>
                                   
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php endif; ?>
                               <?php endif; ?>
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
