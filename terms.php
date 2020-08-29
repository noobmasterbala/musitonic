 <?php
 session_start();
 ?>
 <!DOCTYPE HTML>
 <html>
     <head>
         <title>Musitonic Sudios</title>
         <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <link rel="stylesheet" href="assets/css/main.css" />
         <style>
            
    body{
        background-image: url("images/terms_bg.jpg");
    }
    p {
        padding-right: 100px;
        padding-left:100px;
        margin:auto 30;
        font-size: 25px;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    h1{
        text-align: center; 
        padding: 50 50;
       
        
        color: white;
        width: 100%;
        
        
    }
    ul{
        padding-right: 200px;
        padding-left: 200px;
        font-size: 20px;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .images1{
        height: 400px;
        width: 600px;
        text-align: center;
        display: inline-block;
        padding:10 120;
    }
    .right{
        float:right;
    }
    
         </style>
     </head>
     <body class="subpage">
 
         <!-- Header -->
             <header id="header">
                <div class="logo"><a href="index.html"><img src="images/logo.png" height="50" width="50"></a></div>
                 <a href="#menu">Menu</a>
             </header>
 
         <!-- Nav -->
         <nav id="menu">
                <?php
                    if(isset($_SESSION['username'])){
                        $u = $_SESSION['username'];
                        echo "<p style='color:white; font-size:20px; '>Welcome $u</p>";
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
 
                <iframe src="https://drive.google.com/file/d/1CfCmVohXvzr3bhB0v_8Tl0Doj9FUatJ4/preview" width="100%" height="800"></iframe>
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