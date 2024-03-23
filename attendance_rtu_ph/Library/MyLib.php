<?php
date_default_timezone_set('Asia/Calcutta');
$cn=mysqli_connect("localhost","root","12345");
	if(! $cn)
		{
			echo"unable to connect";
			die();
		}
$db=mysqli_select_db($cn,"androidlab");
	if(! $db)
		{
			echo"database does not exist";
			die();
		}
function Fetchdata($query)
	{
		global $cn;
		$result=mysqli_query($cn,$query);
		return $result;
	}
	function Get_Client_Address()
	{
		$ipaddress='';
		if(getenv('HTTP_CLIENT_IP'))
		{
			$ipaddress=getenv('HTTP_CLIENT_IP');
		}
		else if(getenv('HTTP_X_FORWARDED_FOR'))
		{
			$ipaddress=getenv('HTTP_X_FORWORDED_FOR');
		}
		else if(getenv('HTTP_X_FORWARDED'))
		{
			$ipaddress=getenv('HTTP_X_FORWARDED');
		}
		else if(getenv('HTTP_FORWARDED_FOR'))
		{
			$ipaddress=getenv('HTTP_FORWARDED_FOR');
		}
		else if(getenv('HTTP_FORWARDED'))
		{
			$ipaddress=getenv('HTTP_FORWARD');
		}
		else if(getenv('REMOTE_ADDR'))
		{
			$ipaddress=getenv('REMOTE_ADDR');
		}
		else
		{
			$ipaddress='UNKNOWN';
		}
		return $ipaddress;		
	}


function GenerateId($tablename,$start)
{
	$query="select * from $tablename";
	$result=FetchData($query);
	$n=mysqli_num_rows($result);
	$id=$start+$n;
	return $id;
}
function check_login($user,$password)
{
		
	$role="nothing";
	$query="select * from logindata1 where email='$user' and password='$password'";
	$result=FetchData($query);
	$n=mysqli_num_rows($result);
	if($n>0) //Valid user and password
	{
	
		$rw=mysqli_fetch_array($result);
		$role=$rw["usertype"];
	}
	return $role;
}
function CheckPhoto($email,$tab)
{
	$query="select * from $tab where uid='$email'";
	//echo $query; die();
	$result=FetchData($query);
	$rw=mysqli_fetch_array($result);
	$photo=$rw["img"];
	return $photo;
}
function getAdminName($email)
{
	global $cn;
	$query="select * from admindata where email='$email'";
	//echo $query; die();
	$result=FetchData($query);
	$rw=mysqli_fetch_array($result);
	$name=$rw["name"];
	return $name;
}
?>