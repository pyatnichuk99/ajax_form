$(document).ready(function(){
    $("#email_login").blur(function(){
        var email=$("#email_login").val(); 
        $.ajax({
            url:'check_email.php',
            method:"POST",
            data:{email_var:email},
            success:function(data){
                if(data!=0)
                {
                    $('#email_login_label').html('<span></span>');
                    $('.btn-success').attr("disabled",false);
                }
                else{
                    $('#email_login_label').html('<span>*Немає користувача з даним емайлом</span>');
                    $('.btn-success').attr("disabled",true);
                }
            }
        })
    });
})