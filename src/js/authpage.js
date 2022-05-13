$(function(){
    $(".reg").hide();
    $(".tel").mask('+7 (999) 999-99-99');
    $(".notification").hide();
    $(".switch").on("click", function(){
        $(".reg").toggle(500)
        $(".auth").toggle(500);
    });

    $('input[value="Войти"]').on("click", function(e){
        e.preventDefault();
        let email = $('input[name="mail1"]').val(),
            password = $('input[name="password1"]').val();
        $.ajax({
            url: '../../core/profile.php',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                password: password
            },
            success (data) {
    
                if (data.status) {
                    document.location.href = '../../core/profile.php';
                } else {
    
                    if (data.type === 1) {
                        data.fields.forEach(function (field) {
                            $(`input[name="${field}"]`).addClass('error');
                        });
                    }
    
                }
    
            }
        });
    });

    $('input[value="Зарегистрироваться"]').on("click", function(e){
        e.preventDefault();
        let email = $('input[name="mail"]').val(),
            password = $('input[name="password"]').val(),
            password_confirm = $('input[name="password_confirm"]').val(),
            tel = $('input[name="tel"]').val(),
            firstName = $('input[name="last_name"]').val(),
            lastName = $('input[name="first_name"]').val(),
            address = $('input[name="address"]').val();
    });
});