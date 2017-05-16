/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
            alert("Su registro ha sido exitoso");
            
        }
    });    
};

