(function(){
	var btnSignIn = document.getElementById('btnSignIn');

	btnSignIn.addEventListener('click', e=>{
		var email = document.getElementById('email').value;
		var pass = document.getElementById('password').value;

		console.log("aawdilwawwadwdawdawdawdawd");
		console.log(email+" email");
		console.log(pass+ "password");

		firebase.auth().signInWithEmailAndPassword(email, pass).catch(function(error) {
			alert("Autentificacion incorrecta");
		});
	})	

	firebase.auth().onAuthStateChanged( firebaseUser => {
		if (firebaseUser) {
			window.location="application/view/manager.php";
		}else{
			console.log("no logeado");
		}
	});
}());