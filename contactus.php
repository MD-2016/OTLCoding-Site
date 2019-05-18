<!DOCTYPE html>
<!-- Jay-->
<!-- 4/12/2012 -->
<!-- OTLCoding.co.cc-->
<!-- Contact Us Page-->

<html>
<head>
	<title>OTLCoding Contact Us</title>
	<meta name="description" content="over the limit coding"/>
	<meta name="keywords" content="otlcoding, coding site, programming" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="../CSS/test2.css" type="text/css" rel="stylesheet"/>
	<?php
		$fname = $_POST["firstname"];
		$lname = $_POST["lastname"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
	?>
	<script src="../JavaScript/formChecker.js" type="text/javascript">
	</script>
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
		<div id="contactusContent">
			<h1> Thank you For Taking Interest in Us!!</h1>
			<br />
			<p> Thank you for taking interest in this site. Please fill out the form below to send us a email.
				Feel free to include any improvements you have for the site or if you wanna join to help add new things to the site.
				It is your decision on what you wanna do but please feel free to contact us.
			</p>
			<br />
			<form name="contact" action="#" method="post" onsubmit="return validateForm(this)"/>
				<fieldset>
					<ul class="formholder">
						<li><label class="foolabel">First Name:</label><br /><input type="text" name="firstname" id="Firstname" placeholder="First Name" class="textbox" /></li>
						<li><label class="foolabel">Last Name:</label><br /><input type="text" name="lastname" id="Lastname" placeholder="Last Name" class="textbox"/></li>
						<li><label class="foolabel">Email:</label><br /><input type="email" name="email" id="Email" placeholder="example@address.com" class="textbox"/></li>
						<li><label class="foolabel">Subject:</label><br /><input type="text" name="subject" id="Subject" placeholder="Example" class="textbox"/></li>
						<li><label class="foolabel">Message:</label><br /><textarea name="message" id="Message" rows="5" cols="5"></textarea></li>
					</ul>
					<br />
					<button type="submit" id="submitStyle">Submit</button>
			    </fieldset>
			</form>
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