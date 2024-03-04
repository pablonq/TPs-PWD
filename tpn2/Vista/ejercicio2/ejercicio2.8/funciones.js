$(document).ready(function () {

    $("#form8").validate({

        rules: {
            edad: {
                required: true,
                number: true,
                maxlength: 3
            },
            estudia: {
                required: true
            }
        },
        messages: {
            
            edad:{
                required: "<p class='text-danger'>edad requerida,La edad no puede contener letras.</p>"
            },
            estudia: {
            required:"<p class='text-danger'>Seleccione una opción..</p>" 
        }
    }
    });
});