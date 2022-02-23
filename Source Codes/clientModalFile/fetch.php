  <?php 
	include("../configDatabase.php");
	include("../dbConnection.php");
  ?>
  <?php  
 $db =  new Database(); 
 if(isset($_POST["client_id"]))  
 {  
      $query = "SELECT * FROM client WHERE clientId = '".$_POST["client_id"]."'";  
      $result = mysqli_query($db->link, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>