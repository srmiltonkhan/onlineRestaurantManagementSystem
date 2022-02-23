  <?php 
	include("../configDatabase.php");
	include("../dbConnection.php");
  ?>
  <?php 
  $db =  new Database();
 if(isset($_POST["client_id"]))  
 {  
      $output = '';  
  
      $query = "SELECT * FROM client WHERE clientId = '".$_POST["client_id"]."'";  
      $result = mysqli_query($db->link, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["gender"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Mobile</label></td>  
                     <td width="70%">'.$row["mobile"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["address"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Password</label></td>  
                     <td width="70%">'.$row["password"].'</td>  
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