<html>
	<head align="center" >
		<title img src="Rajasthan_Technical_University_logo.jpg">RTU(MANAGER)</title>
		<link type="text/css" rel="stylesheet" href="">
		<link rel="shortcut icon" type="image/jpg" href="Rajasthan_Technical_University_logo.jpg">
	</head>
	<body class="container" >
	<!--  bgcolor="#191970" -->
		<a href="index.php" ><img src="Rajasthan_Technical_University_logo.jpg" align="left" style="height:150px; width=150px " padding="0px" /></a>
		<h1 class="h1-01" >
			<font color="051288">R.T.U.</font>
		</h1>
		<h1 class="h1-02" >
			<font color="051288">ATTENDANCE SYSTEM</font>
		</h1> 
		<h3 class="h3-01" >
			<font color="051288">Rawat Bhata Road, Rajasthan Technical University, Dadabari, Kota, Rajasthan 324009</font>
		</h3> 
		<hr/>
		
		
		<div class="container">
			<form action="/action_page.php">
				<label for="fname">Subject Name</label>
				<input type="text" id="sname" name="subjectname" placeholder="Write Your Subject Name Here..">

				<label for="lname">Subject No</label>
				<input type="text" id="sno" name="subjectno" placeholder="Write Your Subject No Here..">

				<label for="lname">Maximum No</label>
				<input type="text" id="mno" name="maximumno" placeholder="Write The Maximum No Here..">

				<label for="semester01">Semester</label>
					<select id="semester02" name="semester03">
						<option value="IV_IT01">IV_IT</option>
						<option value="IV_CS02">IV_CS</option>
						<option value="VI_IT01">VI_IT</option>
						<option value="VI_CS02">VI_CS</option>
						<option value="VII_IT01">VII_IT</option>
						<option value="VII_CS02">VII_CS</option>
					</select>
			<!--  #########################  second toggle ###############3-->
				<label for="branch01">Branch</label>
					<select id="branch02" name="branch03">
						<option value="IV_IT01">CS Computer Science</option>
						<option value="IV_CS02">IT Information Technolgy</option>
						<option value="VI_IT01">EC Electronics</option>
						<option value="VI_CS02">CE CIVIL</option>
						<option value="VII_IT01">ME Mechanical</option>
						<option value="VII_CS02">EIC </option>
					</select>
			<!-- ########################## THIRD TOGGLE ################### -->		
				<label for="session01">Session</label>
					<select id="session02" name="session03">
						<option value="IV_IT01">2018-2019</option>
						<option value="IV_CS02">2017-2018</option>
						<option value="VI_IT01">2019-2020</option>
						<option value="VI_CS02">2020-2021</option>
						<option value="VII_IT01">2022-2022</option>
						<option value="VII_CS02">2022-2023</option>
					</select>
					
				<label for="subjecttype01">Subject Type</label>
					<select id="subjecttype02" name="subjecttype03">
						<option value="Theory01">Theory</option>
						<option value="Practical02">Practical</option>
						<option value="DECA01">DECA</option>
						<option value="Minor02">Minor</option>
						<option value="Major01">Major</option>
						<option value="Seminar02">Seminar</option>
					</select>
				<!--<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>-->

				<input type="submit" value="Submit">
			</form>
		</div>
		<style>
			.h1-01
			{
				position: relative;
				left: 550px;
			}
			.h1-02
			{
				position: relative;
				left: 425px;
			}
			.h3-01
			{
				position: relative;
				left: 205px;
			}
			
			/* ################################ THIS IS SECOND PART ############################## */
			
			
			body {font-family: Arial, Helvetica, sans-serif;}
			* {box-sizing: border-box;}

			input[type=text], select, textarea {
			  width: 100%;
			  padding: 12px;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
			  margin-top: 6px;
			  margin-bottom: 16px;
			  resize: vertical;
			}

			input[type=submit] {
			  background-color: #4CAF50;
			  color: white;
			  padding: 12px 20px;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			}

			input[type=submit]:hover {
			  background-color: #45a049;
			}

			.container {
			  border-radius: 5px;
			  background-color: #f2f2f2;
			  padding: 20px;
			}				
			
			/* ############################# THIS IS THIRD PART ########################### */
			
		</style>
	</body>
</html>