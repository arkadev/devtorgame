<!DOCTYPE HTML> 
<html lang="es">
    <head>
        <title>DevTorGame</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="<?= base_url() . 'assets/css/styles.css' ?>" rel="stylesheet">
        <link href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/jquery.bpopup.min.js' ?>"></script>
        <script src = "<?= base_url() . 'assets/js/team.js' ?>"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
        <script>validateName();disabledInitTourn();keyEnterInsertTeam();</script>
        <link rel="shortcut icon" href="<?= base_url() . 'favicon.ico' ?>">

        <script>
            ;
            (function ($) {
                $(function () {
                    $('#show-popup').bind('click', function (e) {
                        e.preventDefault();
                        $('#popup').bPopup({
                            easing: 'easeOutBack',
                            speed: 450,
                            transition: 'slideDown'
                        });

                    });
                });
            })(jQuery);
        </script>
    </head>
    <body style="background-color: #2E393A" >	
        <p style="color:#FF0000"><?php $name_tournament = ($_GET['name_tournament']); ?></p>                

        <div class="baner-login">
            <div class="baner-menu-create">
                <div class="relative-p">
                    <img src="<?= base_url() . 'assets/img/lol11.jpg' ?>" class="img-responsive margin-icon">
                </div>
                <div class="relative-p">
                    <p class="text-menu-team"><?= $name_tournament ?></p>
                </div>
                <div class="relative-p">
                    <p class="text-menu-team-d"></p>
                </div>
                <div class="div-menu-team">
                    <button class="btn-menu-team" id="show-popup">
                        <img src="<?= base_url() . 'assets/img/addT.png' ?>" class="img-btn-menu">
                        <p class="text-btn-menu-team">Agregar Equipo</p>
                    </button>
                    <a href="<?= base_url() . 'tournament' ?>?get_name=<?= $name_tournament ?>">
                        <button class="btn-menu-team">
                            <img src="<?= base_url() . 'assets/img/tour.png' ?>" class="img-btn-menu">
                            <p class="text-btn-menu-team">Iniciar Torneo</p>
                        </button>
                    </a>
                    <button class="btn-menu-team">
                        <img src="<?= base_url() . 'assets/img/exit.png' ?>" class="img-btn-menu">
                        <p class="text-btn-menu-team">Regresar</p>
                    </button>
                </div>
            </div>
            <div class="div-table">
                <div class="div-t">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Nombre de equipo</th> 
                            </tr>
                            <?php
                            if (is_array($teams) || is_object($teams))
                            {
                                for ($i = 0; $i < count($teams); $i++)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $i + 1; ?></td>
                                        <td><?= $teams[$i]->name; ?></td>
                                    </tr>
                                    <?php
                                }
                            } else
                            {
                                ?>
                                <tr><td></td><td></td></tr>                                                                              
<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="baner-warning">
                <div class="relative-p">
                    <img src="<?= base_url() . 'assets/img/campeon4.png' ?>" class="logo-menu-create" style="margin-top: 60%;">
                </div>
                <div class="relative-p">
                    <p class="text-warning">¡Recuerda que para crear un torneo debes registrar minimo dos equipos!</p>
                </div>
            </div>
            <div id="popup">
                <div class="popup-contenedor-2">
                    <form>
                        <div class="div-modal-name">
                            <input id="name" class="iput-texrt-modal-name" placeholder="Nombre de equipo"/>
                        </div>
                        <div>                             
                            <button type="button" onclick="insertTeam('<?= $name_tournament = ($_GET['name_tournament']); ?>')">CREAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>                        
    </body>
</html>