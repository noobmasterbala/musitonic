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
        background: url('../php/phpimages/login.jpg') no-repeat;
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

<body>
    <div class="form">
        <h1>Forgot Password</h1>
        <form action="" method="post" name="login">
            <div class="textbox">
                <i class="far fa-user"></i>
                <input type="email" name="email" placeholder="Email" required />
            </div>
            <input class="button" name="submit" type="submit" value="submit" />
        </form>
    </div>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require './PHPMailer/Exception.php';
    require './PHPMailer/PHPMailer.php';
    require './PHPMailer/SMTP.php';
	require('db_connect.php');
	SESSION_START();
	//$conn = OpenCon(); 
	if (isset($_POST['email'])){
		$email = $_REQUEST['email'];
        $email = mysqli_real_escape_string($conn,$email);
        $Mail = $email;
        // echo $Mail;
		$query = "SELECT `emailUsers`,`pwdUsers` FROM `users` WHERE `emailUsers` = '$email'";
        $result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) == 1){
            while($row=mysqli_fetch_array($result))
            {
                $email=md5($row['emailUsers']);
                $pass=$row['pwdUsers'];
            }
            $link="<a href='https://www.musitonicstudios.in/assets/includes/resett.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
            
            date_default_timezone_set('Etc/UTC');
            // echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.zoho.in';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            $mail->SMTPDebug = false;
            $mail->Username = 'noreply@musitonicstudios.in';
            $mail->Password = 'Roshan@2020';
            $mail->setFrom('noreply@musitonicstudios.in', '(Password Reset)');
            $mail->addReplyTo('noreply@musitonicstudios.in', 'Team');
            $mail->addAddress($Mail);
            $mail->Subject  =  'Reset Password';
            $mail->IsHTML(true);
            $mail->msgHTML('Hi,<br> Please use the below link to change you password.<br>Click On This Link to Reset Password '.$link.'<br><br> Regards,<br>Team Musitonic Studios', __DIR__);
            if($mail->Send()){
                echo "Check Your Email and Click on the link sent to your email";
                echo "<script>alert('Check Your Email and Click on the link sent to your email to reset your password');</script>";
            }
            else{
                echo "Mail Error - >".$mail->ErrorInfo;
            }
        }
        else echo "QUERY FAILURE";
    }
    else echo "NO";
?>