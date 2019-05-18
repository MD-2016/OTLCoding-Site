<!DOCTYPE html>
<!-- Jay -->
<!-- 4/11/2012 -->
<!-- OTLCoding.cc.co -->
<!-- homepage for the site -->

<html>
<head>
	<title>OTLCoding.co.cc</title>
	<meta name="description" content="over the limit coding"/>
	<meta name="keywords" content="otlcoding, coding site, programming" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="CSS/test2.css" type="text/css" rel="stylesheet"/>
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
			<img src="Images/otl.png" width="300" height="125" alt="site logo"/>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="topnav"><a href="PHP/languages.php">Languages &nbsp;<span class="arrow">&darr;</span></a>
					<ul class="subnav">
						<li><a href="PHP/htmlpage.php">HTML</a></li>
						<li><a href="PHP/cpluspluspage.php">C++</a></li>
						<li><a href="PHP/csharppage.php">C#</a></li>
						<li><a href="PHP/csspage.php">CSS</a></li>
						<li><a href="PHP/javapage.php">Java</a></li>
						<li><a href="PHP/javascriptpage.php">JavaScript</a></li>
						<li><a href="PHP/phppage.php">PHP</a></li>
						<li><a href="PHP/sqlpage.php">SQL</a></li>
					</ul>
				</li>
			   <li class="topnav"><a href="">Forms &nbsp;<span class="arrow">&darr;</span></a>
					<ul class="subnav">
						<li><a href="PHP/login.php">Login</a></li>
						<li><a href="PHP/register.php">Register</a></li>
						<li><a href="PHP/logout.php">Logout</a></li>
					</ul>
			   </li>
			   <li><a href="PHP/aboutus.php">About This Site</a></li>
			   <li><a href="PHP/contactus.php">Contact Us</a></li>
		</nav>
		<div id="mainContent">
				<p>
					WELCOME TO OTLCODING.co.cc
					A site dedicated to helping the fellow programmer put their skills out into the the world.
					Please signup or login and explore a site worth checking! :D
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
				<li><a href="index.php">Home</a></li>
				<li><a href="PHP/languages.php">Languages</a></li>
				<li><a href="PHP/contactus.php">Contact</a></li>
				<li><a href="PHP/aboutus.php">About</a></li>
			</ul>
		</footer>
	</div>
</body>
</html>