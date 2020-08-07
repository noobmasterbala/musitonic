<?php

if ( isset($_POST['register-submit'])){
    require 'db_connect.php';
    
    
    $username=$_POST['uid'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $pwd=$_POST['pwd'];
    $pwdrepeat=$_POST['pwd-repeat'];


    if(empty($username) ||empty($mail) ||empty($phone) ||empty($pwd) ||empty($pwdrepeat) ){
        header("Location: ../php/register.php?error=emptyfields&uid=".$username."&mail=".$mail);
        exit();
    }
    else if(!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../php/register.php?error=invalidmailusername");
        exit();
    }
    else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../php/register.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../php/register.php?error=invalidusername&mail=".$mail);
        exit();
    }
    
    else if($pwd !== $pwdrepeat){
        header("Location: ../php/register.php?error=passwordcheck&uid=".$username."&mail=".$mail);
        exit();

    }
    else
    {
        $sql="SELECT uidUsers FROM users WHERE uidUsers=?;";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../php/register.php?error=sqlerror");
                exit();
        }  
        else{
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                echo mysqli_error($conn);
                mysqli_stmt_store_result($stmt);
                $resultcheck=mysqli_stmt_num_rows($stmt);
                if($resultcheck>0){
                    header("Location: ../php/register.php?error=usernametaken&mail=".$mail);
                exit();

                }
                else
                {
                    $sql="INSERT INTO users (uidUsers, emailUsers, phoneUsers, pwdUsers) VALUES (?,?,?,?);";
                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../php/register.php?error=sqlerror");
                        exit();
                    }
                    else{
                        $hashpwd=password_hash($pwd, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "ssis", $username,$mail,$phone,$hashpwd);
                        mysqli_stmt_execute($stmt);
                        //header("Location: ../php/register.php?signup=success");
                        exit();
                    
                    }
                }      

            }
    

        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

}
else{
    header("Location: ../php/register.php");
    exit();
}