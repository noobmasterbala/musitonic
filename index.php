<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Musitonic Studios</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
		.error{
  color: red;
  align: center;
}
.signup{
  color: green;
  align: center;
}
		</style>
	</head>
	<body>
			<header id="header" class="alt">
				<div class="logo"><a href="index.html"><img src="images/logo.png" height="50" width="50"></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
                <?php
                    if(isset($_SESSION['username'])){
                        $u = $_SESSION['username'];
                        echo "<p style='color:white'>Welcome $u</p>";
                    }
                ?>
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="Contact.php">Contact</a></li>
					<li><a href="index.php#About">About</a></li>
					<li><a href="index.php#About">Services</a></li>
					<li><a href="Terms.php">Terms</a></li>
					<li><a href="Privacy.php">Privacy</a></li>
					<li><a href="Disclaimer.php">Disclaimer</a></li>
                </ul>
                <?php
                if(isset($_SESSION['userid'])){
                    echo '<form action="assets/includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
                </form>';
			
                }
                else{
					if(isset($_GET['error'])){
						if($_GET['error']=="emptyfields"){
						  echo '<p class="error"> Fill in all fields!</p>';
						}
						else if($_GET['error']=="wrongpwd"){
						  echo '<p class="error">Wrong Password!</p>';
					  
						}
						else if($_GET['error']=="nouser"){
						  echo '<p class="error"> No user with this email please register!</p>';
					  
						}
					   
					  }
					  else if($_GET['signup']=="success"){
						echo '<p class="signup"> Signup success!</p>';
					  
					  }
					  
                  
                echo ' <form id="login_form" action="assets/includes/login.inc.php" method="post">
					<input type="email" name="mailuid" id="email" placeholder="Email" required><br><br>
					<input type="password" name="pwd" id="password" placeholder="Password" required><br><br>
					<button type="submit" name="login-submit">Login</button>
                    <br><a href="assets/php/register.php">Register</a>
                    </form>';
                }
                ?>
				
                
			
				


			</nav>
		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and may more</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and may more</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and may more</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and may more</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and may more</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2" id="about">
				<div class="inner" id="About">
					<div class="grid-style">

						<div>
							<div class="box" id="services">
								<div class="image fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
								
										<h2>ABOUT US:</h2>
									</header>
										<p>Musitonic Studios, A digital music distribution initiative based in Tamil Nadu,India.
											An absolute solution for independent artists, songwriters and Musicians.                                                                 
										</p>
							
									
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>OUR SERVICES:</h2>
									</header>
									<ul>
										<li>We'll get your music into Spotify, Apple Music, TikTok, Pandora, Amazon, Instagram, YouTube, Tidal, iHeartRadio, Deezer, plus a ton of other stores & streaming services.

											Keep 100% of your earnings, get paid monthly.</li>
											<li>In stores 10-20x faster than any other distributor, at a fraction of the price.</li>
											<li>Pay only $19.99 to upload unlimited albums & songs for a year (our competitors charge at least 2x that just to upload one album).</li>
											<li>Keep all your earnings—or set up "splits" to automatically route any percentage of earnings, from any track, to anyone.</li>
									</ul>
							
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<div class="pricing-wrapper clearfix">
				<!-- Titulo -->
				<h1 class="pricing-table-title">Our Packages</h1>
		
				<div class="pricing-table">
					<h3 class="pricing-title">Free Plan</h3>
					
					<!-- Lista de Caracteristicas / Propiedades -->
					<ul class="table-list">
						<li>1 <span>Artist /band</span></li>
						<li>60%<span>Royalties first year </span></li>
						<li>65% <span>Royalties second year onwards</span></li>
						<li>Unlimited <span>Releases </span></li>
						
						<li><span>Distribution to all stores</span></li>
						<li>No Commitments cancel anytime!</li>
					</ul>
					<!-- Contratar / Comprar -->
					<div class="table-buy">
						<p>FREE</p>
				
					</div>
				</div>
				
				<div class="pricing-table recommended">
					<h3 class="pricing-title">Monthly Plan</h3>
					
					<!-- Lista de Caracteristicas / Propiedades -->
					<ul class="table-list">
						<li>2 <span>Artists / Band</span></li>
						<li>75%<span>Royalties</span></li>
						<li>Unlimited<span> Releases</span></li>
						<li><span>Distribution to all stores</span></li>
						<li>No Commitments cancel anytime!</li>
					</ul>
					<!-- Contratar / Comprar -->
					<div class="table-buy">
						<p>Rs.149<sup>/ month</sup></p>
				
					</div>
				</div>
		
				<div class="pricing-table">
					<h3 class="pricing-title">Ultimate plan</h3>
					
					<!-- Lista de Caracteristicas / Propiedades -->
					<ul class="table-list">
						<li>UNLIMITED<span>Artists / Band</span></li>
						<li>80%<span>Royalties</span></li>
						<li>Unlimited<span> Releases</span></li>
						<li><span>Distribution to all stores</span></li>
						<li>No Commitments cancel anytime!</li>
					</ul>
					<!-- Contratar / Comprar -->
					<div class="table-buy">
						<p>Rs 1449<sup>/ year</sup></p>
				
					</div>
				</div>
			</div>
			
		<!-- Two -->
			<!-- <section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Contact</h2>
						<p></p><strong>Phone: </strong>+919176722461<br>
							<strong>Email: </strong>query@musitonicstudios.in<br>
						<strong>Address: </strong>First Street , B-sector , Anna Nagar West extension, Chennai , Taminnadu, India, 600101<br>
						
					</header>
				</div>
			</section> -->

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

            <?php
                if(isset($_SESSION['username'])){
                    $u = $_SESSION['username'];
                    echo "<script>$('#login_form').hide();</script>";
                }
            ?>

	</body>
</html>