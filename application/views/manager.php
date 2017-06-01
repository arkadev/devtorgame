<!DOCTYPE HTML> 
<html>
	<head>
		<title>Torneos</title>
		<title>DevTorGame</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
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

		<script>
			$(".clickable").click(function () {
				if ($(this).height() == 50) {
					$(this).height(10);
				} else {
					$(this).height(50);
				}
			});
		</script>      
	</head>
	<body>
		<div class="baner-login">
			<div class="baner-menu-create">
				<a href="index.php"><div class="banner-btn-menu" style="margin-top: 10%;"><span class="glyphicon glyphicon-home text-btn-menu">&nbsp;&nbsp;Inicio</span></div></a>
				<a id="show-popup" href=""><div class="banner-btn-menu"><span class="glyphicon glyphicon-plus-sign text-btn-menu">&nbsp;&nbsp;Nuevo torneo</span></div></a>
				<a href=""><div class="banner-btn-menu"><span class="glyphicon glyphicon-log-out text-btn-menu">&nbsp;&nbsp;Salir</span></div></a>
			</div>	

			<div class="banner-cars">
				<a id="show-popup">
					<div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-1  col-sm-offset-1 col-md-offset-1 col-lg-offset-1 cart-crete" style="width: 22%;">
						<div class="margin-icon">
							<img src="<?= base_url() . 'assets/img/add.png' ?>" class="icon-add-tournament">
						</div>
						<div class="margin-icon">
							<p class="text-cart-create">Crear un torneo</p>
						</div>
					</div>
				</a>	
				<?php
	if (is_array($tournaments) || is_object($tournaments))
	{
		foreach ($tournaments as $t)
		{
				?>
				<a href="<?= base_url() . 'team' ?>?name_tournament=<?php echo $t->name ?>">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-1  col-sm-offset-1 col-md-offset-1 col-lg-offset-1 cart-crete" style="width: 22%; background-color:<?= $t->color; ?>;" id="nnnnn <?= $t->name; ?>">
					<p class="nombre-torneo"><?= $t->name; ?></p>
					<p class="descripcion-torneo"><?= $t->description; ?></p>
						
<!--<div>
<img src="<?= base_url() . 'assets/img/lol11.jpg' ?>" class="img-responsive margin-icon" >
</div>
<div>
<h3><?= $t->name; ?></h3>
<h5><?= $t->description; ?></h5>
</div>
</div>-->
					</div>
				</a>
				<?php
		}
	} else
	{
				?>
				<tr><td></td><td></td></tr>                                                                              
				<?php } ?>

			</div>

			<nav class="nav-banner-manager">
				<div class="col-xs-1 col-sm-1 col-md-1  col-lg-1 ">
					<a href=""><i class="glyphicon glyphicon-align-justify nav-icon-btn"></i></a>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2  col-lg-2 ">
					<h3 class="nav-text-t">MIS TORNEOS</h3>
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

			<div id="popup" class="popup-contenedor">
				<form>
					<div  id="baner-color" class="div-modal-name">
						<a href="manager"><span class="glyphicon glyphicon-remove close-popup"></span></a>
						<input id="name" class="iput-texrt-modal-name col-xs-10 col-sm-10 col-md-10 col-lg-10" placeholder="Nombre de torneo"/>
						<input id="description" class="iput-texrt-modal-name col-xs-10 col-sm-10 col-md-10 col-lg-10" style="top:55%;" placeholder="Descripcion"/>
					</div>
					<div class="div-btn-colors">
						<button type="button" class="btn-color" style="background-color:#E53935;" id="color-btn-1" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#029AE4;" id="color-btn-2" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#00887A;" id="color-btn-3" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#A900FF;" id="color-btn-4" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#414141;" id="color-btn-5" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#378D3B;" id="color-btn-6" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#679E37;" id="color-btn-7" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#F8A724;" id="color-btn-8" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#FF6F42;" id="color-btn-9" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#778F9B;" id="color-btn-10" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#8C6D62;" id="color-btn-11" onclick="coloBtn(this.id)"></button>
						<button type="button" class="btn-color" style="background-color:#7D56C1;" id="color-btn-12" onclick="coloBtn(this.id)"></button>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-4  col-sm-offset-4 col-md-offset-4 col-lg-offset-4">                            
						<button type="button" class=" btn-create-popup" onclick="insertTournament()"><span class="glyphicon glyphicon-ok btn-create-ok"></span></button>
					</div>
				</form>
			</div>


		</div>
	</body>
</html>