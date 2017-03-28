<!DOCTYPE HTML> 
<html lang="es">
	<head>
		<title>DevTorGame</title>		
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href="<?= base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="<?= base_url() . 'favicon.ico'?>" />
	</head>
	<body class="color-font">
		<video id="mivideo" autoplay="autoplay" loop>
			<source src="<?= base_url() . 'assets/img/fondo.webm' ?>" type="video/webm"></source>
		</video>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5">
				<img src="<?= base_url() . 'assets/img/Logo.png'?>" class="img-responsive img-font">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 font-text-logo">
				<p>DevTorGame</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-3 font-tex-sub">
				<p>By ArkaDev</p>
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-6 margin-btn-init" >
				<a href="index.php/torneo">
					<button type="button" class="btn-font-init">COMENZAR</button>
				</a>
			</div>	
		</div>
	</div>
	<script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>	
	<script src="<?= base_url() . 'assets/js/bootstrap.js' ?>"></script>		
	</body>
</html>