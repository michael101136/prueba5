<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 1.4.3
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Home Version 4</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
 
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href=" {{ URL::asset('public/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css" />
        <link href=" {{ URL::asset('public/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css" />
        <link href=" {{ URL::asset('public/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href=" {{ URL::asset('public/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href=" {{ URL::asset('public/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css" />
        <link href=" {{ URL::asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="{{ URL::asset('public/assets/plugins/revo-slider/css/settings.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/assets/plugins/revo-slider/css/layers.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/assets/plugins/revo-slider/css/navigation.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="{{ URL::asset('public/assets/base/css/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/assets/base/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('public/assets/base/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="{{ URL::asset('public/assets/base/css/custom.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="c-layout-header-fixed c-layout-header-6-topbar">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-2 -->
        <!-- BEGIN: HEADER 2 -->
        @include('frondend.layouts.navbar')
        <!-- END: HEADER 2 -->
        <!-- END: LAYOUT/HEADERS/HEADER-2 -->
        <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
        @yield('content')

        
        <!-- END: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-7 -->
        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-7">

            <div class="c-postfooter c-bg-dark-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey">2019 &copy; URANOS GROUP
                                <!-- <span class="c-font-grey-3">All Rights Reserved.</span> -->
                            </p>
                        </div>
                        <div class="c-head">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="c-left">
                                    <div class="socicon">
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-font-dark-1 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-font-dark-1 c-theme-on-hover socicon-twitter tooltips" data-original-title="Twitter" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-font-dark-1 c-theme-on-hover socicon-youtube tooltips" data-original-title="Youtube" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-font-dark-1 c-theme-on-hover socicon-tumblr tooltips" data-original-title="Tumblr" data-container="body"></a>
                                    </div>
                                </div>
                            </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: LAYOUT/FOOTERS/FOOTER-7 -->
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
        <script src="{{ URL::asset('public/assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/jquery.easing.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/base/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="{{ URL::asset('public/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="{{ URL::asset('public/assets/base/js/components.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/base/js/app.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- BEGIN: PAGE SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                var slider = $('.c-layout-revo-slider .tp-banner');
                var cont = $('.c-layout-revo-slider .tp-banner-container');
                var api = slider.show().revolution(
                {
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    responsiveLevels: [2048, 1024, 778, 320],
                    gridwidth: [1240, 1024, 778, 320],
                    gridheight: [868, 768, 960, 720],
                    delay: 15000,
                    startwidth: 1170,
                    startheight: App.getViewPort().height,
                    navigationType: "hide",
                    navigationArrows: "solo",
                    touchenabled: "on",
                    navigation:
                    {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        bullets:
                        {
                            style: "round",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            hide_under: 0,
                            hide_over: 9999,
                            direction: "horizontal",
                            h_align: "right",
                            v_align: "bottom",
                            space: 5,
                            h_offset: 60,
                            v_offset: 60,
                        },
                    },
                    spinner: "spinner2",
                    fullScreenOffsetContainer: '.c-layout-header',
                    shadow: 0,
                    hideTimerBar: "on",
                    hideThumbsOnMobile: "on",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "on",
                    hideArrowsOnMobile: "on",
                    hideThumbsUnderResolution: 0
                });
            }); //ready
        </script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    </body>

</html>