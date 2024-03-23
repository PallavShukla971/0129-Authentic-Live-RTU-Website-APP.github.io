<?php
$name = $_POST['name'];
$roll = $_POST['roll'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$sem = $_POST['sem'];
$branch = $_POST['branch'];
$session = $_POST['session'];

if (!empty($name) || !empty($roll) || !empty($mobile) || !empty($email)  || !empty($branch) || !empty($sem) || !empty($session) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "12345";
    $dbname = "attendence";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else{
	$sql = "INSERT INTO account (name, roll, mobile, email , branch , sem , session)
	values ('$name','$roll' , '$mobile' ,'$email' , '$branch'  , '$sem', '$session' )";
	if ($conn->query($sql)){
	echo "New record is inserted sucessfully";
	}
	else{
	echo "Error: ". $sql ."
	". $conn->error;
	}
	$conn->close();
     } 
    
    
} else {
 echo "All field are required";
 die();
}
?>