<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
			border:1px solid black;
			width:800px;
			margin-top:20px;
			text-align: center;

		}
		th{
			padding:15px;
		}
		td{
			padding:15px;
		}
	</style>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<center>
	<div class="container col-sm-4" align="center">
<?php
$j=1;
//connection with database
   $conn=mysqli_connect("localhost","root","","silent");
   //if($conn==true)
   //	echo "connected";
   $query="SELECT*FROM buyers WHERE id='$j'";
   //run this query
   $running=mysqli_query($conn,$query);
   $arr=mysqli_fetch_assoc($running);
  // print_r($arr);
  //$rows=mysqli_num_rows($running);
 // echo $rows;
echo "<table>";
echo "<tr>";
echo "<th>";
echo "Name";
echo "</th>";
echo "<th>";
echo "Year";
echo "</th>";
echo "<th>";
echo "Number of Books";
echo "</th>";
echo "<th>";
echo "Contact Number";
echo "</th>";
echo "<th>";
echo "Room/Hostal";
echo "</th>";
echo "</tr>";
 /*for($i=0;$i<$rows;$i++) */while($arr) {
	//echo $arr['id'];
	
	echo "<tr>";
	echo "<td>";
	echo $arr['name'];
	echo "</td>";
	echo "<td>";
	echo $arr['year(graduation)'];
	echo "</td>";
	echo "<td>";
	echo $arr['books_number'];
	echo "</td>";
	echo "<td>";
	echo $arr['contact no'];
	echo "</td";
	echo "<td>";
	echo $arr['Room/Hostal'];
	echo "</td>";
	echo "</tr>";
$j++;
 $query="SELECT*FROM buyers WHERE id='$j'";
   //run this query
   $running=mysqli_query($conn,$query);
   $arr=mysqli_fetch_assoc($running);

}

echo "</table";


?>
</div>
</center>
</body>
</html>