<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" 
      type="image/png" 
      href="img/logo.PNG">
    <title>DC Heroes</title>
</head>
<body>
<?php
// Initialize the session

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "inc/database.php";
$link = dbconnect();
 
// Define variables and initialize with empty values
$Gebruikersnaam = $Password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(trim($_POST["Gebruikersnaam"])){
        $username_err = "Please enter username.";
    } else{
        $Gebruikersnaam = trim($_POST["Gebruikersnaam"]);
    }
    
    // Check if password is empty
    if(trim($_POST["password"])){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT UserID, Gebruikersnaam, Password FROM `gebruikersgegevens` WHERE 1";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $Gebruikersnaam, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["UserID"] = $id;
                            $_SESSION["Gebruikersnaam"] = $Gebruikersnaam;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($link);
}

?>
		<div class="login">
        <h2 >Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="login-field" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
			</div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="login-field">
                <span class="help-block"><?php echo $password_err; ?></span>
			</div> 
            <div class="form-group">
                <input type="submit" class="login-submit" value="Login">
            </div>
            <p class="form-group">Don't have an account? <a href="register.php">Sign up now</a>.</p>
		</form>
		</div>
</body>
</html>