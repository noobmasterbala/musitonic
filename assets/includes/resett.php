<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/86ec0b8aee.js" crossorigin="anonymous"></script>
    <style>
    @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url('../img/login_space1.jpg') no-repeat;
        background-size: cover;

        background-repeat: repeat;
    }

    .form {
        /* width: 280px; */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        border-radius: 10px;
        padding: 20px;
        background-color: #1c1a38;
    }

    .form h1 {
        float: left;
        font-size: 40px;
        border-bottom: 6px solid #86c232;
        margin-bottom: 50px;
        padding: 13px 0;
    }

    .textbox {
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0;
        margin: 8px 0;
        border-bottom: 1px solid #86c232;
    }

    .textbox i {
        width: 26px;
        float: left;
        text-align: center;

    }

    .textbox input {
        border: none;
        outline: none;
        background: none;
        color: white;
        font-size: 18px;
        width: 80%;
        float: left;
        margin: 0 10px;
    }

    .button {
        width: 100%;
        background: none;
        border: 2px solid #86c232;
        color: white;
        padding: 5px;
        margin: 12px 0;
    }
    </style>
    <meta charset="utf-8">
    <title>Forgot Password</title>
</head>

<?php
if($_GET['key'] && $_GET['reset'])
{
    $email=$_GET['key'];
    $pass=$_GET['reset'];
    require('db_connect.php');
    $query = "SELECT `emailUsers`,`pwdUsers` FROM `users` WHERE MD5(`emailUsers`) = '$email' and `pwdUsers` = '$pass'";
    //echo $query;
    $result = mysqli_query($conn, $query);
    // echo $email;
    if(mysqli_num_rows($result)==1)
    {
    ?>
<div class="form">
    <h1>Reset Password</h1>
    <form method="post" name="login" id="regform" action="submit_new.php">
        <div class="textbox">
            <input type="hidden" name="email" value="<?php echo $email;?>">
            <i class="fas fa-lock"></i>
            <input type="password" name="newpassword" placeholder="New Password" required onkeyup="pvalid();" />
        </div>
        <div class=" textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirmpassword" placeholder="Confirm Password" required onkeyup="pvalid();" />
        </div>
        <p class=" col-12 col-md-8 offset-md-4" id="cerror" style="color: red;font-size: medium;">
        </p>
        <input class="button" name="submit_password" type="submit" value="Submit" />
    </form>
</div>
<script>
function pvalid() {
    var pass = document.forms["regform"]["newpassword"].value;
    var cpass = document.forms["regform"]["confirmpassword"].value;
    var cr = document.getElementById("cerror");
    if (pass == "" && cpass == "") {
        cr.innerHTML = "";
    } else if (pass != cpass) {
        cr.style.color = "red";
        cr.innerHTML = "Passwords do not match";
    } else {
        cr.style.color = "limegreen";
        cr.innerHTML = "Passwords match";
    }
}
</script>
<?php
  }
  else echo "wrong";
}
?>