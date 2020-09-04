<?php
if(isset($_POST['submit_password']))
{
  $email=$_POST['email'];
  $pass=$_POST['confirmpassword'];
  $pass=password_hash($pass, PASSWORD_DEFAULT);
      require('db_connect.php');
      $query = "UPDATE `users` SET `pwdUsers` = '$pass' WHERE MD5(`emailUsers`) = '$email'";
    $result = mysqli_query($conn, $query);
    if($result)
        echo "<script>alert('Password Succesfully Changed!');location='../../index.php';</script>";
    else
        echo "Server Failure";
}
?>