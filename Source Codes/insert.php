<?php
 
include("databaseConnection.php");
 
    //Create variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['clientEmail'];
    $password = $_POST['password'];
    $clientAddress = $_POST['clientAddress'];
    $query = mysqli_query($conn,"SELECT * FROM client WHERE mobile='$mobile' OR email='$email'");
    $sql = "INSERT INTO client (name, gender, mobile, email,address,password) VALUES ('$name', '$gender','$mobile','$email','$clientAddress','$password')";
 
	// Field validation
	if($name===''){
		echo "Enter your name";
	}elseif($gender==='NULL'){
		echo "Enter your gender";
	}elseif(empty($mobile)){
		echo "Enter your mobile";
	}
	
	//Make sure name is valid
	/* elseif(!preg_match("/^[a-zA-Z'-]+$/",$name)) { 
		die ("Invalid Name");
	} */
	
	elseif(mysqli_num_rows($query) > 0) {
        echo "The Mobile: " . $_POST['mobile'] . ", or E-mail:" . $_POST['clientEmail'] . " already exists.";
    }
	elseif(!mysqli_query($conn, $sql)) {
        echo 'Unable to create Account!';
    }
    else {
        echo "Thank you, " . $_POST['name'] . ". Your Account has been Created Successfully.";
    }
 
    //Close connection
    mysqli_close($conn);
 ?>