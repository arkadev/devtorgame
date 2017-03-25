<!DOCTYPE HTML> 
<html>
	<head>
		<title>DevTorGame</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="SHORTCUT ICON" href="<?= base_url() . 'assets/img/favicon.ico'?>" />
		<link href="<?= base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet" type="text/css">
	</head>
	
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-ex1-collapse">
					<span class="sr-only">Desplegar navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<img src="<?= base_url() . 'assets/img/Logo.png'?>" class="img-responsive img-menu">
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<p class="font-menu-text">DevTorGame</p>
					</div>
					<div class="col-xs-5 col-sm-4 col-md-4">
						<p class="font-menu-sub-text">By ArkaDev</p>
					</div>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 margin-table">
					<table class="table table-hover font-table-add">					
					  <tbody>
					  <tr>
							<th>#</th>
							<th>Nombre de equipo</th> 
							<th>Vs</th> 
							<th>#</th>
							<th>Nombre de equipo</th> 
						</tr>
                        <?php
                            if (is_array($tourn) || is_object($tourn)) {
                                for ($i = 0; $i < count($tourn); $i++) {
                                    ?>
                                    <tr>
                                        <td><?= $tourn[$i]->id_team; ?></td>
                                        <td><?= $tourn[$i]->name; ?></td>
                                        <td>Vs</td>
                                        <?php if (($i+1)< count($tourn)) { ?>
                                            <td><?= $tourn[$i + 1]->id_team; ?></td>
                                            <td><?= $tourn[$i + 1]->name; ?></td>                                        
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
		<script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>	
		<script src="<?= base_url() . 'assets/js/bootstrap.js' ?>"></script>
		<script src="<?= base_url() . 'assets/js/tournament.js' ?>"></script>
	</body>
</html>
