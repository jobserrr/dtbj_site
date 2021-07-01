<?php 

include "inc/db_connect.php";

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if (isset($_POST['ou']) && isset($_POST['nu'])
    && isset($_POST['c_nu'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$ou = validate($_POST['ou']);
	$nu = validate($_POST['nu']);
	$c_nu = validate($_POST['c_nu']);
    
    if(empty($ou)){
      header("Location: change-username.php?error=Old Username is required");
	  exit();
    }else if(empty($nu)){
      header("Location: change-username.php?error=New Username is required");
	  exit();
    }else if($nu !== $c_nu){
      header("Location: change-username.php?error=The confirmation username  does not match");
	  exit();
    }else {
    	// hashing the username
    	
        $id = $_SESSION['id'];

        $sql = "SELECT user_name
                FROM gebruikers WHERE 
                id='$id' AND user_name='$ou'";

				//die($sql);
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE gebruikers
        	          SET user_name='$nu'
        	          WHERE id='$id'";
					  
        	mysqli_query($conn, $sql_2);
        	header("Location: change-username.php?success=Your Username has been changed successfully");
	        exit();

        }else {
        	header("Location: change-username.php?error=Incorrect Username");
	        exit();
        }

    }

    
}else{
	header("Location: change-username.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}