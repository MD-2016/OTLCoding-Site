<?php
include("base.php");
include("pagechecker.php");
?>

<!DOCTYPE html>
<!-- Jay -->
<!-- 4/12/2012 -->
<!-- OTLCoding.co.cc-->
<!--Java Page-->

<html>
<head>
	<title>OTLCoding Java</title>
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
		<div id="javaContent">
			<img src="../Images/java.jpg" width="200" height="120" alt="java logo" />
			<br />
			<p>
				Java is a programming language created James Gosling of Sun Microsystems.
				It was created in the year 1995.
				The purpose of Java was to be used in home applications.
				This language does not use a complier, but instead a virtual machine called JVM.
				Java focuses on interprer to run code.
				It has elements of C++ and C with using OOP.
			</p>
			<br />
			<p>
				The project for Java is assumed the developer has an good understanding of Object-Oriented Programming.
				The task is to build an program that will help users who play dice rolling games.
				Examples of these games include Dungeons and Dragons, Marvel, and many others.
				The dices to choose from will be from d4 to d20.
				The user will then have the dice generate random rolls to determine what they get.
				They should be able to choose the dice they wanna use and the program should have a simple user interface.
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