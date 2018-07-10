<?php Check_lang(); ?>

<div class="map" style="border-top: 2px solid #008cb8;">
    <div id="map" class="google-map"></div>
</div>


<div class="clear"></div>
<footer>
    <section id="buynow">
        <div class="outer">
            <div class="sizer">
                <div class="inner">
                    <p><span>{{la("dont")}}</span></p>

                    <a class="button" href="{!! url('/contact_us') !!}">{{la('contact_us')}}</a><br>

                    <a class="button" href="{!! url('/about_us') !!}" target="_blank">{{la('about_us')}}</a>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>

    <div class="clear"></div>
    <section id="footer" class="clearfix">
        <div class="outer">
            <div class="sizer">
                <div class="inner" data-km-ui-resize="500,800">
                    <div>
                        <h3>{{la('our_branches')}}</h3>
                        <ul>
                            <li><a href="#">{{la('holanda')}}</a></li>


                        </ul>
                    </div>
                    <div>
                        <h3>{{la('quick_links')}}</h3>
                        <ul>
                            <li><a href="{!! url('/')!!}">{{la('home')}}</a></li>
                            <li><a href="{!! url('/about_us') !!}">{{la('about_us')}}</a></li>
                            <li><a href="{!! url('/port_all') !!}">{{la('all_projects')}}</a></li>
                            <li><a href="{!! url('/our_blog') !!}">{{la('our_blog')}}</a></li>
                            <li><a href="{!! url('/contact_us')!!}">{{la('contact_us')}}</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>{{la('stay_updated')}}</h3>
                        <ul>
                            <li><a href="{!! url('/contact_us')!!}">{{la('contact_us')}}</a></li>

                            <li><a href="#">{{la('follow_fb')}}</a></li>
                            <li><a href="#">{{la('follow_tw')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="line" style="width: 100%; height: 2px; background-color: #008cb8;"></div>

    <section id="cellar">
        <div class="outer">
            <div class="sizer">
                <div class="inner">
                    <div>&copy; Copyright {{ date('Y') }}  <a><img src="{{asset('assets/img/'.la('logo').'.png')}}" class="logofooter" /></a></div>
                </div>
            </div>
        </div>
    </section>
</footer>

</div>
</div>



<div class="rightemail">
    <a class="pop1 small" data-bpopup='{"transition":"slideDown","speed":850,"easing":"easeOutBack"}'>
        <div class="insiderightemail">
            <i class="fa fa-envelope"></i>
        </div>

    </a>
</div>
<div id="popup">



    <span class="button b-close"><span>X</span></span>
    <ul>
        @foreach($errors->all() as $error)

            <li>{{$error}}</li>
        @endforeach

    </ul>

    {!! Form::open(['url' => 'index','method'=>'POST', 'action'=>'ContactMessageController@store']) !!}

    <div class="form-group">

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control','id'=>"name"]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control','id'=>"email"]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('message', 'Message:') !!}
        {!! Form::textarea('message', null, ['class'=>'form-control','rows'=>'6' ,'id'=>"message"]) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Contact Us', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
</div>
<script>

    var image = '{{asset('')}}assets/img/maps-icon.png';
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjc-t_YgDcd-GsHk4vmWB-mRI3axlOV5g"></script>

<script src="{{asset('assets/js/map.js')}}"></script>
<script src="{{asset('assets/layerslider/js/km-ui.js')}}"></script>
<script src="{{asset('assets/layerslider/js/script.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type='text/javascript'></script>
<script type='text/javascript'>var LS_Meta = { "v": "6.5.7" };</script>


<script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script>
<script data-cfasync="false" type="text/javascript">/*<![CDATA[*/lsjQuery(document).ready(function () { if (typeof lsjQuery.fn.layerSlider == "undefined") { if (window._layerSlider && window._layerSlider.showNotice) { window._layerSlider.showNotice('layerslider_50', 'jquery'); } } else { lsjQuery("#layerslider_50").layerSlider({ sliderVersion: '6.5.0', type: 'fullsize', autoStart: false, globalBGColor: '#000000', globalBGAttachment: 'fixed', navPrevNext: false, hoverPrevNext: false, navStartStop: false, showCircleTimer: false, thumbnailNavigation: 'disabled', popupWidth: 640, popupHeight: 360, skinsPath: 'https://layerslider.kreaturamedia.com/wp-content/plugins/LayerSlider/static/layerslider/skins/', height: 1500 }); } });/*]]>*/</script>
<script src="{{asset('assets/layerslider/js/showme.kreaturamedia.jquery.js')}}"></script>

<script src="{{asset('assets/layerslider/js/greensock-text.js')}}"></script>
<script type='text/javascript'>var KM = { "isHome": "1", "page": "layerslider-responsive-wordpress-slider-plugin" };</script>

<script src="{{asset('assets/layerslider/js/wp-embed.min.js')}}"></script>

<script src="{{asset('assets/layerslider/js/layout.js')}}"></script>
<script src="{{asset('assets/js/jquery.mmenu.all.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/cherry.lazy-load.js')}}"></script>
<script src="{{asset('assets/js/device.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.mixitup.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>

<script src="{{asset('assets/js/Demo.js')}}"></script>

<script>
    new WOW().init();
</script>


<script>
    $(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
    });
</script>
<script>
    $('.testiowl').owlCarousel({
        loop: true,

        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 1,

            },
            1000: {
                items: 1,

            }
        }
    })
</script>
<script>
    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
</script>
<script>
    $(document).ready(function () {
        $('.mm-hasbtns').append('<img src="{{asset('assets/img/logo.png')}}" class="logomobile" />')
    });
</script>
<script>
    $(function () {
        $('#Container').mixItUp({
            load: {
                filter: '.category-1'
            }
        });
    });
</script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.count').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<script src="{{asset('assets/js/ui/widget.min.js')}}"></script>
<script src="{{asset('assets/js/ui/mouse.min.js')}}"></script>
<script src="{{asset('assets/js/ui/slider.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.bpopup.min.js')}}"></script>


<div class="clear"></div>

<script>
    jQuery(function ($) {
        $('.about .services-item-inner').hover(function () {
            $(this).find('img').attr('src', function (i, src) {
                return src.replace('.png', '2.png')
            })
        }, function () {
            $(this).find('img').attr('src', function (i, src) {
                return src.replace('2.png', '.png')
            })
        })
    })
</script>
<script>

    var timeoutId;
    $(".mainmodel20027").mouseleave(function () {

        $(this).hide();
    });
    $(".Modal20027").hover(function () {
            var $offset = $(this).offset();
            var posY = ($(window).scrollTop() + 130);
            var posX = $offset.left - ($(window).scrollLeft() + 75);
            $(".mainmode20027l").addClass("nothidden");
            $(".mainmodel20027").css({
                position: "absolute",
                top: posY,
                left: posX,
            })
            if (!timeoutId) {
                timeoutId = window.setTimeout(function () {
                    timeoutId = null; // EDIT: added this line
                    $(".mainmodel20027").show();

                }, 2500);
            }
        },
        function () {
            if (timeoutId) {
                window.clearTimeout(timeoutId);
                timeoutId = null;
            }

        }

    );




</script>




<script type='text/javascript'>


    var ajaxvps = {
        "ajaxurl": "", "vpscontent":
            [

                ["STANDARD", [

                    "2 CORES", "2 GB", "200 GB", "2000 GB", "FREE", "UP TO 2"

                ], "9.99", "#", "#", "\/m"]


                ,
                ["BASIC", [

                    "1 CORE", "1 GB", "100 GB", "1000 GB", "FREE", "UP TO 1"

                ], "9.99", "#", "#", "\/m"]


            ]
    };
</script>


<script>
    var $vpsPricing = $('#vpsPricing'),
        $vpsSlider = $('#vpsSlider');
    if ($vpsSlider.length) {
        var $vpsSliderHandle,
            $featureItemValue = $vpsPricing.find('.vps-item-feature-value'),
            $vpsTotalPriceChild = $vpsPricing.find('.vps-total-price span'),
            $vpsTotalPriceDur = $vpsPricing.find('.vps-total-price em'),
            $vpsOrderLink = $vpsPricing.find('a.order-link'),
            $vpsdeatilsLink = $vpsPricing.find('a.deatils-link'),
            vpsTotalPriceCur = $vpsTotalPriceChild.text();

        var changingVpsPlans = function (res, indx) {
            $vpsSliderHandle.text(res[indx][0]);

            for (var i = 0; i < res[indx][1].length; i++) {
                $featureItemValue.eq(i).text(res[indx][1][i]);
            }

            $vpsTotalPriceChild.text(vpsTotalPriceCur + res[indx][2]);
            $vpsOrderLink.attr('href', res[indx][3]);
            $vpsdeatilsLink.attr('href', res[indx][4]);
            $vpsTotalPriceDur.text(res[indx][5]);
        };

        var vpsSliderInit = function (res) {
            $vpsSlider.slider({
                animate: "fast",
                range: "min",
                min: 0,
                max: (res.length - 1),
                value: 0,
                step: 1,
                create: function (e) {
                    $vpsSliderHandle = $vpsSlider.find('.ui-slider-handle');
                    changingVpsPlans(res, '0');
                },
                slide: function (e, ui) {
                    changingVpsPlans(res, ui.value);
                }
            });
        };

        vpsSliderInit(ajaxvps.vpscontent);
    }
</script>


<div class="clear"></div>

</body>

<!-- Mirrored from cs-aspirations.com/AboutUS by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 12:02:13 GMT -->
</html>


