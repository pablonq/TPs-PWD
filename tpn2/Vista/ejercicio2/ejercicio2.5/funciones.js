$(document).ready(function () {

    //Agrego un método para validar el nombre y apellido
    jQuery.validator.addMethod("validarTexto", function (value, element) {
        return this.optional(element) || /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(value);
    }, "No puede contener números.");


    $("#form3").validate({

        rules: {
            nombre: {
                required: true,
                minlength: 3,
                validarTexto: true
            },
            apellido: {
                required: true,
                minlength: 3,
                validarTexto: true
            },
            edad: {
                required: true,
                maxlength: 3,
                number: true
            },
            direccion: {
                required: true,
            },
            estudios: {
                required: true
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
                    required: "<p class='text-danger'>Direccion requerida.</p>"
                },
                estudios: {
                required:"<p class='text-danger'>Seleccione una opción..</p>" 
            }
        }
    });
});