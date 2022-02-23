<?php

	include("../configDatabase.php");
	include("../dbConnection.php");
	$db =  new Database();



/* if(isset($_GET['id']))
{
     $sql = "DELETE FROM customers WHERE invoice_number=".$_GET['id'];
     $del = mysqli_query($db->link, $sql);
}   */

//getting id of the data from url
$id = $_GET['id'];
//Sql for delete data 
$sql = "DELETE FROM `customers` WHERE invoice_number =$id";
//deleting the row from table
$result = mysqli_query($db->link, $sql);

//redirecting to the display page (index.php in our case)
/* header("Location:billing.php"); */

?>