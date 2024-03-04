$(function(){

    $.validator.addMethod("distintoDe", function(value){
         var no=$("#usuario").val();
      if(value === no ){
        return false
      }
      return true
    },"La clave es igual al usuario");

    $.validator.addMethod("pwcheck", function(value) {
        return /^[A-Za-z0-9]*$/.test(value) // consists of only these
            && /[a-z]/.test(value) // has a lowercase letter
            && /\d/.test(value) // has a digit
     },"La contraseña debe contener numero y letras");

    
        $("#formcontacto").validate({
            errorContainer: "#formconsole",
            errorLabelContainer: "#formconsole",
            wrapper: "span",
        rules:{
            usuario:{
                required: true,
            },
            pass:{
                required: true,
                minlength: 8,
                distintoDe: "#usuario",
                pwcheck: true
            }
        },
        message:{
            pass:{
                distintoDe:"El Usuario es igual a la clave"
            }
        }
    });

    $("#submit").click(function(){
        //let $pass=$("#pass").val();
       // let $usuario=("#usuario").val();
        
        if($("#form").valid()==false){
                $("#usuario").css("border-color","red")
                $("#pass").css("border-color","red")
                $( "#span1" ).text( "Validated..." ).show()
            }
    })
});