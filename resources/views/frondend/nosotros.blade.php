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
            <!-- <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 wow animate fadeInLeft">
                          
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold">NOSOTROS</h3>
                                <div class="c-line-left c-theme-bg"></div>
                            </div>
                      
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
                                        <a href="#tab-31" role="tab" data-toggle="tab" class="c-font-16">MISIÓN</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-32" role="tab" data-toggle="tab" class="c-font-16">VISIÓN</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-33" role="tab" data-toggle="tab" class="c-font-16">VALORES</a>
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
            </div> -->


            <!--inicio opcion2-->
            <div class="c-content-box c-size-lg c-bg-grey-1">
                <div class="container">
                    <div class="">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="c-content-feature-5">
                                    <div class="c-content-title-1 wow amimate fadeInDown">
                                        <h3 class="c-left c-font-dark c-font-uppercase c-font-bold">QUIÉNES 
                                            <br/>SOMOS?</h3>
                                        <div class="c-line-left c-bg-blue-3 c-theme-bg"></div>
                                    </div>
                                    <div class="c-text wow animate fadeInLeft"> JANGO is the ultimate tool to power any of your projects. Corporate, ecommerce, SAAS, CRM and much more. </div>
                                    <button type="submit" class="btn c-btn-uppercase btn-md c-btn-bold c-btn-square c-theme-btn wow animate fadeIn">Explore</button>
                                    <img class="c-photo img-responsive wow animate fadeInUp" width="420" alt="" src="{{ asset('public/assets/base/img/content/misc/jango-intro-2.jpg')}}" /> </div>
                            </div>
                            <div class="col-md-5">
                                <div class="c-content-accordion-1 c-theme wow animate fadeInRight">
                                    <div class="panel-group" id="accordion" role="tablist">
                                        <div class="panel">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a class="c-font-bold c-font-uppercase c-font-19" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Misión </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body c-font-18"> Somos una empresa que ofrece oportunidades de desarrollo profesional y humano a sus colaboradores, buscando el perfeccionamiento de sus capacidades y su bienestar permanente, el resultado de la formación y consolidación de este grupo humano son los servicios de alta calidad caracterizados por la gran responsabilidad social, medio ambiente, gestión, administración, salud y seguridad a nuestros clientes, mediante un soporte profesional con excelencia, ética, innovación, creatividad y de alta calidad, para el desarrollo sostenible de nuestro país en el ámbito de la construcción y el ambiente </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed c-font-uppercase c-font-bold c-font-19" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Visión </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body c-font-18"> Consolidarnos como la empresa líder en servicios de planeación, elaboración y ejecución como consultoría, ingeniería, construcción, asesoría, abastecimiento, compra y venta, producción y afines de proyectos, expedientes técnicos, requerimientos y ejecución en obras de mayor y menor envergadura a nivel público y privado.  A nivel nacional e internacional, brindando servicios de excelencia con el mejor equipo humano y tecnología de vanguardia. Proporcionamos a nuestros clientes la satisfacción de sus requerimientos a través de la correcta aplicación de la información procesada y de herramientas tecnológicas que les permita aumentar su competitividad y rentabilidad. Gracias a una adecuada toma de decisiones. </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed c-font-uppercase c-font-bold c-font-19" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Quiénes somos? </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body c-font-18"> Somos una empresa que ofrece oportunidades de desarrollo profesional y humano a sus colaboradores. Bridamos servicios de alta calidad caracterizados por la  gran responsabilidad ambiental, social y seguridad a nuestros clientes, mediante un soporte profesional con excelencia, ética, innovación, creatividad y alta calidad.
Prestamos servicios de asesoría, consultorías y ejecución de monitoreo ambientales dirigidos a apoyar la gestión del ambiente mediante el análisis y comprensión de fenómenos ecológicos, ambientales y sus manifestaciones.
 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   

            <!--fin opcion2-->
            

        </div>




                
@endsection




