<!DOCTYPE HTML> 
<html lang="es">
	<head>
		<title>DevTorGame</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="Refresh" content="5" url="https://www.facebook.com/arkadev.sas.1?fref=ts">
		<meta http-equiv="Refresh" content="5" url="https://twitter.com/ArkaDevGroup">
		<link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css'?>">
		<script src="<?= base_url() . 'assets/js/jquery.js'?>"></script>
	</head>
	<body>
		<div class="baner-init">
			<img src="<?= base_url() . 'assets/img/lol1.png'?>" class="img-font">
			<div>
				<img src="<?= base_url() . 'assets/img/logoD.png'?>" class="img-logo-init">
				<p class="font-text-logo">DevTorGame</p>
			</div>

			<div >
				<a href=""><img src="<?= base_url() . 'assets/img/menu.png'?>" class="menu-mob"></a>
			</div>
			<nav class="menu">
				<ul class="active">
					<li class="current-item"><a href="#" class="a1">INICIO</a></li>
					<li class="current-item"><a href="#" class="a1">SERVICOS</a></li>
					<li class="current-item"><a href="#" class="a1">CLIENTES</a></li>
					<li class="current-item"><a href="#" class="a1">CONTACTOS</a></li>
					<li class="current-item"><a href="<?= base_url() . 'index.php/singin'?>" class="a1">INICIAR SESIÓN</a></li>
					<li class="current-item"><a href="#" class="a1">REGISTRARSE</a></li>
				</ul>
			</nav>
			<div class="div-text-init">
				<p class="text-tournament">¡TORNEOS ONLINE!</p>
				<p class="text-sub-tournament">Crea y administra tus propios torneos.</p>
			</div>
			<div>
                <a href="<?= base_url() . 'index.php/singin'?>">
                    <button class="btn-init" type="button">COMENZAR</button>
                </a>				
			</div>
		</div>
		<div class="baner-services baner-services-1">
			<img src="<?= base_url() . 'assets/img/campeon1.png'?>" class="img-campeon">
			<div class="text-baner-1-title">
				<p class="text-baner-title ">SERVICIOS</p>
				<textarea cols="15" rows="5" class="textarea-init">Somos una empresa dedicada al desarrollo de software, aplicaciones web, Stand Alone y móviles, además diseñamos y gestionamos la configuración de red.</textarea>
			</div>
		</div>
		<div class="baner-services baner-services-2">
			<img src="<?= base_url() . 'assets/img/campeon2.png'?>" class="img-campeon2">
			<div class="text-baner-2-title">
				<p class="text-baner-title">CLIENTES</p>
				<textarea cols="15" rows="5" class="textarea-init">Nuestros clientes son personas que dedican su tiempo y esfuerzo a la organización de torneos de videojuegos especialmente de League Of Legends, perteneciente a la compañia Riot Games.</textarea>
			</div>
		</div>
		<div class="baner-services baner-services-3">
			<img src="<?= base_url() . 'assets/img/campeon3.png'?>" class="img-campeon">
			<div class="text-baner-1-title">
				<p class="text-baner-title">CONTACTOS</p>
				<textarea rows="5" class="textarea-init">El grupo de trabajo esta conformado por tres Ingenieros de Sistemas y Computación con mas de cuatro años de experiencia en desarrollo de software y diseño de redes.</textarea>
			</div>
		</div>
		<div class="baner-contact">
			<a href="https://www.facebook.com/arkadev.sas.1?fref=ts" target="_blank">
				<img src="<?= base_url() . 'assets/img/iconf.png'?>" class="icon-contact icon1">
			</a>
			<a href="https://twitter.com/ArkaDevGroup" target="_blank">
				<img src="<?= base_url() . 'assets/img/icont.png'?>" class="icon-contact icon2">
			</a>
		</div>
	</body>
</html>
