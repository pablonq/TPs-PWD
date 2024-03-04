$(function(){

    $("#form").validate({
        
        rules:{
            nombre:{
                required: true,
            },
            apellido:{
                required: true,
            },
            edad:{
                required: true,
            },
            direccion:{
                required: true,
            }
        },
        messages: {
            nombre:{
                required: "<p class='text-danger'>Nombre requerido.</p>"
            },
            apellido:{
                required: "<p class='text-danger'>Apellido requerido.</p>"
            },
            edad:{
                required: "<p class='text-danger'>edad requerida.</p>"
            },
            direccion:{
                required: "<p class='text-danger'> requerida.</p>"
            }
        }
    });

    $("#submit").click(function(){
        if($("#form").valid()==false){
            $("#nombre").css("border-color","red")
            $("#apellido").css("border-color","red")
            $("#edad").css("border-color","red")
            $("#direccion").css("border-color","red")

        }
    });

})