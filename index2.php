<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Social Heart</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="css/family-lobster.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
        <link href="css/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>
        <script src="js/funciones.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>
        
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <h1>Social Heart</h1>
                            <span>Tu corazón en la nube</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        <?php
            if(!isset($_SESSION["sesionIniciada"])){
        ?>
                <!-- Start Main Body Section -->
                <div class="mainbody-section text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" id="btnLogin">
                                    <div class="menu-item blue">
                                        <a href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-sign-in"></i>
                                            <p id="pLog">Iniciar Sesión</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Start Carousel Section -->
                                <div class="home-slider">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="img/about-03.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/about-02.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/about-01.jpg" class="img-responsive" alt="">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- Start Carousel Section -->
                            </div>

                            <div class="col-md-3">
                                <div class="form-group" id="btnRegistrate">
                                    <div class="menu-item light-red">
                                        <a href="#registro-modal" data-toggle="modal">
                                            <i class="fa fa-book"></i>
                                            <p>Regístrate</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main Body Section -->
        <?php
            }else{
        ?>
                <!-- Start Main Body Section -->
                <div class="mainbody-section text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" id="btnLogout">
                                    <div class="menu-item blue">
                                        <a onclick=<?php session_destroy()?>>
                                            <i class="fa fa-sign-out"></i>
                                            <p id="pLog">Cerrar Sesión</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group" id="btnPacientes">    
                                    <div class="menu-item light-red">
                                        <a href="#historial-modal" data-toggle="modal">
                                            <i class="fa fa-user"></i>
                                            <p>Pacientes</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group" id="btnControl">
                                    <div class="menu-item color responsive">
                                        <a href="#RitmoCardiaco-modal" data-toggle="modal">
                                            <i class="fa fa-heart-o"></i>
                                            <p>Control</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <!-- Start Carousel Section -->
                                <div class="home-slider">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="img/about-03.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/about-02.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/about-01.jpg" class="img-responsive" alt="">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- Start Carousel Section -->

                                <div class="row">
                                    <div class="col-md-6" id="btnConsulta">
                                        <div class="menu-item green">
                                            <a href="#consulta-modal" data-toggle="modal">
                                                <i class="fa fa-search"></i>
                                                <p>Consulta</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-6" id="btnTips">
                                        <div class="menu-item light-orange responsive-2">
                                            <a href="#tips-modal" data-toggle="modal">
                                                <i class="fa fa-medkit"></i>
                                                <p>Tips de Salud</p>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="form-group" id="btnRegistrate">
                                    <div class="menu-item light-red">
                                        <a href="#registro-modal" data-toggle="modal">
                                            <i class="fa fa-book"></i>
                                            <p>Regístrate</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group" id="btnContactanos">
                                    <div class="menu-item color">
                                        <a href="#contactanos-modal" data-toggle="modal">
                                            <i class="fa fa-envelope-o"></i>
                                            <p>Contáctenos</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group" id="btnAcerca">
                                    <div class="menu-item blue">
                                        <a href="#acerca-modal" data-toggle="modal">
                                            <i class="fa fa-users"></i>
                                            <p>Acerca de...</p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main Body Section -->
        <?php
            }
        ?>
        
        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>&copy; 2015 - <a href="https://www.facebook.com/DaviksMks" target="_blank">Web Solutions S.A.</a> Todos los derechos reservados. Design &amp; Developed by <a href="https://www.facebook.com/Shahriyar.Ahmed.Sohel" target="_blank">Shahriyar Ahmed</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        <!-- Inicio Sección Login -->
        <div class="section-modal modal fade contact" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>BIENVENIDO</h3>
                            <p>Por favor ingrese su usuario y contraseña</p>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Usuario *" id="txtUsuario" required data-validation-required-message="Por favor ingresa tu nombre.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="contraseña *" id="txtPassword" required data-validation-required-message="Por favor ingresa tu email.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="button" class="btn btn-primary" style="float:left; margin: 0px 10px 0px 120px; width: 120px;" data-dismiss="modal">Cancelar</button>
                                            <!--<div id="success"></div>-->
                                            <button type="submit" class="btn btn-primary" style="margin: 0px; float:left" onclick="javascript:login()" data-dismiss="modal">Iniciar Sesión</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: -100px;">
                                        <img src="img/login-img.png" class="img-responsive" alt="...">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Login -->
        
        <!-- Start Portfolio Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Portfolio</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/1.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
				    <a href="#historial-modal" data-toggle="modal">
                                	<i class="fa fa-book"></i>
                                        <p>Historial de la Presion</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/2.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/3.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/4.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/5.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/6.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/7.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/8.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/9.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/10.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/11.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/12.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Portfolio Section -->
        
        <!-- Inicio Sección Acerca De... -->
        <div class="section-modal modal fade" id="acerca-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Acerca de...</h3>
                            <h4>Smart Web Solutions Inc.</h4>
                            <h2>SOCIAL HEART</h2>
                            <h4>Versión 1.0</h4>
                            <p>Copyright 2015 - 2016 Smart Web Solutions Inc.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text">
                                <p>Social Heart es una solución web distribuida por Smart Web Solutions Inc. Social Heart es una aplicación específica, cuya función es contribuir en el área médica de la cardiología. Permitiendo llevar un registro de las actividades cardiacas de una persona. Dicha actividad cardiaca puede ser supervisada por el mismo usuario o por su médico de confianza.</p>
                                <p><b>ADVERTENCIA:</b> Esta aplicación está protegida por leyes de propiedad intelectual y tratados internacionales. La distribución o reproducción no autorizada de este programa o de cualquiera de sus partes, está penada con sanciones penales y civiles, serán objeto de todas las acciones judiciales que correspondan.</p>
                               <!-- <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus</li>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                            <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                            <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                            <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                        </ul>
                                    </div>
                                </div> /.row -->
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <!-- <div class="col-md-6 col-sm-6">
                            <div class="skill-shortcode">
                        
                                <!-- Progress Bar
                                <div class="skill">
                                    <p>Web Design</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="60">
                                            <span class="progress-bar-span" >60%</span>
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar 
                                <div class="skill">
                                    <p>HTML & CSS</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="95">
                                            <span class="progress-bar-span" >95%</span>
                                            <span class="sr-only">95% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar 
                                <div class="skill">
                                    <p>Wordpress</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="80">
                                            <span class="progress-bar-span" >80%</span>
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar 
                                <div class="skill">
                                    <p>Joomla</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="100">
                                            <span class="progress-bar-span" >100%</span>
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar
                                <div class="skill">
                                    <p>Extension</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="70">
                                            <span class="progress-bar-span" >70%</span>
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                            </div>
                        </div> -->
                        <div class="col-md-6" style="margin-left: 293px;">
                            <div class="custom-tab">
                        
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Misión</a></li>
                                    <li><a href="#tab-2" role="tab" data-toggle="tab">Visión</a></li>
                                    <li><a href="#tab-3" role="tab" data-toggle="tab">Historia</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab-1">
                                        <p>Desplegar soluciones web útiles para la sociedad y el desempeño adecuado de sus usuarios, protegiendo el medio ambiente en el que se desarrollan y contribuyendo innovadoramente al desarrollo de nuevas alternativas informáticas.</p>
                                     </div>


                                    <div class="tab-pane" id="tab-2">
                                        <p>Liderar el mercado tecnológico innovador en soluciones prácticas para la sociedad.</p>
                                    </div>


                                    <div class="tab-pane" id="tab-3">
                                        <p>Smart Web Solutions fue fundada el 1 de Febrero del 2009 por Félix D. Loor Barragán y  el Dr. Héctor Chimbo Pinargote. Inicialmente funcionó en la ciudad de Guayaquil, Ecuador, donde se encuentra su oficina matriz hasta el día de hoy.</p>
                                        <p>Smart Web Solutions ha provisto de varias aplicaciones web a diferentes empresas a nivel nacional y en varios países de la región, alcanzando un buen posicionamiento de mercado en el país y en el exterior. Actualmente la empresa está creciendo gradualmente, creando nuevas sucursales en Quito y en Cuenca, generando empleo para más profesionales que se unen al equipo élite de nuestra corporación.</p>
                                    </div>

                                </div><!-- /.tab-content -->

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Acerca De... -->
        
        <!-- Start Service Section -->
        <div class="section-modal modal fade" id="service-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Services</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-magic pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Web Design</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-css3 pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">HTML5 & CSS3</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-wordpress pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Wordpress Theme</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-plug pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Wordpress Plugin</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-joomla pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Joomla Template</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-cube pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Joomla Extension</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        
                    </div><!-- /.row -->
                </div>
                
                <div class="pricing-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Free</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>40 GB Storage</li>
                                            <li>40 GB Transfer</li>
                                            <li>10 Domains</li>
                                            <li>20 Projects</li>
                                            <li>Free installation</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Standard</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>40 GB Storage</li>
                                            <li>40 GB Transfer</li>
                                            <li>10 Domains</li>
                                            <li>20 Projects</li>
                                            <li>Free installation</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Premium</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>40 GB Storage</li>
                                            <li>40 GB Transfer</li>
                                            <li>10 Domains</li>
                                            <li>20 Projects</li>
                                            <li>Free installation</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Professional</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>40 GB Storage</li>
                                            <li>40 GB Transfer</li>
                                            <li>10 Domains</li>
                                            <li>20 Projects</li>
                                            <li>Free installation</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Service Section -->
        
        <!-- Start Team Member Section -->
        <div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Expert Team</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/manage-1.png" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/manage-2.png" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/manage-3.png" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/manage-4.png" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/team-1.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/team-2.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/team-3.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/team-4.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Team Member Section -->
        
        <!-- Inicio Sección Tips -->
        <div class="section-modal modal fade" id="tips-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Tips de Salud</h3>
                            <p>Anímate y sigue estos consejos de la AHA (Asociación Americana del Corazón) para tener un corazón saludable y mejorar tu calidad de vida</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="img/about-02.png" class="img-responsive" alt="">
                                <h4><a href="#">Alimentación saludable</a></h4>
                                <!--<div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>-->
                                <p><b>Consume frutas y verduras:</b> Se recomienda la ingesta de alimentos como espinacas, zanahorias, duraznos o fresas, debido a que tiene mayor contenido de micronutrientes. Por otro lado, la AHA insiste en que un jugo no es equivalente a una fruta respecto a su contenido de fibra ni en su capacidad de saciedad; también advierte sobre la importancia de la preparación de los alimentos para preservar sus propiedades.
                                <br><b>Limita la ingesta de grasas trans y saturadas:</b> Los alimentos de origen animal (carne roja y leche de vaca) son los que contienen el mayor número de grasas saturadas; mientras que las trans están presentes en alimentos fritos, preparados y en biscochos industriales. La AHA sugiere que el consumo de estos productos esté por debajo del 7% y que el consumo de colesterol no llegue a los 300 mg.
                                <br><b>Incluye pescado y cereales integrales a tu dieta:</b> La fibra reduce modestamente los niveles de colesterol malo y fomenta la saciedad al producir un vaciado lento del estómago. Se recomienda que al menos la mitad de los cereales sean integrales. El pescado como el salmón, las sardinas o el atún, tiene un alto contenido en ácidos grasos oleico y linoleico, asociados con un menor riesgo de enfermedades cardiovasculares.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6" style="height: 751px;">
                            <div class="latest-post">
                                <img src="img/about-03.png" class="img-responsive" alt="">
                                <h4><a href="#">Actividad física</a></h4>
                               <!-- <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i clss="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>-->
                                <p><b>Lleva una vida activa:</b> Se recomienda que todos los adultos realicen 30 o más minutos de actividad física, todos los días de la semana. Si el objetivo es perder peso, deben practicar 60 minutos diarios de ejercicio.
                                <br><b>La práctica deportiva es la mejor herramienta para mantener un corazón saludable:</b> Los expertos señalan que la respuesta al ejercicio en la mujer es diferente respecto al hombre, debido a las peculiaridades cardiovasculares femeninas como el tamaño del corazón, un menor desarrollo de la caja torácica y una menor cantidad de sangre, entre otras.
                                <br><b>Una vida sexual sana:</b> La Asociación Americana del Corazón asegura que no existe ninguna razón por la que los pacientes cardiacos o sobrevivientes a un infarto no puedan reanudar una actividad sexual plena en cuanto se sientan listos para hacerlo. Los especialistas enfatizan que la actividad física en los pacientes cardiacos es importante para lograr una rehabilitación sexual sin mayores problemas.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="img/about-04.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Evitar consumo de alcohol y tabaco</a></h4>
                                <!--<div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>-->
                                <p><b>Evita el consumo o la exposición al tabaco:</b> Fumar está relacionado al cáncer y a trastornos cardiovasculares, cuida tu ambiente y sobre todo tu salud.
                                <br><b>Disminuye el consumo de bebidas azucaradas y alcohol:</b> Al reducir la ingesta de estos productos se reduce la cantidad de calorías que entran al organismo.
                                <br><b>Mantén una presión arterial normal, por debajo de 120/80 mm/Hg:</b> Los niveles de ésta pueden modificarse con la dieta, actividad física y factores psicosociales. Baja la ingesta de sal (ideal por debajo de 1.5 g/día), aumenta el consumo de potasio, reduce las calorías y consume alcohol de forma moderada.</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="img/about-05.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Sé sociable</a></h4>
                                <!--<div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>-->
                                <p><b>Enfoca tu atención a grupos especiales:</b> Cada vez hay más obesidad entre los pequeños. Por este motivo, se aconseja iniciar una dieta sana y actividad física desde los primeros años de vida. En cuanto a los adultos mayores, debido a la frecuencia con la que presentan trastornos cardiovasculares, se les pide acudir a un médico para que los asesore sobre el tipo de nutrientes que deben ingerir. Las personas con enfermedades como el síndrome metabólico o insuficiencia renal crónica deben seguir recomendaciones específicas como: una dieta muy baja en grasas y calorías, aumentar su actividad física para bajar de peso, y consumir poca sal.</p>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Tips -->
        
        <!-- Inicio Sección Contáctanos -->
        <div class="section-modal modal fade contact" id="contactanos-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Contáctanos</h3>
                            <p>Comunícanos tus inquietudes y curiosidades</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Información de contacto</h4>
                                <ul>
                                    <li><strong>E-mail :</strong> fedaloor_0605@hotmail.es</li>
                                    <li><strong>Teléfono :</strong> (04) 3 098 347</li>
                                    <li><strong>Móvil :</strong> +593-990776656</li>
                                    <li><strong>Web :</strong> www.facebook.com/DaviksMks</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="https://twitter.com/Davis_0605"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/DaviksMks"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/nhome/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://plus.google.com/u/0/108767953153285115663/about"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Working Hours</h4>
                                <ul>
                                    <li><strong>Lun-Vie :</strong> 8 am a 1 pm</li>
                                    <li><strong>Lun-Vie :</strong> 2 pm a 6 pm</li>
                                    <li><strong>Sábados :</strong> Cerrado</li>
                                    <li><strong>Domingos :</strong> Cerrado</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Por favor ingresa tu email.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Por favor ingresa tu teléfono.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Mensaje *" id="message" required data-validation-required-message="Por favor ingresa tu mensaje."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">ENVIAR MENSAJE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Contáctanos -->
        
        <!-- Inicio Sección Registros -->
        <div class="section-modal modal fade contact" id="registro-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Registro de Usuario</h3>
                           <!-- <p>Seleccione tipo de usuario</p>-->
                            <div class="form-group caja">
                                <select class="form-control combo" id="cbxTipoUsuario" onchange="javascript:cambiarDiv()">
                                    <option value="">-- Seleccione su tipo de usuario --</option>
                                    <option value="0">Paciente</option>
                                    <option value="1">Médico</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="divPaciente" style="display: none;">
                        <div class="col-md-12">
                            <form id="PacienteForm" novalidate>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Datos Personales</legend>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombres *" id="txtNombrePac" required data-validation-required-message="Por favor ingrese su nombre.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Apellidos *" id="txtApellidoPac" required data-validation-required-message="Por favor ingrese su apellido.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <select class="form-control combo" id="cbxIdentificacionPac" required data-validation-required-message="Seleccione el tipo de identificación.">
                                                    <option value="">-- Seleccione su tipo de identificación --</option>
                                                    <option value="0">Cédula</option>
                                                    <option value="1">Pasaporte</option>
                                                    <option value="2">Nro. de historia clínica</option>
                                                </select>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Número de identificación *" id="txtIdentificacionPac" required data-validation-required-message="Inserte el # de Identificación.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="form-group fila" style="height: 109px;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="date" class="form-control" id="dtpFecNacPac" required data-validation-required-message="Por favor ingrese su fecha de nacimiento.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email *" id="txtEmailPac" required data-validation-required-message="Por favor ingrese su e-mail.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="grupo">
                                                    <legend style="margin-bottom:2px;">Género sexual</legend>
                                                    <input type="radio" name="genero" id="rdbMasculinoPac" value="Masculino">
                                                    <label for="rdbMasculinoPac">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-circle-o fa-stack-1x"></i>
                                                            <i class="fa fa-circle fa-stack-1x"></i>
                                                        </span>
                                                        Masculino
                                                    </label><br>
                                                    <input type="radio" name="genero" id="rdbFemeninoPac" value="Femenino">
                                                    <label for="rdbFemeninoPac">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-circle-o fa-stack-1x"></i>
                                                            <i class="fa fa-circle fa-stack-1x"></i>
                                                        </span>
                                                        Femenino
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Usuario *" id="txtUserPac" required data-validation-required-message="Por favor ingrese su usuario.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" placeholder="Contraseña *" id="txtPasswordPac" required data-validation-required-message="Por favor ingrese su contraseña.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </div>
                                <div class="row">
                                    <fieldset class="grupo">
                                        <legend>Datos de Contacto</legend>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombres *" id="txtNombreCon" required data-validation-required-message="Por favor ingrese el nombre de su contacto.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Apellidos *" id="txtApellidoCon" required data-validation-required-message="Por favor ingrese el apellido de su contacto.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Celular *" id="txtCelularCon" required data-validation-required-message="Por favor ingrese el celular de su contacto.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Email *" id="txtEmailCon" required data-validation-required-message="Por favor ingrese el e-mail de su contacto.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">REGISTRAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" id="divMediko" style="display: none;">
                        <div class="col-md-12">
                            <form id="PacienteForm" novalidate>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Datos Personales</legend>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombres *" id="txtNombreMed" required data-validation-required-message="Por favor ingrese su nombre.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Apellidos *" id="txtApellidoMed" required data-validation-required-message="Por favor ingrese su apellido.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <select class="form-control combo" id="cbxIdentificacionMed" required data-validation-required-message="Seleccione el tipo de identificación.">
                                                    <option value="">-- Seleccione su tipo de identificación --</option>
                                                    <option value="0">Cédula</option>
                                                    <option value="1">Pasaporte</option>
                                                </select>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Número de identificación *" id="txtIdentificacionMed" required data-validation-required-message="Ingrese el # de su Identificación.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="form-group fila" style="height: 109px;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="date" class="form-control" id="dtpFecNacMed" required data-validation-required-message="Por favor ingrese su fecha de nacimiento.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email *" id="txtEmailMed" required data-validation-required-message="Por favor ingrese su email.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="grupo">
                                                    <legend style="margin-bottom:2px;">Género sexual</legend>
                                                    <input type="radio" name="genero" id="rdbMasculinoMed" value="Masculino">
                                                    <label for="rdbMasculinoMed">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-circle-o fa-stack-1x"></i>
                                                            <i class="fa fa-circle fa-stack-1x"></i>
                                                        </span>
                                                        Masculino
                                                    </label><br>
                                                    <input type="radio" name="genero" id="rdbFemeninoMed" value="Femenino">
                                                    <label for="rdbFemeninoMed">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-circle-o fa-stack-1x"></i>
                                                            <i class="fa fa-circle fa-stack-1x"></i>
                                                        </span>
                                                        Femenino
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Usuario *" id="txtUserMed" required data-validation-required-message="Por favor ingrese su usuario.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" placeholder="Contraseña *" id="txtPasswordMed" required data-validation-required-message="Por favor ingrese su contraseña.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Datos Profesionales</legend>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Universidad *" id="txtUniversidadMed" required data-validation-required-message="Por favor ingrese el nombre de la Universidad.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Título obtenido *" id="txtTituloMed" required data-validation-required-message="Ingrese la descripción del título obtenido.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Año de graduación *" id="txtAnioGraduacion" required data-validation-required-message="Ingrese el año de graduación.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </div>
                                <div class="row">
                                    <fieldset class="grupo">
                                        <legend>Datos Laborales</legend>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <select class="form-control combo" id="cbxInstitucionMed" required data-validation-required-message="Seleccione el tipo de institución.">
                                                    <option value="">-- Seleccione tipo de institución --</option>
                                                    <option value="0">Institución pública</option>
                                                    <option value="1">Institución privada</option>
                                                    <option value="2">Clínica</option>
                                                </select>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombre de institución *" id="txtInstitucionMed" required data-validation-required-message="Por favor ingresa el nombre de la institución.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Área de trabajo *" id="txtAreaMed" required data-validation-required-message="Por favor ingresa el área de trabajo.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Año de ingreso *" id="txtAnioIngresoMed" required data-validation-required-message="Por favor registra el año de ingreso.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">REGISTRAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Registros -->

        <!-- Inicio Historial Clinico -->
        <div class="section-modal modal fade contact" id="historial-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Historial de la Presion</h3>
                           <!-- <p>Seleccione tipo de usuario</p>-->
                            <div class="form-group caja">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form id="HistorialForm" novalidate>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Datos Personales</legend>
                                        <div class="form-group fila">
  
  
                                            <div class="col-md-6">
                                               <label class="etiquetas">Nombres: </label> 
     
                                                <input type="text" class="form-control" placeholder="Nombres *" id="txtNombrePac" required data-validation-required-message="Por favor ingresa tu nombre.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-md-6">
<label class="etiquetas">Apellidos: </label>                                                
 <input type="text" class="form-control" placeholder="Apellidos *" id="txtApellidoPac" required data-validation-required-message="Por favor ingresa tu apellido.">
                                                <p class="help-block text-danger"></p>
                                            </div>

                                            <div class="col-md-6">
<label class="etiquetas">Edad: </label>                                      
           <input type="text" class="form-control" placeholder="Edad" id="txtEdadPac" required data-validation-required-message=" ">
                                                <p class="help-block text-danger"></p>
                                            </div>


                                            <div class="col-md-6">
<label class="etiquetas">Nombre del Contacto: </label>                                      
           <input type="text" class="form-control" placeholder="NombreContacto" id="txtNombreContacto" required data-validation-required-message=" ">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </div>
                                <div class="row">
                                    <fieldset class="grupo">
                                        <legend>Movimientos</legend>
                                        <div style="float: left; margin-right: 20px; width: 100%;">
                                            <table style="width: 100%; border: 1px solid #FF432E;">
                                                <thead style="background:#FF432E;">
                                                    <tr>
                                                        <th style="width: 15%;">Fecha</td>
                                                        <th style="width: 20%;">Presion</td>
                                                        <th style="width: 25%;">Observaciones</td>
                                                        <th style="width: 40%;">Detalle</td>
                                                    </tr>
                                                </thead>
                                                <tbody style="border: 1px solid #FF432E;">
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                  
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Historial Paciente -->

        <!-- Inicio Sección Consulta -->
        <div class="section-modal modal fade contact" id="consulta-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Consulta de Pacientes</h3>
                           <!-- <p>Seleccione tipo de usuario</p>-->
                            <div class="form-group caja">
                                <select class="form-control combo" id="cbxTipoConsulta" onchange="javascript:cambiarDivTipoConsulta()">
                                    <option value="">-- Seleccione el tipo de Consulta --</option>
                                    <option value="0">Personal / Número de Paciente</option>
                                    <option value="1">Rango de Edades</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="divConsultaPersonal" style="display: none;">
                        <div class="col-md-12">
                            <form id="PacienteForm" novalidate>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Nombre / Número de Paciente</legend>
                                        <div class="form-group fila">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombres *" id="txtNombrePac" required data-validation-required-message="Ingresar nombre o numero de paciente">                                                
                                            </div>
					    <div class="col-lg-12 text-center">
                                            <div id="success"></div>
                                                <button type="submit" class="btn btn-primary">CONSULTAR</button>
                                            </div>                                       
                                    </fieldset>
                                </div>
                            </form>    
                        </div>
                    </div>
                    <div class="row" id="divConsultaRango" style="display: none;">
                        <div class="col-md-12">
                            <form id="PacienteForm" novalidate>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Escoja una opción</legend>
                                        <div class="form-group fila">
                                            <input type="radio" name="rango" id="rdbJuventud" value="00 - 30 años">
                                            <label for="rdbJuventud">
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle-o fa-stack-1x"></i>
                                                    <i class="fa fa-circle fa-stack-1x"></i>
                                                </span>
                                                00 - 30 años
                                            </label><br>
                                            <input type="radio" name="rango" id="rdbAdultez" value="31 - 60 años">
                                            <label for="rdbAdultez">
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle-o fa-stack-1x"></i>
                                                    <i class="fa fa-circle fa-stack-1x"></i>
                                                </span>
                                                31 - 60 años
                                            </label><br>
					    <input type="radio" name="rango" id="rdbVejez" value="61 - ?? años">
                                            <label for="rdbVejez">
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle-o fa-stack-1x"></i>
                                                    <i class="fa fa-circle fa-stack-1x"></i>
                                                </span>
                                                61 - ?? años
                                            </label>                                                
                                        </div>
				    </fieldset>				    
				</div>
	                    </form>
			</div></br>
			<div class="col-md-12">
			    <table border=1>
  		 		<tr>
     		  		    <th width=350>Apellido</td>
		  		    <th width=300>Nombre</td>
		  		    <th width=500>Contacto</td>
  	          		</tr>
    	          		<tr>
      	  	    		    <td>      </td>
		   		    <td>      </td>
		    		    <td>      </td>
				</tr>
      	  	           	<tr>
      	  	 		    <td>      </td>
		 		    <td>      </td>
		 		    <td>      </td>
     	      			</tr>
				<tr>
      	  			    <td>      </td>
				    <td>      </td>
 				    <td>      </td>
	    			</tr>
				<tr>
       	  			    <td>      </td>
				    <td>      </td>
 				    <td>      </td>
	    			</tr>
		  	     </table>                 
                	</div>
                   </div>
                </div>
            </div>
        </div>
        <!-- Fin Sección Consultas -->
        
           <!-- Inicio Registrar Contacto -->
        <div class="section-modal modal fade contact" id="registrar-contacto-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Consultar Contacto</h3>
                           <!-- <p>Seleccione tipo de usuario</p>-->
                            <div class="form-group caja">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form id="ConsultarContactosForm" novalidate>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Buscar</legend>
                                        <div class="form-group fila">
                                                                                <div class="col-md-6">
<label class="etiquetas">Buscar por Apellidos: </label>                                                
 <input type="text" class="form-control" placeholder="Apellidos *" id="txtApellidoPac" required data-validation-required-message="Por favor ingresa tu apellido.">
                                                <p class="help-block text-danger"></p>
                                          

  </div>

<div class="col-md-6">
                                    <div class="col-lg-12 text-right">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                    </div>
  

                                  </div>           
                                  
                                </div>      
                                    </fieldset>
                                </div>
                                <div class="row">
                                    <fieldset class="grupo">
                                                                      	<legend>Listado de Contactos</legend>
                <div style="float: left; width: 800; margin-right: 20px;">
                    
		<table border=1>
  		 <tr>
     		  <th width=400>Nombre</td>
     		  <th width=400>Apellido</td>
      		  <th width=300>Telefono</td>
      		  <th width=600>Email</td>
  	          </tr>
    	          <tr>
      	  	    <td>      </td>
		    <td>      </td>
		    <td>      </td>
 		    <td>      </td>
		  </tr>
      	  	  
    	         <tr>
      	  	  <td>      </td>
		  <td>      </td>
		  <td>      </td>
		  <td>      </td>
     	      </tr>
		
		<tr>
      	  	  <td>      </td>
		  <td>      </td>
		  <td>      </td>
 		 <td>      </td>

    		</tr>
		
<tr>
      	  	  <td>      </td>
		  <td>      </td>
		  <td>      </td>
 		 <td>      </td>

    		</tr>
		</table>                 

                </div>
                  
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Registros Contacto -->
        
 <!-- Inicio Graficar Ritmo cardiaco -->
        <div class="section-modal modal fade contact" id="RitmoCardiaco-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Ritmo Cardiaco</h3>
                           <!-- <p>Seleccione tipo de usuario</p>-->
                            <div class="form-group caja">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form id="ConsultarContactosForm" novalidate>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Buscar</legend>
                                        <div class="form-group fila">
                                                                                					<div class="col-md-6">
						<label class="etiquetas">Buscar por Apellidos: </label>                                                
 						<input type="text" class="form-control" placeholder="Apellidos *" id="txtApellidoPac" required data-validation-required-message="Por favor ingresa tu apellido.">
                                                <p class="help-block text-danger"></p>
                                          

 					</div>

				      <div class="col-md-6">
        	                       <div class="col-lg-12 text-right">
                                          <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                     </div>
        			    </div>  

  
				<div class="col-md-6">
					<label class="etiquetas">Edad: </label>                                                
 					<input type="text" class="form-control" placeholder="Edad *" id="txtEdadPac" required data-validation-required-message=".">
                                                <p class="help-block text-danger"></p>
                                          

  				    </div>

         			</div>  

                                <div class="row">

				</div>
<!---Adicionar tabla --->

                                  
                                <div class="row">
     <!---                               <fieldset class="grupo">-->

                                <fieldset >
                                         	
                			<div style="float: left; padding:20px; ">
                    
					<table border=1>
  		 			<tr>
     		  			<th width=350>Apellido</td>
		  			<th width=300>Nombre</td>
		  			<th width=500>Contacto</td>
  	          			</tr>
    	          			<tr>
      	  	    			<td>      </td>
		   			 <td>      </td>
		    			<td>      </td>
		 			 </tr>
      	  	  
    	         			<tr>
      	  	 			 <td>      </td>
		 			 <td>      </td>
		 			 <td>      </td>
     	      				</tr>
		
					<tr>
      	  				  <td>      </td>
					  <td>      </td>
 					 <td>      </td>

    					</tr>
		
					<tr>
      	  				  <td>      </td>
					  <td>      </td>
 					 <td>      </td>
	
    					</tr>
				</table>                 
	
                		</div>
                  
                                    </fieldset>
                                </div>

  </fieldset>
                                </div>   <!-- Fin Busqueda Contacto -->
 

        		 <div class="row" style="margin-bottom: 15px;">
	                       <fieldset class="grupo">
                                <legend>Ritmo Cardiaco</legend>
                                 <div class="form-group fila">
                                                                                
                                  <div class="col-md-6">
                	            <div class="latest-post">
                	                <img src="img/cardiograma60.png" class="img-responsive" alt="">
                                <h4><a href="#"> </a></h4>
                                
                                
                	            </div>
	                        </div>

                        
			  <div class="col-md-6">
                            <div class="latest-post">
       
      				<div style="float: padding:20px">
	
	   		 <table border=1 style="width: 100%;">
	  		   <tr>
	     		   <th>Fecha</td>
	     		   <th>Presion</td>
	                   </tr>
	    	           <tr>
	      	  	    <td>      </td>
			    <td>      </td>
			   </tr>
      	  	  
	    	           <tr>
	      	  	   <td>      </td>
			   <td>      </td>
		           </tr>
		
			  <tr>
	      	  	   <td>      </td>
			   <td>      </td>
		          </tr>
		
			  <tr>
      	  		    <td>      </td>
		 	     <td>      </td>
			     </tr>
			     </table>                 

                            </div>
                                
                                
                            </div>
                        </div>
                        
                              </div>      
                               </fieldset>
                          </div>      <!-- Graficar Ritmo Cardiaco -->

             
	               </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Graficar Ritmo Cardiaco -->

 <!-- Inicio Graficar Ritmo cardiaco -->
        <div class="section-modal modal fade contact" id="RitmoCardiacoI-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Ritmo Cardiaco</h3>
                           <!-- <p>Seleccione tipo de usuario</p>-->
                            <div class="form-group caja">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form id="ConsultarContactosForm" novalidate>
                                <div class="row" style="margin-bottom: 15px;">
                                    <fieldset class="grupo">
                                        <legend>Datos Personales</legend>
                                        <div class="form-group fila">
                                                                                	<div class="col-md-6">
		<label class="etiquetas">Apellidos: </label>                                                
 		<input type="text" class="form-control" placeholder="Apellidos *" id="txtApellidoPac" required data-validation-required-message="Por favor ingresa tu apellido.">
                                                <p class="help-block text-danger"></p>
                                          

  	</div>

		<div class="col-md-6">
		<label class="etiquetas">Edad: </label>                                                
 		<input type="text" class="form-control" placeholder="Edad *" id="txtEdadPac" required data-validation-required-message=".">
                                                <p class="help-block text-danger"></p>
                                          

  	</div>

         </div>  

    
                                  
                                <div class="row">

</div>
<!---Adicionar tabla --->

                                  
                                <div class="row">
     <!---                               <fieldset class="grupo">-->

                  </fieldset>
                                </div>   <!-- Fin Busqueda Contacto -->
 

        		 <div class="row" style="margin-bottom: 15px;">
	                       <fieldset class="grupo">
                                <legend>Ritmo Cardiaco</legend>
                                 <div class="form-group fila">
                                                                                
                                  <div class="col-md-6">
                            <div class="latest-post">
                                <img src="img/cardiograma60.png" class="img-responsive" alt="">
                                <h4><a href="#"> </a></h4>
                                
                                
                            </div>
                        </div>
</br>
                        
  <div class="col-md-6">
                            <div class="latest-post">
       
      <div style="float: width: 800; padding:20px">

   		 <table border=1>
  		 <tr>
     		  <th width=400>Fecha</td>
     		  <th width=400>Presion</td>
                 </tr>
    	          <tr>
      	  	    <td>      </td>
		    <td>      </td>
		  </tr>
      	  	  
    	         <tr>
      	  	  <td>      </td>
		  <td>      </td>
	      </tr>
		
		<tr>
      	  	  <td>      </td>
		  <td>      </td>
	       </tr>
		
<tr>
      	  	  <td>      </td>
		  <td>      </td>
		</tr>
		</table>                 

                            </div>
                                
                                
                            </div>
                        </div>
                        
          
                                </div>      
                               </fieldset>
                          </div>
             
	               </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Fin Sección Registros Contacto -->    
            
    </body>
    
</html>
