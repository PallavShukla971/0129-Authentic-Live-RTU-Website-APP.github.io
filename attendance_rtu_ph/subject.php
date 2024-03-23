
<?php
$name = $_POST['sname'];
$subjectno = $_POST['subno'];
$maxno = $_POST['maxno'];
$sem = $_POST['sem'];
$branch = $_POST['branch'];
$session = $_POST['session'];
$type = $_POST['type'];
if (!empty($name) || !empty($subjectno) || !empty($maxno) || !empty($sem) || !empty($branch) || !empty($session) || !empty($type) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "12345";
    $dbname = "attendence";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else{
	$sql = "INSERT INTO subjectt (sname, subjectno, maxno , sem, branch, session , type)
	values ('$name','$subjectno' , '$maxno' , '$sem' , '$branch' , '$session' , '$type')";
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