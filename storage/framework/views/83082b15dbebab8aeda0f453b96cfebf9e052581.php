<?php $__env->startSection("title", "Projects"); ?>



<?php $__env->startSection('content'); ?>







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

          <h3><?php echo e($design); ?></h3>

          <ul id="breadcrumb" class="breadcrumb">

            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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

                <?php $__currentLoopData = $all_districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $districts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option value="<?php echo e($districts->id); ?>" <?php echo e(( $districts->id == $location) ? 'selected' : ''); ?> ><?php echo e($districts->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>

          </div>

        </div>

        <!-- --- -->

        <div class="col-md-4">

          <div class="form-group">

            <label class="control-label">Area</label>

            <select  class="form-control location_1 " name="location_1" id="location_1_filter">

              <option value="">Please Select</option>

                <?php $__currentLoopData = $all_upazilas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upazilas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option value="<?php echo e($upazilas->id); ?>" <?php echo e(( $upazilas->id == $location_1) ? 'selected' : ''); ?>><?php echo e($upazilas->name); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>

          </div>

        </div>
        
        <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Size</label>
                    <select  name="size" class="form-control size" id="size">
                        <optgroup>
                                <option selected="" value="">Area(SQFT)</option>
                            <?php $__currentLoopData = $all_size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_sizes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($all_sizes->size); ?>" ><?php echo e($all_sizes->size); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $number_of_bed_room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number_of_bed_rooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($number_of_bed_rooms->number_of_bed_room); ?>" ><?php echo e($number_of_bed_rooms->number_of_bed_room); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $number_of_toilet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number_of_toilets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($number_of_toilets->number_of_toilet); ?>" ><?php echo e($number_of_toilets->number_of_toilet); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $number_of_floor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number_of_floors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($number_of_floors->number_of_floor); ?>" ><?php echo e($number_of_floors->number_of_floor); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $land_area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land_areas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($land_areas->land_area); ?>" ><?php echo e($land_areas->land_area); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

    </div>

  </div>

</section>



    <input type="hidden" name="type" id="type" value="<?php echo e($type); ?>">

    <!-- Our Project Start -->



    <section class="portfolio-section cmn_bg">



        <div class="container">

            <div class="row">

            <div class="col-md-12">

                <div class="services-section-title text-center">

                    <h3><?php echo e($design); ?></h3>

                </div> 

            </div>

        </div>





            <div class="row zoom-gallery new_resoruce" >

                <!-- <div id="new_resoruce"> -->

                <?php $__currentLoopData = $project_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>





             



                <div class="col-md-4 <?php $__currentLoopData = $project->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>cate_<?php echo e($cat->id); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">

                    <div class="property-conent-box">

                      <img src="<?php echo SM::sm_get_the_src($project->image, 350, 350); ?>" class="img-fluid">

                      <div class="overlay-details">

                        

                        <h3 class="property-title" ><a href="<?php echo e(url('/flat-for-sale/'.$project->slug)); ?>" style="color: #222!important;"><?php echo e($project->title); ?></a></h3>

                        <p><?php echo e($design); ?></p>

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

                                <td><?php echo e($project->land_area); ?></td>

                                <td><?php echo e($project->number_of_bed_room); ?></td>

                                <td><?php echo e($project->number_of_toilet); ?></td>

                                <td><?php echo e($project->number_of_kitchen); ?></td>

                              </tr>

                            </tbody>

                          </table>

                        </div>

                      </div>

                    </div>

                  </div>



                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- </div> -->









            </div>



        </div>



        <!-- pagination Start -->



        



            



                



                



                



                



                



            



        



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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>