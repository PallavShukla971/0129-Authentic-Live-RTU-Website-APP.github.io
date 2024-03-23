<html>
	<head align="center" >
		<title img src="Rajasthan_Technical_University_logo.jpg">RTU(MANAGER)</title>
		<link type="text/css" rel="stylesheet" href="index.css"/>
		<link rel="shortcut icon" type="image/jpg" href="Rajasthan_Technical_University_logo.jpg">
	</head>
	<body onLoad="alert('hiii welcome to the RTU_MANAGER_SITE')" 
	onUnLoad="alert('Are you really leaving this site :( ')"  
	class="container"
	>
	<!--  bgcolor="#191970" -->
		<a href="index.php" ><img src="Rajasthan_Technical_University_logo.jpg" align="left" style="height:150px; width=150px " padding="0px" /></a>
		<h1 class="h1-01" >
			R.T.U.
		</h1>
		<h1 class="h1-02" >
			ATTENDANCE SYSTEM
		</h1> 
		<h3 class="h3-01" >
			Rawat Bhata Road, Rajasthan Technical University, Dadabari, Kota, Rajasthan 324009
		</h3> 
		<hr/>

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
			
			body {font-family: Arial, Helvetica, sans-serif;}
			* {box-sizing: border-box;}

			/* Button used to open the contact form - fixed at the bottom of the page */
			.open-button {
			background-color: #ff8c00;
			color: white;
			padding: 16px 20px;
			border: none;
			cursor: pointer;
			opacity: 0.8;
			position: fixed;
			bottom: px;
			top: 350px;
			left: 625px;
			right: px; 
			width: 280px;
			}

			/* The popup form - hidden by default */
			.form-popup {
			display: none;
			position: relative;
			bottom: 100px;
			margin: auto;
		//	width: 50%;
			top:50px;
			left : 600px;
			right: px;
		//	border: 3px solid #f1f1f1;
			z-index: 9;
			}

			/* Add styles to the form container */
			.form-container {
			max-width: 300px;
			padding: 10px;
			background-color: white;
			}

			/* Full-width input fields */
			.form-container input[type=text], .form-container input[type=password] {
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			border: none;
			background: #f1f1f1;
			}

			/* When the inputs get focus, do something */
			.form-container input[type=text]:focus, .form-container input[type=password]:focus {
			background-color: #ddd;
			outline: none;
			}

			/* Set a style for the submit/login button */
			.form-container .btn {
			background-color: #4CAF50;
			color: white;
			padding: 16px 20px;
			border: none;
			cursor: pointer;
			width: 100%;
			margin-bottom:10px;
			opacity: 0.8;
			}

			/* Add a red background color to the cancel button */
			.form-container .cancel {
			background-color: red;
			}

			/* Add some hover effects to buttons */
			.form-container .btn:hover, .open-button:hover {
			opacity: 1;
			}
			</style>
		</head>

		<button style="float:center" class="open-button" onclick="openForm()">Open Form</button>

		<div class="form-popup" id="myForm">
		<form action="HOD_index.php" class="form-container">
		<h1 style="text-align: center;">Login</h1>

		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<a href="HOD_index.php"><button type="submit" class="btn" >Login</button></a>
		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		</form>
		</div>

		<script>
		function openForm() {
		document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		document.getElementById("myForm").style.display = "none";
		}
		</script>


		
	</body>
</html>