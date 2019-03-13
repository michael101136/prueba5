@extends('frondend.layouts.master')

@section('content')
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
                                    <a href="#" class="c-action-btn btn btn-xlg c-btn-square c-btn-bold c-btn-border-2x c-btn-white c-btn-uppercase">CONÓCENOS</a>
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
         


            <!-- END: CONTENT/PRODUCTS/PRODUCT-1 -->
            <!-- BEGIN: CONTENT/BARS/BAR-2 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 wow animate fadeInLeft">
                            <!-- Begin: Title 1 component -->
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold">NOSOTROS</h3>
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
            <!-- END: CONTENT/BARS/BAR-2 -->
            <!-- BEGIN: CONTENT/PORTFOLIO/LATEST-WORKS-2 -->
                    <!-- <div class="c-content-box c-size-md c-bg-white">
                        <div class="container">
                            <div class="c-content-title-1">
                                <h3 class="c-center c-font-uppercase c-font-bold">Latest Portfolio</h3>
                                <div class="c-line-center c-theme-bg"></div>
                                <p class="c-center c-font-uppercase">Showcasing your latest designs, sketches, photographs or videos.</p>
                            </div>
                            <div class="cbp-panel">
                     
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
                    </div> -->
            <!-- END: CONTENT/PORTFOLIO/LATEST-WORKS-2 -->
            <!-- BEGIN: CONTENT/BLOG/RECENT-POSTS -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <!-- Begin: Testimonals 1 component -->
                    <div class="c-content-blog-post-card-1-slider" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">NUESTROS SERVICIOS</h3>
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

            
            <!-- END: CONTENT/MISC/ABOUT-3 -->
            <!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-6-5 -->
                <!-- <div class="c-content-box c-size-lg c-bg-parallax" style="background-image: url(public/assets/base/img/content/backgrounds/bg-48.jpg)">
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
                </div> -->
            <!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-6-5 -->
            <!-- BEGIN: CONTENT/SLIDERS/TEAM-2 -->
              

            

            <!-- END: CONTENT/SLIDERS/TEAM-2 -->
            <!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <!-- Begin: Testimonals 1 component -->
                    <div class="c-content-client-logos-slider-1" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">NUESTROS CLIENTES</h3>
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




                
@endsection




