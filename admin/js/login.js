$(function() {
    $("input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var login = $("input#login").val();
            var password = $("input#password").val();
            $.ajax({
                url: "././mail/login.php",
                type: "POST",
                data: {
                    login: login,
                    password: password
                },
                cache: true,
                success: function() {
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>LOGADO </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#loginForm').trigger("reset");
                }
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


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
