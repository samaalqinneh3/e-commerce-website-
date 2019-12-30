<?php
if(isset($_POST['signup_submit'])){
	
	  $username = $_POST ['username']  ;
	  $password = $_POST['password'] ;
	  $gmail = $_POST['Gmail'] ;
      $reppass = $_POST['reppass'] ;

    if($password==$reppass){
    //connect  to data base 
	  $dbhost = "localhost";
	  $dbuser = "root";
	  $dbpass = '' ;
	  $db = "ecommerce";
      $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);


       if(!$conn){
		  die("connection failed");
		  
	   }
	   $hash = password_hash($password , PASSWORD_DEFAULT);
       $sql ="INSERT INTO `users`(`username`, `password`, `email`) VALUES ('".$username."','".$hash."','".$gmail."')";

	   $result = mysqli_query ($conn, $sql);
	   if($result){
		header("location:login.html");
			exit();
	   
			
	   }	
			else{
				
			header("location:signup.html");
			exit();
			}

        
    }
	else{
		header("location:signup.html");
			exit();
	}
}

?>
