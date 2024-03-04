$(function(){

    $("#form").validate({
        
        rules:{
            nombreForm:{
                required: true,
            },
            apellidoForm:{
                required: true,
            },
            edadForm:{
                required: true,
            },
            direccionForm:{
                required: true,
            }
        },
        messages: {
            nombreForm:{
                required: "<p class='text-danger'>Campo requerido.</p>"
            },
            apellidoForm:{
                required: "<p class='text-danger'>Campo requerido.</p>"
            },
            edadForm:{
                required: "<p class='text-danger'>Campo requerido.</p>"
            },
            direccionForm:{
                required: "<p class='text-danger'>Campo requerido.</p>"
            }
        }
    });

    $("#submit").click(function(){
        
        if($("#form").valid()==false){
            $("#nombreForm").css("border-color","red")
            $("#apellidoForm").css("border-color","red")
            $("#edadForm").css("border-color","red")
            $("#direccionForm").css("border-color","red")

        }
    });

})