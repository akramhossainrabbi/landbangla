<!-- NEW WIDGET START -->
<article class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
{{--<style>--}}
{{--span.displayNone.remove {--}}
{{--display: block;--}}
{{--}--}}
{{--</style>--}}
<!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget" id="wid-add-gallery-main" data-widget-editbutton="false" data-widget-deletebutton="false">

        <header>
            <span class="widget-icon"> <i class="fa fa-building"></i> </span>
            <h2>{{ $f_name }} Gallery</h2>

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
                <div class="row">
                    <div class="col-sm-12">
                        @include("nptl-admin.common.common.title_n_slug", ['isEnabledSlug'=>true, 'table'=>'galleries'])
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('long_description') ? ' has-error' : '' }}">
                            {!! Form::label('long_description','Gallery Description')!!}
                            {!! Form::textarea('long_description', null,['class'=>'form-control ckeditor']) !!}
                            @if ($errors->has('long_description'))
                                <span class="help-block">
                        <strong>{{ $errors->first('long_description') }}</strong>
                     </span>
                            @endif
                        </div>
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
    <div class="jarviswidget" id="wid-id-gallery-publish" data-widget-editbutton="false"
         data-widget-deletebutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-save"></i> </span>
            <h2>Gallery Publish</h2>
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
                if (SM::is_admin() || isset($permission) && isset($permission['galleries']['gallery_status_update']) && $permission['galleries']['gallery_status_update'] == 1)
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
                        {{ $btn_name }} Gallery
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
<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden">
    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget" id="wid-id-add-gallery-category" data-widget-editbutton="false"
         data-widget-deletebutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-tags"></i> </span>
            <h2>Gallery Categories & Tags</h2>
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
                    {{ Form::label('categories', 'Gallery Categories', array('class' => 'requiredStar')) }}
                    <?php
                    if (isset($all_categories) && count($all_categories) > 0) {
                        foreach ($all_categories as $category) {
                            $cat_select_array[$category->id] = $category->title;
                            $return_val = SM::category_tree_for_select_option($category->id, 0);
                            $cat_select_array = SM::sm_multi_array_to_sangle_array($cat_select_array, $return_val);
                        }
                    } else {
                        $cat_select_array[0] = 'Select Category';
                    }
                    ?>

                    {!! Form::select('categories[]', $cat_select_array, null, ['class'=>'select2', 'multiple'=>'']) !!}
                    @if ($errors->has('categories'))
                        <span class="help-block dark-red">
                          <strong>{{ $errors->first('categories') }}</strong>
                       </span>
                    @endif
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
if (old('image_gallery')) {
    $image_gallery = old('image_gallery');
} elseif (isset($edit->image_gallery)) {
    $image_gallery = $edit->image_gallery;
} else {
    $image_gallery = '';
}

?>
{{--@include('nptl-admin.common.common.image_form',['header_name'=>'Gallery', 'image' => $image])--}}
<?php
$input_holder = 'image_gallery';
$img_holder = 'gallery_first_ph';?>
@include('nptl-admin.common.common.gallary_form',['header_name'=>'Gallery', 'image' => $image_gallery,'input_holder'=>$input_holder,'img_holder'=>$img_holder])
@include('nptl-admin.common.common.meta_info', ['header_name'=>'Gallery', 'width'=>'col-lg-8'])

