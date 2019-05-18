<?php
include("base.php");
include("pagechecker.php");
?>
<!DOCTYPE html>
<!-- Jay-->
<!-- 4/12/2012 -->
<!-- OTLCoding.co.cc-->
<!--JavaScript page-->

<html>
<head>
	<title>OTLCoding JavaScript</title>
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
		<div id="javascriptContent">
			<img src="../Images/javascript.png" width="200" height="120" alt="javascript logo" />
			<br />
			<p>
				JavaScript is an scripting language created by the company known as Netscape.
				This language was created to help with scripting to the client computers.
				It can be used to check forums and also for creating popups in your sites.
			</p>
			<br />
			<p>
				The project with JavaScript is to write a markup page using HTML5 and CSS.
				This page will have a form and javascript will be used to check for errors.
				This forum will be a basic signup form.
				Be sure to check for errors in telephone digit amounts and also correct email address's.
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