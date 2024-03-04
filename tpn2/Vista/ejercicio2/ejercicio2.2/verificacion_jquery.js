$(function(){

    $("#form").validate({

        rules:{
            lunes:{
                required: true,
            },
            martes:{
                required: true,
            },
            miercoles:{
                required: true,
            },
            jueves:{
                required: true,
            },
            viernes:{
                required: true,
            }
        }

    });

    $("#submit").click(function(){
        
        if($("#form").valid()==false){
            $("#hsLunes").css("border-color","red")
            $("#hsMartes").css("border-color","red")
            $("#hsMiercoles").css("border-color","red")
            $("#hsJueves").css("border-color","red")
            $("#hsViernes").css("border-color","red")
        }
    });

});