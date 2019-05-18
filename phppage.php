<?php
include("base.php");
include("pagechecker.php");
?>
<!DOCTYPE html>
<!-- Jay-->
<!-- 4/12/2012 -->
<!-- OTLCoding.co.cc-->
<!--PHP Page-->

<html>
<head>
	<title>OTLCoding PHP</title>
	<meta name="description" content="over the limit coding"/>
	<meta name="keywords" content="otlcoding, coding site, programming" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="../CSS/test2.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
			$(".topnav").hover(function(){
				$('ul:first', this).toggleClass('show')
		});
			
		});
	</script>
	<div class="wrapper">
		<header>
			<img src="../Images/otl.png" width="300" height="125" alt="site logo"/>
		</header>
		<nav>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li class="topnav"><a href="languages.php">Languages &nbsp;<span class="arrow">&darr;</span></a>
					<ul class="subnav">
						<li><a href="htmlpage.php">HTML</a></li>
						<li><a href="cpluspluspage.php">C++</a></li>
						<li><a href="csharppage.php">C#</a></li>
						<li><a href="csspage.php">CSS</a></li>
						<li><a href="javapage.php">Java</a></li>
						<li><a href="javascriptpage.php">JavaScript</a></li>
						<li><a href="phppage.php">PHP</a></li>
						<li><a href="sqlpage.php">SQL</a></li>
					</ul>
				</li>
			   <li class="topnav"><a href="phpbb3/index.php">Forms &nbsp;<span class="arrow">&darr;</span></a>
					<ul class="subnav">
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
			   </li>
			    <li><a href="aboutus.php">About This Site</a></li>
			   <li><a href="contactus.php">Contact Us</a></li>
		</nav>
		<div id="phpContent">
			<img src="../Images/php.jpg" width="200" height="120" alt="php logo" />
			<br />
			<p>
				PHP is a server side language created by Rasmus Lerdorf in 1995.
				It was meant to help create dynamic webpages.
				This language is a very powerful language today.
				Many sites were made using this language.
				One major site is Facebook, made in all PHP.
			</p>
			<br />
			<p>
				The project for PHP is to create a signup form where the user will get an response back.
				They need to have a username and password.
				The site made need a database to store the username and password.
				MySQL or Access or SQL Server can be used for the database side.
				Be sure to incorporate security into this project as password hacking could happen.
				Be sure to style the page using CSS and markup with HTML5.
				The page can have an basic style or advanced as you wish it to be.
			</p>
		</div>
		<footer>
			<p>Created by Webmaster Jay &copy 2012</p>
			<p>
				<script language="Javascript" type="text/javascript">
					document.write('<h3 style="text-align: center; color: red">Date Last Modified: ' + document.lastModified);
				</script>
			</p>
			<ul class="footerlinks">
				<li><a href="../index.php">Home</a></li>
				<li><a href="languages.php">Languages</a></li>
				<li><a href="contactus.php">Contact</a></li>
				<li><a href="aboutus.php">About</a></li>
			</ul>
		</footer>
	</div>
</body>
</html>