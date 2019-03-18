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

         
        <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-feedback-1 c-option-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-container c-bg-green c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_1.png)">
                                    <div class="c-content-title-1 c-inverse">
                                        <h3 class="c-font-uppercase c-font-bold">Need to know more?</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">Try visiting our FAQ page to learn more about our greatest ever expanding theme, JANGO.</p>
                                        <a href="#" class="btn btn-md c-btn-border-2x c-btn-white c-btn-uppercase c-btn-square c-btn-bold">Learn More</a>
                                    </div>
                                </div>
                                <div class="c-container c-bg-grey-1 c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_2.png)">
                                    <div class="c-content-title-1">
                                  
                                        <h3 class="c-font-uppercase c-font-bold">Have a question?</h3>
                                        <div class="c-line-left"></div>
                                        <form action="#">
                                            <div class="input-group input-group-lg c-square">
                                                <!-- <input type="text" class="form-control c-square" placeholder="Ask a question" />
                                                <span class="input-group-btn">
                                                    <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-font-bold" type="button">Go!</button>
                                                </span> -->
                                            </div>
                                        </form>
                                        <p>Ask your questions away and let our dedicated customer service help you look through our FAQs to get your questions answered!</p>
                                    </div>
                                    
                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Contáctenos</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                                    </div>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" placeholder="Nombre Completo" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Correo electrónico" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Número telefónico" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <textarea rows="8" name="message" placeholder="Dejenos su mensaje o consulta aquí" class="form-control c-theme c-square input-lg"></textarea>
                                        </div>
                                        <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: CONTACT -->




            

        </div>




                
@endsection




