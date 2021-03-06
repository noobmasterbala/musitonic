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
						
						<h2>Our Packages</h2>
					</header>
				</div>
			</section>
			<div class="pricing-wrapper clearfix" style="height: auto;">
				<!-- Titulo -->
				<h1 class="pricing-table-title">Our Packages</h1>
		
				<div class="pricing-table" onclick="window.location.href='album-form.php';">
					<h3 class="pricing-title">Free Plan</h3>
					
					<!-- Lista de Caracteristicas / Propiedades -->
					<ul class="table-list" style="margin: auto 15px;list-style:none;">
						<li>1 <span>Artist /band</span></li>
						<li>60%<span>Royalties first year </span></li>
						<li>65% <span>Royalties second year onwards</span></li>
						<li>Unlimited <span>Releases </span></li>
						
						<li><span>Distribution to all stores</span></li>
						<li>No Commitments cancel anytime!</li>
					</ul>
					<!-- Contratar / Comprar -->
					<div class="table-buy">
						<p style="text-align: center;float:none;">FREE</p>
                        <button style="margin-left: 80px;" onclick="window.location.href='album-form.php';" ><strong>Buy Now!</strong></button>
					</div>
					
				</div>
				
				<div class="pricing-table recommended">
					<h3 class="pricing-title">Monthly Plan</h3>
					
					<!-- Lista de Caracteristicas / Propiedades -->
					<ul class="table-list" style="margin: auto 15px;list-style:none;">
						<li>2 <span>Artists / Band</span></li>
						<li>75%<span>Royalties</span></li>
						<li>Unlimited<span> Releases</span></li>
						<li><span>Distribution to all stores</span></li>
						<li>No Commitments cancel anytime!</li>
					</ul>
					<!-- Contratar / Comprar -->
					<div class="table-buy" >
						<p style="text-align: center;float:none;">Rs.149<sup>/ month</sup></p>
						<button style="margin-left: 80px;" onclick="window.location.href='https://docs.google.com/forms/d/1XSOMSnv63glOjvIiInrLOuCxDjbrzqmOQfx16A8jMr0/edit?usp=sharing';" ><strong>Buy Now!</strong></button>
					</div>
				</div>
		
				<div class="pricing-table">
					<h3 class="pricing-title">Ultimate plan</h3>
					
					<!-- Lista de Caracteristicas / Propiedades -->
					<ul class="table-list" style="margin: auto 15px;list-style:none;">
						<li>UNLIMITED<span>Artists / Band</span></li>
						<li>80%<span>Royalties</span></li>
						<li>Unlimited<span> Releases</span></li>
						<li><span>Distribution to all stores</span></li>
						<li>No Commitments cancel anytime!</li>
					</ul>
					<!-- Contratar / Comprar -->
					<div class="table-buy">
						<p style="text-align: center;float:none;">Rs 1449<sup>/ year</sup></p>
						<button style="margin-left: 80px;" onclick="window.location.href='https://docs.google.com/forms/d/1Y-irdIAmowUb_b70yN3tzYXRpiiQWkcxL-yQ9ALT1WY/edit?usp=sharing';" ><strong>Buy Now!</strong></button>
				
					</div>
				</div>
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

