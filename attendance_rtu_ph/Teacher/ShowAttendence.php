<?php 
require_once "../Library/MyLib.php";
session_start();
if(!isset($_SESSION["role"]))
{
	header("Location:../AuthError.php");
	die();
}
$role=$_SESSION["role"];
$uid=$_SESSION["email"];
if($role!="teacher")
{
	header("Location:../AuthError.php");
	die();
}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: ChocoBusCorp
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RTU(MANAGER)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="HOD_index_Login.css" type="text/css" />
<link rel="shortcut icon" type="image/jpg" href="Rajasthan_Technical_University_logo.jpg">
</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar">
    <div id="quickcont">
      <ul>
        <li>Tel: 0744-2473861</li>
        <li> | </li>
        <li class="last">Mail: vcofficertu@yahoo.co.in</li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="header">
    <div id="logo">
	  <h1><a href="../index.html">R.T.U.</a></h1>
	  <a href="../index.html"><img class="img1" id="img11" src="Rajasthan_Technical_University_logo.jpg" align="left" style="height:120px; width=120px; " padding="0px" /></a>
      <h2><a href="../index.html">Teacher's(Panel)</a></h2>
	  <!--<p>Free Website Template</p>-->
    </div>
    <div id="topnav">	
      <ul>
        <li class="active"><a href="Teacher_index.php">Home</a>
          <ul>
            <!--<li><a href="#">Contact</a></li>
            <li><a href="#">Business Conditions</a></li>
            <li class="last"><a href="#">Find Us</a></li>-->
          </ul>
        </li>
        <li><a href="TakeAttendence.php">TakeAttendence</a></li><!-- Style Demo  -->
       <li><a href="ShowAttendence.php">ShowAttendence</a></li>
				<li><a href="ShowTimeTable.php">ShowTimeTable</a></li>
				<li ><a href="GenrateReport.php">GenrateReport</a></li>
		 <li class="last"><a href="#">LOG-OUT</a></li><!-- Long Link Text  -->
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first"   style="border-left: 6px solid red; border-right: 6px solid red; " >&nbsp You are at Show Attendence page&nbsp </li><li>&nbsp Your Track&nbsp </li>
      <li>&#187;</li>
      <li><a href="../index.html">Home</a></li><li> &#187;  </li><li><a href="../Log-In.html">Log-In</a></li><li> &#187; </li><li><a href="Teacher_index.php">HOD Log-In</a></li><li>&nbsp &#187; &nbsp </li><li  class="current" ><a href="ShowAttendence.php">Show Attendance page</a></li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="services" style=" overflow:scroll;" >
      <!--<ul>
        <li>
          <h2>Admin Pannel</h2>
          <div class="imgholder"><img src="images/demo/ADMIN.JPG" width="240" height="90" alt="" /></div>
          <p style="text-align:justify" >The Admin pannel, can edit any of the setting. He can add the Hod,Faculty,Subject or even can schedule the Classes for the various Semester within this pannel, of this page.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>
        </li>
        <li>
          <h2>Hod Pannel</h2>
          <div class="imgholder"><img src="images/demo/HOD.JPG" width="240" height="90" alt="" /></div>
          <p style="text-align:justify" >The Hod pannel, will allow the user to add subject, time-table, faculty and even student. The Hod can schedule class, at any slot as per the schedule available.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>
        </li>
        <li class="last">
          <h2>Faculty Pannel</h2>
          <div class="imgholder"><img src="images/demo/FACULTY.JPG" width="240" height="90" alt="" /></div>
          <p style="text-align:justify" >The Faculty pannel, will allow the user to add subject, time-table, faculty and even student. The Hod can schedule class, at any slot as per the schedule available</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>
        </li>
      </ul>-->
       <form method="post"  action="ShowAttendence.php">
<table width="500" border="1" align="center"  cellpadding="4px">
<tr><td> Subject </td> <td><select name="subno" id="subno">

<?php 
require_once "../Library/MyLib.php";

$query="select * from timetable";
	$result=FetchData($query);
	$n=mysqli_num_rows($result);
	while($n>0) //Valid user and password
	{
	
		$rw=mysqli_fetch_array($result);
		$subject=$rw["subject"];
		$branch=$rw["branch"];
		$sem=$rw["sem"];
		$batch=$rw["batch"];
		$subno=$rw["subno"]
		
		?>
		<option value="<?php echo $subno."|".$sem."|".$branch."|".$batch?>"><?php echo $subject."/".$sem."/".$branch."/".$batch?></option>

		<?php
		$n=$n-1;
	}
	?>
    </select></td> </tr>
    
    
   
   
   
   
   
   
                          
<tr><td align="center" colspan="2"><input type="submit" value="Show Student" name="B1" /></td></tr>
</table>
</form>  
<?php 
require_once("../Library/MyLib.php");
if(isset($_REQUEST["B1"]))
{
	$result=$_REQUEST["subno"];
            $result_explode = explode('|', $result);
            
			$subno=$result_explode[0];
			$sem=$result_explode[1];
			$branch=$result_explode[2];
			$batch=$result_explode[3];
			$sql="";

//echo $batch;
	
	if($batch=='1234' || $batch=='12')
	{
		$sql="select * from studentt where sem='$sem'and branch='$branch' order by id";
	
	}
	else
	{
		$sql="select * from studentt where sem='$sem'and branch='$branch' and batch='$batch' order by id";
	
	}
	
$result=mysqli_query($cn,$sql);
$n=mysqli_num_rows($result);
?>
<table border="1">
<tr>
<td>Date\Name[Roll-No]</td><?php
$i=1;
while($rw=mysqli_fetch_array($result))
{
	$uid=$rw["id"];
	$Name=$rw["name"];
	$rollno=$rw["rollno"];
	$batch1=$rw["batch"];
	
	
	?>
    
    <td><?php echo $Name."[".$rollno."]"; ?></td>
	
    
     <?php
	 $i=$i+1;
}


?>
</tr>

<?php 
$sql1="";
if($batch=='1234' || $batch=='12')
	{
		$sql1="select * from atten where  subno='$subno' and sem='$sem'and branch='$branch' order by id";
	
	}
	else
	{
		$sql1="select * from atten where subno='$subno' and sem='$sem'and branch='$branch' and batch='$batch' order by id";
	
	}
	//echo $sql1;
	$result1=mysqli_query($cn,$sql1);
$n1=mysqli_num_rows($result1);
while($rw1=mysqli_fetch_array($result1))
{
	$id=$rw1["id"];
	$atten=$rw1["attendence"];
	$date1=$rw1["date"];
	$no=count($atten);
	 $result_explode = explode('[', $atten);
            
			$attnee=$result_explode[1];
			 $result_explode = explode(']', $attnee);
            
			$attnee=$result_explode[0];
			$result_explode = explode(',', $attnee);
			
	//echo $atten;
	?>
    
   <tr> <td><?php echo $date1; ?></td>
	
    
     <?php
	 $i=0;
	 while($i<$n)
	 {
		 ?>
    
    <td><?php echo $result_explode[$i];; ?></td>
	
    
     <?php
	 $i=$i+1;
	
		 
	 }
	 ?></tr><?php
}
}


?>
</table>


    
  
    
	  	
		

		


	  	
		

		


      <br class="clear" />
    </div>
	
	<style>

			/* ################################ THIS IS SECOND PART ############################## */
			
							
			nav
				{
					width:1400px; margin:0px auto;
				}
			nav ul
				{
					margin:0px; padding:0px; list-style:none;
				}
			nav ul ul
				{
					display:none; position:absolute;
				}
			nav ul li:hover ul
				{
					display:block;
				}
			nav ul li
				{
					float:left; box-shadow:white 2px 2px 2px 2px;
				}
			nav ul li>ul
				{
					//width:0px;
				}
			nav a
				{
					box-sizing:border-box;
					width:200px;
					text-align:center;
					text-decoration:none;
					background:white;
					display:block;
					font-weight:bold;
					height:30px;
					color:black; /* cyan, second try red */
					padding: 0px 0px;
					border-bottom: 1px black solid;
				}
			nav ul>li:nth-child(1) ul li ul
				{
					position:static; width:150px; float:left; height:500px;
				}
			nav ul>li:nth-child(2) ul li ul
				{
					position:relative; left:-300px; width:200px; float:left; height:400px;
				}
			nav ul>li:nth-child(3) ul li ul
				{
					position:relative; left:00px; width:200px; float:left; height:400px;
				}
			nav ul>li:nth-child(4) ul li ul
				{
					position:relative; left:-300px; width:200px; float:left; height:400px;
				}

			/* ############################# THIS IS THIRD PART ########################### */
			
			#section1 :hover
			{
				background:black; /* greenyellow */
				color:white;
			}
			
		</style>
    <!--
	<div id="content">
      <h2>About RTU</h2>
      <p style="text-align:justify" >This website realtes to the RTU UNIVERSITY from the site <a href="http://www.rtu.ac.in/RTU/">Rajasthan Technical University</a>.</p>
      <p style="text-align:justify" ><a href="http://www.rtu.ac.in/RTU/"><strong>Rajasthan Technical University (RTU)</strong></a> is located in Kota in the state of Rajasthan. It was established in 2006 by the Government of Rajasthan to enhance the technical education in the state.</p>
      <p style="text-align:justify" >The university has been established in the campus of University College of Engineering, Kota (previously known as Engineering College, Kota), which is located on the Rawatbhata Road, about 14 kms from Kota Railway Station and 10 kms from Kota Bus Stand.</p>
     -->
		 <!-- <p>This template is distributed using a <a href="https://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
		  <p>For more CSS templates visit <a href="https://www.os-templates.com/">Free Website Templates</a>.</p>
		  <p>Lacusenim inte trices lorem anterdum nam sente vivamus quis fauctor mauris. Wisinon vivamus wisis adipis laorem lobortis curabiturpiscingilla dui platea ipsum lacingilla.</p>
		 -->
	<!--
		<p style="text-align:justify" >The university currently affiliates about 112 Engineering Colleges,05 B.Arch, 27 MCA Colleges, 60 MBA Colleges, 48 M.Tech Colleges,01 M.Arch and 02 Hotel Management and Catering Institute. More than 2.5 lacs students study in the various institutes affiliated to the University.</p>
		</div>
	-->
	<!--adding form-->	

<!--adding style-->

<!--javascript-->
	<script>
	function openForm() {
	document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
	document.getElementById("myForm").style.display = "none";
	}
	</script>
<!--delted image-->
    <!--
	<div id="column">
      <div class="holder">
        <div class="imgholder"><img src="images/demo/290x100.gif" alt="" /></div>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
	-->
    <table width="500" border="1" align="center"  cellpadding="4px">
<tr>
	<th align="center" colspan="0"><a href="Teacher_index.php"><button>Back_Button</button></a></th>
	<th align="center" colspan="0"><a href="../index.html"><button>&nbsp &nbsp &nbsp  Home &nbsp &nbsp &nbsp </button></a></th>
	
</tr>
<script>
function goBack() {
  window.history.back();
}
</script>

</table>

    
    
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
  <div id="footer">
    <div class="footbox">
      <h2>ABOUT RTU</h2>
      <p><a href="http://www.rtu.ac.in/RTU/about-rtu">&#9679; About RTU</a></p>
      <p><a href="http://www.rtu.ac.in/RTU/wp-content/uploads/2017/06/OUR-VICE-CHANCELLORS.pdf">&#9679; Our Vice Chancellors</a></p>
      <p><a href="http://www.rtu.ac.in/RTU/rtu-map">&#9679; RTU Map</a></p>
      <p><a href="http://www.rtu.ac.in/RTU/rtu-map">&#9679; RTU Map</a></p>
      <p><a href="http://www.rtu.ac.in/RTU/gallery">&#9679; Events &amp; Gallery</a></p>
      <p><a href="http://www.rtu.ac.in/RTU/wp-content/uploads/2018/01/List-of-Holidays-for-year-2018.pdf">&#9679; Holidays Calender</a></p>
      <!--<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>-->
	  <p><strong>Aluminis</strong></p>
      <p><a href="http://www.rtu.ac.in/RTU/welcome-aluminis">&#9679; Welcome Aluminis</a></p>
      <p><a href="http://www.rtu.ac.in/RTU/aluminis-association">Aluminis Association</a></p>
	  
    </div>
    <div class="footbox">
      <h2>OTHER LINKS</h2>
      <p><a href="http://www.rtu.ac.in/RTU/property-declarations">&#9673; Employees Property Disclosure.</a></p>
      <p><a href="http://rtuexam.net/Student/mainpage.php">&#9673; Degree Data Updation Link.</a></p>
      <p><a href="http:/#">&#9673; National Voter Service Portal</a></p>
      <p><a href="http://www.rtu.ac.in/RTU/mission">&#9673; Vision &amp; Mission</a></p>
      <p><a href="http://www.rtu.ac.in/RTU/contact-us">&#9673; Contact Us</a></p>
      <p><strong>STUDENT</strong></p>
	  <p><a href="http://www.rtu.ac.in/RTU/admission-at-uce">&#9673; Admission at UD</a></p>
	  <p><a href="http://www.rtu.ac.in/RTU/hostels">&#9673; Hostels</a></p>
	  <p><a href="http://www.rtu.ac.in/RTU/training-placements">&#9673; Training &amp; Placements</a></p>
    <!--  <p>Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Sagittislaorem dolor ipsum at urna et pharetium malesuada nis consectus odio.</p>-->
     <!-- <p><strong>Cursusorci conseque mauristibulum</strong></p>-->
    </div>
    <div class="footbox last">
      <h2>CONTACT DETAILS</h2>
      <p>Rajasthan Technical University, Rawatbhata Road, Kota - 324010</p>
      <p>Controller of Examination(Secy.): 0744-2473861</p>
      <p>Examination(Conduct): 0744-2473931 </p>
      <p>Dean(Academic): 0744-2473015</p>
      <ul>
        <li>Tel: xxxxx xxxxxxxxxx</li>
        <li>Fax: xxxxx xxxxxxxxxx</li>
        <li>Email: <a href="#">me@mydomain.com</a></li>
      </ul>
      <p><strong>Join our mailing list:</strong></p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>	  
    </div>
    <br class="clear" />
	</br>
	<div style="border-top: solid #ddd 1px; text-align: center;  margin-bottom:15px;"><img class="alignnone size-full wp-image-68" style="margin: px auto 0px auto; text-align: center;" src="Rajasthan_Technical_University_logo.jpg" alt="logo-rtu" width="150" height="128"></div>
  </div><!--  1.CONTACT US PAGE-----'''''''''''''''http://www.rtu.ac.in/RTU/contact-us''''''''''----   2.ABOUTrtuPAGE-----''''''''  http://www.rtu.ac.in/RTU/about-rtu  '''''''      3.ADMISSIONS AT RTU---''''''''  http://www.rtu.ac.in/RTU/admission-at-uce           '''''''''    ''''''ADMINISTRATION PAGE ''''''' http://www.rtu.ac.in/RTU/administration --------------''''     -->
</div>
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Rajasthan Technical University (RTU)</a></p>
    <p class="fl_right"><a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">RPHR</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>