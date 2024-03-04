$(function(){

    $("#submit").click(function(){
        if($("#form3").valid()==false){
            $("#nombre").css("border-color","red")
            $("#apellido").css("border-color","red")
            $("#edad").css("border-color","red")
            $("#direccion").css("border-color","red")       
        }
        
    });

})