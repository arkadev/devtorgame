<!DOCTYPE HTML> 
<html lang="es">
	<head>
		<title>DevTorGame</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">
		<script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
		<script src="<?= base_url() . 'assets/js/jquery.bpopup.min.js' ?>"></script>
		<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
		<script src="<?= base_url() . 'assets/js/team.js' ?>"></script>
		<script src="https://www.gstatic.com/firebasejs/4.1.1/firebase.js"></script>
		<script src="<?= base_url() . 'assets/js/firebase.js' ?>"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
	<body>	
		<div class="baner-login">			
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

			<nav class="nav-banner-manager">
				<div class="col-xs-1 col-sm-1 col-md-1  col-lg-1 ">
					<a href=""><i class="glyphicon glyphicon-align-justify nav-icon-btn"></i></a>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2  col-lg-2 ">
					<h3 class="nav-text-t"><?= $name_tournament = ($_GET['name_tournament']);?></h3>
				</div>

				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					<!--<div class="form-group">
<!--<i class="glyphicon glyphicon-search"></i>
<input type="text" placeholder="Buscar" class="nav-search" id="email">
</div>-->
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xs-offset-2  col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="position:relative;">
					<a href=""><i class="glyphicon glyphicon-list nav-icon-btn"></i></a>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="position:relative;">
					<a href=""><i class="glyphicon glyphicon-user nav-icon-btn"></i></a>
				</div>
			</nav>
			
			<div class="baner-menu-create">
				<a href="index.php"><div class="banner-btn-menu" style="margin-top: 10%;"><span class="glyphicon glyphicon-home text-btn-menu">&nbsp;&nbsp;Inicio</span></div></a>
				<a id="show-popup" href=""><div class="banner-btn-menu"><span class="glyphicon glyphicon-plus-sign text-btn-menu">&nbsp;&nbsp;Nuevo equipo</span></div></a>
				<a href="<?= base_url() . 'tournament' ?>?get_name=<?= $name_tournament?>">
				<div class="banner-btn-menu"><span class="glyphicon glyphicon-star text-btn-menu">&nbsp;&nbsp;Comenzar Torneo</span></div></a>
				<a href="manager"><div class="banner-btn-menu"><span class="glyphicon glyphicon-edit text-btn-menu">&nbsp;&nbsp;Mis Torneos</span></div></a>
				<a href=""><div class="banner-btn-menu"><span class="glyphicon glyphicon-log-out text-btn-menu">&nbsp;&nbsp;Salir</span></div></a>
			</div>

			<div id="popup" class="popup-contenedor-2">
				<form>
					<div class="div-modal-name">
						<a href=""><span class="glyphicon glyphicon-remove close-popup"></span></a>
						<input id="name" class="iput-texrt-modal-name col-xs-10 col-sm-10 col-md-10 col-lg-10" placeholder="Nombre de equipo"/>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-4  col-sm-offset-4 col-md-offset-4 col-lg-offset-4">                            
						<button type="button" class=" btn-create-popup" onclick="insertTeam('<?= $name_tournament = ($_GET['name_tournament']); ?>')"><span class="glyphicon glyphicon-ok btn-create-ok"></span></button>
					</div>
				</form>
			</div>

		</div>                        
	</body>
</html>