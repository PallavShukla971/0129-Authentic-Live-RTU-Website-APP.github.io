<?php
$name = $_POST['name'];
$facultyno = $_POST['fno'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$designation = $_POST['designation'];

if (!empty($name) || !empty($facultyno) || !empty($email) || !empty($phone) || !empty($address) || !empty($designation) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "12345";
    $dbname = "attendence";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else{
	$sql = "INSERT INTO teacher (name, email , fno, mobile, address, designation)
	values ('$name','$facultyno' , '$email' , '$phone' , '$department' , '$designation' )";
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