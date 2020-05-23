<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.navspan>a{
			margin-left:20px;
			line-height:20px;
			font-size:25px;
			color:white;
		}
		.maindiv{
			animation:imageslider 9s infinite linear;
			height:300px;
			width:84vw;
			position:relative;
		
			margin-top:40px;
			background-image:url('img1.jpeg');
		
			
			background-repeat:no-repeat;
			background-size:cover;
			animation-delay:-1s;
		}
		@keyframes imageslider{
			0%{
           background-image:url('img.jpeg'); 
			}
			25%{
background-image:url('img2.jpg');
			}
			75%{
background-image:url('img3.jpg');
			}
			100%{
				background-image:url('me.jpg');
			}
		}
li{
	padding:9px;
	list-style-type:none;
}
li:nth-child(odd){
	background-color:#ddd;
}
li:nth-child(even){
	background-color:#fff;
}

	</style>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>

	<div style="background-color:indigo;width:100vw;"><h3 style="text-align:center;padding:15px;color:white;font-family:'Kaushan Script',cursive;">Welcome To Silent Buyers</h3>
		<br>
	<span class="navspan"><a href="index.php">Home</a>
		<a href="aboutus.php">About Us</a>
		<a href="contactus.php">Contact Us</a>
		<a href="adminlogin.php" id="admin">Admin Login</a></span>	
	</div>
	<br>
	<marquee> Note:We will start taking responses soon after exam is over THANKYOU!     </marquee>
	<br>
	<div class="row">
		<!-- First container -->
<div id="fst" class="container col-sm-4" style="height:30%;background-color:pink;margin-top:40px;box-shadow:10px 20px 4px grey;">
	        <h3 style="text-align:center;">Fill This Please</h3>
	<div class="column">
			<form method="POST">
			<label>Name:</label>
			<input class="form-control" type="text" name="name" placeholder="Enter Your Name">
			<label>Enter Year Of Graduation:</label>	
			<input class="form-control" type="text" name="year" placeholder="ie 1st/2nd/3rd">
			<label>Number Of Books:</label>
			<input class="form-control" type="text" name="bookno" placeholder="Enter number of books to sell">


			<label>Contact no</label>
			<input class="form-control" type="text" name="contact" placeholder="Enter mobile number "> 
			<label>Room no,Hostal Name</label>
			<input class="form-control" type="text" name="room" placeholder="ie 525,SVBH "> <br>
			<button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
		    </form>
	</div>
</div>
	<!-- Second container -->
	<div id="snd" class="container col-sm-4" style="height:445px;background-color:pink;margin-top:40px;border: 4px solid white;overflow:hidden;box-shadow:10px 20px 4px grey;">
		<h3 style="text-align:center;">Notice Board</h3>
		<li>YOU CAN SELL YOUR OLD BOOKS HERE</li>
		<li>FILL THE GIVEN FORM</li>
		<li>OUR MEMBERS WILL GO TO YOUR DOORS</li>
		<li>TO COLLECT BOOKS</li>
		<li>WE WILL DECIDE PRICE ACCORDING </li>
		<li>TO OUR PRICE POLICY</li>
		<li>!thankyou</li>
    </div>

	
		


</div>
<center>
<!--<div class="maindiv" align="center"></div>  -->
<footer style="background-color:brown;width:85vw;">
	
<div style="display:flex;flex-direction:row;justify-content:space-around;margin-top:50px;"> 
<div><figure style="margin-top:50px;">
  <a><img src="mall.jpg" alt="Trulli" style="width:50px;height:50px;"></a>
  <figcaption align="center" style="color:white">
  	Shopping Mall
  </figcaption>
</figure></div>
<div><figure style="margin-top: 50px;">
 <a> <img src="child.jpg" alt="Trulli" style="width:50px;height:50px;"></a>
  <figcaption align="center" style="color:white">
  	Be An Admin
  </figcaption>
</figure></div>
<div><figure style="margin-top: 50px;">
  <a><img src="book.jpg" alt="Trulli" style="width:50px;height:50px;"></a>
  <figcaption align="center" style="color:white">
  	Study Forum
  </figcaption>
</figure></div>
<div></div>

  </div>
  
  	<h3 style="color:white">How To Be An Admin</h3>
  	<p style="color:white;">
     To be an admin you have to register with us<br>
     You should qualify all the criteria decided by our team<br>
     please read our <a href="#"></a> term and conditions</a>
     
  </p>

</footer>
</center>

</body>
</html>
<script type="text/javascript">
	var admin=document.getElementById('admin');
	if (screen.width<518) {
		admin.style.display='none';
	}
	var height=document.getElementById('fst').style.height;
	console.log(height);
	var height2=document.getElementById('snd').style.height;
	console.log(height2);
</script>
<?php

//connection with database

$conn=mysqli_connect("localhost","root","","silent");
  // if($conn==true)
   //	echo "connected";
   if(isset($_REQUEST['submit']))//check is button is clicked or not
 {
 	
 	$name=$_REQUEST["name"];
$year=$_REQUEST['year'];
$bookno=$_REQUEST['bookno'];
$contact=$_REQUEST['contact'];
$room=$_REQUEST['room'];
   $qry="INSERT INTO `buyers`( `name`, `year(graduation)`, `books_number`, `contact no`,`Room/Hostal`) VALUES
    ('$name','$year',$bookno,'$contact','$room')";
   //run query
   $runn=mysqli_query($conn,$qry);
   if($runn)
   {
     ?>
     <script type="text/javascript">
     alert("THANKS WE WILL CONTACT YOU SOON");
     window.open('index.php','_self');
     </script>
     <?php
   }
   else{
   	?>
   	<script type="text/javascript">
   		alert("please try again");
   		location.href("silentbuyers/index.php");
   	</script>
   	<?php
   }
 }

?>
