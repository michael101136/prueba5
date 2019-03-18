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
     
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">


            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <!-- Begin: Testimonals 1 component -->
                    <div class="c-content-person-1-slider" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1 wow animated fadeIn">
                            <h3 class="c-center c-font-uppercase c-font-bold">Equipo de trabajo</h3>
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
                                            <a href="{{ asset('public/assets/base/img/content/team/team9.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery-2">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('public/assets/base/img/content/team/team9.jpg')}}" class="img-responsive c-overlay-object" alt=""> </div>
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

        <!-- END: CONTENT/PRODUCTS/PRODUCT-1 -->
            

        </div>



                
@endsection




