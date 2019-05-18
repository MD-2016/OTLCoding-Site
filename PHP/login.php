<?php 
 include ("base.php");
 include ("passwordchecker.php");
 include ("functions.php");
	
	$error = "";
	
	function postInput($htmlName)
	{
		if(isset($_POST[$htmlName]))
		{
			return $_POST[$htmlName];
		}
		return null;
	}
	
	//check if the user is already login.
			if(isset($_SESSION['userid']))
			{
				//check the database for existing user.
				$usercheck = $mysqli->prepare("SELECT * FROM user WHERE userid = ?");
				$usercheck->bind_param("i",$_SESSION['userid']);
				$usercheck->execute();
				$usercheck->store_result();
				$results = $usercheck->num_rows;
				if($results == 1)
				{
					redirect("languages.php");
				}
			}
	
	$loginusername = postInput('username');
	$loginpassword = postInput('password');
	
	
	
	if(isset($_POST['submit']))
	{
		
		if($loginusername == "" || $loginpassword == "")
		{
			$error = "Please Enter your user name and password";
			
		}
		else
		{
				//user isnt logged in
				if($stmt = $mysqli->prepare("SELECT userid, password FROM user WHERE username = ? LIMIT 1"))
				{
					$stmt->bind_param("s",$loginusername);
					$stmt->execute();
					$stmt->bind_result($userid,$correctHash);
					$stmt->fetch();
				    if(ValidatePassword($loginpassword,$correctHash))
					{
						$_SESSION['userid'] = $userid;
						redirect('languages.php');
					}
					else
					{
							$error = "You dont exist in Database.";
							
					}
					$stmt->close();
					
				}
		}
	}
	
	
	   
?>
<!DOCTYPE html>
<!-- Jay-->
<!-- 4/12/2012 -->
<!-- OTLCoding.co.cc-->
<!-- Login Page-->

<html>
<head>
	<title>OTLCoding Login</title>
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
					</ul>
			   </li>
			   <li><a href="aboutus.php">About This Site</a></li>
			   <li><a href="contactus.php">Contact Us</a></li>
		</nav>
		<div id="loginContent">
			<form name="login" method="post" action="login.php" onsubmit="">
			<p>
				Please login below.
			</p>
			<?php echo $error; ?>
			<fieldset>
				<ul class="formholder">
					<li><label class="foolabel2">Username:</label><input type="text" name="username" id="Username" placeholder="User Name" class="textbox" /></li>
					<li><label class="foolabel2">Password:</label><input type="password" name="password" id="Password" placeholder="Password" class="textbox"/></li>
					<li id="button"><button name="submit" type="submit" id="submitStyle">Login</button></li>
				</ul>
				<br>
				<br>
				
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