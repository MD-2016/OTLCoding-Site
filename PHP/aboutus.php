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
			   <li class="topnav"><a href="phpbb3/index.php">Forums &nbsp;<span class="arrow">&darr;</span></a>
					<ul class="subnav">
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
			   </li>
			   <li><a href="aboutus.php">About This Site</a></li>
			   <li><a href="contactus.php">Contact Us</a></li>
		</nav>
		<div id="aboutContent">
			<p> This website is intended to be used by programmers to help promote their skills. 
			    They will come up with solutions to problems that placed before them for each language. 
				This idea will guarantee that programmers can learn languages better. 
				It's moreless like sharing your talent with others. 
				The only thing your doing is benefiting yourself and other programmers out there.
				<br />
				<br />
				Programmers hold the future in their hands for the world of technology. 
				What we development  is what is given to the world. 
				Our main goal is to write good software that all can use. 
				In every part of technology develop, there are goals each try to strive for. 
				An example is the web programming world tries to make the perfect website layouts. 
				There are many more goals of each part of the technology world but that was just one of the many.
				Programming is hobby for me and also a soon to be career. I enjoy the challenges it brings worth in my life. 
				It truly is the example of trying to solve a difficulut puzzle. 
				It takes breaking down big projects into smaller pieces and working on each part. 
				I am currently pursuing a Bachelor's Degree in Computer Science and Engineering. 
				I am still learning all the different ways of writing programs. 
				This site will also benefit me in learning the languages better too!
				Keep in mind that you can use any IDE or way of development for these projects.
			</p>
	
			<p id="endQuote">
			    				I hope you all enjoy using this site! :)
			</p>
			<h2 id="ownerresponse">
				Site Creator,<br />
			    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jerry Harris
			</h2>
			<div id="aboutlogo">
				<img src="../Images/otl.png" width="120" height="80" />
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