<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>DevTorGame</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
        <link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">

        <link href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?= base_url() . 'assets/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url() . 'assets/css/agency.min.css' ?>" rel="stylesheet">

        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <meta url="https://www.facebook.com/arkadev.sas.1?fref=ts">
        <meta url="https://twitter.com/ArkaDevGroup">
        <link rel="shortcut icon" href="<?= base_url() . 'favicon.ico' ?>" />
    </head>
    <body>
        <div class="baner-init">
            <img src="<?= base_url() . 'assets/img/lol1.png' ?>" class="img-font">
            <div>
                <img src="<?= base_url() . 'assets/img/logoD.png' ?>" class="img-logo-init">
                <p class="font-text-logo">DevTorGame</p>
            </div>

            <div >
                <a href=""><img src="<?= base_url() . 'assets/img/menu.png' ?>" class="menu-mob"></a>
            </div>
            <nav class="menu">
                <ul class="ul-index active">
                    <?php if ($this->session->userdata('login')) { ?>
                        <li class="li-index current-item"><a href="<?= base_url() . 'login/logout' ?>" class="a1">Cerrar Sesion</a></li>
                    <?php } else { ?>
                        <li class='li-index current-item dropdown'><a class='dropdown-toggle a1' href="#" data-toggle='dropdown'>Iniciar Sesión</a>
                            <div class='dropdown-menu' style='padding: 10px; padding-bottom: 0px; background: none; width: 400px;'>
                                <form action="<?= base_url() . 'login' ?>" method='post' accept-charset='UTF-8' role="form">
                                    <div class='form-group'>
                                        <input class='form-control large' style='text-align: center;' type='text' name='email' placeholder='usuario'/>
                                    </div>
                                    <div class='form-group'>
                                        <input class='form-control large' style='text-align: center;' type='password' name='password' placeholder='contraseña' />
                                    </div>
                                    <div class='form-group'>
                                        <button class='btn btn-info' style='width: 380px;' type='submit'>INGRESAR</button>
                                    </div>
                                </form>
                            </div>
                        </li>
                    <?php } ?>
                    <li class="li-index current-item"><a href="<?php base_url() ?>" class="a1">Inicio</a></li>
                    <li class="li-index current-item"><a href="#" class="a1">Servicios</a></li>
                    <li class="li-index current-item"><a href="#" class="a1">Clientes</a></li>
                    <li class="li-index current-item"><a href="#" class="a1">Contactos</a></li>
                </ul>
            </nav>
            <div class="div-text-init">
                <p class="text-tournament">¡TORNEOS ONLINE!</p>
                <p class="text-sub-tournament">Crea y administra tus propios torneos.</p>
            </div>
            <div>
                <a href="<?= base_url() . 'manager' ?>">
                    <button class="btn-init" type="button">COMENZAR</button>
                </a>
            </div>
        </div>
        <div class="baner-services baner-services-1">
            <img src="<?= base_url() . 'assets/img/campeon1.png' ?>" class="img-campeon">
            <div class="text-baner-1-title">
                <p class="text-baner-title ">SERVICIOS</p>
                <textarea cols="15" rows="5" class="textarea-init">Somos una empresa dedicada al desarrollo de software, aplicaciones web, Stand Alone y móviles, además diseñamos y gestionamos la configuración de red.</textarea>
            </div>
        </div>
        <div class="baner-services baner-services-2">
            <img src="<?= base_url() . 'assets/img/campeon2.png' ?>" class="img-campeon2">
            <div class="text-baner-2-title">
                <p class="text-baner-title">CLIENTES</p>
                <textarea cols="15" rows="5" class="textarea-init">Nuestros clientes son personas que dedican su tiempo y esfuerzo a la organización de torneos de videojuegos especialmente de League Of Legends, perteneciente a la compañia Riot Games.</textarea>
            </div>
        </div>
        <div class="baner-services baner-services-3">
            <img src="<?= base_url() . 'assets/img/campeon3.png' ?>" class="img-campeon">
            <div class="text-baner-1-title">
                <p class="text-baner-title">CONTACTOS</p>
                <textarea rows="5" class="textarea-init">El grupo de trabajo esta conformado por tres Ingenieros de Sistemas y Computación con mas de cuatro años de experiencia en desarrollo de software y diseño de redes.</textarea>
            </div>
        </div>
        <div class="baner-contact"></div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; arkadev.me 2017</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/ArkaDevGroup" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/arkadev.sas.1" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://github.com/arkadev/devtorgame" target="_blank"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://arkadev.wixsite.com/devtorgame" target="_blank"><i class="fa fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="http://arkadev.me/devtorgame">arkadev.me/devtorgame</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
