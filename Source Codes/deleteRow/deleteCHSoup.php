<?php

	include("../configDatabase.php");
	include("../dbConnection.php");
	$db =  new Database();



if(isset($_GET['id']))
{
     $sql = "DELETE FROM chssoup WHERE chSoupId=".$_GET['id'];
     $del = mysqli_query($db->link, $sql);
}  

?>