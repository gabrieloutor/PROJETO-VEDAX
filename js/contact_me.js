$(function() {
    $("input,textarea,select").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {},
        submitSuccess: function($form, event) {
            event.preventDefault();
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var departament = $("select#departament").val();
            var message = $("textarea#message").val();
            var tipoLinguagem = $("input#tipoLinguagem").val();
            var indication = $("select#indication").val();
            var firstName = name;
            var response = grecaptcha.getResponse();
            if(response.length == 0){
                $('#success').html("<div class='alert alert-danger'>");
                $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                $('#success > .alert-danger').append("<strong>Desculpe " + firstName + ", Captcha inválido.");
                $('#success > .alert-danger').append('</div>');
                grecaptcha.reset();
                return false;
            }
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "././mail/contact_me_bd.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    departament: departament,
                    email: email,
                    message: message,
                    indication: indication,
                    tipoLinguagem: tipoLinguagem
                },
                cache: false,
                success: function() {
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                    $('#success > .alert-success').append("<strong>Sua mensagem foi enviada. Agradecemos o contato. </strong>");
                    $('#success > .alert-success').append('</div>');
                    $('#contactForm').trigger("reset");
                    grecaptcha.reset();
                },
                error: function() {
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                    $('#success > .alert-danger').append("<strong>Desculpe " + firstName + ", parece que o nosso servidor de correio não está respondendo. Por favor, tente novamente mais tarde!");
                    $('#success > .alert-danger').append('</div>');
                    $('#contactForm').trigger("reset");
                    grecaptcha.reset();
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });
    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});
$('#name').focus(function() {
    $('#success').html('');
});