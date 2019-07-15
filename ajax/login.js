$(document).ready(function(){
    $('#login_submit').click(function(event){
			
			event.preventDefault();
            
            var email=$("#email_login").val();
            var pass=$("#pass_login").val();
     
            $.ajax({
                method: 'POST',
                url: 'php/auth.php',
                data: "email_login=" + email + "&pass_login=" + pass,
                success: function(arg,arg2,request){
                    var response = JSON.parse(request.responseText);
                    if(response['success']){
                        location.reload();
                    }

                    if(response['error'] ) {
                        swal({
                            title: "Помилка!",
                            text: "Перевірте правильність логіну та паролю!",
                            icon: "error",
                        });
                         if(email=="" || pass==""){
                            swal({
                                title: "Помилка!",
                                text: "Заповніть поля вводу",
                                icon: "error",
                            });
                         }                  
                        
                    }
                }
            });
        })
    })