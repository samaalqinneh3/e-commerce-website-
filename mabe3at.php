<?php
session_start();
if(isset($_SESSION['username'])){



?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
 <title> Mabe3at  </title>
  <style type="text/css">


</style>
</head>


<body>
<a href="logout.php">logout </a>
<center>
<h1><b> FURNITURE SAMA <b></h1>
</center>
<div class="grid-container">
  <div class="grid-item"><img src="sama13.jpg" alt="" width="300" height="300"> <h6>  Living room  <br> <br> 16000$  </h6> </div>
  <div class="grid-item"><img src="sama16.jpg" alt="" width="300" height="300"><h6> An outside square  <br> <br> 56000$  </h6></div>
  <div class="grid-item"><img src="sama17.jpg" alt="" width="300" height="300"> <h6> bad room  <br> <br> 90000$ </h6></div>  
  <div class="grid-item"><img src="sama18.jpg" alt="" width="300" height="300"><h6>  Living room <br> <br> 11000$ </h6></div>
  <div class="grid-item"><img src="sama19.jpg" alt="" width="300" height="300"><h6> Living room <br> <br> 12000$ </h6></div>
 <div class="grid-item"><img src="sama20.jpg" alt="" width="300" height="300"><h6> An outside square <br> <br> 15000$ </h6></div>
</div>
<a href="logout.php">logout </a>
</body>
</html>

<?php
}
else 
{
	header("location:login.html");
			exit();
}
?>