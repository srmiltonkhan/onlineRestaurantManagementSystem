<?php

	include("configDatabase.php");
	include("dbConnection.php");
	$db =  new Database();

//getting id of the data from url
$id = $_GET['id'];
//Sql for delete data 
$sql = "DELETE FROM `customers` WHERE customer_id =$id";
//deleting the row from table
$result = mysqli_query($db->link, $sql);

//redirecting to the display page (index.php in our case)
header("Location:billing.php");
?>