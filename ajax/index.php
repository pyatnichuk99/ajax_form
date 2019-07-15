<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма реєстрації</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<!-- Створення форм через боотстрап -->
    <div class="container mt-4">   
    <?php
    if($_COOKIE['user']==''):    
    ?>
    <div class="row">
        <div class="col">
                <h1>Форма реєстрації</h1>
            <form id="form1" action="php/check.php" method="POST">
                <input name="login" id="login" type="text" class="form-control" placeholder="Введіть логін">
                <div class="login"></div>
                <br>
                <input name="name" id="name" type="text" class="form-control" placeholder="Введіть ім’я">
                <div class="name"></div>
                <br>
                <input name="phone" id="phone" type="tel" class="form-control" placeholder="Введіть телефон"> 
                <div class="phone"></div>
                <br>
                <input name="email" id="email" type="email" class="form-control" placeholder="Введіть електронну адресу">
                <div class="email"></div>
                <span id="email_register"></span>
                <br>
                <input name="pass" id="pass" type="password" class="form-control" placeholder="Введіть пароль">
                <div class="password"></div>
                <br>
                <button type="submit" class="btn-secondary">Зареєструватись</button>
            </form>
        </div>

        <div class="col">
                <h1>Форма авторизації</h1>
            <form id="form_login" action="php/auth.php" method="POST">
                <input name="email_login" id="email_login" type="email" class="form-control" placeholder="Введіть email"> <br>
                <span id="email_login_label"></span>
                <input name="pass_login" id="pass_login" type="password" class="form-control" placeholder="Введіть пароль"> <br>
                <button type="submit" id="login_submit" class="btn_success btn-success">Увійти</button>       
            </form>
        </div>
       
    </div>
    <!-- Коли користувач авторизувався то переправляєм його на іншу сторінку де через посилання він може вернутись на головну-->
      <?php else:?>
        
        <p>Привіт <?=$_COOKIE['user']?>. Щоб вийти натисніть <a href="/ajax/exit.php">тут</a>.</p>
        
        
    <?php endif;
        ?>

</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="login.js"></script> 
<script src="form_registration.js"></script>
<script src="check_login_auth.js"></script>
<script>
    $(function(){
    $("#phone").mask("+380(99) 99-99-999");
});
</script>
</body>
</html>
