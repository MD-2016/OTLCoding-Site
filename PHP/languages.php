<?php
include("base.php");
include("pagechecker.php");
?>
<!DOCTYPE html>
<!-- Jay-->
<!-- 4/12/2012 -->
<!-- OTLCoding.co.cc-->
<!-- Language page which shows the list of each language -->

<html>
<head>
	<title>OTLCoding Languages</title>
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
	<script src="../JavaScript/jslider.js" type="text/javascript"></script>
	<script>
		$(function() {
			$(".slider").jslider({
				btnNext: ".next",
				btnPrev: ".prev"
			})
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
		<div id="languageContent">
			<img id="prev" class="prev" src="../Images/prev.png" />
			<img id="next" class="next" src="../Images/next.png" />
			<div class="slider">
				<ul>
					<li><a href="htmlpage.php"><img class="slider" src="../Images/html.png" alt="HTML" width="400" height="200"/></a></li>
					<li><a href="cpluspluspage.php"><img class="slider" src="../Images/cplusplus.jpg" alt="C++"width="400" height="200"/></a></li>
					<li><a href="csharppage.php"><img class="slider" src="../Images/csharp.jpg" alt="C#" width="400" height="200"/></a></li>
					<li><a href="csspage.php"><img class="slider" src="../Images/css.jpg" alt="CSS" width="400" height="200"/></a></li>
					<li><a href="javapage.php"><img class="slider" src="../Images/java.jpg" alt="Java" width="400" height="200"/></li>
					<li><a href="javascriptpage.php"><img class="slider" src="../Images/javascript.png" alt="JavaScript" width="400" height="200"/></a></li>
					<li><a href="phppage.php"><img class="slider" src="../Images/php.jpg" alt="PHP" width="400" height="200"/></a></li>
					<li><a href="sqlpage.php"><img class="slider" src="../Images/sql.gif" alt="SQL" width="400" height="200"/></a></li>
				</ul>
				<br />
				<br />
				<p> This the languages this site has to offer. New languages will be added soon! :D </p>
			</div>
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