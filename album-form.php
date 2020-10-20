<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
	<head>
	<link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/notifications.css">
    <script src="assets/js/notifications.js"></script>
    <script>var total = 1;</script>
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
						
						<h2>New Album</h2>
					</header>
				</div>
			</section>
            <style type="text/css">
                .errspan {
                    float: right;
                    margin-right: -15px;
                    margin-top: -32px;
                    position: relative;
                    z-index: 2;
                }
                .fa:hover, .fa:active { 
                color:#e5e5e5;
                    -webkit-transform: scale(1.5);
                    -moz-transform: scale(1.5);
                    -ms-transform: scale(1.5);
                    -o-transform: scale(1.5);
                    transform: scale(1.5); 
                }
            </style>
			<div class="pricing-wrapper clearfix" style="height: auto;">
				<!-- Titulo -->
				<h1 class="pricing-table-title">New Album</h1>
                <form id="form">
                    <div class="form-group">
                        <label for="albumNameLabel">Album Name</label>
                        <input type="text" class="form-control" id="albumname" name="albumname" aria-describedby="albumnHelp" placeholder="Enter Album Name">
                    </div>
                    
                    <!-- <div class="form-group"> -->
                    <!-- <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
                            <h2 class="mb-0">
                                <div style="width: 30%">
                                    <span style="position: absolute;">1. </span>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Track Name" style="border: 0;margin-left:20px !important;">
                                    <i class="fa fa-edit fa-lg errspan"></i>
                                </div>
                            </h2>
                            </div> -->

                            <!-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample"> -->
                                <!-- <div class="card-body"> -->
                                    <div class="form-group">
                                        <label for="artist">Artist Name</label>
                                        <input type="text" class="form-control" id="artistn1" name="artistn1" placeholder="Artist Name" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="songs">No. of Songs</label>
                                        <select id="nsong" name="#songs" data-placeholder="Choose a Language..." onchange="songs(this.value);">
                                            <option disabled selected>Choose # of songs</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4</option>
                                            <option value=5>5</option>
                                            <option value=6>6</option>
                                            <option value=7>7</option>
                                            <option value=8>8</option>
                                        </select>
                                    </div><br>
                                    <div id="list" class="row justify-content-center">
                                        <div class="card card-body col-5" style="padding: 20px;margin:20px;">
                                            <div class="form-group">
                                                <label for="artist">Song Name</label>
                                                <input type="text" class="form-control" id="trackn1" name="trackn1" placeholder="Track Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="songfile">Song File</label>
                                                <input type="file" class="form-control-file" id="songfile1" name="songfile1" required onchange="/* this.value='' */">
                                                <small id="fileHelp" class="form-text text-muted">Note: Only WAV format is accepted of maximum size of 100mb</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="albumart">Album Artwork</label>
                                                <input type="file" class="form-control-file" id="albumart1" name="albumart1" required onchange="/* this.value='' */">
                                                <small id="albumArtHelp" class="form-text text-muted">Note: Only JPG format with Square Ratio is accepted of maximum size of 50mb (Minimum Resolution: 1500x1500)</small>
                                            </div><br>
                                            <div class="form-group">
                                                <label for="lang">Language</label>
                                                <select id="lang1" name="lang1" data-placeholder="Choose a Language...">
                                                    <option hidden selected>Choose an Option</option>
                                                    <option value="Afrikaans">Afrikaans</option>
                                                    <option value="Albanian">Albanian</option>
                                                    <option value="Arabic">Arabic</option>
                                                    <option value="Armenian">Armenian</option>
                                                    <option value="Basque">Basque</option>
                                                    <option value="Bengali">Bengali</option>
                                                    <option value="Bulgarian">Bulgarian</option>
                                                    <option value="Catalan">Catalan</option>
                                                    <option value="Cambodian">Cambodian</option>
                                                    <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                                    <option value="Croatian">Croatian</option>
                                                    <option value="Czech">Czech</option>
                                                    <option value="Danish">Danish</option>
                                                    <option value="Dutch">Dutch</option>
                                                    <option value="English">English</option>
                                                    <option value="Estonian">Estonian</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finnish">Finnish</option>
                                                    <option value="French">French</option>
                                                    <option value="Georgian">Georgian</option>
                                                    <option value="German">German</option>
                                                    <option value="Greek">Greek</option>
                                                    <option value="Gujarati">Gujarati</option>
                                                    <option value="Hebrew">Hebrew</option>
                                                    <option value="Hindi">Hindi</option>
                                                    <option value="Hungarian">Hungarian</option>
                                                    <option value="Icelandic">Icelandic</option>
                                                    <option value="Indonesian">Indonesian</option>
                                                    <option value="Irish">Irish</option>
                                                    <option value="Italian">Italian</option>
                                                    <option value="Japanese">Japanese</option>
                                                    <option value="Javanese">Javanese</option>
                                                    <option value="Korean">Korean</option>
                                                    <option value="Latin">Latin</option>
                                                    <option value="Latvian">Latvian</option>
                                                    <option value="Lithuanian">Lithuanian</option>
                                                    <option value="Macedonian">Macedonian</option>
                                                    <option value="Malay">Malay</option>
                                                    <option value="Malayalam">Malayalam</option>
                                                    <option value="Maltese">Maltese</option>
                                                    <option value="Maori">Maori</option>
                                                    <option value="Marathi">Marathi</option>
                                                    <option value="Mongolian">Mongolian</option>
                                                    <option value="Nepali">Nepali</option>
                                                    <option value="Norwegian">Norwegian</option>
                                                    <option value="Persian">Persian</option>
                                                    <option value="Polish">Polish</option>
                                                    <option value="Portuguese">Portuguese</option>
                                                    <option value="Punjabi">Punjabi</option>
                                                    <option value="Quechua">Quechua</option>
                                                    <option value="Romanian">Romanian</option>
                                                    <option value="Russian">Russian</option>
                                                    <option value="Samoan">Samoan</option>
                                                    <option value="Serbian">Serbian</option>
                                                    <option value="Slovak">Slovak</option>
                                                    <option value="Slovenian">Slovenian</option>
                                                    <option value="Spanish">Spanish</option>
                                                    <option value="Swahili">Swahili</option>
                                                    <option value="Swedish ">Swedish </option>
                                                    <option value="Tamil">Tamil</option>
                                                    <option value="Tatar">Tatar</option>
                                                    <option value="Telugu">Telugu</option>
                                                    <option value="Thai">Thai</option>
                                                    <option value="Tibetan">Tibetan</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Turkish">Turkish</option>
                                                    <option value="Ukrainian">Ukrainian</option>
                                                    <option value="Urdu">Urdu</option>
                                                    <option value="Uzbek">Uzbek</option>
                                                    <option value="Vietnamese">Vietnamese</option>
                                                    <option value="Welsh">Welsh</option>
                                                    <option value="Xhosa">Xhosa</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date of Release</label>
                                                <input type="date" class="form-control" id="date1" name="date1">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Genre</label>
                                                <select data-placeholder="Choose a Genre..." id="genre1" name="genre1">
                                                    <option hidden selected>Choose an Option</option>
                                                    <option value="Jazz">Jazz</option>
                                                    <option value="Hip Hop">Hip Hop</option>
                                                    <option value="Rock">Rock</option>
                                                    <option value="Pop">Folk</option>
                                                    <option value="Blues">Blues</option>
                                                    <option value="Heavy Metal">Heavy Metal</option>
                                                    <option value="EDM">EDM</option>
                                                    <option value="Classical">Classical</option>
                                                    <option value="Rhythm">Rhythm</option>
                                                    <option value="Country">Country</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Sub - Genre</label>
                                                <select data-placeholder="Choose Sub-Genre..." id="subgenre1" name="subgenre1">
                                                    <option hidden selected>Choose an Option</option>
                                                    <option value="Jazz">Jazz</option>
                                                    <option value="Hip Hop">Hip Hop</option>
                                                    <option value="Rock">Rock</option>
                                                    <option value="Pop">Folk</option>
                                                    <option value="Blues">Blues</option>
                                                    <option value="Heavy Metal">Heavy Metal</option>
                                                    <option value="EDM">EDM</option>
                                                    <option value="Classical">Classical</option>
                                                    <option value="Rhythm">Rhythm</option>
                                                    <option value="Country">Country</option>
                                                </select>
                                            </div>
                                            <label for="details">Other Details</label>
                                            <div id="sel" class="form-group row justify-centent-center" style="padding-left: 25px;padding-bottom:30px;" >
                                                <select id="options" class="col-6" onchange="changeID(this.value);">
                                                    <option disabled selected>Choose an option</option>
                                                    <option id="lycrist1" value="lycrist1">Lycrist</option>
                                                    <option id="composer1" value="composer1">Composer</option>
                                                    <option id="mixing1" value="mixing1">Mixing</option>
                                                    <option id="mastering1" value="mastering1">Mastering</option>
                                                    <option id="artwork1" value="artwork1">Artwork Credits</option>
                                                    <option id="producer1" value="producer1">Financial Producer</option>
                                                    <option id="vocalist1" value="vocalist1">Vocalist</option>
                                                    <option id="studio1" value="studio1">Recording Studio</option>
                                                </select>
                                                <!-- <label></label> -->
                                                <!-- <input class="offset-1 col-6" type="text" class="form-control" id="lycrist1"> -->
                                                <i class="col-1 fa fa-plus fa-2x" aria-hidden="true" style="margin-top: 8px;"></i><br>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Caller Ringback Tune (CRB)</label>
                                                <div class="form-group row" style="margin-top: 5px;">
                                                    <label class="col-3" >CRB 1</label>
                                                    <input type="number" class="form-control" id="crb1h" name="crb1h" style="margin: -5px 2px;width:12%;padding:5px !important" placeholder="HH">:
                                                    <input type="number" class="form-control" id="crb1m" name="crb1m" style="margin: -5px 2px;width:12%;padding:3px !important" placeholder="MM">:
                                                    <input type="number" class="form-control" id="crb1s" name="crb1s" style="margin: -5px 2px;width:12%;padding:5px !important" placeholder="SS">
                                                </div>
                                                <div class="form-group row" style="margin-top: 5px;">
                                                    <label class="col-3" >CRB 2</label>
                                                    <input type="number" class="form-control" id="crb1h" name="crb1h" style="margin: -5px 2px;width:12%;padding:5px !important" placeholder="HH">:
                                                    <input type="number" class="form-control" id="crb1m" name="crb1m" style="margin: -5px 2px;width:12%;padding:3px !important" placeholder="MM">:
                                                    <input type="number" class="form-control" id="crb1s" name="crb1s" style="margin: -5px 2px;width:12%;padding:5px !important" placeholder="SS">
                                                </div>
                                                <div class="form-group row" style="margin-top: 5px;">
                                                    <label class="col-3" >CRB 3</label>
                                                    <input type="number" class="form-control" id="crb1h" name="crb1h" style="margin: -5px 2px;width:12%;padding:5px !important" placeholder="HH">:
                                                    <input type="number" class="form-control" id="crb1m" name="crb1m" style="margin: -5px 2px;width:12%;padding:3px !important" placeholder="MM">:
                                                    <input type="number" class="form-control" id="crb1s" name="crb1s" style="margin: -5px 2px;width:12%;padding:5px !important" placeholder="SS">
                                                </div>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="masteringc1">
                                                <label class="form-check-label" for="mastering">Check this box if you need Mastering for your Song</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="mixingc1">
                                                <label class="form-check-label" for="mixing">Check this box if you need Mixing for your Song</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="instrumentalc1">
                                                <label class="form-check-label" for="mastering">Instrumental Song?</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="radioc1">
                                                <label class="form-check-label" for="mastering">Check this box if the song is Radio cut</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="explicitc1">
                                                <label class="form-check-label" for="mastering">Check this box if the song is Explicit</label>
                                            </div>
                                        </div>
                                        <!-- <div class="card card-body  col-5" style="padding: 20px;">
                                            <i class="fa fa-plus fa-4x" aria-hidden="true" style="margin: auto auto;"></i>
                                        </div> -->
                                    </div>
                                    <br>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="tc">
                                        <label class="form-check-label" for="tc">I agree to Terms and Conditions</label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="agreement">
                                        <label class="form-check-label" for="agreement">I agree to the Agreement between me and Musitonic Studios®</label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="authorize">
                                        <label class="form-check-label" for="authorize">I authorize Permission for Musitonic Studios® to distribute the Song on my behalf</label>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="">
                                        <label class="form-check-label" for="authorize">CAPTCHA</label>
                                    </div><br>
                                    <button id="btn" class="btn btn-primary" onclick="upload();">Submit</button><br><br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%">0%</div>
                                    </div>
                                    <div class="msg"></div>
                                </div>
                            </div>
                        </div>
                    
                    </div><br>
                
                </form>
				
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="https://www.jqueryscript.net/demo/fixed-notification-bootstrap-alert/src/bootstrap-show-notification.js"></script>
            <script type="text/javascript">
                function changeID(name){
                    label = name.charAt(0).toUpperCase() + name.slice(1)
                    var content = '<label class="col-5">'+label.slice(0, -1)+'</label><input class="offset-1 col-6" type="text" class="form-control" id='+name+' name='+name+'>';
                    $('#options').val("Choose an option");
                    $("#"+name).remove();
                    $("#sel").prepend(content);
                }
                function songs(i){
                    total = i;
                    $("#nsong").attr('disabled',true);
                    $("#list").html('');
                    for(n=1;n-1<i;n++){
                        disp = '<div class="card card-body col-5" style="padding: 20px;margin:20px;"><div class="form-group"> <label for="artist">Song Name</label> <input type="text" class="form-control" id="trackn'+n+'" name="trackn'+n+'" placeholder="Track Name"></div><div class="form-group"> <label for="songfile">Song File</label> <input type="file" class="form-control-file" id="songfile'+n+'" name="songfile'+n+'" required> <small id="fileHelp" class="form-text text-muted">Note: Only WAV format is accepted of maximum size of 100mb</small></div><div class="form-group"> <label for="albumart">Album Artwork</label> <input type="file" class="form-control-file" id="albumart'+n+'" name="albumart'+n+'" required> <small id="albumArtHelp" class="form-text text-muted">Note: Only JPG format with Square Ratio is accepted of maximum size of 50mb (Minimum Resolution: 1500x1500)</small></div><br><div class="form-group"> <label for="lang">Language</label> <select id="lang'+n+'" name="lang'+n+'" data-placeholder="Choose a Language..."><option hidden selected>Choose an Option</option><option value="Afrikaans">Afrikaans</option><option value="Albanian">Albanian</option><option value="Arabic">Arabic</option><option value="Armenian">Armenian</option><option value="Basque">Basque</option><option value="Bengali">Bengali</option><option value="Bulgarian">Bulgarian</option><option value="Catalan">Catalan</option><option value="Cambodian">Cambodian</option><option value="Chinese (Mandarin)">Chinese (Mandarin)</option><option value="Croatian">Croatian</option><option value="Czech">Czech</option><option value="Danish">Danish</option><option value="Dutch">Dutch</option><option value="English">English</option><option value="Estonian">Estonian</option><option value="Fiji">Fiji</option><option value="Finnish">Finnish</option><option value="French">French</option><option value="Georgian">Georgian</option><option value="German">German</option><option value="Greek">Greek</option><option value="Gujarati">Gujarati</option><option value="Hebrew">Hebrew</option><option value="Hindi">Hindi</option><option value="Hungarian">Hungarian</option><option value="Icelandic">Icelandic</option><option value="Indonesian">Indonesian</option><option value="Irish">Irish</option><option value="Italian">Italian</option><option value="Japanese">Japanese</option><option value="Javanese">Javanese</option><option value="Korean">Korean</option><option value="Latin">Latin</option><option value="Latvian">Latvian</option><option value="Lithuanian">Lithuanian</option><option value="Macedonian">Macedonian</option><option value="Malay">Malay</option><option value="Malayalam">Malayalam</option><option value="Maltese">Maltese</option><option value="Maori">Maori</option><option value="Marathi">Marathi</option><option value="Mongolian">Mongolian</option><option value="Nepali">Nepali</option><option value="Norwegian">Norwegian</option><option value="Persian">Persian</option><option value="Polish">Polish</option><option value="Portuguese">Portuguese</option><option value="Punjabi">Punjabi</option><option value="Quechua">Quechua</option><option value="Romanian">Romanian</option><option value="Russian">Russian</option><option value="Samoan">Samoan</option><option value="Serbian">Serbian</option><option value="Slovak">Slovak</option><option value="Slovenian">Slovenian</option><option value="Spanish">Spanish</option><option value="Swahili">Swahili</option><option value="Swedish ">Swedish</option><option value="Tamil">Tamil</option><option value="Tatar">Tatar</option><option value="Telugu">Telugu</option><option value="Thai">Thai</option><option value="Tibetan">Tibetan</option><option value="Tonga">Tonga</option><option value="Turkish">Turkish</option><option value="Ukrainian">Ukrainian</option><option value="Urdu">Urdu</option><option value="Uzbek">Uzbek</option><option value="Vietnamese">Vietnamese</option><option value="Welsh">Welsh</option><option value="Xhosa">Xhosa</option> </select></div><div class="form-group"> <label for="date">Date of Release</label> <input type="date" class="form-control" id="date'+n+'" name="date'+n+'"></div><div class="form-group"> <label for="date">Genre</label> <select data-placeholder="Choose a Genre..." id="genre'+n+'" name="genre'+n+'"><option hidden selected>Choose an Option</option><option value="Jazz">Jazz</option><option value="Hip Hop">Hip Hop</option><option value="Rock">Rock</option><option value="Pop">Folk</option><option value="Blues">Blues</option><option value="Heavy Metal">Heavy Metal</option><option value="EDM">EDM</option><option value="Classical">Classical</option><option value="Rhythm">Rhythm</option><option value="Country">Country</option> </select></div><div class="form-group"> <label for="date">Sub - Genre</label> <select data-placeholder="Choose Sub-Genre..." id="subgenre'+n+'" name="subgenre'+n+'"><option hidden selected>Choose an Option</option><option value="Jazz">Jazz</option><option value="Hip Hop">Hip Hop</option><option value="Rock">Rock</option><option value="Pop">Folk</option><option value="Blues">Blues</option><option value="Heavy Metal">Heavy Metal</option><option value="EDM">EDM</option><option value="Classical">Classical</option><option value="Rhythm">Rhythm</option><option value="Country">Country</option> </select></div> <label for="details">Other Details</label><div id="sel" class="form-group row justify-centent-center" style="padding-left: 25px;padding-bottom:30px;" > <select id="options" class="col-6" onchange="changeID(this.value);"><option disabled selected>Choose an option</option><option id="lycrist'+n+'" value="lycrist'+n+'">Lycrist</option><option id="composer'+n+'" value="composer'+n+'">Composer</option><option id="mixing'+n+'" value="mixing'+n+'">Mixing</option><option id="mastering'+n+'" value="mastering'+n+'">Mastering</option><option id="artwork'+n+'" value="artwork'+n+'">Artwork Credits</option><option id="producer'+n+'" value="producer'+n+'">Financial Producer</option><option id="vocalist'+n+'" value="vocalist'+n+'">Vocalist</option><option id="studio'+n+'" value="studio'+n+'">Recording Studio</option> </select> <i class="col-1 fa fa-plus fa-2x" aria-hidden="true" style="margin-top: 8px;" onclick="submenu()"></i><br></div><div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="masteringc'+n+'"> <label class="form-check-label" for="mastering">Check this box if you need Mastering for your Song</label></div><div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="mixingc'+n+'"> <label class="form-check-label" for="mixing">Check this box if you need Mixing for your Song</label></div><div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="instrumentalc'+n+'"> <label class="form-check-label" for="mastering">Instrumental Song?</label></div><div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="radioc'+n+'"> <label class="form-check-label" for="mastering">Check this box if the song is Radio cut</label></div><div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="explicitc'+n+'"> <label class="form-check-label" for="mastering">Check this box if the song is Explicit</label></div></div>';
                        $("#list").append(disp);
                    }
                }
                function submenu(){
                    var selectList = '<select class="col-5" onchange="changeID(this.value);"><option id="lycrist1" value="lycrist1">Lycrist</option><option id="composer1" value="composer1">Composer</option><option id="mixing1" value="mixing1">Mixing</option><option id="mastering1" value="mastering1">Mastering</option><option id="artwork1" value="artwork1">Artwork Credits</option><option id="producer1" value="producer1">Financial Producer</option><option id="vocalist1" value="vocalist1">Vocalist</option><option id="studio1" value="studio1">Recording Studio</option> </select>';
                    $("#sel").append(selectList);
                }
            </script>
            <script>
                const upload_success = window.createNotification({
                    closeOnClick: true,
                    displayCloseButton: true,
                    // nfc-top-left
                    // nfc-bottom-right
                    // nfc-bottom-left
                    positionClass: 'nfc-bottom-right',
                    // callback
                    onclick: false,
                    showDuration: 10000,
                    // success, info, warning, error, and none
                    theme: 'success'                    
                });
                const upload_failed = window.createNotification({
                    closeOnClick: true,
                    displayCloseButton: true,
                    // nfc-top-left
                    // nfc-bottom-right
                    // nfc-bottom-left
                    positionClass: 'nfc-bottom-right',
                    // callback
                    onclick: false,
                    showDuration: 30000,
                    // success, info, warning, error, and none
                    theme: 'error'
                });
                function upload() {
                    $('.myprogress').css('width', '0');
                    $('.msg').text('');
                    // var myfile = $('#'+file).val();
                    // if (myfile == '') {
                    //     alert('Please select a file');
                    //     return;
                    // }
                    var formData = new FormData;
                    for(var i=1;i<=total;i++){
                        formData.append('songfile' + i, $('#songfile' + i)[0].files[0]);
                        // alert($('#songfile' + i)[0].files[0]['name']);
                        formData.append('albumart' + i, $('#albumart' + i)[0].files[0]);
                        // alert($('#albumart' + i)[0].files[0]['name']);
                    }
                    $('#btn').attr('disabled', 'disabled');
                    $('.msg').text('Uploading in progress...');
                    $.ajax({
                        url: 'upload.php',
                        data: formData,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        // this part is progress bar
                        xhr: function () {
                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function (evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = evt.loaded / evt.total;
                                    percentComplete = parseInt(percentComplete * 100);
                                    $('.myprogress').text(percentComplete + '%');
                                    $('.myprogress').css('width', percentComplete + '%');
                                }
                            }, false);
                            return xhr;
                        },
                        success: function (data) {
                            // console.log(data);
                            var data1 = data.split('\n');
                            data1.pop();
                            data1.forEach(element => {
                                if(element[0] == '1'){
                                    upload_success({
                                        title: 'File Uploaded',
                                        message: element.substring(1),
                                    });
                                    $('.msg').text(element.substring(1));
                                }else{
                                    upload_failed({
                                        title: 'File Upload Failed',
                                        message: element.substring(1),
                                    });
                                    $('.msg').text(element.substring(1));
                                }
                            });
                            
                            $('#btn').removeAttr('disabled');
                        }
                    });
                };
            </script>
    </body>
</html>

