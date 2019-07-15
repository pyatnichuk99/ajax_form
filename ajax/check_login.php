<?php
session_start();

$email=filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);


$pass=md5($pass."fdgdfgdfvxcv12312434554");
$connect=mysqli_connect('localhost','root','','register');
$sql="SELECT `email`,`pass` FROM `users` WHERE `email`='$email' AND `pass`='$pass'";
$result=mysqli_query($connect,$sql);

$num_rows=mysqli_num_rows($result);

if($num_rows>0){
    echo "Такого користувача не знайдено";
    exit();

} 
setcookie('user',$user['email_login'],time()+3600*24,"/");
$sql->close();
//Повертаємось на головну сторінку
header('Location:/exit.php');

?>