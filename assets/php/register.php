<!DOCTYPE html>
<html>
<head><title>Login form</title></head>
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
</style>
<div class="login">
<h1>Register</h1>
<form action="../includes/register.inc.php" method="post">
<input  type="text" name="uid"   placeholder="Username" >
<input  type="text" name="mail"   placeholder="Email" >
<input  type="text" name="phone"   placeholder="Phone Number">
<input  type="password" name="pwd"   placeholder="Password" >
<input  type="password" name="pwd-repeat"   placeholder="Repeat Password">
<input type="submit" name="register-submit" id="submit">
</form>
</div>
</body>
</html>