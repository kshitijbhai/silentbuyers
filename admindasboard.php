<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.div1>div{
			background-color:#ffffff;
			padding:20px;
			text-align:center;
			font-size:20px;
			box-shadow:10px 20px 10px grey;
		}
		a{
			text-decoration:none;
			margin:20px;
			text-align:center;
		}
			a:hover
			{
			color:red;
		}
		
	</style>
	<title></title>
</head>
<body>
<div align="center">
	<div ><h2 style="background-color:#b33d51;padding:30px; color:white;">Welcome To Admin Dashboard</h2></div>
	<br><br>
</div>
<section style="display:flex;flex-direction:row;justify-content:space-around;">
	<!-- first main div -->
<div class="div1" style="display:flex;flex-direction:column;justify-content:space-around;"> 

	<div><a href="#"> Dashboard</a></div>
	<br>
	<div> <a href="studentlist.php"> Work Order </a></div>
	 <br>
	<div> <a href="#"> Work Report </a></div>
	 <br>
	 <div><a href="#"> Change Password </a></div>
	 <br>
	<div> <a href="adminlogin.php"> Logout </a></div>



</div>
</section>
</body>
</html>