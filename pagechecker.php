<?php
//used to check for already login.
if(!isset($_SESSION['userid']))
{
header("Location: login.php");
die();
}
else
{
$usercheck = $mysqli->prepare("SELECT * FROM user WHERE userid = ?");
$usercheck->bind_param("i",$_SESSION['userid']);
$usercheck->execute();
$usercheck->store_result();
$results = $usercheck->num_rows;
if($results == 0)
{
header("Location: login.php");
die();
}
}