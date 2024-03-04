$(function(){

    $("#form").validate({
        rules:{
            num1:{
                required: true,
            },
            num2:{
                required: true,
            } 
        },
        messages: {
            
            num1:{
                required: "<p class='text-danger'>campo requerido <br> Ingrese un numero</p>"
            },
            num2: {
               required:"<p class='text-danger'>campo requerido <br> ingrese un numero</p>" 
          },
    }
    });

    $("#submit").click(function(){
        if($("#form").valid()==false){
            $("#num1").css("border-color","red")
            $("#num2").css("border-color","red")       
        }
        
    });

});