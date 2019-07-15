<?php
$email=filter_var(trim($_POST['email_login']),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass_login']),FILTER_SANITIZE_STRING);

$pass=md5($pass."fdgdfgdfvxcv12312434554");
$response = array();

$mysql=new mysqli('localhost','root','','register');
$result=$mysql->query("SELECT * FROM `users` WHERE `email`='$email' AND `pass`='$pass' ");
$user=$result->fetch_assoc();
if($user!=0)
{
    $response["success"] = 'OK';
    setcookie('user',$user['email'],time()+3600*24,"/");
    $mysql->close();
    header('Location:/ajax/');
  
}else{
    $response["error"] = 'Error';
}

echo json_encode($response);  
?>