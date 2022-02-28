<?php
    $sliders = \App\Model\Common\Slider::Published()->get();
?>
@if(isset($sliders) && count($sliders)>0)
    <?php
    $slider_change_autoplay = (int)SM::smGetThemeOption("slider_change_autoplay", 4);
    $slider_change_autoplay *= 3000;
    ?>
    
    <!--  Slider_start  -->
    <div class="home-full semi-light-version">
        <div id="particles-js"></div>
        <div class='particle-network-animation'></div>
       {{-- <canvas id="canvas" class="canvas"></canvas>--}}
        <div class="slide_1 owl-carousel owl-theme">
            @foreach($sliders as $key=>$slider)
                <div class="home_cun_slider_1 blur-up lazyload" >
                    <img src="{!! SM::sm_get_the_src($slider->image, 1903, 1051) !!}" alt="Slider_{{$key}}" class="bg-img">
                </div>
            @endforeach
        </div>
    </div>

@endif