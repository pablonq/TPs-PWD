$(function () {

    $("#formulario").validate({
        rules: {
            numero: {
                required: true,
            },
        },
        messages: {
            numero: {
                required: "<p class='text-danger'>Número requerido.</p>"
            }
        }
    });

    $("#submit").click(function () {

        if ($("#formulario").valid() == false) {
            $("#numero").css("border-color", "red")
        }
    })
});