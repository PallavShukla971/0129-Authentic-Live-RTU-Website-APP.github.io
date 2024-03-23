 <?php
require_once "Library/MyLib.php";
$name = $_POST['name'];
$fno = $_POST['fno'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$pass = $_POST['pass'];
//$deg = $_POST['desg'];
$id=GenerateId("college",1);

$sql="insert into college values('$id','$name','$fno','$address','$email','$mobile')";
$sql1="insert into logindata1 values('$email','$pass','hod','0')";

if(mysqli_query($cn,$sql) && mysqli_query($cn,$sql1))
{
	echo "Data Saved & password :".$pass;
}
else
{
	echo "Data Not Saved";
}


?>