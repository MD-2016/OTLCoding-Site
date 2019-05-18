<?php 
	
	include ("base.php");
	include ("formChecker.php");
	include ("passwordchecker.php");

	function postInput($htmlName)
	{
	if(isset($_POST[$htmlName]))
	{
	return $_POST[$htmlName];
	}
	return null;
	}
	
		$username = postInput('username');
		$pass = postInput('password');
		$fname = postInput('firstname');
		$lname = postInput('lastname');
		$email = postInput('email');
		$verify =postInput('verifypassword');
		
	if(isset($_POST['submit']))
	{
		
		$passwordHasher = HashPassword($pass);
		
		if(errorFormChecking($username, $pass, $verify, $email, $fname, $lname))
		{
			$result = $mysqli->prepare("SELECT * FROM user WHERE username = ? AND email = ?");
			$result->bind_param("ss", $username, $email);
			$result->execute();
			$result->store_result();
			$count = $result->num_rows();
			$result->close();
			
			if($count)
			{
				$error = "Username or email already exists. Please use a different one.";
				
			}
		    
		   else
		   {
				if($stmt = $mysqli->prepare("INSERT INTO user(username, password, firstname, lastname, email) VALUES(?,?,?,?,?)") or die($mysqli->error))
				{
					$stmt->bind_param("sssss",$username, $passwordHasher, $fname, $lname, $email);
					$stmt->execute();
					$stmt->close();
					header("Location: successfulregister.php");
					
				}
				else
				{
					$error = "Could not add to database";
					
					
				}
		   }
		}

		
	}
	?>
<!DOCTYPE html>
<!-- Jay-->
<!-- 4/12/2012 -->
<!-- OTLCoding.co.cc-->
<!--Register Page-->
<html>
<head>
	<title>OTLCoding Register</title>
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
	<script src="../JavaScript/formChecker.js" type="text/javascript">
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
		<div id="registerContent">
		<form name="register" action="register.php" method="post" onsubmit="return validateForm(this)"/>
		<h1> Welcome to OTLCoding.co.cc Register Page!!!</h1>
			<br />
			<p> Thank you for taking interest in this site.
				Please fill out the form below to register for the site.
				We welcome you to the site! :)
			</p>
				<fieldset>
					<?php echo $error; ?>
					<br />
					<ul class="formholder">
						<li><label>UserName:</label><br /><input type="text" name="username" id="Username" placeholder="User Name" class="textbox" /></li>
						<li><label>Password:</label><br /><input type="password" name="password" id="Password" placeholder="Password" class="textbox"/></li>
						<li><label>Verify Password:</label><br /><input type="password" name="verifypassword" id="VerifyPassword" placeholder="Verify" class="textbox" /></li>
						<li><label>Email:</label><br /><input type="email" name="email" id="Email" placeholder="example@address.com" class="textbox"/></li>
						<li><label>First Name:</label><br /><input type="text" name="firstname" id="Firstname" placeholder="First Name" class="textbox"/></li>
						<li><label>Last Name:</label><br /><input type="text" name="lastname" id="Lastname" class="textbox" placeholder="Last Name"/></li>
					</ul>
					<br />
					<br />
					<button type="submit" id="submitStyle" name="submit">Register</button>
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