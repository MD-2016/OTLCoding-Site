<?php
include("base.php");
include("pagechecker.php");
?>
<!DOCTYPE html>
<!-- Jay -->
<!-- 4/12/2012 -->
<!-- OTLCoding.co.cc-->
<!--C# Page-->

<html>
<head>
	<title>OTLCoding C#</title>
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
			   <li><a href="../PHP/contactus.php">Contact Us</a></li>
		</nav>
		<div id="csharpContent">
			<img src="../Images/csharp.jpg" width="200" height="120" alt="c# logo" />
			<br />
			<p>
				C# is a programming language created by Microsoft was developed in the year 2001. 
				This language is intended to be simple, modern, general-purpose, and object-oriented language.
			</p>
			<br />
			<p>
				The challenge for C# is to build a password manager. 
				It should have a simple to use interface and have good security to hold their passwords.
				A database connection may be required if you declare it as to be importance to the project.
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