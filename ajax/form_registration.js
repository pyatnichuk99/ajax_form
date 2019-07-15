$(document).ready(function(){
    $("#email").blur(function(){
        var email=$("#email").val();
        $.ajax({
            url:'check_email.php',
            method:"POST",
            data:{email_var:email},
            success:function(data){
                if(data!=0)
                {
                    $('#email_register').html('<span class="text-danger">*Електронна адреса вже зареєстрована</span>');
                    $('.btn-secondary').attr("disabled",true);
                }
                else{
                    $('#email_register').html('<span class="text-danger"></span>');
                    $('.btn-secondary').attr("disabled",false);
                }
            }
        })
    })

    $('#form1').submit(function(event){
        event.preventDefault();
        
        var login=$("#login").val();
        var name=$("#name").val();
        var phone=$("#phone").val();
        var email=$("#email").val();
        var pass=$("#pass").val();

        if(login=='' || name==''|| phone==''|| email==''|| pass==''){
            if(login==''){
                $(".login").html("*Заповніть поле логіну");
            }
                else if(login.length<5 || login.length>90){
               $(".login").html("*Недопустима довжина логіну");
            }
            if(name==''){
                $(".name").html("*Заповніть поле імені")
            }
            else if(name.length<5 || name.length>90){
                $(".name").html("*Недопустима довжина імені");
            }
            if(phone==''){
                $(".phone").html("*Заповніть поле телефону")
            }
            if(email==''){
                $(".email").html("*Заповніть поле email")
             }
            if(pass==''){
                $(".password").html("*Заповніть поле паролю")
            } else if(pass.length<5 || pass.length>90){
               $(".password").html("*Недопустима довжина паролю");
           }         
    
         }
         else{
        $.ajax({
            type:'Post',
            url: 'php/check.php',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(){
                swal({
                    title: "Чудово!",
                    text: "Користувача успішно зареєстровано!",
                    icon: "success",
                }).then(() => {
                    location.reload();
                });
            }
         });
        }
    });
});