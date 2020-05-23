

<!DOCTYPE html>

<html>
<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<style type="text/css">
		td{
			padding:6px;
			border:1px solid black;
			background-color:white;
		}

	</style>
	<title></title>
</head>
<body class="container" style="background-color:#848a4c">

	<h2 align="center" style="color:indigo;">Admin Login</h2>
	<form  method="POST">
		<table align="center" style="border:1px solid black;width:50%;border-radius:4px;">
			<tr>
				<td align="right">username:</td>
				<td><input type="text" name="username"></td>
			</tr>
<tr>
	<td align="right">password:</td>
 <td><input type="password" name="password"></td></tr>
		
		<tr><td colspan="2" align="center"><input type="submit" name="login" value="Login" style="background-color:green;border:1px solid white;border-radius:3px;color:white;"></td></tr>
		<tr>
			<td><li ><a href="#" >Forgot password </a></li></td>
		<td><li ><a href="#">Forgot username </a></li></td>

		</tr></table>
		
	</form>

</body>
</html>


<?php
   $conn=mysqli_connect("localhost","root","","silent");
   //if($conn==true)
   //	echo "connected";


if(isset($_POST['login']))
{
$uname=$_POST['username'];
$pswd=$_POST['password'];
$qry="SELECT * FROM `admininfo` WHERE username='$uname' AND password='$pswd'";
//run query

$run=mysqli_query($conn,$qry);
$row=mysqli_num_rows($run);
//echo $row;
if($row<=0){
	?>
	<script type="text/javascript">
		alert("admin is not resistered");
		window.open('adminlogin.php','_self');
	</script>
	<?php
}
else
?>
	{<script type="text/javascript">
		alert("successfull login");
		var x=location.href;
		//console.log(x);
		location.href="admindasboard.php";
	</script>}
<?php	

}
?>

