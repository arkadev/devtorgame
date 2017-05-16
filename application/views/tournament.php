<!DOCTYPE HTML> 
<html lang="es">
    <head>
        <title>DevTorGame</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">       
        <link rel="stylesheet" href="<?= base_url() . 'assets/css/bootstrap.min.css'?>">
        <link href="<?= base_url() . 'assets/css/styles.css' ?>" rel="stylesheet" type="text/css">
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>	
        <script src="<?= base_url() . 'js/jquery.bpopup.min.js'?>"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
        <script src="<?= base_url() . 'assets/js/tournaments.js' ?>"></script>
        <link rel="shortcut icon" href="<?= base_url() . 'favicon.ico' ?>" />  
    </head>
    <body style="background-color: #2E393A">        
        <p style="color:#FF0000"><?php $get_name = ($_GET['get_name']); echo "$get_name"; ?></p>
         <div class="baner-login">
            <div class="baner-menu-create">
                <div class="relative-p">
                    <img src="<?= base_url() . 'assets/img/lol11.jpg'?>" class="img-responsive margin-icon">
                </div>
                <div class="relative-p">
                    <p class="text-menu-team"><?= $get_name ?></p>
                </div>
                <div class="relative-p">
                    <p class="text-menu-team-d"> </p>
                </div>
                <a href="<?= base_url() . 'team' ?>?name_tournament=<?= $get_name ?>">
                <div class="div-menu-team">
                    <button class="btn-menu-team">
                        <img src="<?= base_url() . 'assets/img/tour.png'?>" class="img-btn-menu">
                        <p class="text-btn-menu-team">Regresar</p>
                    </button>
                </div>
                </a>
            </div>
            <div class="div-tournamet-table">
                <div class="div-t-t">
                    <table class="table table-hover">
                        <tbody>
                            <tr class="tab-center">
                                <!--<th class="tab-center-header">#</th>-->
                                <th class="tab-center-header">EQUIPO</th>
                                <th class="tab-center-header"></th>
                                <th class="tab-center-header">Vs</th>
                                <th class="tab-center-header"></th>
                                <th class="tab-center-header">EQUIPO</th>
                                <!--<th class="tab-center-header">#</th>-->
                            </tr>   
                            <?php
                            if (is_array($tourn) || is_object($tourn)) {
                                for ($i = 0; $i < count($tourn); $i++) {
                            ?>

                            <tr class="tab-center">
                                <td>
                                    <!--<p class="tab-center-nameTeam"><?= $tourn[$i]->id_team; ?></p>-->
                                    <p class="tab-center-nameTeam"></p>
                                </td>
                                <td>
                                    <p class="tab-center-nameTeam"><?= $tourn[$i]->name; ?></p>
                                </td>
                                <td>   
                                    <?php if (($i+1)>= count($tourn)) { ?>
                                    <img src="<?= base_url() . 'assets/img/LikeGreen.png'?>" id="like<?= $i?>" onclick="cambiar(this.id)">
                                    <?php }else{ ?>  
                                    <img src="<?= base_url() . 'assets/img/Like.png'?>" id="like<?= $i?>" onclick="cambiar(this.id)">
                                    <?php } ?>   
                                </td>
                                <?php if (($i+1)< count($tourn)) { ?>
                                <td>
                                    <p class="tab-center-nameTeam">Vs</p>
                                </td>
                                <td>
                                    <img src="<?= base_url() . 'assets/img/Like.png'?>" id="like<?= $i+1?>" onclick="cambiar(this.id)"> 
                                </td>                                
                                <td>
                                    <p class="tab-center-nameTeam"><?= $tourn[$i + 1]->name; ?></p>
                                </td>
                                <td>
                                    <!--<p class="tab-center-nameTeam"><?= $tourn[$i + 1]->id_team; ?></p>-->
                                    <p class="tab-center-nameTeam"></p>
                                </td>

                                <?php } ?>                            
                            </tr> 
                            <?php
                                    $i = $i + 1;
                                }
                            } else {
                            ?>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>                                
                            <?php } ?>   

                        </tbody>
                    </table>
                </div>
            </div>
        </div>       
    </body>
</html>