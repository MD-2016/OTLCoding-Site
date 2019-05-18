<?php
	
	$error = "";
	function errorFormChecking($username, $password, $verify, $emailaddress, $firstname, $lastname)
	{
		global $error;
		
		
		if((!$username) || (!$password) || (!$verify) || (!$emailaddress) || (!$firstname) || (!$lastname))
		{
			$error = "Please fill in all fields";
			
			return false;
		}
		if(strlen($username) > 50 || strlen($username) < 6)
		{
			$error = "Please enter user name between 6 to 50 characters";
			
			return false;
		}
		if(strlen($password) > 50 || strlen($password) < 6 || strlen($verify) > 50 || strlen($verify) < 6 )
		{
			$error = "Please enter password that is 6 to 50 characters";
			
			return false;
		}
		if($verify != $password)
		{
			$error = "Passwords in password and verify must match";
			
			return false;
		}
		if(!filter_var($emailaddress,FILTER_VALIDATE_EMAIL))
		{
			$error = "Enter vaild email address";
			
			return false;
		}
		else
			return true;
	}
?>