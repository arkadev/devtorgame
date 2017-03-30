function cambiar(id_val){ 
    var image1 = "../assets/img/LikeGreen.png";
    var image2 = "../assets/img/Dislike.png";
    var a=  parseInt(id_val.charAt(4));
    console.log(a%2!=0);
    if(a%2==0){        
        if(document.images["like".concat(a+1)]!=null){
            if(a%2==0){                    
                document.images[id_val].src=image1;
                document.images["like".concat(a+1)].src=image2;
            }else{
                document.images[id_val].src=image1;
                document.images["like".concat(a-1)].src=image2;    
            }
        }
    }else{
        if(a%2==0){                    
                document.images[id_val].src=image1;
                document.images["like".concat(a+1)].src=image2;
            }else{
                document.images[id_val].src=image1;
                document.images["like".concat(a-1)].src=image2;    
            }

    }
};            

function coloBtn(id){
	document.getElementById("baner-color").style.backgroundColor = document.getElementById(id).style.backgroundColor;			
};
            
function insertTournament() {
    data = {
        name: $('#name').val()		
    };
    $.ajax({
        url: 'teamcreate/insertTournament',
        data: data,
        type: 'post',
        success: function () {
            location.reload();
        }
    });
};