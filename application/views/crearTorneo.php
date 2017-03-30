<!DOCTYPE HTML> 
<html lang="es">
	<head>
		<title>Crear Torneo</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href="<?= base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="<?= base_url() . 'favicon.ico'?>" />
		<script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>	
		<script src="<?= base_url() . 'assets/js/bootstrap.js' ?>"></script>
		<script src="<?= base_url() . 'assets/js/tournaments.js' ?>"></script>
	</head>
	<body style="background-color: #EEEEEE">
		<div class="row">
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
		</div>	
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
			 <img src="<?= base_url() . 'assets/img/lol11.jpg'?>" class="img-add-tournament">
			</div>
		</div>
		<div class="row">
			<div name="add-tournament-btn">
				<button class="col-xs-12 col-sm-12 col-md-2 col-md-offset-2 add-tournament" data-toggle="modal" data-target="#myModal">
					<div class="margin-icon">
					 <img src="<?= base_url() . 'assets/img/add-icon.png'?>" class="icon-add-tournament">
					</div>
					<div class="text-center font-text-icon">
						<h4>Crear un torneo</h4>
					</div>
				</button>
			</div>
		</div>

		<div class="modal fade" id="myModal" role="dialog" >
			<div class="modal-dialog">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<div class="modal-content">
						<div class="add-img-btn">
						 <img src="<?= base_url() . 'assets/img/lol11.jpg'?>" class="img-responsive">
						</div>
						<div id="baner-color" class="add-dates-tournametn">
							<div>
								<input id="name" type="text" class="text-name-tournament" placeholder="Nombre de torneo">
							</div>
							<div id="textarea-line">
								<textarea class="text-name-tournament" rows="1" id="comment" placeholder="Descripcion del torneo"></textarea>
							</div>
						</div>
						<div class="container-fluid">
							<div class="col-xs-12 col-sm-12 col-md-1">
								<button class="btn-circle btn-color"  style="background-color:#E53935" id="color-btn-1" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#029AE4" id="color-btn-2" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#00887A" id="color-btn-3" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#A900FF" id="color-btn-4" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#414141" id="color-btn-5" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#378D3B" id="color-btn-6" onclick="coloBtn(this.id)"></button>
							</div>
						</div>
						<div class="container-fluid"> 
							<div class="col-xs-12 col-sm-12 col-md-1 s">
								<button class="btn-circle btn-color" style="background-color:#679E37" id="color-btn-7" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#F8A724" id="color-btn-8" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#FF6F42" id="color-btn-9" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color"style="background-color:#778F9B" id="color-btn-10" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#8C6D62" id="color-btn-11" onclick="coloBtn(this.id)"></button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
								<button class="btn-circle btn-color" style="background-color:#7D56C1" id="color-btn-12" onclick="coloBtn(this.id)"></button>
							</div>
						</div>
						<div class="container-fluid">
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-6">
								<button class="btn-add-tournamet-validate">CANCELAR</button>
								<a href="<?= base_url() . 'index.php/team'?>">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-2">
								<button id="insertTournament" type="buttonAdd" value="sent" class="btn-add-tournamet-validate" onclick="insertTournament()">CREAR</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</body>
</html>