<?php
    $sliders = \App\Model\Common\Slider::Published()->get();
?>
<?php if(isset($sliders) && count($sliders)>0): ?>
    <?php
    $slider_change_autoplay = (int)SM::smGetThemeOption("slider_change_autoplay", 4);
    $slider_change_autoplay *= 3000;
    ?>
    
    <!--  Slider_start  -->
    <div class="home-full semi-light-version">
        <div id="particles-js"></div>
        <div class='particle-network-animation'></div>
       
        <div class="slide_1 owl-carousel owl-theme">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="home_cun_slider_1 blur-up lazyload" >
                    <img src="<?php echo SM::sm_get_the_src($slider->image, 1903, 1051); ?>" alt="Slider_<?php echo e($key); ?>" class="bg-img">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php endif; ?>