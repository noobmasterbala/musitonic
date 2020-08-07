<?php

if ( isset($_POST['register-submit'])){
    require 'db_connect.php';
    
    
    $username=$_POST['uid'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $pwd=$_POST['pwd'];
    $pwdrepeat=$_POST['pwd-repeat'];


    if(empty($username) ||empty($mail) ||empty($phone) ||empty($pwd) ||empty($pwdrepeat) ){
        header("Location: ../assets/php/register.php?error=emptyfields&uid=".$username."&mail=".$mail);
        exit();
    }
    else if(!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../assets/php/register.php?error=invalidmailusername");
        exit();
    }
    else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../assets/php/register.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../assets/php/register.php?error=invalidusername&mail=".$mail);
        exit();
    }
    
    else if($pwd !== $pwdrepeat){
        header("Location: ../assets/php/register.php?error=passwordcheck&uid=".$username."&mail=".$mail);
        exit();

    }
    else
    {
        $sql="SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt=mysqli_stmt_init();
        



    }

}