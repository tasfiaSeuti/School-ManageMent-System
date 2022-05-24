<?php
include "../connection.php";         
   if (isset($_POST['login'])) {
    	$username    = $_POST['username'];
    	$password = $_POST['password'];
    	if (empty($username) || empty($password)) {
    		
    		echo "Please enter username and password";
    	}else{
	    	$sql="SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
			$result=$con->query($sql);
			$row = $result->fetch_assoc();
		   	if($result->num_rows==1){
		   		$_SESSION['session_data'] = $row['id'];
		   		header("location:admin_details.php");
		   	}else{
		   		echo "Login Failed";
		   	}
		 }
    }


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form method="post" action="">
  	<input type="text" name="username" placeholder="username">
  	<input type="password" name="password" placeholder="password">
  	<input type="submit" name="login" placeholder="login">
  </form>
</body>
</html>