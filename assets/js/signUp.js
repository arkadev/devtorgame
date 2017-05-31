(function(){

	var btnSignUpB = document.getElementById('btnSignUpB');

	btnSignUpB.addEventListener('click', e=>{
		var email = document.getElementById('email').value;
		var pass = document.getElementById('password').value;
		var passR = document.getElementById('repPassword').value;

		if(pass===passR){
			firebase.auth().createUserWithEmailAndPassword(email, pass).catch(function(error) {
				alert("No se pudo registar");
			});
		}else{
			alert("Los datos no coinciden");
		}
	})	

	firebase.auth().onAuthStateChanged( firebaseUser => {
		if (firebaseUser) {
			window.location="application/view/manager.php";
		}else{
			console.log("no logeado");
		}
	});

}());