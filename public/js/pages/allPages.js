(function () {
    'use strict';

    STUDENT.admin.table = function () {
        
        $('#studentTable').DataTable();
        
    }

    STUDENT.admin.login = function () {
        
        $('#adminlogin').submit(function(e) {

            var formData = {
                'email' : $('#email').val().trim(),
                'password' : $('#password').val().trim(),
                '_token' : $('input[name=_token]').val()
            };

            $.ajax({
                type: 'POST',
                url: '/admin/login',
                data: formData,
                success: function (data) {
                    var response = jQuery.parseJSON(data);
                    if (response.success === 'success') {
                        $("button").text("Loading...").attr("disabled", true);
                        $("#adminlogin")[0].reset();
                        setTimeout(function(){
                            window.location.href = "/";
                        },1000);
                    }	
                },
                error: function (request, error) {
                    var errors = jQuery.parseJSON(request.responseText);
                    var ul = document.createElement('ul');
                    $.each(errors.errors, function (key, value) {
                        var li = document.createElement('li');
                        li.appendChild(document.createTextNode(value));
                        ul.appendChild(li);
                    });
                        $(".error").css("display", 'block').removeClass('alert-success').addClass('alert-danger').delay(6000).slideUp(300).html(ul);
                }
            });
            e.preventDefault();
        });

    }


    
})();