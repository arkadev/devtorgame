<!DOCTYPE html>
<html lang="es">
	<head>
		<title>DevTorGame</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
		<link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://www.gstatic.com/firebasejs/4.1.1/firebase.js"></script>
		<script src="<?= base_url() . 'assets/js/firebase.js' ?>"></script>
	</head>
	<body>
		<div >
			<img src="<?= base_url() . 'assets/img/fondo-login.png' ?>" class="banner-fondo-s">
			<div class="col-xs-6 col-sm-6 col-md-3  col-lg-3 col-xs-offset-4  col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
				<div class="card-login">
					<form class="form">
						<div class="header header-primary text-center">
							<div class="circle-img-logo">
								<a href="<?= base_url() . '' ?>">
									<img src="<?= base_url() . 'assets/img/logoD.png' ?>" class="img-responsive img-login-logo">
								</a>
							</div>
							<h4>DevTorGame</h4>
						</div>
						<div class="input-container">
							<input id="email" type="text"  required="required"/>
							<label for="#{label}" >
								<span class="glyphicon glyphicon-user"></span>
								Correo electronico</label>
							<div class="bar"></div>
						</div>
						<div class="input-container">
							<input id="password" type="password"  required="required"/>
							<label for="#{label}">
								<span class="glyphicon glyphicon-lock"></span>
								Contraseña</label>
							<div class="bar"></div>
						</div>
						<div class="input-container">
							<input id="repPassword" type="password"  required="required"/>
							<label for="#{label}">
								<span class="glyphicon glyphicon-lock"></span>
								Repetir Contraseña</label>
							<div class="bar"></div>
						</div>
						<div class="col-xs-8 col-sm-7 col-md-8  col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-32 col-lg-offset-2">
							<button id="btnSignUpB" class="btn-login">REGISTRAR</button>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 banner-login-register">
							<p class="text-banner-register-login">¿Ya tienes cuenta? <a href="<?= base_url() . 'signIn' ?>" class="colo-text-login">Inciar Sesión</a></p>
						</div>    
					</form>
				</div>
			</div>
		</div>
		<script src="<?= base_url() . 'assets/js/signUp.js' ?>"></script>
	</body>
</html>