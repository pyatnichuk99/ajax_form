<?php
$connect=mysqli_connect('localhost','root','','register');
if(isset($_POST["email_var"]))
{
    $email=mysqli_real_escape_string($connect,$_POST["email_var"]);
    $query="SELECT `email` FROM `users` WHERE `email`='$email'";
    $result=mysqli_query($connect,$query);
    echo mysqli_num_rows($result);
}
?>