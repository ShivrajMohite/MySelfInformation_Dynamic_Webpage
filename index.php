<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mydata";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database );

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	
	$query = 'Select * from contact';
	$result = mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($result)){
			//print_r($row);
		}
		if(isset($_POST['submit']))
		{
			//echo($_POST['name']."<br/>\n");
			//echo($_POST['email']."<br/>\n");
			//echo($_POST['comment']."<br/>\n");
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];

			
			//echo $name;
			//echo $email;
			//echo $comment;
			
			$sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "<script>alert('Data Inserted Sucessfully!')</script>";
			}
			else{
				echo "<script>alert('Somthing Went Wrong!')</script>";

			}
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Shivraj Mohite </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic CV Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body> 
<!-- banner -->
<div id="home" class="banner">
	<div class="banner-agileinfo">
		<!-- header -->
		<div class="header">
			<div class="container">		
				<div class="logo">
					<h1><a href="index.html">My Information</a></h1>
				</div> 
				<div class="menu">
					<a href="" id="menuToggle"> <span class="navClosed"></span> </a>
					<nav>  
						<a href="index.html" class="active">Home</a> 
						<a href="#about" class="scroll">About Me</a>  
						<a href="#skills" class="scroll">My Skills</a>  
						<a href="#services" class="scroll">My Services</a>
						<a href="#experience" class="scroll">Experience</a> 
						<a href="#education" class="scroll">My Education</a> 
						<a href="#projects" class="scroll">My Projects</a>
						<a href="#contact" class="scroll">Contact Me</a> 
					</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header -->
		<div class="banner-main">
			<div class="container">	
				<div class="col-md-5 banner-left">
					<img src="images/i2.png" alt=""> 
				</div>
				<div class="col-md-7 banner-text">
					<p>Welcome</p>
					<h2><span>I am Shivraj Mohite</span> Web Developer</h2>
					<div class="w3agile_hire_right">
						<a href="#contact" class="wthree-more w3more1 nina scroll" data-text="hire me"> 
							<span>h</span><span>i</span><span>r</span><span>e</span> <span>m</span><span>e</span>
						</a> 
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>
<!-- //banner -->
<!---728x90--->
<!-- about -->
<div class="about" id="about">
	<div class="container">
		<h3 class="w3l-title">My Self</h3>
		<div class="about-w3l-agileifo-grid">
			<div class="col-md-7 agile-w3l-ab">
				<ul class="rslides" id="slider">
					<li>
						<div class="agile-w3l-ab-img">
							<img src="images/a1.jpg" class="img-responsive" alt="Homey Designs">
						</div>
					</li>
					<li>
						<div class="agile-w3l-ab-img">
							<img src="images/a2.jpg" class="img-responsive" alt="Homey Designs">
						</div>
					</li>
					<li>
						<div class="agile-w3l-ab-img">
							<img src="images/a3.jpg" class="img-responsive" alt="Homey Designs">
						</div>
					</li>
					<li>
						<div class="agile-w3l-ab-img">
							<img src="images/a4.jpg" class="img-responsive" alt="Homey Designs">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-5 w3ls-agile-left">
				<div class="w3ls-agile-left-info">
					<h4>Name</h4>
					<p>Shivraj B. Mohite</p>
				</div>
				<div class="w3ls-agile-left-info">
					<h4>Sex</h4>
					<p>Male</p>
				</div>
				<div class="w3ls-agile-left-info">
					<h4>Address</h4>
					<p> A/P-Talsande, Kolhapur, Maharashtra.416112</p>
				</div>
				<div class="w3ls-agile-left-info">
					<h4>Phone Number</h4>
					<p>+918411818242</p>
				</div>
				<div class="w3ls-agile-left-info">
					<h4>Email Address</h4>
					<p><a href="mailto:example@email.com">shivrajmohite@21gmail.com</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //about -->
<!---728x90--->
<!-- stats -->
<div class="stats wthree-sub" id="skills">
	<div class="container"> 
		<h3 class="w3l-title">My Skills</h3>
		<div class="col-sm-6 stats_grid_right">
			<div class="skillbar" data-percent="78">
			  <span class="skillbar-title" style="background: #f1703a;">Bootstrap</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="50">
			  <span class="skillbar-title" style="background: #2980b9;">JavaScript</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="85">
			  <span class="skillbar-title" style="background: #a0d034;">HTML5</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->

			<div class="skillbar" data-percent="60">
			  <span class="skillbar-title" style="background: #37F281;">Jquery</span>
			  <p class="skillbar-bar" style="background: #94FCBD;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
		</div>
		<div class="col-sm-6 stats_grid_right"> 
			<div class="skillbar" data-percent="54">
			  <span class="skillbar-title" style="background: #f1703a;">Photoshop</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="80">
			  <span class="skillbar-title" style="background: #2980b9;">CSS3</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="60">
			  <span class="skillbar-title" style="background: #a0d034;">PHP</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
		</div>
		<div class="clearfix"> </div>
	</div> 
</div>
<!-- //stats --> 
<!---728x90--->
<!-- services --> 
<div class="services" id="services">
	<div class="container">
		<h3 class="w3l-title">My Services</h3>
		<div class="box2">
			<div class="col-sm-4 s-1">
				<a href="#">
					<div class="view view-fifth">
						<i class="fa fa-laptop" aria-hidden="true"></i>
						<div class="mask">
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<h4>Web Design</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
						</div>
						<h3>Web Design </h3>
					</div>
				</a>
			</div>
			<div class="col-sm-4 s-1">
				<a href="#">
					<div class="view view-fifth">
						<i class="fa fa-clone" aria-hidden="true"></i>
						<div class="mask">
							<i class="fa fa-clone" aria-hidden="true"></i>
							<h4>Creative Design</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
						</div>
						<h3>Creative Design</h3>
					</div>
				</a>
			</div>
			<div class="col-sm-4 s-1">
				<a href="#">
					<div class="view view-fifth">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<div class="mask">
							<i class="fa fa-pencil" aria-hidden="true"></i>
							<h4>Html Coding</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
						</div>
						<h3>Html Coding</h3>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services --> 
<!-- interests --> 
<div class="intra-w3l">
	<div class="container">
		<h3 class="w3l-title">Interests</h3>
		<div class="agile-w3l-in">
			<i class="fa fa-camera" aria-hidden="true"></i>
			<p>PHOTOGRAPHY</p>
		</div>
		<div class="agile-w3l-in">
			<i class="fa fa-plane" aria-hidden="true"></i>
			<p>TRAVELLING</p>
		</div>
		<div class="agile-w3l-in">
			<i class="fa fa-book" aria-hidden="true"></i>
			<p>Reading</p>
		</div>
		<div class="agile-w3l-in w3l-intra-re">
			<i class="fa fa-gamepad" aria-hidden="true"></i>
			<p>GAMING</p>
		</div>
		<div class="agile-w3l-in w3l-intra-re">
			<i class="fa fa-music" aria-hidden="true"></i>
			<p>MUSIC</p>
		</div>
	
	</div>
</div>
<!-- //interests --> 
<!-- experience -->
<div class="services-w3l" id="experience">
	<div class="container">
		<h3 class="w3l-title">Work Experience</h3>
		<div class="wthree_latest_albums_grids">
			<div class="cntl"> <span class="cntl-bar cntl-center"> <span class="cntl-bar-fill"></span> </span>
				<div class="cntl-states">
					<div class="cntl-state">
						<div class="cntl-content">
							<h4>2018 Present</h4>
							<p>FULL STACK DEVELOPER</p>
						</div>
						<div class="cntl-image">
							<img src="images/w1.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_cntl_image_pos">
								<p>Sed do eiusmod tempor incididunt et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="cntl-icon cntl-center">01</div>
					</div>
					<div class="cntl-state">
						<div class="cntl-content">
							<h4>2017</h4>
							<p>PHP AND DATABASE QUERIES</p>
						</div>
						<div class="cntl-image w3_cntl_image"><img src="images/w2.jpg" alt=" " class="img-responsive" /></div>
						<div class="cntl-icon cntl-center">02</div>
					</div>
					<div class="cntl-state">
						<div class="cntl-content">
							<h4>2017</h4>
							<p>FRONT END DEVELOPER</p>
						</div>
						<div class="cntl-image">
							<img src="images/w3.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_cntl_image_pos">
								<p>Sed do eiusmod tempor incididunt et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="cntl-icon cntl-center">03</div>
					</div>
					<div class="cntl-state">
						<div class="cntl-content">
							<h4>2017</h4>
							<p>HTML,CSS AND BOOTSTRAP</p>
						</div>
						<div class="cntl-image">
							<img src="images/w4.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_cntl_image_pos">
								<p>Sed do eiusmod tempor incididunt et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="cntl-icon cntl-center">04</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //experience -->
<!-- education -->
<div class="experience" id="education">
	<div class="container">
		<h3 class="w3l-title">My Education</h3>
		<div class="col-md-12 abt-left">
			<div class="accordion">
				<div class="accordion-section">
					<h5><a class="accordion-section-title" href="#accordion-1">
						<span>2014</span>Shivaji University
					<i class="glyphicon glyphicon-chevron-down"></i>
					</a></h5>
					<div id="accordion-1" class="accordion-section-content">
						<h6>College</h6>
						<ul>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Dr.D.Y.Patil Technical Campus Faculty of Engineering and Technology,Talsande,Kolhapur.</a></li>
							<!-- <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Fusce dapibus orci sapien, ut facilisis turpis blandit nec</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="#">Donec cursus nibh quis egestas dapibus</a></li> -->
						</ul>
					</div>
				</div>
				<div class="accordion-section">
					<h5><a class="accordion-section-title" href="#accordion-2">
						<span>2012 - 2014</span> Jr.College of Science
					<i class="glyphicon glyphicon-chevron-down"></i>
					</a></h5>
					<div id="accordion-2" class="accordion-section-content">
						
						<h6>Projects & Awards</h6>
						<ul>
							<li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
							<li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
							<li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion-section">
					<h5><a class="accordion-section-title" href="#accordion-3">
						<span>2006 - 2012</span> Shri Parashar HighSchool
					<i class="glyphicon glyphicon-chevron-down"></i>
					</a></h5>
					<div id="accordion-3" class="accordion-section-content">
						<h6>Competitions</h6>
						<ul>
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
							<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //education -->
<!-- projects -->
<div class="portfolio" id="projects">
	<div class="container">
		<h3 class="w3l-title">My Projects</h3>
		<div class="agileits_portfolio_grids">
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g1.jpg">
						<img src="images/g1.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g2.jpg">
						<img src="images/g2.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g3.jpg">
						<img src="images/g3.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g4.jpg">
						<img src="images/g4.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g5.jpg">
						<img src="images/g5.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4> 
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g6.jpg">
						<img src="images/g6.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g7.jpg">
						<img src="images/g7.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g8.jpg">
						<img src="images/g8.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g9.jpg">
						<img src="images/g9.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g10.jpg">
						<img src="images/g10.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g11.jpg">
						<img src="images/g11.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4>
						</div>
					</a>
				</div>
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="images/g12.jpg">
						<img src="images/g12.jpg" alt=" " class="img-responsive">
						<div class="overlay">
							<h4>Shivraj</h4> 
						</div>
					</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //projects -->
<!-- introduce -->
<div class="confi-w3l">
	<div class="container">
		<h3>Hello Folks....</h3>
		<p>It's my pleasure to introduce my self..well, I'm Shivraj Mohite and raised in INDIA and I'm enthusiastic Web development</p>
		<p>My strengths is my attitude; I like to do work who challenge me professionally. I take both success and failure in a balanced manner and thas's my way of thinking.</p>
	</div>
</div>
<!-- //introduce -->
<!-- //contact -->
<div class="address" id="contact">
	<div class="container">
		<h3 class="w3l-title">Contact Me</h3>
		<div class="address-row">
			<div class="col-md-6 address-left wow agile fadeInLeft animated" data-wow-delay=".5s">
				<div class="address-grid">
					<h4 class="wow fadeIndown animated" data-wow-delay=".5s">Get In Touch</h4>
					<form  method="post">
						<input id="name" type="text" placeholder="Name" name="name" required="">
						<input id="email" type="email" placeholder="Email" name="email" required="">
						<input id="subject" type="text" placeholder="Subject" name="subject" required="">
						<textarea id="message" name="message" placeholder="Message" required=""></textarea>
						<input type="submit" name="submit" value="SEND">
					</form>
				</div>
			</div>
			<div class="col-md-6 address-right">
				<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Address</h4>
					<p>A/P- Talsande, Tal-Hatkanangle, Dist-Kohlhapur. Maharashtra. INDIA 416112.</p>
				</div>
				<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
					<h4>Phone </h4>
					<p>+918411818242</p>
					<p>(0230)-2479191</p>
				</div>
				<div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
					<h4>Mail</h4>
					<p><a href="mailto:example@mail.com"> shivrajmohite@21gmail.com</a></p>
					<p><a href="mailto:example@mail.com"> shivm09.sm@gmail.com.com</a></p>
				</div>
			</div>
		</div>	
	</div>	
</div>

<!-- <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d954.5495123950619!2d74.25489462918402!3d16.866094699274544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDUxJzU3LjkiTiA3NMKwMTUnMTkuNiJF!5e0!3m2!1sen!2sin!4v1515266575471" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	
</div> -->
<!--//contact-->
<!-- footer -->
<div class="footer w3ls">
	<div class="container">
		<div class="w3ls-social-icons-2">
			<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
			<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
			<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
			<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
			<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
		</div>
	</div>
</div>
<div class="copyrights">
	<p>&copy; 2018 Classic CV. All rights reserved | Design by Shivraj <!--<a href="http://w3layouts.com">W3layouts</a> --></p>
</div>
<!-- //footer -->

<!-- js-scripts -->		
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
	
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for-bottom-to-top smooth scrolling -->
<script type="text/javascript">
	$(document).ready(function() {
	/*
		var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1200,
		easingType: 'linear' 
		};
	*/								
	$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //for-bottom-to-top smooth scrolling -->
<!-- menu-script -->
<script>
	(function($){
		// Menu Functions
		$(document).ready(function(){
		$('#menuToggle').click(function(e){
			var $parent = $(this).parent('.menu');
		  $parent.toggleClass("open");
		  var navState = $parent.hasClass('open') ? "hide" : "show";
		  $(this).attr("title", navState + " navigation");
				// Set the timeout to the animation length in the CSS.
				setTimeout(function(){
					console.log("timeout set");
					$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
				}, 200);
			e.preventDefault();
		});
	  });
	})(jQuery);
</script>
<!-- //menu-script -->
<!-- baneer-js -->
<script src="js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
	  // Slideshow 4
	  $("#slider").responsiveSlides({
		auto: true,
		pager:false,
		nav:false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });

	});
</script>				 
<!-- //baneer-js -->
<!-- skills -->
<script src="js/skill.bars.jquery.js"></script>
<script>
	$(document).ready(function(){
		
		$('.skillbar').skillBars({
			from: 0,
			speed: 4000, 
			interval: 100,
			decimals: 0,
		});
		
	});
</script>
<!-- //skills --> 
<!-- timeline -->
<script type="text/javascript" src="js/jquery.cntl.js"></script> 
<script type="text/javascript">
	$(document).ready(function(e){
		$('.cntl').cntl({
			revealbefore: 300,
			anim_class: 'cntl-animate',
			onreveal: function(e){
				console.log(e);
			}
		});
	});
</script>
<!-- //timeline -->
<!-- accordion -->
<script>
	jQuery(document).ready(function() {
	function close_accordion_section() {
		jQuery('.accordion .accordion-section-title').removeClass('active');
		jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	}

	jQuery('.accordion-section-title').click(function(e) {
		// Grab current anchor value
		var currentAttrValue = jQuery(this).attr('href');

		if(jQuery(e.target).is('.active')) {
			close_accordion_section();
		}else {
			close_accordion_section();

			// Add active class to section title
			jQuery(this).addClass('active');
			// Open up the hidden content panel
			jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
		}

		e.preventDefault();
	});
	});
</script>
<!-- //accordion -->
<!-- for projects -->
<script src="js/jquery.tools.min.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/jquery.cm-overlay.js"></script>
<script>
	$(document).ready(function(){
		$('.cm-overlay').cmOverlay();
	});
</script>
<!-- //for projects -->				
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- //js-scripts -->

</body>
</html>