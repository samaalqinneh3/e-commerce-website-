<?php
session_start();
if(isset($_SESSION['username'])){



?>


<html>
<head>
 <title> Mabe3at  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">

</style>
</head>


<body>


 

<center>

<h1><b> FURNITURE SAMA <b></h1>

  <div class="w3-padding w3-xlarge w3-text-orange">
    <i class="fa fa-home"></i>
    <i class="fa fa-search"></i>
    <i class="fa fa-cloud"></i>
    <i class="fa fa-trash"></i>
  
  </div>
  <h3 class ="name"> HELLO <?php
  echo $_GET['u'] 
  ?> 
  </h3>
</center>
<div class="grid-container">
  <div class="grid-item"><img src="sama13.jpg" alt="" width="300" height="300"> <h6>  Living room  <br> <br> 16000$  </h6> </div>
  <div class="grid-item"><img src="sama16.jpg" alt="" width="300" height="300"><h6> An outside square  <br> <br> 56000$  </h6></div>
  <div class="grid-item"><img src="sama17.jpg" alt="" width="300" height="300"> <h6> bad room  <br> <br> 90000$ </h6></div>  
  <div class="grid-item"><img src="sama18.jpg" alt="" width="300" height="300"><h6>  Living room <br> <br> 11000$ </h6></div>
  <div class="grid-item"><img src="sama19.jpg" alt="" width="300" height="300"><h6> Living room <br> <br> 12000$ </h6></div>
 <div class="grid-item"><img src="sama20.jpg" alt="" width="300" height="300"><h6> An outside square <br> <br> 15000$ </h6></div>
 <div class="grid-item"><img src="sama55.jpg" alt="" width="300" height="300"><h6> bad room <br> <br> 30000$ </h6></div>
  <div class="grid-item"><img src="sama88.jpg" alt="" width="300" height="300"><h6> bad room <br> <br> 40000$ </h6></div>
   <div class="grid-item"><img src="sama222.jpg" alt="" width="300" height="300"><h6> bad room <br> <br> 50000$ </h6></div>
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


