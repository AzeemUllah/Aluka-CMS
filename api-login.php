<?php

	// Start the session
	session_start();

   include("config.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT *, count(id) as count FROM users WHERE user_name = '$myusername' and user_password = '$mypassword'";
      $result = $result = $db->query($sql);
	  $num_rows = 0;
	  
	  
	  while($row = $result->fetch_assoc()) {
        $num_rows = $row['count'];
		$_SESSION["id"] = $row['id'];
	  }
	  
	  if ($num_rows > 0) {
		header('Location: http://localhost/marocms/dashboard.php');
	
		}
	  else {
	    header('Location: http://localhost/marocms/login-page.php');
	  }
	  
	  

		
   }
?>