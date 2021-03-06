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

         


            <!-- END: CONTENT/PRODUCTS/PRODUCT-1 -->
            <!-- BEGIN: CONTENT/BARS/BAR-2 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 wow animate fadeInLeft">
                            <!-- Begin: Title 1 component -->
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold">SERVICIOS</h3>
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
                        <div class="col-sm-12 wow animate fadeInRight">
                            <div class="c-content-tab-4 c-opt-3" role="tabpanel">
                                <ul class="nav nav-justified" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab-31" role="tab" data-toggle="tab" class="c-font-16">Vivienda</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-32" role="tab" data-toggle="tab" class="c-font-16">Agricultura</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-33" role="tab" data-toggle="tab" class="c-font-16">Transporte</a>
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
     

        </div>




                
@endsection




