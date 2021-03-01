$(document).ready(function () {
    $("#form").validate({
        errorClass: "fieldError",

        rules: {

            lastname: "required",
            firstname: "required",
            phoneNumber: {
                required: true,
                number: true
            },
            email: {
                required: true,
                email: true
            },
            password: "required",
            confirmPassword: "required",
        },

        messages: {
            lastname: "Veuillez insérer votre nom",
            firstname: "Veuillez insérer votre prénom",
            phoneNumber: 'Veuillez insérer un numéro de téléphone',
            email: "Veuillez saisir une adresse mail valide",
            password: "Veuillez saisir un mot de passe",
            confirmPassword: "Veuillez confirmer le mot de passe",
        },

        submitHandler: function (form) {
            if ($("#form").valid())
            {
                form.submit();
            }
        }
    });
})

$(document).ready(function () {
    $("form").submit(function () {
        if (!verifyPassword()) {
            return false;
        }
    });
})

function verifyPassword() {
    if ($("#password").val() != $("#confirmPassword").val()) {
        alert("Les mots de passe doivent être identiques !");
        return false;
    }
}