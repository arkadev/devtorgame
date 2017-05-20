function registerUser() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    data = {
        email:email,
        password:password
    };
    $.ajax({
        url: 'signUp/register',
        data: data,
        type: 'post',
        success: function () {
            console.log("sqwqe");
            alert("Su registro ha sido exitoso");
            location.href="singIn";
        }
    });
};
