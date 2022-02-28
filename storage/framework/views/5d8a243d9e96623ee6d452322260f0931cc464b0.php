<?php $__env->startSection("title", "Projects"); ?>



<?php $__env->startSection('content'); ?>







    <?php



    $project_banner_title = SM::smGetThemeOption("flat_for_sale_banner_title");



    $project_banner_subtitle = SM::smGetThemeOption("flat_for_sale_banner_subtitle");



    $bannerImage = SM::smGetThemeOption("flat_for_sale_banner_image");



    ?>

<section class="common-page-breadcumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pagetitle-and-breadcumb">
          <h3><?php echo e($project_banner_title); ?></h3>
          <ul id="breadcrumb" class="breadcrumb">
            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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



                        <?php if(!empty($flatforsale->image)): ?>



                        <div class="item">



                            <div class="portfolio_sec" data-aos="zoom-in-up">



                                <img src="<?php echo SM::sm_get_the_src($flatforsale->image, 900, 600); ?>"



                                     class="img-fluid blur-up lazyload " alt="">



                            </div>



                        </div>



                        <?php endif; ?>



                        <?php $gallery=explode(',',$flatforsale->image_gallery);?>



                        <?php if(!empty($gallery)): ?>



                            <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                <div class="item">



                                    <div class="portfolio_sec" data-aos="zoom-in-up">



                                        <img src="<?php echo SM::sm_get_the_src($value,900,600); ?>" class="img-fluid blur-up lazyload " alt="<?php echo e($value); ?>">



                                    </div>



                                </div>



                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        <?php endif; ?>



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

                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Project details</h4>

                                        <table border="1" cellpadding="0" cellspacing="0" class="table table-bordered">

                                            <tbody>

                                            <tr>

                                                <td colspan="2" rowspan="2" style="height:39px; width:389px">

                                                    <p>Project Name: </p>

                                                    <?php echo e($flatforsale->client_name); ?>


                                                </td>

                                                <td colspan="2" style="height:39px; width:336px">

                                                    <p><strong>&nbsp;Features</strong></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td style="height:39px; width:196px">

                                                    <p>Number of Bed Room</p>

                                                </td>

                                                <td style="height:39px; width:141px">

                                                    <p><?php echo e($flatforsale->number_of_bed_room); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td style="height:39px; width:221px">

                                                    <p>Project Location:</p>

                                                </td>

                                                <td style="height:39px; width:168px">

                                                    <p><?php echo e($flatforsale->location); ?></p>

                                                </td>

                                                <td style="height:39px; width:196px">

                                                    <p>Number of Dining Room</p>

                                                </td>

                                                <td style="height:39px; width:141px">

                                                    <p><?php echo e($flatforsale->number_of_dining); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td style="height:39px; width:221px">

                                                    <p>Type of Project:</p>

                                                </td>

                                                <td style="height:39px; width:168px">

                                                    <p><?php echo e($flatforsale->project_type); ?></p>

                                                </td>

                                                <td style="height:39px; width:196px">

                                                    <p>Number of Drawing Room</p>

                                                </td>

                                                <td style="height:39px; width:141px">

                                                    <p><?php echo e($flatforsale->number_of_dining); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td style="height:37px; width:221px">

                                                    <p>Land Area:</p>

                                                </td>

                                                <td style="height:37px; width:168px">

                                                    <p><?php echo e($flatforsale->land_area); ?></p>

                                                </td>

                                                <td style="height:37px; width:196px">

                                                    <p>Number of Kitchen</p>

                                                </td>

                                                <td style="height:37px; width:141px">

                                                    <p><?php echo e($flatforsale->number_of_kitchen); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td style="height:37px; width:221px">

                                                    <p>Number of Floors:</p>

                                                </td>

                                                <td style="height:37px; width:168px">

                                                    <p><?php echo e($flatforsale->number_of_floor); ?></p>

                                                </td>

                                                <td style="height:37px; width:196px">

                                                    <p>Number of Toilet</p>

                                                </td>

                                                <td style="height:37px; width:141px">

                                                    <p><?php echo e($flatforsale->number_of_toilet); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td style="height:39px; width:221px">

                                                    <p>Flat Size:</p>

                                                </td>

                                                <td style="height:39px; width:168px">

                                                    <p><?php echo e($flatforsale->size); ?></p>

                                                </td>

                                                <td style="height:39px; width:196px">

                                                    <p>Number of Veranda</p>

                                                </td>

                                                <td style="height:39px; width:141px">

                                                    <p><?php echo e($flatforsale->number_of_veranda); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td style="height:39px; width:221px">

                                                    <p>Number of Unit Per Floor:</p>

                                                </td>

                                                <td style="height:39px; width:168px">

                                                    <p><?php echo e($flatforsale->number_of_unit_per_floor); ?></p>

                                                </td>

                                                <td style="height:39px; width:196px">

                                                    <p>Servant Room</p>

                                                </td>

                                                <td style="height:39px; width:141px">

                                                    <p><?php echo e($flatforsale->servant_room); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td style="height:39px; width:221px">

                                                    <p>Facing</p>

                                                </td>

                                                <td style="height:39px; width:168px">

                                                    <p><?php echo e($flatforsale->facing); ?></p>

                                                </td>

                                                <td style="height:39px; width:196px">

                                                    <p>Servant Toilet</p>

                                                </td>

                                                <td style="height:39px; width:141px">

                                                    <p><?php echo e($flatforsale->servant_toilet); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td colspan="2" rowspan="2" style="height:39px; width:389px">

                                                    <p>Surrounding Facilities:</p>

                                                    <p><?php echo e($flatforsale->surrounding_facilities); ?></p>

                                                </td>

                                                <td style="height:39px; width:196px">

                                                    <p>Number of Lift</p>

                                                </td>

                                                <td style="height:39px; width:141px">

                                                    <p><?php echo e($flatforsale->number_of_lift); ?></p>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td colspan="2" style="height:92px; width:336px">

                                                    <p>Others Facilities:&nbsp;</p>



                                                    <p><?php echo e($flatforsale->other_facility); ?></p>

                                                </td>

                                            </tr>

                                            </tbody>

                                        </table>









                                    </div>







                                    <div id="Location" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Project Location</h4>



                                        <iframe width="1110" height="583" id="gmap_canvas"



                                                src="https://maps.google.com/maps?q=<?php echo e($flatforsale->location); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed"



                                                frameborder="0" scrolling="no" marginheight="0"



                                                marginwidth="0"></iframe>



                                    </div>



                                    <div id="Plan" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Floor Plan</h4>



                                        <?php $floor=explode(',',$flatforsale->floor_image_gallery); ?>



                                        <div class="row">



                                            <?php if(!empty($floor)): ?>



                                                <?php $__currentLoopData = $floor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $floor_plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                                    <div class="col-md-3 plan-img">



                                                        <img src="<?php echo SM::sm_get_the_src($floor_plan, 350, 350); ?>"



                                                             class="img-thumbnail img-responsive">







                                                        <caption class="text-center"><?php echo e($project_banner_title); ?></caption>



                                                    </div>



                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                            <?php endif; ?>



                                        </div>



                                    </div>





                                    <div id="video" class="tab-pane fade">



                                        <h4 style="margin-top: 20px;margin-bottom: 20px;">Video</h4>



                                        <div class="video-panel">



                                            <iframe width="1110" height="500" src="<?php echo $flatforsale->video; ?>"



                                                    frameborder="0"



                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"



                                                    allowfullscreen></iframe>



                                        </div>



                                    </div>



                                </div>



                                <br>



                                <p><?php echo $flatforsale->description; ?></p>



                            </div>





            </div>



        </div>



    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>