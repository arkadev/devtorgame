<!DOCTYPE HTML> 
<html lang="es">
	<head>
		<title>DevTorGame</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">       
		<link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">
		<script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
		<script src="<?= base_url() . 'assets/js/jquery.bpopup.min.js' ?>"></script>
		<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
		<script src="<?= base_url() . 'assets/js/tournaments.js' ?>"></script>
		<script src="https://www.gstatic.com/firebasejs/4.1.1/firebase.js"></script>
		<script src="<?= base_url() . 'assets/js/firebase.js' ?>"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="shortcut icon" href="<?= base_url() . 'favicon.ico' ?>" />  
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current', {'packages':['bar']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Equipo', 'Partidas ganadas'],
					<?php
	for ($i = 0; $i < count($tourn); $i++) {
					?>
					['<?= $tourn[$i]->name; ?>', 5],
					<?php } ?>
				]);

				var options = {
					chart: {
						title: 'Estadisticas de partidas',
						subtitle: 'Partidas ganadas por cada equipo durante las fases del torneo',
					}
				};

				var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

				chart.draw(data, google.charts.Bar.convertOptions(options));
			}
		</script>

		<script>
			function pruebaDivAPdf() {
				console.log("imprime");
				var contractPreview = $(selectors.CONTRACT_PREVIEW);
				var cache_width =  contractPreview.width();
				contractPreview.width(imageWidthOnPdfPage).css('max-width','none');
				html2canvas(contractPreview,{
					imageTimeout:2000,
					removeContainer:true
				}).then(function (canvas) {
					var img = canvas.toDataURL("image/png");
					var pdf = new jsPDF({
						unit:'px',
						format:'a4'
					});
					pdf.addImage(img,'PNG', 0, 0);
					pdf.save(contract.id + "_contract.pdf")
					contractPreview.width(cache_width);
				});
			}
		</script>

		<script>
			;
			(function ($) {
				$(function () {
					$('#show-popup').bind('click', function (e) {
						e.preventDefault();
						$('#popup').bPopup({
							easing: 'easeOutBack',
							escClose: true,
							speed: 450,
							transition: 'slideDown'
						});

					});
				});
			})(jQuery);
		</script>
	</head>
	<body style="background-color: #2E393A">        
		<div class="baner-login">
			<div class="baner-menu-create">
				<a href="index.php">
					<div class="banner-btn-menu" style="margin-top: 10%;"><span class="glyphicon glyphicon-home text-btn-menu">&nbsp;&nbsp;Inicio</span></div>
				</a>
				<a href="javascript:window.history.back();"><div class="banner-btn-menu"><span class="glyphicon glyphicon-star text-btn-menu">&nbsp;&nbsp;Mis Equipos</span></div></a>
				<a href="manager"><div class="banner-btn-menu"><span class="glyphicon glyphicon-edit text-btn-menu">&nbsp;&nbsp;Mis Torneos</span></div></a>
				<a id="show-popup" href=""><div class="banner-btn-menu"><span class="glyphicon glyphicon-stats text-btn-menu">&nbsp;&nbsp;Estadisticas</span></div></a>
				<a href=""><div class="banner-btn-menu"><span class="glyphicon glyphicon-log-out text-btn-menu">&nbsp;&nbsp;Salir</span></div></a>
			</div>
			<div class="div-tournamet-table">
				<div class="div-t-t">
					<table class="table table-hover">
						<tbody>
							<tr class="tab-center">
								<th class="tab-center-header">EQUIPO</th>
								<th class="tab-center-header"></th>
								<th class="tab-center-header">Vs</th>
								<th class="tab-center-header"></th>
								<th class="tab-center-header">EQUIPO</th>	
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

			<nav class="nav-banner-manager">
				<div class="col-xs-1 col-sm-1 col-md-1  col-lg-1 ">
					<a href=""><i class="glyphicon glyphicon-align-justify nav-icon-btn"></i></a>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2  col-lg-2 ">
					<h3 class="nav-text-t"><?= $get_name = ($_GET['get_name']); echo "$get_name";?></h3>
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

			<div id="popup" class="popup-contenedor-2">
				<a href=""><span class="glyphicon glyphicon-remove close-popup" style="color:black;left:97%"></span></a>
				<div id="columnchart_material" class="estadistica"></div>
				<a onclick="window.print()" href="" ><span onclick="window.print" class="glyphicon glyphicon-print" style="color:black;left:90%;font-size: 32px;margion-top:10px;"></span></a>
			</div>
		</div>  
	</body>
</html>