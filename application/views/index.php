<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>DevTorGame</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
        <link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <meta url="https://www.facebook.com/arkadev.sas.1?fref=ts">
        <meta url="https://twitter.com/ArkaDevGroup">
        <link rel="shortcut icon" href="<?= base_url() . 'favicon.ico' ?>" />
    </head>
    <body>
        <div id="inicio" class="container">
            <div class="baner-initial">
                <nav class="menu">
                    <img src="<?= base_url() . 'assets/img/logoD.png' ?>" class="img-logo-init">
                    <ul class="col-md-6 col-lg-6 col-md-offset-4 col-lg-offset-3 ul-index">
                        <li class="li-index"><a href="#inicio" class="a1 ">INFORMACIÓN</a></li>
                        <li class="li-index"><a href="#servicios" class="a1">SERVICIOS</a></li>
                        <li class="li-index"><a href="#clientes" class="a1">CLIENTES</a></li>
                        <li class="li-index"><a href="#clientes" class="a1">EQUIPO</a></li>
                        <li class="li-index"><a href="#contactos" class="a1">CONTACTOS</a></li>

                    </ul>
                    <ul class="col-md-2 col-lg-3 ul-index">
                        <?php if ($this->session->userdata('login')) { ?>
                          <li class="li-index"><a href="<?= base_url() . 'manager' ?>" class="a1 ">MIS TORNEOS</a></li>
                        <li class="li-index"><a href="<?= base_url() . 'signIn/logout' ?>"  class="a1">
                                <span class="glyphicon glyphicon-user"></span>
                                Cerrar Sesión</a></li>

                                <?php } else { ?>
                                <li class="li-index"><a href="<?= base_url() . 'signIn' ?>"  class="a1">
                                <span class="glyphicon glyphicon-user"></span>
                                Ingresar</a></li>

                                 <?php } ?>
                    </ul>
                </nav>
                <div class="banner-text">
                    <div class="div-text-init">
                        <p class="text-tournament">DevTorGame</p>
                        <p class="text-sub-tournament">Crea tus torneos Online</p>
                    </div>
                    <a href="<?= base_url() . 'signUp' ?>">
                        <button class="btn-init" type="button">REGISTRARSE <span class="glyphicon glyphicon-open"></span> </button>
                    </a>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 banner-figuras">
                    <div class="triangulo">
                        <img src="<?= base_url() . 'assets/img/y.png' ?>" class="figura-img">
                    </div>
                    <div class="cuadro">
                        <img src="<?= base_url() . 'assets/img/c.png' ?>" class="figura-img">
                    </div>
                    <div class="equis">
                        <img src="<?= base_url() . 'assets/img/x.png' ?>" class="figura-img">
                    </div>
                    <div class="circulo">
                        <img src="<?= base_url() . 'assets/img/o.png' ?>" class="figura-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-informations bnn-info">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-info">
                <h2>INFORMACIÓN</h2>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pos-div-cols">
                <div class="div-info">
                    <span class="glyphicon glyphicon-tower icons-info"></span>
                    <p class="text-icon-info">Torneos</p>
                </div>
                <div class="position-text-info">
                    <h4>Si quieres una forma sencilla de poder crear, personalizar y administrat tus porpios torneos te ofrecemos la manera mas eficaz utlizando DevTorGame.</h4>
                </div>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-4 col-lg-4  text-center">
                <div class="div-info ">
                    <span class="glyphicon glyphicon-user icons-info"></span>
                    <p class="text-icon-info">Usuarios</p>
                </div>
                <div class="position-text-info">
                    <h4>Eres una persona apasionada a los video-juegos y quieres organizar un torneo en tu sector este es el espaio perfecto para ti.</h4>
                </div>
            </div>
            <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="div-info text-center">
                    <span class="glyphicon glyphicon-briefcase icons-info"></span>
                    <p class="text-icon-info">Nosotros</p>
                </div>
                <div class="position-text-info">
                    <h4>Nuestro equipo esta disponble en ayudar a mejorar y hacer mas sencilla tu experiencia como creador de torneos.</h4>
                </div>
            </div>
        </div>
        <div class="banner-informations bnn-services bnn-colors">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-info">
                <h2>SERVICIOS</h2>
                <div>
                    <img src="<?= base_url() . 'assets/img/service.png' ?>" class="img-responsive div-imgs div-img-service">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 text-service-posotion">
                    <h4>Si eres de las personas aficionadas o amantes de los video-juegos y estas enfocado a la creación de eventos, enfrentamientos o bien conocidos torneos, DevTorGame te permite llevar un control más riguroso y sencillo en la administración de todos los torneos que quieras realizar.
                        <br><br>Te permite generar las fases y los enfrentamientos entre equipos de una manera aleatoria sin que tu tengas que mover ni un dedo.</h4>
                </div>
            </div>
        </div>
        <div class="banner-informations bnn-client">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-info">
                <h2>CLIENTES</h2>
                <div>
                    <img src="<?= base_url() . 'assets/img/client.png' ?>" class="img-responsive div-imgs div-img-client">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-6 col-sm-offset-65 col-md-offset-6 col-lg-offset-6 text-service-posotion">
                    <h4>Nuestros clientes son personas como tú que quieres publicar un evento de torneos que quieras realizar y el mundo de DevTorGame te permite hacer publicaciones.
                        <br><br>No solo te permitiremos hacer publicidad de tus torneros, si también eres un desarrollador y quieres lanzar un video-juego nuestro equipo te ayudara y te permitirá hacer publicidad en nuestro sitio web.</h4>
                </div>
            </div>
        </div>
        <div class="banner-informations bnn-colors bnn-equipo">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-info">
                <h2>EQUIPO</h2>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                    <h4>Nuestro equipo está conformado por tres estudiantes de ingeniería de sistemas y computación de la universidad pedagógica y tecnológica de Colombia (UPTC) que siempre van a estar a tus servicios para apoyarte en tu proceso de creación de torneos.</h4>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div>
                        <img src="<?= base_url() . 'assets/img/jhon.png' ?>" class="img-responsive div-info">
                    </div>
                    <div class="position-text-info">
                        <h4>Jhon Vega, Desarrollador
                            <br>jhon.vega@uptc.edu.co
                            <br>Celular: 321 384 50 83</h4>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div>
                        <img src="<?= base_url() . 'assets/img/camilo.png' ?>" class="img-responsive div-info">
                    </div>
                    <div class="position-text-info">
                        <h4>Camilo Bayona, Desarrollador
                            <br>william.bayona01@uptc.edu.co
                            <br>Celular: 313 875 15 29</h4>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div>
                        <img src="<?= base_url() . 'assets/img/omar.png' ?>" class="img-responsive div-info">
                    </div>
                    <div class="position-text-info">
                        <h4>Omar Sepúlveda, Desarrollador
                            <br>omar.sepulveda@uptc.edu.co
                            <br>Celular: 311 506 00 70</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-informations bnn-contact">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-info">
                <h2>CONTACTO</h2>
                <form class="form-horizontal contact-post" method="post">

                    <fieldset>
                        <div class="text-contact">
                            <h4>Contacto :<br>
                                Email: arkadevgroup@gmail.com<br>
                                Facebook: /arkadev.sas<br><br>
                                Llámanos :<br>
                                Tel: 300 764 56 52</h4>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="glyphicon glyphicon-user bigicon"></i></span>
                            <div class="col-md-4">
                                <input id="fname" name="name" type="text" placeholder="Nombre completo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="glyphicon glyphicon-envelope bigicon"></i></span>
                            <div class="col-md-4">
                                <input id="email" name="email" type="text" placeholder="Direccion de correo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="glyphicon glyphicon-edit bigicon"></i></span>
                            <div class="col-md-4">
                                <textarea class="form-control" id="message" name="message" placeholder="Ingrese su masaje." rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-3 text-center">
                                <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
        <div class="baner-contact">
            <footer>
                <div class="text-center icon-contact-pos">
                    <div class="col-md-4">
                        <span class="text-icon-contac">Copyright &copy; arkadev.me 2017</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline">
                            <li><a href="https://twitter.com/ArkaDevGroup" target="_blank" class="icons-contac"><i class="fa fa-twitter "></i></a></li>
                            <li><a href="https://www.facebook.com/arkadev.sas.1" target="_blank" class="icons-contac"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank" class="icons-contac"><i class="fa fa-google-plus" ></i></a></li>
                            <li><a href="https://github.com/arkadev/devtorgame" target="_blank" class="icons-contac"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://arkadev.wixsite.com/devtorgame" target="_blank" class="icons-contac"><i class="fa fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <a href="http://arkadev.me/devtorgame" class="text-icon-contac">arkadev.me/devtorgame</a>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
