<?php
  if(isset($_POST['login-submit'])){
	  $username = $_POST ['username']  ;
	  $password = $_POST['password'] ;
	 
	  //connect  to data base 
	  $dbhost = "localhost";
	  $dbuser = "root";
	  $dbpass = '' ;
	  $db = "ecommerce";
	  
	  $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
	  
	  if(!$conn){
		  die("connection failed");
		  
	  }
      $sql = "SELECT * FROM `users` WHERE username = '".$username . "'";
	  $result = mysqli_query ($conn, $sql);
	    

      if($result){
	    $r = mysqli_fetch_assoc($result);
		$passwordcheck = password_verify ($password,$r['password']);
		if($passwordcheck == true){
			    session_start();
				$_SESSION["username"] = $username ;
				header("location:mabe3at.php?u=".$username);
			exit();
			
		}
		else{
			header("location:login.html");
			exit();
			
		}
		
	  }
	  
  }     header("location:login.html");
			exit();
			
	
  	  
	 		
	   
  

      
   

?>