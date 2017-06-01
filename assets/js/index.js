(function(){
	var btn_r = document.getElementById('btn-r-index');
	var btn_i = document.getElementById('btn-i-index');
	var btn_c = document.getElementById('btn-c-index');
	var btn_m = document.getElementById('btn-m-index');

	var btn_r2 = document.getElementById('btn-r2-index');
	var btn_i2 = document.getElementById('btn-i2-index');
	var btn_c2 = document.getElementById('btn-c2-index');
	var btn_m2 = document.getElementById('btn-m2-index');

	var btn_r3 = document.getElementById('btn-r3-index');
	var btn_i3 = document.getElementById('btn-i3-index');
	var btn_c3 = document.getElementById('btn-c3-index');
	var btn_m3 = document.getElementById('btn-m3-index');

	var btn_m4 = document.getElementById('btn-m4-index');



	btn_c.addEventListener('click', e=>{
		firebase.auth().signOut();
	})

	btn_c2.addEventListener('click', e=>{
		firebase.auth().signOut();
	})

	btn_c3.addEventListener('click', e=>{
		firebase.auth().signOut();
	})

	firebase.auth().onAuthStateChanged( firebaseUser => {
		if (firebaseUser) {
			btn_c.style.display='block';
			btn_m.style.display='block';
			btn_i.style.display='none';
			btn_r.style.display='none';

			btn_c2.style.display='block';
			btn_m2.style.display='block';
			btn_i2.style.display='none';
			btn_r2.style.display='none';

			btn_c3.style.display='block';
			btn_m3.style.display='block';
			btn_i3.style.display='none';
			btn_r3.style.display='none';

			btn_m4.style.display='block';
			console.log("logeado");
		} else {
			btn_c.style.display='none';
			btn_m.style.display='none';
			btn_i.style.display='block';
			btn_r.style.display='block';

			btn_c2.style.display='none';
			btn_m2.style.display='none';
			btn_i2.style.display='block';
			btn_r2.style.display='block';

			btn_c3.style.display='none';
			btn_m3.style.display='none';
			btn_i3.style.display='block';
			btn_r3.style.display='block';

			btn_m4.style.display='none';
		}
	});
}());