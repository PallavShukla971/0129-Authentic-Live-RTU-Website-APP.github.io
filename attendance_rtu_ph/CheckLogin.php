<?php
require_once "library/MyLib.php";
$user=$_REQUEST["email"];
$password=$_REQUEST["psw"];
$role=check_login($user,$password);
if($role=="nothing")
{
	header("Location:LoginError.php");
	die();
}
else
{
	session_start();
	$_SESSION["role"]=$role;
	$_SESSION["email"]=$user;
	if($role=="admin")
	{
		header("Location:Admin/Admin_index_Login.php");
		die();
	}
	else if($role=="hod")
	{
		header("Location:Hod/HOD_index_Login.php");
		die();
	}
	
	else if($role=="teacher")
	{
		header("Location:Teacher/Teacher_index.php");
		die();
	}
}
?>