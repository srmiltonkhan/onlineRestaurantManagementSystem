  <?php 
	include("../configDatabase.php");
	include("../dbConnection.php");
  ?>
  <?php 
  $db =  new Database();
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
  
      $query = "SELECT * FROM employee WHERE employeeid = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($db->link, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["EmployeeName"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Designation</label></td>  
                     <td width="70%">'.$row["Designation"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Mobile</label></td>  
                     <td width="70%">'.$row["MobileNo"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["Email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["Address"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Join Date</label></td>  
                     <td width="70%">'.$row["JoinDate"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Salary</label></td>  
                     <td width="70%">'.$row["Salary"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Picture</label></td>  
                     <td width="70%">'.$row["Picture"].'</td>  
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