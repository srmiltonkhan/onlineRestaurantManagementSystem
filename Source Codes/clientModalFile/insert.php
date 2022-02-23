<style>
	.clientSuccessMsg{
		margin-top:50px;
		margin-left:5px;
		color: green;
	}
	.employeeTble {
		margin-top: 0px;
	}
</style>
<?php 
	include("../configDatabase.php");
	include("../dbConnection.php");
?>

 <?php  
 $db =  new Database();
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($db->link,$_POST['name']);  
      $gender = mysqli_real_escape_string($db->link,$_POST['gender']);  
      $mobile = mysqli_real_escape_string($db->link,$_POST['mobile']);  
      $email = mysqli_real_escape_string($db->link,$_POST['email']);  
      $address = mysqli_real_escape_string($db->link,$_POST['address']); 
      $password = mysqli_real_escape_string($db->link,$_POST['password']); 
      $confirmPassword = mysqli_real_escape_string($db->link,$_POST['confirmPassword']); 
      if($_POST["client_id"] != '')  
      {  
       $query = "  
       UPDATE `client` SET 
		   `name`= '$name',
		   `gender`= '$gender',
		   `mobile`= '$mobile',
		   `email`='$email',
		   `address`= '$address',
		   `password`= '$password',
        WHERE `clientId`='".$_POST["client_id"]."'";  
        $message = 'Data Updated';  
      }  
      else  
      {  
		   if($password===$confirmPassword){
           $query = "  
           INSERT INTO client(name, gender, mobile, email, address, password)  
           VALUES('$name', '$gender', '$mobile', '$email', '$address', '$password');  
           ";  
           $message = 'Client Account Created Successfully'; 
		   }else{
			  $msg = "Confirm Password Not Matched";
              echo "<script type='text/javascript'>alert('$msg');</script>";
			  exit();
		   }
      } 
	  
      if(mysqli_query($db->link,$query))  
      {  
             
           $select_query = "SELECT * FROM client ORDER BY clientId DESC";  
           $result = mysqli_query($db->link,$select_query);
		   $output .= '<i style="color: green; margin-left:10px;" class="fa fa-user"></i><label class="clientSuccessMsg">'.$message.'</label>';
           $output .= ' 
                <table class="employeeTble">  
				
                     <tr>  
					    <th width="4%">SL</th>  
						<th width="20%">Client Name</th>  
						<th width="7%">Gender</th>  
						<th width="10%">Mobile</th>  
						<th width="14%">Email</th>  
						<th width="20%">Address</th>  
						<th width="9%">Password</th>  
						<th width="6%">Delete</th>  
						<th width="10%">Action</th>  
                     </tr>  
           ';  
			$i =1;
			
           while($row = mysqli_fetch_array($result))  
           {  	$sl = $i++;
                $output .= '  
                     <tr id="'.$row["clientId"] .'">  
						<td>' . $sl . '</td>
						<td style="text-align: left";>' . $row["name"] . '</td>  
						<td >' . $row["gender"] . '</td>  
						<td>' . $row["mobile"] . '</td>  
						<td style="text-align: left";>' . $row["email"] . '</td>  
						<td style="text-align: left";>' . $row["address"] . '</td>  
						<td>' . $row["password"] . '</td>  
						<td><a class = "remove"><i style="padding: 0px 10px; font-size: 17px;" class="fa fa-trash"></i></a></td> 
						<td><a href= "updateClient.php"?id="'.$row['clientId'].'" class="edit_data"><i style="padding: 0px 7px;font-size:17px;"; class="fa fa-edit"></i></a><a id="'.$row["clientId"] .'" class="view_data"><i style="padding: 0px 7px;font-size:20px;"; class="fa fa-eye"></i></a></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
		   
      }  
      echo $output;  
 }  
 ?>
 <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to delete this Account ?'))
        {
            $.ajax({
               url: 'deleteRow/deleteClient.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Account Deleted successfully");  
               }
            });
        }
    });
    </script>