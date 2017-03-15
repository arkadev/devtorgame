//Inserta un equipo a la base de datos por medio del controlador torneo
function insertTeam() {
    data = {
        name: $('#name').val()
    };
    $.ajax({
        url: 'torneo/insertTeam',
        data: data,
        type: 'post',
        success: function () {
            location.reload();
        }
    });
}
//Crea el torneo por medio del controlador torneo
function createTourn() {
    $.ajax({
//        url: 'torneo/createTourn',
//        type: 'push',        
        success: function () {            
            alert("Torneo Creado");
            location.reload();
        }
    });
}


