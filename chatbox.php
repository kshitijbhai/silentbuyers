<?php
$conn=mysqli_connect('localhost','root','','chatdatabase');
?>
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
</head>
<body>
	<!-- main container -->
<div class="container col-sm-4" style="background-color:pink;display:flex;flex-direction:column;justify-content:space-between; height:600px;">
	<!-- message container -->
		  <div id="chat_box" style="background-color:white;height:450px;">
			
		   </div>
		   <!-- input container -->
    <div class="container-fluid" style="display:flex;flex-direction:column;align-content:space-around;">
           <form action="chatbox.php">
	       <input type="text" name="name" placeholder="enter name to which you want to send msg" style="width:100%;">
	       <textarea name="message" placeholder="enter message" style="width:100%;"></textarea>
	       <input type="submit" name="send" value="send message">
           </form>

    </div>





</div>

</body>
</html>