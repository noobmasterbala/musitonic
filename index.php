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
					<li><a href="index.php#About">About</a></li>
					<li><a href="index.php#About">Services</a></li>
					<li><a href="Terms.php">Terms</a></li>
					<li><a href="Privacy.php">Privacy</a></li>
					<li><a href="Disclaimer.php">Disclaimer</a></li>
					<?php
					if(isset($_SESSION['userid'])){
                    echo '<li><a href="Package.php">Packages</a></li>';
					}
					if(isset($_SESSION['userid'])){
						echo '<form action="assets/includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit">Logout</button>
					</form>';
				
					}
					?>
                
			
                }
					
                </ul>
                
				
                
			
				


			</nav>
		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and many more!</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and many more!</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and many more!</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and many more!</p>
							<h2>MUSITONIC STUDIOS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Easiest way to get your music into spotify, Itunes, Amazon music and many more!</p>
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
								   <h2>About Us:</h2>
								</header>	
									<p>Musitonic Studios, A digital music distribution initiative based in Tamil Nadu,India.
An absolute solution for independent artists, songwriters and Musicians.</p>	
									
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
							
									<h2>Stores we distribute:</h2>
									</header>
										<p>

											<strong>• Domestic  Platforms: </strong>
											JioSaavn, Gaana, Hungama, Wynk, Prime  Music. <br>

											<strong>• International  Platforms: </strong>
											Amazon Music, Spotify, Google play Music, iHeartRadio, Apple Music, YouTube  Music, Pandora, Napster, Shazam, SoundCloud, Facebook  Audio  Library (Instagram music), Facebook Fingerprint, VEVO, TikTok, Resso, TIDAL, Xiami, Yandex  Music,    TIM  Music, AWA, NetEase  Cloud  Music, Neurotic  Media, Tencent, United  Media  Agency, Ultimate  China, Dubset  Media, Gracenote, Nuuday  A/S, 7Digital, Akazoo, Anghami,  Bugs, Deezer, iMusica, KkBox, Kuack  Media, LINE Music, Qobuz, Simfy  Africa, Sirius  XM.                                                                
										</p>
							
							
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- TWO -->
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
									<h2>Why us?</h2>
									</header>
									
 									<p>Well many of them doesn't distribute to plattorms like wynk, gaana,CRBT service and other regional ones. which is very crucial for organic growth of fanbase in a country like india!
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
										<li>We'll get your music into Wynk, Gaana, Spotify , Apple music ,Amazon, Instagram music, Soundcloud plus a lot of other Indian stores, Callertunes and International streaming platforms.
.</li>
											<li>Upload unlimited tracks for free, our competitors charge atleast 600 rs per single </li>
											<li>keep 70 percent of your earning for a free plan subscription and get paid monthly,now that's a wow factor!</li>
											<li>Easy upload process with very informative track formating, flexible Metadata inputs.</li>
											<li>Mixing and Mastering services are also available with additional charges which are totally optional and many more...</li>
									</ul>
							
							
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			
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
			<section>
			<div class="container align-center" >
			<?php
                if(!isset($_SESSION['userid'])){
                   
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
					<button type="submit" name="login-submit" class="button">Login</button>
                    <br><a href="assets/php/register.php" class="button">Register</a>
                    </form>';
                }
                ?>
				</div>
				</section>
				<section class="wrapper style1">
				<div class="container">
				<h2 class="align-center">FAQ's</h2>
				<ul><li>Question 1:
						will my tracks be removed from the stores when i cancel your subscription?
						<br>
						Answer: Nope not at all, it remains there for eternity unless you want to remove it!</li>
						<br><br>
						<li>Question 2:
						can i cancel my subscription anytime if i want ?
						<br>
						Answer: Yes as it states no commitments!</li>
						<br><br>
						<li>Question 3:
						How much time will it take for my songs go be live in the stores?
						<br>
						Answer: You should upload the song atleast before 2 weeks to make it live on all stores at same time, and another exciting thing is you can schedule your releases!</li>
						<br><br>
						<li>Question 4:
						how long does it take for my track to mastered?
						<br>
						Answer: For mastering alone it take 2 days max.</li></p>
				</div>
				</section>
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
					<h2>Contact Us</h2>
					</header>
					<div class="con align-center" >
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

            <?php
                if(isset($_SESSION['username'])){
                    $u = $_SESSION['username'];
                    echo "<script>$('#login_form').hide();</script>";
                }
            ?>

	</body>
</html>