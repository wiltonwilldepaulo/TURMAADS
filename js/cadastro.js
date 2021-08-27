
$(document).ready(function () {

    $('#frmcadastro').validate({
        rules: {
            edtimagems: {
                required: true,
                file: true,
            },
            agree: "required"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

    $("#bntsalvar").click(function () {
        let valida = $('#frmcadastro').valid();
        if (valida == true) { alert(); } else { }
    });

});