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
        <header class="c-layout-header c-layout-header-6" data-minimize-offset="80">
            <div class="c-topbar">
                <div class="container">
                    <nav class="c-top-menu">
                        <ul class="c-links c-theme-ul">
                            <li>
                                <a href="#" class="c-font-uppercase c-font-bold">Help</a>
                            </li>
                            <li>
                                <a href="#" class="c-font-uppercase c-font-bold">Contact</a>
                            </li>
                            <li class="c-divider"></li>
                            <li>
                                <a href="#" class="c-font-uppercase c-font-bold c-font-dark">Support</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Sign In</a>
                            </li>
                        </ul>
                        <ul class="c-ext hide c-theme-ul">
                            <li class="c-lang dropdown c-last">
                                <a href="#">en</a>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li class="active">
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <a href="#">German</a>
                                    </li>
                                    <li>
                                        <a href="#">Espaniol</a>
                                    </li>
                                    <li>
                                        <a href="#">Portugise</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="c-search hide">
                                <!-- BEGIN: QUICK SEARCH -->
                                <form action="#">
                                    <input type="text" name="query" placeholder="search..." value="" class="form-control" autocomplete="off">
                                    <i class="fa fa-search"></i>
                                </form>
                                <!-- END: QUICK SEARCH -->
                            </li>
                        </ul>
                    </nav>
                    <div class="c-brand">
                        <a href="index.html" class="c-logo">
                            <img src="{{ asset('public/assets/base/img/layout/logos/logo-3.png') }}" alt="JANGO" class="c-desktop-logo">
                            <img src="{{ asset('public/assets/base/img/layout/logos/logo-1.png') }}" alt="JANGO" class="c-desktop-logo-inverse">
                            <img src="{{ asset('public/assets/base/img/layout/logos/logo-3.png') }}" alt="JANGO" class="c-mobile-logo"> </a>
                        <ul class="c-icons c-theme-ul">
                            <li>
                                <a href="#">
                                    <i class="icon-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                        <button class="c-topbar-toggler" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </button>
                        <button class="c-search-toggler" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <!-- END: BRAND -->
                        <!-- BEGIN: QUICK SEARCH -->
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <!-- END: QUICK SEARCH -->
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li class="c-active">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Home
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <div class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <h3>Home Samples</h3>
                                                    </li>
                                                    <li>
                                                        <a href="index.html">Home Version 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-2.html">Home Version 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-3.html">Home Version 3</a>
                                                    </li>
                                                    <li class="c-active">
                                                        <a href="home-4.html">Home Version 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-5.html">Home Version 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-6.html">Home Version 6</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-7.html">Home Version 7</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <h3>Home Samples</h3>
                                                    </li>
                                                    <li>
                                                        <a href="home-8.html">Home Version 8</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-9.html">Home Version 9</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-10.html">Home Version 10</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-11.html">Home Version 11</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-12.html">Home Version 12</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-13.html">Home Version 13</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-14.html">Home Version 14</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <h3>Onepage Samples</h3>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-1.html" target="_blank">Onepage Version 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-2.html" target="_blank">Onepage Version 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-3.html" target="_blank">Onepage Version 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-4.html" target="_blank">Onepage Version 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-5.html" target="_blank">Onepage Version 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-6.html" target="_blank">Onepage Version 6</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <h3>Onepage Samples</h3>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-7.html" target="_blank">Onepage Version 7</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-8.html" target="_blank">Onepage Version 8</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-9.html" target="_blank">Onepage Version 9</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-10.html" target="_blank">Onepage Version 10</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-11.html" target="_blank">Onepage Version 11</a>
                                                    </li>
                                                    <li>
                                                        <a href="onepage-12.html" target="_blank">Onepage Version 12</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Features
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Headers
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="home-header-1.html">Home Header v1</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-1-ext.html">Home Header v1 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-2.html">Home Header v2</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-2-ext.html">Home Header v2 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-3.html">Home Header v3</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-4.html">Home Header v4</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-4-ext.html">Home Header v4 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-5.html">Home Header v5</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-5-ext.html">Home Header v5 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-6.html">Home Header v6</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-6-ext.html">Home Header v6 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-7.html">Home Header v7</a>
                                                </li>
                                                <li>
                                                    <a href="home-header-8.html">Home Header v8</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-1.html">Inner Header v1</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-1-ext.html">Inner Header v1 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-2.html">Inner Header v2</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-2-ext.html">Inner Header v2 - Extended</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-3.html">Inner Header v3</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-4.html">Inner Header v4</a>
                                                </li>
                                                <li>
                                                    <a href="inner-header-5.html">Inner Header v5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Sidebar Menu
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="sidebar-menu-1.html">Sidebar Menu v1</a>
                                                </li>
                                                <li>
                                                    <a href="sidebar-menu-2.html">Sidebar Menu v2</a>
                                                </li>
                                                <li>
                                                    <a href="sidebar-menu-static.html">Expanded Static Sidebar Menu</a>
                                                </li>
                                                <li>
                                                    <a href="sidebar-menu-right.html">Right Sidebar Menu</a>
                                                </li>
                                                <li>
                                                    <a href="sidebar-menu-fluid.html">Sidebar Menu In Fluid Layout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Footers
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="footer-1.html#footer">Footer 1</a>
                                                </li>
                                                <li>
                                                    <a href="footer-2.html#footer">Footer 2</a>
                                                </li>
                                                <li>
                                                    <a href="footer-3.html#footer">Footer 3</a>
                                                </li>
                                                <li>
                                                    <a href="footer-4.html#footer">Footer 4</a>
                                                </li>
                                                <li>
                                                    <a href="footer-5.html#footer">Footer 5</a>
                                                </li>
                                                <li>
                                                    <a href="footer-6.html#footer">Footer 6</a>
                                                </li>
                                                <li>
                                                    <a href="footer-7.html#footer">Footer 7</a>
                                                </li>
                                                <li>
                                                    <a href="footer-8.html#footer">Footer 8</a>
                                                </li>
                                                <li>
                                                    <a href="footer-9.html#footer">Footer 9</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Breadcrumbs
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="breadcrumbs-default.html">Breadcrumbs - Default</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-subtitle.html">Breadcrumbs - Sub Title</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-1.html">Breadcrumbs - Bg Image V1</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-2.html">Breadcrumbs - Bg Image V2</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-3.html">Breadcrumbs - Bg Image V3</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-4.html">Breadcrumbs - Bg Image V4</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-5.html">Breadcrumbs - Bg Image V5</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-6.html">Breadcrumbs - Bg Image V6</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-7.html">Breadcrumbs - Bg Image V7</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-8.html">Breadcrumbs - Bg Image V8</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-9.html">Breadcrumbs - Bg Image V9</a>
                                                </li>
                                                <li>
                                                    <a href="breadcrumbs-bgimage-10.html">Breadcrumbs - Bg Image V10</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Cookies Notification Bar
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="component-cookies-1.html">Full Width - Top</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-2.html">Full Width - Bottom</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-3.html">Boxed - Dark Square</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-4.html">Boxed - Theme Color Rounded</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-5.html">Boxed - Aligned Top Left</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-6.html">Boxed - Aligned Top Right</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-7.html">Boxed - Aligned Bottom Left</a>
                                                </li>
                                                <li>
                                                    <a href="component-cookies-8.html">Boxed - Aligned Bottom Right</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="component-smooth-scroll.html">Smooth Scroll Links</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Mega Menu
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="megamenu-light.html">Mega Menu - Light</a>
                                                </li>
                                                <li>
                                                    <a href="megamenu-dark.html">Mega Menu - Dark</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="page-extended-portfolio.html">Multi Level Menu
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <ul class="dropdown-menu c-pull-right">
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">Example Sub Menu
                                                        <span class="c-arrow c-toggler"></span>
                                                    </a>
                                                    <ul class="dropdown-menu c-pull-left">
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#">Example Sub Menu
                                                                <span class="c-arrow c-toggler"></span>
                                                            </a>
                                                            <ul class="dropdown-menu c-pull-left">
                                                                <li>
                                                                    <a href="#">Example Link</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Example Link</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Example Link</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Example Link</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">Pages
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Page Samples 1</h3>
                                                </li>
                                                <li>
                                                    <a href="page-about-1.html">About Us 1</a>
                                                </li>
                                                <li>
                                                    <a href="page-about-2.html">About Us 2</a>
                                                </li>
                                                <li>
                                                    <a href="page-about-3.html">About Us 3</a>
                                                </li>
                                                <li>
                                                    <a href="page-about-4.html">About Us 4</a>
                                                </li>
                                                <li>
                                                    <a href="page-team.html">Meet The Team</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Page Samples 2</h3>
                                                </li>
                                                <li>
                                                    <a href="page-contact-1.html">Contact Us 1</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact-2.html">Contact Us 2</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact-3.html">Contact Us 3</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq.html">FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq-2.html">FAQ 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Gallery Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page-product-launch.html">Product Launch</a>
                                                </li>
                                                <li>
                                                    <a href="page-lightbox-gallery.html">Lightbox Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="page-fullwidth-gallery.html">Full Width Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="page-masonry-gallery.html">Masonry Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="page-index-gallery.html">Gallery Index</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Portfolio Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page-4col-portfolio.html">4 Columns Portfolio</a>
                                                </li>
                                                <li>
                                                    <a href="page-2col-portfolio.html">2 Columns Portfolio</a>
                                                </li>
                                                <li>
                                                    <a href="page-masonry-portfolio.html">Masonry Portfolio</a>
                                                </li>
                                                <li>
                                                    <a href="page-extended-portfolio.html">Extended Portfolio</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Blog Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page-blog-list.html">Blog List View</a>
                                                </li>
                                                <li>
                                                    <a href="page-blog-grid.html">Blog Grid View</a>
                                                </li>
                                                <li>
                                                    <a href="page-blog-post.html">Blog Single Post</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">Shop
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Shop Pages 1</h3>
                                                </li>
                                                <li>
                                                    <a href="shop-home-1.html" target="_blank">Shop Home 1</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-2.html">Shop Home 2</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-3.html">Shop Home 3</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-4.html">Shop Home 4</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-5.html">Shop Home 5</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-6.html">Shop Home 6</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-7.html">Shop Home 7</a>
                                                </li>
                                                <li>
                                                    <a href="shop-home-8.html" target="_blank">Shop Home 8</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Shop Pages 2</h3>
                                                </li>
                                                <li>
                                                    <a href="shop-product-list.html">Product List</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-grid.html">Product Grid</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-search.html">Product Search</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-details.html">Product Details 1</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-details-2.html">Product Details 2</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-details-3.html">Product Details 3</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-details-4.html">Product Details 4</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-comparison.html">Product Comparison</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Shop Pages 3</h3>
                                                </li>
                                                <li>
                                                    <a href="shop-product-wishlist.html">Wish List</a>
                                                </li>
                                                <li>
                                                    <a href="shop-customer-account.html">Customer Login/Register</a>
                                                </li>
                                                <li>
                                                    <a href="shop-customer-dashboard.html">Customer Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="shop-order-history.html">Order History</a>
                                                </li>
                                                <li>
                                                    <a href="shop-order-history-2.html">Order History 2</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart.html">Shopping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart-empty.html">Shopping Cart(empty)</a>
                                                </li>
                                                <li>
                                                    <a href="shop-checkout.html">Checkout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Shop Pages 4</h3>
                                                </li>
                                                <li>
                                                    <a href="shop-checkout-complete.html">Checkout Complete</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-1.html">Shop Components 1</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-2.html">Shop Components 2</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-3.html">Shop Components 3</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-4.html">Shop Components 4</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-5.html">Shop Components 5</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-6.html">Shop Components 6</a>
                                                </li>
                                                <li>
                                                    <a href="component-shop-7.html">Shop Components 7</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">Components
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                                    <div class="dropdown-menu c-menu-type-mega c-visible-desktop c-pull-right c-menu-type-fullwidth" style="min-width: auto">
                                        <ul class="nav nav-tabs c-theme-nav">
                                            <li class="active">
                                                <a href="#megamenu_jango_components" data-toggle="tab">Jango Components</a>
                                            </li>
                                            <li>
                                                <a href="#megamenu_base_components" data-toggle="tab">Base Components</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="megamenu_jango_components">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabbed-contents.html">Tabbed Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-1.html">Parallax Blocks 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-2.html">Parallax Blocks 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-3.html">Parallax Blocks 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features.html">Feature Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-2.html">Feature Blocks 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-3.html">Feature Blocks 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-latest-works.html">Latest Works</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-latest-items.html">Latest Items</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tiles.html">Tiles</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-services.html">Services</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blog-elements.html">Blog Elements</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-counters.html">Counters</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-bars.html">Engage Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope.html">Isotope Gallery</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope-grid.html">Isotope Grid</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials.html">Testimonials</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials-2.html">Testimonials 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-clients.html">Clients</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-abouts.html">About Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-dividers.html">Dividers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-steps.html">Steps</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-app-showcase.html">App Showcase</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-team.html">Team</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-headings.html">Headings</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-accordions.html">Accordion Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="megamenu_base_components">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-lists.html">Lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blockquotes.html">Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-navs.html">Navigations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-simpleline-icons.html">Simple Line Icons</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-custom-icons.html">Custom Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-social-icons.html">Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-media-embeds.html">Media Embeds</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-labels-badges.html">Labels & Badges</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-colors.html">UI Colors</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-buttons.html">Buttons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-form-controls.html">Form Controls</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tables.html">Tables</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-modals.html">Modals</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabs.html">Tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-paginations.html">Paginations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-panels.html">Panels</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars.html">Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-alerts.html">Alerts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                                    <!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
                                    <ul class="dropdown-menu c-menu-type-mega c-visible-mobile">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Jango Components
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabbed-contents.html">Tabbed Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-1.html">Parallax Blocks 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-2.html">Parallax Blocks 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-3.html">Parallax Blocks 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features.html">Feature Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-2.html">Feature Blocks 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-3.html">Feature Blocks 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-latest-works.html">Latest Works</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-latest-items.html">Latest Items</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tiles.html">Tiles</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-services.html">Services</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blog-elements.html">Blog Elements</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-counters.html">Counters</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-bars.html">Engage Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope.html">Isotope Gallery</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope-grid.html">Isotope Grid</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials.html">Testimonials</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials-2.html">Testimonials 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-clients.html">Clients</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-abouts.html">About Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-dividers.html">Dividers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-steps.html">Steps</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-app-showcase.html">App Showcase</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-team.html">Team</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-headings.html">Headings</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-accordions.html">Accordion Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Base Components
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-lists.html">Lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blockquotes.html">Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-navs.html">Navigations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-simpleline-icons.html">Simple Line Icons</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-custom-icons.html">Custom Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-social-icons.html">Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-media-embeds.html">Media Embeds</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-labels-badges.html">Labels & Badges</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-colors.html">UI Colors</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-buttons.html">Buttons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-form-controls.html">Form Controls</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tables.html">Tables</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-modals.html">Modals</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabs.html">Tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-paginations.html">Paginations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-panels.html">Panels</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars.html">Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-alerts.html">Alerts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
                                </li>
                                <li class="c-search-toggler-wrapper">
                                    <a href="#" class="c-btn-icon c-search-toggler">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li class="c-cart-toggler-wrapper">
                                    <a href="#" class="c-btn-icon c-cart-toggler">
                                        <i class="icon-handbag c-cart-icon"></i>
                                        <span class="c-cart-number c-theme-bg">2</span>
                                    </a>
                                </li>
                                <li class="c-quick-sidebar-toggler-wrapper">
                                    <a href="#" class="c-quick-sidebar-toggler">
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                    <!-- BEGIN: CART MENU -->
                    <div class="c-cart-menu">
                        <div class="c-cart-menu-title">
                            <p class="c-cart-menu-float-l c-font-sbold">2 item(s)</p>
                            <p class="c-cart-menu-float-r c-theme-font c-font-sbold">$79.00</p>
                        </div>
                        <ul class="c-cart-menu-items">
                            <li>
                                <div class="c-cart-menu-close">
                                    <a href="#" class="c-theme-link">×</a>
                                </div>
                                <img src="{{ asset('public/assets/base/img/content/shop2/24.jpg')}}" />
                                <div class="c-cart-menu-content">
                                    <p>1 x
                                        <span class="c-item-price c-theme-font">$30</span>
                                    </p>
                                    <a href="shop-product-details-2.html" class="c-item-name c-font-sbold">Winter Coat</a>
                                </div>
                            </li>
                            <li>
                                <div class="c-cart-menu-close">
                                    <a href="#" class="c-theme-link">×</a>
                                </div>
                                <img src="{{ asset('public/assets/base/img/content/shop2/12.jpg')}}" />
                                <div class="c-cart-menu-content">
                                    <p>1 x
                                        <span class="c-item-price c-theme-font">$30</span>
                                    </p>
                                    <a href="shop-product-details.html" class="c-item-name c-font-sbold">Sports Wear</a>
                                </div>
                            </li>
                        </ul>
                        <div class="c-cart-menu-footer">
                            <a href="shop-cart.html" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
                            <a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
                        </div>
                    </div>
                    <!-- END: CART MENU -->
                    <!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>
        <!-- END: HEADER 2 -->
        <!-- END: LAYOUT/HEADERS/HEADER-2 -->
        <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                        <p>To recover your password please fill in your email address</p>
                        <form>
                            <div class="form-group">
                                <label for="forget-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
        <div class="modal fade c-content-login-form" id="signup-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                        <p>Please fill in below form to create an account with us</p>
                        <form>
                            <div class="form-group">
                                <label for="signup-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <label for="signup-username" class="hide">Username</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="Username"> </div>
                            <div class="form-group">
                                <label for="signup-fullname" class="hide">Fullname</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Fullname"> </div>
                            <div class="form-group">
                                <label for="signup-country" class="hide">Country</label>
                                <select class="form-control input-lg c-square" id="signup-country">
                                    <option value="1">Country</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/SIGNUP-FORM -->
        <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
        <div class="modal fade c-content-login-form" id="login-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                        <p>Let's make today a great day!</p>
                        <form>
                            <div class="form-group">
                                <label for="login-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <label for="login-password" class="hide">Password</label>
                                <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password"> </div>
                            <div class="form-group">
                                <div class="c-checkbox">
                                    <input type="checkbox" id="login-rememberme" class="c-check">
                                    <label for="login-rememberme" class="c-font-thin c-font-17">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Remember Me </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                                <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                            </div>
                            <div class="clearfix">
                                <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                                    <span>or signup with</span>
                                </div>
                                <ul class="c-content-list-adjusted">
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                            <i class="fa fa-twitter"></i> Twitter </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                            <i class="fa fa-facebook"></i> Facebook </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-google">
                                            <i class="fa fa-google"></i> Google </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/LOGIN-FORM -->
        <!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        <nav class="c-layout-quick-sidebar">
            <div class="c-header">
                <button type="button" class="c-link c-close">
                    <i class="icon-login"></i>
                </button>
            </div>
            <div class="c-content">
                <div class="c-section">
                    <h3>Theme Colors</h3>
                    <div class="c-settings">
                        <span class="c-color c-default c-active" data-color="default"></span>
                        <span class="c-color c-green1" data-color="green1"></span>
                        <span class="c-color c-green2" data-color="green2"></span>
                        <span class="c-color c-green3" data-color="green3"></span>
                        <span class="c-color c-yellow1" data-color="yellow1"></span>
                        <span class="c-color c-yellow2" data-color="yellow2"></span>
                        <span class="c-color c-yellow3" data-color="yellow3"></span>
                        <span class="c-color c-red1" data-color="red1"></span>
                        <span class="c-color c-red2" data-color="red2"></span>
                        <span class="c-color c-red3" data-color="red3"></span>
                        <span class="c-color c-purple1" data-color="purple1"></span>
                        <span class="c-color c-purple2" data-color="purple2"></span>
                        <span class="c-color c-purple3" data-color="purple3"></span>
                        <span class="c-color c-blue1" data-color="blue1"></span>
                        <span class="c-color c-blue2" data-color="blue2"></span>
                        <span class="c-color c-blue3" data-color="blue3"></span>
                        <span class="c-color c-brown1" data-color="brown1"></span>
                        <span class="c-color c-brown2" data-color="brown2"></span>
                        <span class="c-color c-brown3" data-color="brown3"></span>
                        <span class="c-color c-dark1" data-color="dark1"></span>
                        <span class="c-color c-dark2" data-color="dark2"></span>
                        <span class="c-color c-dark3" data-color="dark3"></span>
                    </div>
                </div>
                <div class="c-section">
                    <h3>Header Type</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed" />
                        <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid" /> </div>
                </div>
                <div class="c-section">
                    <h3>Header Mode</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed" />
                        <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static" /> </div>
                </div>
                <div class="c-section">
                    <h3>Mega Menu Style</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark" />
                        <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
                </div>
                <div class="c-section">
                    <h3>Font Style</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default" />
                        <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
                </div>
                <div class="c-section">
                    <h3>Reading Style</h3>
                    <div class="c-settings">
                        <a href="http://www.themehats.com/themes/jango/" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active">LTR</a>
                        <a href="http://www.themehats.com/themes/jango/rtl/" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase ">RTL</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-9 -->
            <section class="c-layout-revo-slider c-layout-revo-slider-9" dir="ltr">
                <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile">
                    <div class="tp-banner rev_slider" data-version="5.0">
                        <ul>
                            <!--BEGIN: SLIDE #1 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="{{ asset('public/assets/base/img/content/backgrounds/bg-60.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!--BEGIN: MAIN TITLE -->
                                <div class="tp-caption customin customout tp-resizeme" data-x="center" data-y="center" data-hoffset="[-300,-300, -100, -100]" data-voffset="-120" data-speed="500" data-start="1000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;:s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <h3 class="c-main-title c-font-44 c-font-bold c-font-uppercase c-font-white "> Incredibly
                                        <br> robust for any concept </h3>
                                </div>
                                <!--END -->
                                <!--BEGIN: SUB TITLE -->
                                <div class="tp-caption customin customout tp-resizeme" data-x="center" data-y="center" data-hoffset="[-370,-370, -170, -170]" data-voffset="15" data-speed="500" data-start="1500" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <p class="c-sub-title c-font-24 c-font-white "> Lorem ipsum dolor sit amet, consectet
                                        <br> Dolor sit amet, consectetuer nibh
                                        <br> elit sed diam nonummy
                                        <br> </p>
                                </div>
                                <!--END -->
                                <!--BEGIN: ACTION BUTTON -->
                                <div class="tp-caption randomrotateout tp-resizeme" data-x="center" data-y="center" data-hoffset="[-470,-470, -270, -270]" data-voffset="130" data-speed="500" data-start="2000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;">
                                    <a href="#" class="c-action-btn btn btn-xlg c-btn-square c-btn-bold c-btn-border-2x c-btn-white c-btn-uppercase">Explore</a>
                                </div>
                                <!--END -->
                            </li>
                            <!--END -->
                            <!--BEGIN: SLIDE #2 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="{{ asset('public/assets/base/img/content/backgrounds/bg-61.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!--BEGIN: MAIN TITLE -->
                                <div class="tp-caption customin customout tp-resizeme" data-x="center" data-y="center" data-hoffset="[-350,-350, -150, -150]" data-voffset="-180" data-speed="500" data-start="1000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <h3 class="c-main-title c-font-44 c-font-bold c-font-uppercase c-font-white "> HTML Theme Of 2015 </h3>
                                </div>
                                <!--END -->
                                <!--BEGIN: SUB TITLE -->
                                <div class="tp-caption customin customout tp-resizeme" data-x="center" data-y="center" data-hoffset="[-345,-345, -145, -145]" data-voffset="-70" data-speed="500" data-start="1500" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <p class="c-sub-title c-font-24 c-font-white "> Lorem ipsum dolor sit amet, consectetuer et
                                        <br> Dolor sit amet, consectetuer et nibh
                                        <br> elit sed diam nonummy et nibh
                                        <br> </p>
                                </div>
                                <!--END -->
                                <!--BEGIN: ACTION BUTTON -->
                                <div class="tp-caption randomrotateout tp-resizeme" data-x="center" data-y="center" data-hoffset="[-470,-470, -270, -270]" data-voffset="45" data-speed="500" data-start="2000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;">
                                    <a href="#" class="c-action-btn btn btn-xlg c-btn-square c-btn-bold c-btn-border-2x c-theme-btn c-btn-uppercase">Explore</a>
                                </div>
                                <!--END -->
                            </li>
                            <!--END -->
                        </ul>
                    </div>
                </div>
            </section>
            <!-- END: LAYOUT/SLIDERS/REVO-SLIDER-9 -->
            <!-- BEGIN: CONTENT/BARS/BAR-3 -->
            <div class="c-content-box c-size-md c-bg-dark">
                <div class="container">
                    <div class="c-content-bar-3">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">DEDICATED SUPPORT</h3>
                                    <p class="c-font-uppercase">JANGO comes with top-of-the-line support teams to ensure that we provide the best experience for our customers</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-2">
                                <div class="c-content-v-center" style="height: 90px;">
                                    <div class="c-wrapper">
                                        <div class="c-body">
                                            <button type="button" class="btn btn-md c-btn-square c-btn-border-2x c-theme-btn c-btn-uppercase c-btn-bold">Get Support</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/BARS/BAR-3 -->
            <!-- BEGIN: CONTENT/PRODUCTS/PRODUCT-1 -->
            <div class="c-content-box c-size-md c-bg-white c-no-bottom-padding">
                <div class="container">
                    <div class="c-content-product-1 c-opt-1">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Learn More About JANGO</h3>
                            <div class="c-line-center"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 wow animate slideInUp">
                                <div class="c-media">
                                    <img src="{{ asset('public/assets/base/img/content/misc/jango-intro-3.png')}}" alt="" /> </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-body">
                                    <ul class="c-row">
                                        <li class="wow animate fadeInUp">
                                            <h4>Code Quality</h4>
                                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
                                        </li>
                                        <li class="wow animate fadeInUp">
                                            <h4>Angular JS Support</h4>
                                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
                                        </li>
                                    </ul>
                                    <ul class="c-row">
                                        <li class="wow animate fadeInUp">
                                            <h4>Every Growing Unique Layouts</h4>
                                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
                                        </li>
                                        <li class="wow animate fadeInUp">
                                            <h4>Fully Mobile Optimized</h4>
                                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-md c-btn-border-2x c-btn-square c-btn-regular c-btn-uppercase c-btn-bold c-margin-b-100">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/PRODUCTS/PRODUCT-1 -->
            <!-- BEGIN: CONTENT/BARS/BAR-2 -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <div class="c-content-bar-2 c-opt-1">
                        <div class="row" data-auto-height="true">
                            <div class="col-md-6">
                                <!-- Begin: Title 1 component -->
                                <div class="c-content-title-1" data-height="height">
                                    <h3 class="c-font-uppercase c-font-bold">Meet JANGO. The Theme Of 2015</h3>
                                    <p class="c-font-uppercase c-font-sbold"> The Ever growing Multipurpose Theme. Ultra responsive, Clean Coding with top quality modern design trends. </p>
                                    <a href="http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314" class="btn btn-md c-btn-border-2x c-btn-square c-theme-btn c-btn-uppercase c-btn-bold">Purchase</a>
                                </div>
                                <!-- End-->
                            </div>
                            <div class="col-md-6">
                                <div class="c-content-v-center c-bg-red" data-height="height">
                                    <div class="c-wrapper">
                                        <div class="c-body">
                                            <h3 class="c-font-white c-font-bold">Just another option from an endless list of choices within JANGO.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/BARS/BAR-2 -->
            <!-- BEGIN: CONTENT/PORTFOLIO/LATEST-WORKS-2 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Latest Portfolio</h3>
                        <div class="c-line-center c-theme-bg"></div>
                        <p class="c-center c-font-uppercase">Showcasing your latest designs, sketches, photographs or videos.</p>
                    </div>
                    <div class="cbp-panel">
                        <!-- SEE: components.js:ContentCubeLatestPortfolio -->
                        <div class="c-content-latest-works cbp cbp-l-grid-masonry-projects">
                            <div class="cbp-item graphic wow animate fadeInLeft">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset('public/assets/base/img/content/stock/08-long_grey.jpg')}}" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="c-masonry-border"></div>
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="ajax/projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                                <a href="assets/base/img/content/stock/08_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Dashboard<br>by Paul Flavius Nechita">zoom</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item web-design logos wow animate fadeInLeft" data-wow-delay="0.2s">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset('public/assets/base/img/content/stock/07_grey.jpg')}}" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="c-masonry-border"></div>
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="ajax/projects/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                                <a href="assets/base/img/content/stock/07_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="World Clock Widget<br>by Paul Flavius Nechita">zoom</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item graphic logos wow animate fadeInLeft" data-wow-delay="0.4s">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset('public/assets/base/img/content/stock/09_grey.jpg')}}" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="c-masonry-border"></div>
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="ajax/projects/project3.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                                <a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item identity web-design wow animate fadeInLeft" data-wow-delay="0.6s">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset('public/assets/base/img/content/stock/014_grey.jpg')}}" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="c-masonry-border"></div>
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="ajax/projects/project4.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                                <a href="assets/base/img/content/stock/014_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="WhereTO App<br>by Tiberiu Neamu">zoom</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item web-design graphic wow animate fadeInLeft">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset('public/assets/base/img/content/stock/34_grey.jpg')}}" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="c-masonry-border"></div>
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="ajax/projects/project5.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                                <a href="assets/base/img/content/stock/34_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Events and  More<br>by Tiberiu Neamu">zoom</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item identity web-design wow animate fadeInLeft" data-wow-delay="0.2s">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset('public/assets/base/img/content/stock/53_grey.jpg')}}" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="c-masonry-border"></div>
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="ajax/projects/project6.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                                <a href="assets/base/img/content/stock/53_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Ski * Buddy<br>by Tiberiu Neamu">zoom</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item graphic logos wow animate fadeInLeft" data-wow-delay="0.4s">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset('public/assets/base/img/content/stock/39_grey.jpg')}}" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="c-masonry-border"></div>
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="ajax/projects/project7.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase">explore</a>
                                                <a href="assets/base/img/content/stock/39_grey.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">zoom</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/PORTFOLIO/LATEST-WORKS-2 -->
            <!-- BEGIN: CONTENT/BLOG/RECENT-POSTS -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <!-- Begin: Testimonals 1 component -->
                    <div class="c-content-blog-post-card-1-slider" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Recent Blog Posts</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <!-- End-->
                        <!-- Begin: Owlcarousel -->
                        <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="3" data-slide-speed="8000" data-rtl="false">
                            <div class="item">
                                <div class="c-content-blog-post-card-1 c-option-2">
                                    <div class="c-media c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="{{ asset('public/assets/base/img/content/stock2/06.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <img class="c-overlay-object img-responsive" src="{{ asset('public/assets/base/img/content/stock2/06.jpg')}}" alt=""> </div>
                                    <div class="c-body">
                                        <div class="c-title c-font-uppercase c-font-bold">
                                            <a href="#">Web & Mobile Development</a>
                                        </div>
                                        <div class="c-author"> By
                                            <a href="#">
                                                <span class="c-font-uppercase">Nick Strong</span>
                                            </a> on
                                            <span class="c-font-uppercase">20 May 2015, 10:30AM</span>
                                        </div>
                                        <div class="c-panel">
                                            <ul class="c-tags c-theme-ul-bg">
                                                <li>ux</li>
                                                <li>web</li>
                                                <li>events</li>
                                            </ul>
                                            <div class="c-comments">
                                                <a href="#">
                                                    <i class="icon-speech"></i> 30 comments</a>
                                            </div>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, dolor adipisicing elit. Nulla nemo ad sapiente officia amet. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-blog-post-card-1 c-option-2">
                                    <div class="c-media c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="{{ asset('public/assets/base/img/content/stock2/01.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <img class="c-overlay-object img-responsive" src="{{ asset('public/assets/base/img/content/stock2/01.jpg')}}" alt=""> </div>
                                    <div class="c-body">
                                        <div class="c-title c-font-uppercase c-font-bold">
                                            <a href="#">Modern Design Trends</a>
                                        </div>
                                        <div class="c-author"> By
                                            <a href="#">
                                                <span class="c-font-uppercase">Penny Baker</span>
                                            </a> on
                                            <span class="c-font-uppercase">25 May 2015, 10:30AM</span>
                                        </div>
                                        <div class="c-panel">
                                            <ul class="c-tags c-theme-ul-bg">
                                                <li>design</li>
                                                <li>art</li>
                                                <li>trends</li>
                                            </ul>
                                            <div class="c-comments">
                                                <a href="#">
                                                    <i class="icon-speech"></i> 18 comments</a>
                                            </div>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, dolor adipisicing elit. Nulla nemo ad sapiente officia amet. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-blog-post-card-1 c-option-2">
                                    <div class="c-media c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="{{ asset('public/assets/base/img/content/stock2/03.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <img class="c-overlay-object img-responsive" src="{{ asset('public/assets/base/img/content/stock2/03.jpg')}}" alt=""> </div>
                                    <div class="c-body">
                                        <div class="c-title c-font-uppercase c-font-bold">
                                            <a href="#">Beatifully crafted Code</a>
                                        </div>
                                        <div class="c-author"> By
                                            <a href="#">
                                                <span class="c-font-uppercase">Jim Raynor</span>
                                            </a> on
                                            <span class="c-font-uppercase">26 May 2015, 10:30AM</span>
                                        </div>
                                        <div class="c-panel">
                                            <ul class="c-tags c-theme-ul-bg">
                                                <li>HTML</li>
                                                <li>CSS</li>
                                                <li>web</li>
                                            </ul>
                                            <div class="c-comments">
                                                <a href="#">
                                                    <i class="icon-speech"></i> 34 comments</a>
                                            </div>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, dolor adipisicing elit. Nulla nemo ad sapiente officia amet. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-blog-post-card-1 c-option-2">
                                    <div class="c-media c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="{{ asset('public/assets/base/img/content/stock2/04.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <img class="c-overlay-object img-responsive" src="{{ asset('public/assets/base/img/content/stock2/04.jpg')}}" alt=""> </div>
                                    <div class="c-body">
                                        <div class="c-title c-font-uppercase c-font-bold">
                                            <a href="#">Optimized for all Devices</a>
                                        </div>
                                        <div class="c-author"> By
                                            <a href="#">
                                                <span class="c-font-uppercase">Sara Conner</span>
                                            </a> on
                                            <span class="c-font-uppercase">29 May 2015, 10:30AM</span>
                                        </div>
                                        <div class="c-panel">
                                            <ul class="c-tags c-theme-ul-bg">
                                                <li>Mobile</li>
                                                <li>web</li>
                                                <li>ux</li>
                                            </ul>
                                            <div class="c-comments">
                                                <a href="#">
                                                    <i class="icon-speech"></i> 25 comments</a>
                                            </div>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, dolor adipisicing elit. Nulla nemo ad sapiente officia amet. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-blog-post-card-1 c-option-2">
                                    <div class="c-media c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="#">
                                                    <i class="icon-link"></i>
                                                </a>
                                                <a href="{{ asset('public/assets/base/img/content/stock2/05.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <img class="c-overlay-object img-responsive" src="{{ asset('public/assets/base/img/content/stock2/05.jpg')}}" alt=""> </div>
                                    <div class="c-body">
                                        <div class="c-title c-font-uppercase c-font-bold">
                                            <a href="#">Compatible to all browsers</a>
                                        </div>
                                        <div class="c-author"> By
                                            <a href="#">
                                                <span class="c-font-uppercase">Mary Jane</span>
                                            </a> on
                                            <span class="c-font-uppercase">30 May 2015, 10:30AM</span>
                                        </div>
                                        <div class="c-panel">
                                            <ul class="c-tags c-theme-ul-bg">
                                                <li>chrome</li>
                                                <li>firefox</li>
                                                <li>ie</li>
                                            </ul>
                                            <div class="c-comments">
                                                <a href="#">
                                                    <i class="icon-speech"></i> 28 comments</a>
                                            </div>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, dolor adipisicing elit. Nulla nemo ad sapiente officia amet. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End-->
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- END: CONTENT/BLOG/RECENT-POSTS -->
            <!-- BEGIN: CONTENT/MISC/ABOUT-3 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 wow animate fadeInLeft">
                            <!-- Begin: Title 1 component -->
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold">About us</h3>
                                <div class="c-line-left c-theme-bg"></div>
                            </div>
                            <!-- End-->
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed elit diam nonummy nibh euismod tincidunt ut laoreet dolore magna aluam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci et tation diam nisl ut aliquip
                                ex ea commodo consequat euismod tincidunt ut laoreet dolore magna aluam. </p>
                            <ul class="c-content-list-1 c-theme  c-font-uppercase">
                                <li>Perfect Design interface</li>
                                <li>Huge Community</li>
                                <li>Support for Everyone</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed elit diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                        </div>
                        <div class="col-sm-6 wow animate fadeInRight">
                            <div class="c-content-tab-4 c-opt-3" role="tabpanel">
                                <ul class="nav nav-justified" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab-31" role="tab" data-toggle="tab" class="c-font-16">POPULAR</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-32" role="tab" data-toggle="tab" class="c-font-16">COMMENTS</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-33" role="tab" data-toggle="tab" class="c-font-16">RECENT</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab-31">
                                        <ul class="c-tab-items">
                                            <li class="row">
                                                <div class="col-sm-4 col-xs-5">
                                                    <div class="c-photo">
                                                        <img class="img-responsive" width="150" height="100" src="{{ asset('public/assets/base/img/content/stock/6.jpg')}}" alt="" /> </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-7">
                                                    <h4 class="c-font-20">Lorem Ipsum</h4>
                                                    <p class="c-font-16">Lorem ipsum dolor sit amet et consectetuer elit sed nonummy nib esuismod tincid unt laoreet dolore sit amet conectetuer ed dolore sit amet esmod conctetuer adipiscing lorem ipsum eit noummy tinid laoreet
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-sm-4 col-xs-5">
                                                    <div class="c-photo">
                                                        <img class="img-responsive" width="150" height="100" src="{{ asset('public/assets/base/img/content/stock/5.jpg')}}" alt="" /> </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-7">
                                                    <h4 class="c-font-20">Dolore Sit Amet</h4>
                                                    <p class="c-font-16">Lorem ipsum dolor sit amet et consectetuer elit sed nonummy nib esuismod tincid unt laoreet dolore sit amet conectetuer ed dolore sit amet esmod conctetuer adipiscing lorem ipsum eit noummy tinid laoreet
                                                        dolore.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-32">
                                        <ul class="c-tab-items">
                                            <li class="row">
                                                <div class="col-sm-4 col-xs-5">
                                                    <div class="c-photo">
                                                        <img class="img-responsive" width="150" height="100" src="{{ asset('public/assets/base/img/content/stock/013.jpg')}}" alt="" /> </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-7">
                                                    <h4 class="c-font-20">Lorem Ipsum</h4>
                                                    <p class="c-font-16">Lorem ipsum dolor sit amet et consectetuer elit sed nonummy nib esuismod tincid unt laoreet dolore sit amet conectetuer ed dolore sit amet esmod conctetuer adipiscing lorem ipsum eit noummy tinid laoreet
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-sm-4 col-xs-5">
                                                    <div class="c-photo">
                                                        <img class="img-responsive" width="150" height="100" src="{{ asset('public/assets/base/img/content/stock/18.jpg')}}" alt="" /> </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-7">
                                                    <h4 class="c-font-20">Dolore Sit Amet</h4>
                                                    <p class="c-font-16">Lorem ipsum dolor sit amet et consectetuer elit sed nonummy nib esuismod tincid unt laoreet dolore sit amet conectetuer ed dolore sit amet esmod conctetuer adipiscing lorem ipsum eit noummy tinid laoreet
                                                        dolore.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-33">
                                        <ul class="c-tab-items">
                                            <li class="row">
                                                <div class="col-sm-4 col-xs-5">
                                                    <div class="c-photo">
                                                        <img class="img-responsive" width="150" height="100" src="{{ asset('public/assets/base/img/content/stock/76.jpg')}}" alt="" /> </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-7">
                                                    <h4 class="c-font-20">Lorem Ipsum</h4>
                                                    <p class="c-font-16">Lorem ipsum dolor sit amet et consectetuer elit sed nonummy nib esuismod tincid unt laoreet dolore sit amet conectetuer ed dolore sit amet esmod conctetuer adipiscing lorem ipsum eit noummy tinid laoreet
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-sm-4 col-xs-5">
                                                    <div class="c-photo">
                                                        <img class="img-responsive" width="150" height="100" src="{{ asset('public/assets/base/img/content/stock/75.jpg')}}" alt="" /> </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-7">
                                                    <h4 class="c-font-20">Dolore Sit Amet</h4>
                                                    <p class="c-font-16">Lorem ipsum dolor sit amet et consectetuer elit sed nonummy nib esuismod tincid unt laoreet dolore sit amet conectetuer ed dolore sit amet esmod conctetuer adipiscing lorem ipsum eit noummy tinid laoreet
                                                        dolore.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/MISC/ABOUT-3 -->
            <!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-6-5 -->
            <div class="c-content-box c-size-lg c-bg-parallax" style="background-image: url(public/assets/base/img/content/backgrounds/bg-48.jpg)">
                <div class="container">
                    <div class="c-content-blog-post-card-1-slider" data-slider="owl">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-white c-font-bold">Customer Reviews</h3>
                            <div class="c-line-center c-theme-bg"></div>
                            <p class="c-center c-font-white">Lorem ipsum dolor sit amet et consectetuer adipiscing elit</p>
                        </div>
                        <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="3" data-slide-speed="8000" data-rtl="false">
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-dark-transparent">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="{{ asset('public/assets/base/img/content/avatars/team1.jpg')}}" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Mark Doe</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, Walmart</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-dark-transparent">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="{{ asset('public/assets/base/img/content/avatars/team6.jpg')}}" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Ashley Benson</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-dark-transparent">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="{{ asset('public/assets/base/img/content/avatars/team4.jpg')}}" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Nina Kunis</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, ERA Tech</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-dark-transparent">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="{{ asset('public/assets/base/img/content/avatars/team8.jpg')}}" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Ashley Benson</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-dark-transparent">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="{{ asset('public/assets/base/img/content/avatars/team7.jpg')}}" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Mark Jeep</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, ERA Tech</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-6-5 -->
            <!-- BEGIN: CONTENT/SLIDERS/TEAM-2 -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <!-- Begin: Testimonals 1 component -->
                    <div class="c-content-person-1-slider" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1 wow animated fadeIn">
                            <h3 class="c-center c-font-uppercase c-font-bold">Meet The Team</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <!-- End-->
                        <!-- Begin: Owlcarousel -->
                        <div class="owl-carousel owl-theme c-theme c-owl-nav-center wow animated fadeInUp" data-items="3" data-slide-speed="8000" data-rtl="false">
                            <div class="c-content-person-1 c-option-2">
                                <div class="c-caption c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="{{ asset('public/assets/base/img/content/team/team10.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('public/assets/base/img/content/team/team10.jpg')}}" class="img-responsive c-overlay-object" alt=""> </div>
                                <div class="c-body">
                                    <div class="c-head">
                                        <div class="c-name c-font-uppercase c-font-bold">Randy JANGO</div>
                                        <ul class="c-socials c-theme-ul">
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-position"> CEO, JANGO Inc. </div>
                                    <p> Lorem ipsum dolor sit amet, dolor nemo amet elit. Nulla nemo consequuntur. </p>
                                </div>
                            </div>
                            <div class="c-content-person-1 c-option-2">
                                <div class="c-caption c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="{{ asset('public/assets/base/img/content/team/team9.jpg')}} " data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('public/assets/base/img/content/team/team9.jpg')}} " class="img-responsive c-overlay-object" alt=""> </div>
                                <div class="c-body">
                                    <div class="c-head">
                                        <div class="c-name c-font-uppercase c-font-bold">Mary Jane</div>
                                        <ul class="c-socials c-theme-ul">
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-position"> CFO, JANGO Inc. </div>
                                    <p> Lorem ipsum dolor sit amet, dolor nemo amet elit. Nulla nemo consequuntur. </p>
                                </div>
                            </div>
                            <div class="c-content-person-1 c-option-2">
                                <div class="c-caption c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="{{ asset('public/assets/base/img/content/team/team7.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('public/assets/base/img/content/team/team7.jpg')}}" class="img-responsive c-overlay-object" alt=""> </div>
                                <div class="c-body">
                                    <div class="c-head">
                                        <div class="c-name c-font-uppercase c-font-bold">Beard Mcbeardson</div>
                                        <ul class="c-socials c-theme-ul">
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-position"> CTO, JANGO Inc. </div>
                                    <p> Lorem ipsum dolor sit amet, dolor nemo amet elit. Nulla nemo consequuntur. </p>
                                </div>
                            </div>
                            <div class="c-content-person-1 c-option-2">
                                <div class="c-caption c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="{{ asset('public/assets/base/img/content/team/team11.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('public/assets/base/img/content/team/team11.jpg')}}" class="img-responsive c-overlay-object" alt=""> </div>
                                <div class="c-body">
                                    <div class="c-head">
                                        <div class="c-name c-font-uppercase c-font-bold">Sara Conner</div>
                                        <ul class="c-socials c-theme-ul">
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-position"> Director, JANGO Inc. </div>
                                    <p> Lorem ipsum dolor sit amet, dolor nemo amet elit. Nulla nemo consequuntur. </p>
                                </div>
                            </div>
                            <div class="c-content-person-1 c-option-2">
                                <div class="c-caption c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="#">
                                                <i class="icon-link"></i>
                                            </a>
                                            <a href="{{ asset('public/assets/base/img/content/team/team12.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('public/assets/base/img/content/team/team12.jpg')}}" class="img-responsive c-overlay-object" alt=""> </div>
                                <div class="c-body">
                                    <div class="c-head">
                                        <div class="c-name c-font-uppercase c-font-bold">Jim Book</div>
                                        <ul class="c-socials c-theme-ul">
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-position"> Director, JANGO Inc. </div>
                                    <p> Lorem ipsum dolor sit amet, dolor nemo amet elit. Nulla nemo consequuntur. </p>
                                </div>
                            </div>
                        </div>
                        <!-- End-->
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- END: CONTENT/SLIDERS/TEAM-2 -->
            <!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <!-- Begin: Testimonals 1 component -->
                    <div class="c-content-client-logos-slider-1" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Our Clients</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <!-- End-->
                        <!-- Begin: Owlcarousel -->
                        <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="5" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="1" data-auto-play="false" data-rtl="false" data-slide-speed="5000"
                        data-auto-play-hover-pause="true">
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo1.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo2.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo3.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo4.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo5.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo6.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo7.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo8.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo9.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo10.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/assets/base/img/content/client-logos/logo11.jpg')}}" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- End-->
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-1 -->
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-7 -->
        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-7">
            <div class="container">
                <div class="c-prefooter">
                    <div class="c-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <ul class="c-links c-theme-ul">
                                    <li>
                                        <a href="#">About Jango</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Delivery</a>
                                    </li>
                                    <li>
                                        <a href="#">Promotions</a>
                                    </li>
                                    <li>
                                        <a href="#">News</a>
                                    </li>
                                </ul>
                                <ul class="c-links c-theme-ul">
                                    <li>
                                        <a href="#">Blogs</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects</a>
                                    </li>
                                    <li>
                                        <a href="#">Clients</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Features</a>
                                    </li>
                                    <li>
                                        <a href="#">Stats</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Latest Tweets</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-twitter">
                                    <a class="twitter-timeline" href="https://twitter.com/themehats" data-theme="dark" data-widget-id="626329365547061249" data-tweet-limit="2" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @themehats...</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Contact Us</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-address c-font-16"> 25, Lorem Lis Street, Orange
                                    <br/> California, US
                                    <br/> Phone: 800 123 3456
                                    <br/> Fax: 800 123 3456
                                    <br/> Email:
                                    <a href="mailto:info@jango.com">
                                        <span class="c-theme-color">info@jango.com</span>
                                    </a>
                                    <br/> Skype:
                                    <a href="#">
                                        <span class="c-theme-color">jango</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="c-line"></div>
                    <div class="c-foot">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">About JAN
                                        <span class="c-theme-font">GO</span>
                                    </h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est alter buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est rusticus repressor? Lixa grandis clabulare est. Eposs tolerare, tanquam fatalis.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Subscribe to Newsletter</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-line-left hide"></div>
                                <form action="#">
                                    <div class="input-group input-group-lg c-square">
                                        <input type="text" class="c-input form-control c-square c-theme" placeholder="Your Email Here" />
                                        <span class="input-group-btn">
                                            <button class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16" type="button">Subscribe</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="c-line"></div>
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
                            <div class="col-md-6 col-sm-12">
                                <div class="c-right">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>
                                    <div class="c-icons">
                                        <a href="#" class="c-font-30 c-font-green-1 socicon-btn socicon-android tooltips" data-original-title="Android" data-container="body"></a>
                                        <a href="#" class="c-font-30 c-font-grey-3 socicon-btn socicon-apple tooltips" data-original-title="Apple" data-container="body"></a>
                                        <a href="#" class="c-font-30 c-font-blue-3 socicon-btn socicon-windows tooltips" data-original-title="Windows" data-container="body"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-postfooter c-bg-dark-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey">2015 &copy; JANGO
                                <span class="c-font-grey-3">All Rights Reserved.</span>
                            </p>
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