  <?php 
	include("../configDatabase.php");
	include("../dbConnection.php");
  ?>
  <?php 
  $db =  new Database();
 if(isset($_POST["client_id"]))  
 {  
      $output = '';  
  
      $query = "SELECT * FROM contactinfo WHERE contactId = '".$_POST["client_id"]."'";  
      $result = mysqli_query($db->link, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["username"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["useremail"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Mobile</label></td>  
                     <td width="70%">'.$row["subject"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["message"].'</td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>