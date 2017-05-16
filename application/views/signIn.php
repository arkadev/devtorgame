<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <title>DevTorGame</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
        <link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">
        <link rel="stylesheet" href="<?= base_url() . 'assets/css/material.css' ?>">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <meta url="https://www.facebook.com/arkadev.sas.1?fref=ts">
        <meta url="https://twitter.com/ArkaDevGroup">
        <link rel="shortcut icon" href="<?= base_url() . 'favicon.ico' ?>" />
    </head>
    <body>
        <div class="banner-fondo-s">
            <div class="col-xs-6 col-sm-6 col-md-3  col-lg-3 col-xs-offset-4  col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
                <div class="card-login">
                    <form class="form">
                        <div class="header header-primary text-center">
                            <a href="<?= base_url() . '' ?>">
                                <img src="<?= base_url() . 'assets/img/logoD.png' ?>" class="img-responsive img-login-logo">
                            </a>
                            <h4>DevTorGame</h4>
                        </div>
                        <div class="input-container">
                            <input type="text"  required="required"/>
                            <label for="#{label}" >
                                <span class="glyphicon glyphicon-user"></span>
                                Usuario</label>
                            <div class="bar"></div>
                        </div>
                        <div class="input-container">
                            <input type="password"  required="required"/>
                            <label for="#{label}">
                                <span class="glyphicon glyphicon-lock"></span>
                                Contraseña</label>
                            <div class="bar"></div>
                        </div>
                        <div class="col-xs-8 col-sm-7 col-md-8  col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-32 col-lg-offset-2">
                            <button class="btn-login">INICIAR SESIÓIN</button>
                        </div>
                        <div class="col-xs-8 col-sm-7 col-md-8  col-lg-8 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                            <a href="#" class="text-center colo-text-login">¿Olvidaste tu contraseña?</a>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 banner-login-register">
                            <p class="text-banner-register-login">¿No tienes cuenta? <a href="<?= base_url() . 'signUp' ?>" class="colo-text-login">Regsitrate</a></p>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
