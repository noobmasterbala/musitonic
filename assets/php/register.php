<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
  <title>Login form</title>
</head>
<body>
<style>
body{

padding:200px;
padding-left:550px;
padding-right:550px;
background-image:url("phpimages/login.jpg");
 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: #e7e7e7;
   
}
.login {

  width: 250px;
  position: absolute;
  top: 60%;
  left: 50%;
  margin: -184px 0px 0px -155px;
  background: rgba(0,0,0,0.5);
  padding: 20px 30px;
  border-radius: 5px;
  box-shadow: 0px 1px 0px rgba(0,0,0,0.3),inset 0px 1px 0px rgba(255,255,255,0.07)
}

h1{
 color:white;
}
input{
 width:250px;
 height:30px;
 margin-top: 10px;
}

input[type="submit"]{
   background: #3399ff;
  border: 0;
  width: 250px;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  margin-top: 10px;

}
input[type="button"]{
   background: #3399ff;
  border: 0;
  width: 250px;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;

  margin-top:10px;

}
.error{
  color: red;
  align: center;
}
.signup{
  color: green;
  align: center;
}
.textfield {
  position: relative;
}
.textfield .hint {
    margin-bottom: 20px;
  color: black;
  display: none;
  position: absolute;
  width: 15em;
  bottom: 1.3em;
  background: #ff9;
  padding: 0 0.2em;
  border: solid 1px;
}
</style>
<div class="login">
<h1>Register</h1>
<?php
if(isset($_GET['error'])){
  if($_GET['error']=="emptyfields"){
    echo '<p class="error"> Fill in all fields!</p>';
  }
  else if($_GET['error']=="invalidmailusername"){
    echo '<p class="error"> Invalid Email and Username!</p>';

  }
  else if($_GET['error']=="invalidmail"){
    echo '<p class="error"> Invalid Email!</p>';

  }
  else if($_GET['error']=="invalidusername"){
    echo '<p class="error"> Invalid Username!</p>';

  }
  else if($_GET['error']=="passwordcheck"){
    echo '<p class="error"> Password repeat does not match password!</p>';

  }
  else if($_GET['error']=="usernametaken"){
    echo '<p class="error"> Username Taken!</p>';
  
  }
 
}
// else if($_GET['signup']=="success"){
//   echo '<p class="signup"> Signup success!</p>';

// }


?>
<form action="../includes/register.inc.php" method="post">
<table>
<tr>
  <td>
  <div class=textfield>
  <div class=hint>This Name will be used for Albums and cannot be changed later</div>
  <input id=bar type="text" name="uid" placeholder="Artist Name" onfocus="hint(this)" onblur="unhint(this)">
  </div>
</table>
<!-- <div class=hint>This Name will be used for Albums and cannot be changed later</div> -->
<!-- <input  type="text" name="uid"   placeholder="Artist Name" onfocus="hint(this)" onblur="unhint(this)"> -->
<input  type="text" name="mail"   placeholder="Email" >
<input  type="text" name="phone"   placeholder="Phone Number">
<input  type="password" name="pwd"   placeholder="Password" >
<input  type="password" name="pwd-repeat"   placeholder="Repeat Password">
<input type="checkbox" id="agree" name="agree" sytle=" position: absolute; left: 0px;" required><label for="agree" style="font-size: 12px;">Agree to <a href="../../terms.php">Terms</a>, <a href="../../Privacy.php">Privacy Policy</a> and <a href="../../Distribution.php">Distribution agreement</a></label>

<br>
<input type="submit" name="register-submit" id="submit">
</form>
</div>
</body>
<script>
function hint(elem) {
  elem.parentNode.firstElementChild.style.display = 'block';
}
function unhint(elem) {
  elem.parentNode.firstElementChild.style.display = 'none';
}
</script>
</html>