<?php
//including the database connection file
	include("configDatabase.php");
	include("dbConnection.php");
	$db =  new Database();

//getting id of the data from url
$id = $_GET['id'];

$sql = "INSERT INTO deliverorder (`alphaNumericOrderID`, `fullname`, `mobile`,`email`,`howmany`,`address`,`date`,`message`) SELECT `alphaNumericOrderID`, `fullname`, `mobile`, `email`, `howmany`, `address`, `date`, `message` FROM `onlineorder` WHERE `orderID`=$id;";
$sql .= "DELETE FROM `onlineorder` WHERE `orderID`=$id";
//deleting the row from table
$result = mysqli_multi_query($db->link,$sql);

//redirecting to the display page (analytics.php in our case)
header("Location:onlineOrder.php");
?>

