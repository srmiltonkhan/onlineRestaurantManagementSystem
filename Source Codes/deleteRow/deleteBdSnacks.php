<?php

	include("../configDatabase.php");
	include("../dbConnection.php");
	$db =  new Database();



if(isset($_GET['id']))
{
     $sql = "DELETE FROM bdsnacks WHERE BDSnacksId=".$_GET['id'];
     $del = mysqli_query($db->link, $sql);
}  

?>