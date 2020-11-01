<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
	<head>
	<link rel="shortcut icon" type="image/png" href="images/favicon.ico">
		<title>Musitonic Sudios</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
			.con p{
				padding-left:30px;
				padding-right: 10px;
				padding-top: 20px;
				padding-bottom: 20px;
				margin-top: 20px;
				margin-left: 30px;
				margin-right: 20px;
				margin-bottom: 20px;
				text-align: center;
			}
		</style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php"><img src="images/logo.png" height="50" width="50"></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
		<nav id="menu">
                <?php
                    if(isset($_SESSION['username'])){
                        $u = $_SESSION['username'];
                        echo "<p style='color:white'>Welcome $u</p>";
                    }
                if(isset($_SESSION['userid'])){
                    echo '<form action="assets/includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
                </form>';
			
                }
                else{
				
					  
                  
                echo ' <form id="login_form" action="assets/includes/login.inc.php" method="post">
					<input type="email" name="mailuid" id="email" placeholder="Email" required><br><br>
					<input type="password" name="pwd" id="password" placeholder="Password" required><br><br>
					<button type="submit" name="login-submit">Login</button>
                    <br><a href="assets/php/register.php">Register</a>
                    </form>';
                }
                ?>
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<?php
					if(isset($_SESSION['userid'])){
                    echo '<li><a href="Package.php">Packages</a></li>';
					}
					?>
                
			
                }
					<li><a href="index.php#About">About</a></li>
					<li><a href="index.php#About">Services</a></li>
					<li><a href="Terms.php">Terms</a></li>
					<li><a href="Privacy.php">Privacy</a></li>
					<li><a href="Disclaimer.php">Disclaimer</a></li>
					<li><a href="Distribution.php">Distribution Agreement</a></li>
                </ul>
			</nav>
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						
						<h2>Song Details have been Successfully Uploaded! You will be notified via E-Mail on further updates and Status. <br><br>Thank You!<br>For Any Queries <a href="mailto:query@musitonicstudios.in">Contact Us.</a></h2>
					</header>
				</div>
			</section>
			<div class="pricing-wrapper clearfix" style="height: 120vh;">
				<!-- Titulo -->
				
			</div>
                

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						
						<h2>Contact Us</h2>
					</header>
					<div class="con">
			<p>
				<strong>Phone: </strong> <br>+919176722461
			</p>
			<p>
				<strong>Email: </strong><br>query@musitonicstudios.in
			</p>
			<p>
				<strong>Address:</strong> <br>First Street , B-sector , Anna Nagar West extension, <br>Chennai , Tamilnadu, India, 600101
			</p>

		</div> 
		
				</div>
			</section>

		 
		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<ul class="icons">
					<li><a href="https://twitter.com/musitonicstudio?s=09" class="icon fa-twitter" target="_blank"><span class="label" target="_blank">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/musitonicstudios/" class="icon fa-facebook" target="_blank"><span class="label" target="_blank">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/musitonicstudios/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label" target="_blank"> Email</span></a></li>
					<li><a href="https://www.youtube.com/c/musitonicstudios" class="icon fa-youtube" target="_blank"><span class="label" target="_blank"> Email</span></a></li>
				</ul>
			</div>
			<div class="pvc">
				<p><a href="Terms.html" target="_blank">Terms</a>-<a href="Privacy.html" target="_blank">Privacy</a>-<a href="Disclaimer.html" target="_blank">Disclaimer</a></p>
			</div>
			<div class="copyright">
				&copy;2020 Musitonic Studios. All rights reserved
			</div>
		</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
