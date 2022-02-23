<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: analytics.php");
    exit;
}
// Include config file
require_once "pdo_db_connection.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $connect->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
							$_SESSION['last_login_timestamp'] = time();
                            
                            // Redirect user to welcome page
                            header("location: analytics.php");
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
        }
        
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>
		<link rel="stylesheet" href="CSS/admin_login.css">
		<style>
			.signUp{
				padding: 10px;
			}
		</style>
	<?php

	?>
	</head>
	<body>
	<p class="title_animation">KHAN RESTAURANT</p>
		<div class="loginFormContainer">
			<h2>Login</h2>
			<div class = "adminSubMenu">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<table>
						<tr>
							<td><p>Sign in to start your session</p></td>
						</tr>
						<tr<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
							<td><input type= "text" name="username" placeholder="Name" value="<?php echo $username; ?>"></td>


						</tr>
						<tr>
							<td><span style="margin-left: 20px; margin-bottom: 20px;"><?php echo $username_err; ?></span></td>
						</tr>				
						<tr <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
							<td><input type= "password" name="password" placeholder="Password"></td>
						</tr>
						<tr>
							<td><span style="margin-left: 20px; margin-bottom: 20px;"><?php echo $password_err; ?></span></td>
						</tr >
						<tr>
							<td>
							<input type= "checkbox" name="checkbox"> Remember Me
							<input type= "submit" name="submit" value = "Sign In" title="Sign In">
							</td>
							
						</tr>
						<tr class="signUp">
							<td>
							<a href="register.php">Need an Account? Sign Up</a>
							</td>
						</tr>
						
					</table>
				</form>
				<br/>
			</div>
		 </div>
		 
	</body>
</html>