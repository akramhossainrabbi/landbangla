
<!-- <script src='https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js'></script> -->

{!!Html::script('frontend/assets/particles/particles.js')!!}
{!!Html::script('frontend/assets/particles/js/app.js')!!}



<script type="text/javascript">
  $(window).on('load', function(){
  $(".loader").delay(2000).fadeOut("slow");
  $("#overlayer").delay(2000).fadeOut("slow");
});
    
</script>
<!-- stats.js -->

<script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>
<script type="text/javascript">
    
    $('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 8000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  

});
</script>



<!-- js file -->
<!-- {!!Html::script('frontend/assets/js/jquery-3.3.1.min.js')!!} -->


<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '#btn_career_apply', function () {
            var payment_id = $(this).val();
            $.ajax({
                url: '{{ route('get_career_apply')}}',
                method: 'GET',
                data: {payment_id: payment_id},
                success: function (data) {
                    $('#employee_detailR').html(data);
                    $('#myModal').modal('show');
                }
            });
        });
    });
</script>


<!-- zoom js file -->
{!!Html::script('frontend/assets/js/jquery.magnific-popup.js')!!}

<!-- popper js file -->
{!!Html::script('frontend/assets/js/popper.min.js')!!}

<!-- bootstrap js file -->
{!!Html::script('frontend/assets/js/bootstrap.min.js')!!}

<!-- Scroll js file-->
{!!Html::script('frontend/assets/js/footer-reveal.min.js')!!}

<!-- Owl carousel js file-->
{!!Html::script('frontend/assets/js/owl.carousel.min.js')!!}

<!-- Lazy Loader js file-->
{!!Html::script('frontend/assets/js/lazysizes.min.js')!!}

<!-- Counter Js File -->
{!!Html::script('frontend/assets/js/jquery.counterup.min.js')!!}
{!!Html::script('frontend/assets/js/jquery.waypoints.min.js')!!}

<!-- AOS js file-->
{!!Html::script('frontend/assets/js/aos.js')!!}

<!-- script js file -->
{!!Html::script('frontend/assets/js/script.js')!!}

<!-- footer js file -->
{!!Html::script('frontend/assets/js/footer.js')!!}


<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
<script>
    const srart_pos = 90.75;
    const item_count = 13;
    const s = 0.52 * Math.PI / 180; //Вычислим угол смещения

    var pos = [];
    var elem = document.getElementsByClassName('item');


    function allocationItems() {
        var i;
        var pp = elem[6].getElementsByTagName('a')[0].getAttribute('data-img');
        document.getElementById("pic").style.backgroundImage = "url('"+pp+"')";
        document.getElementById("pic").className = "img-box";
        pos[0] = srart_pos;
        for (i = 1; i < item_count; i++) {
            pos[i] = pos[i - 1] - 0.2;
            last_pos=pos[i];
        }
        for (i = 0; i < item_count+1; i++) {
            elem[i].style.left = 240 + 250 * Math.sin(pos[i]) + 'px';
            elem[i].style.top = 240 + 250 * Math.cos(pos[i]) + 'px';
        }
    }

    allocationItems();

    function animation(args, flag) { // некоторые аргументы определим на будущее
        var $ = {
            radius: 250, // радиус окружности
            speed: 10 // скорость/задержка ( в js это мс, например 10 мс = 100 кадров в секунду)
        };
        var e = elem;
        document.getElementById("pic").className = "hide";
        function animate(draw, duration, callback) {
            var start = performance.now();
            requestAnimationFrame(function animate(time) {
                // определить, сколько прошло времени с начала анимации
                var timePassed = time - start;
                console.log(time, start)
                // возможно небольшое превышение времени, в этом случае зафиксировать конец
                if (timePassed > duration)
                    timePassed = duration;
                // нарисовать состояние анимации в момент timePassed
                draw(timePassed);
                // если время анимации не закончилось - запланировать ещё кадр
                if (timePassed < duration) {
                    requestAnimationFrame(animate);
                } else callback();
            });
        }
        animate(function (timePassed) {
            var i;
            for (i = 0; i < item_count; i++) {
                e[i].style.left = 240 + $.radius * Math.sin(pos[i]) + 'px';
                e[i].style.top = 240 + $.radius * Math.cos(pos[i]) + 'px';
                if (flag) {
                    pos[i] += s;
                } else {
                    pos[i] -= s;
                }
            }   /* callback function */
        }, 400, function changeItems() {
            var list = document.getElementById('list');
            var ch = flag ? list.firstElementChild : list.lastElementChild
            ch.remove();
            if (flag) {
                list.appendChild(ch);
            } else {
                list.insertBefore(ch, list.firstChild);
            }
            allocationItems();
        });
    }




</script>

<!--Extra Facelity-->
<script>
    var nbOptions = 8;
    var angleStart = -360;

    // jquery rotate animation
    function rotate(li,d) {
        $({d:angleStart}).animate({d:d}, {
            step: function(now) {
                $(li)
                    .css({ transform: 'rotate('+now+'deg)' })
                    .find('label')
                    .css({ transform: 'rotate('+(-now)+'deg)' });
            }, duration: 0
        });
    }

    // show / hide the options
    function toggleOptions(s) {
        $(s).toggleClass('open');
        var li = $(s).find('li');
        var deg = $(s).hasClass('half') ? 180/(li.length-1) : 360/li.length;
        for(var i=0; i<li.length; i++) {
            var d = $(s).hasClass('half') ? (i*deg)-90 : i*deg;
            $(s).hasClass('open') ? rotate(li[i],d) : rotate(li[i],angleStart);
        }
    }

    $('.selector button').click(function(e) {
        toggleOptions($(this).parent());
    });

    setTimeout(function() { toggleOptions('.selector'); }, 100);//@ sourceURL=pen.js
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<script>
    $('#details_details').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var recipient = button.data('name');
        var designation = button.data('designation');
        var description = button.data('description');
        var image = button.data('image');
        var modal = $(this);
        modal.find('.modal-title').text('Details of ' + recipient);
        modal.find('.modal-body .image').attr('src',image);
        modal.find('.modal-body .title').text(recipient);
        modal.find('.modal-body .post').text(designation);
        modal.find('.modal-body .description').text(description);
    })
</script>
