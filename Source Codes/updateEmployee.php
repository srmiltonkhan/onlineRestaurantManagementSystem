<?php include("session_start.php");?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<link rel="stylesheet" href="CSS/Bootsrap/foodReservation/bootstrap.min.css">
		<script src="main.js"></script>
		
		<style>
			body{
				    background-color: #d5dae5;
			}
		</style>
		<?php 
		include("configDatabase.php");
		include("dbConnection.php");       
		?>
		<?php
		$id = $_GET['id']; 
		$db =  new Database();
		$query = "SELECT * FROM `employee` WHERE employeeid =$id"; //sql Command language
		$getData = $db->select($query)->fetch_assoc();
		
		
   if(isset($_POST['update'])){
           $filestore = mysqli_real_escape_string($db->link,$_FILES['image']['name']);
           $filename = $_FILES['image']['tmp_name'];
		   $destination = "images/employee/".$filestore;
           $employeeName = mysqli_real_escape_string($db->link,$_POST['employeeName']);
           $designation = mysqli_real_escape_string($db->link,$_POST['designation']);
           $mobile = mysqli_real_escape_string($db->link,$_POST['mobile']);
           $email = mysqli_real_escape_string($db->link,$_POST['email']);
           $address = mysqli_real_escape_string($db->link,$_POST['address']);
           $joinDate = mysqli_real_escape_string($db->link,$_POST['joinDate']);
           $salary = mysqli_real_escape_string($db->link,$_POST['salary']);
           if(!file_exists($_FILES["image"]["tmp_name"])){
					$updateQuery = "UPDATE `employee` SET 
					`EmployeeName`='$employeeName',
					`Designation`='$designation',
					`MobileNo`='$mobile',
					`Email`='$email',
					`Address`='$address',
					`JoinDate`='$joinDate',
					`Salary`='$salary'
					 WHERE employeeid = '$id'";
				
				$update = $db->updateEmployee($updateQuery);
			  
           }else{
			   $deleteImg = $getData['Picture'];
				unlink($deleteImg);
			   if(move_uploaded_file($filename,$destination)){
					$updateQuery = "UPDATE `employee` SET 
					`EmployeeName`='$employeeName',
					`Designation`='$designation',
					`MobileNo`='$mobile',
					`Email`='$email',
					`Address`='$address',
					`JoinDate`='$joinDate',
					`Salary`='$salary',
					`Picture`='$destination' 
					 WHERE employeeid = '$id'";
				
				$update = $db->updateEmployee($updateQuery);
			   }
       
           }
    } 
?>

		<?php 
			if(isset($_POST['delete'])){
				$deleteImg = $getData['Picture'];
				unlink($deleteImg);
				$deleteQuery = "DELETE FROM employee WHERE employeeid=$id";
				$deleteData = $db->deleteEmployee($deleteQuery);

			}
		?>
		<style>
			.employeebtn{
				width: 125px; 
				text-align: center; 
			}
		</style>
	</head>
	<body>
		<div class="header">
			<marquee><p>Khan Restaurant</p></marquee>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>MILTON KHAN</span>
			</div>
			<nav>
				<ul>
					<li>
						<a href="analytics.php">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Analytics</span>
						</a>
					</li>
					<li>
						<a href="rawMaterial.php">
							<span><i class="fa fa-bitbucket"></i></span>
							<span>Raw Material</span>
						</a>
					</li>
					<li>
						<a href="foodReservation.php">
							<span><i class="fa fa-envira"></i></span>
							<span>Food Reservation</span>
						</a>
					</li>
					<li>
						<a href="client.php">
							<span><i class="fa fa-user"></i></span>
							<span>Client</span>
						</a>
					</li>
					<li>
						<a href="messages.php">

							<span><i class="fa fa-envelope"></i></span>
							<span>Messages</span>
						</a>
					</li>
					
					<li>
						<a href="payment.php">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Payments</span>
						</a>
					</li>
					<li  class="active">
						<a href="employee.php">
							<span><i class="fa fa-group"></i></span>
							<span>Employee</span>
						</a>
					</li>
					<li>
						<a href="onlineOrder.php">
							<span><i class="fa fa-shopping-cart"></i></span>
							<span>Online Order</span>
						</a>
					</li>
					<li>
						<a href="foodMenu.php">
							<span><i class="fa fa-apple"></i></span>
							<span>Food Menu</span>
						</a>
					</li>
				    <li>
						<a href="latestNews.php">
							<span><i class="fa fa-newspaper-o"></i></span>
							<span>Daily Blog</span>
						</a>
					</li>
					<li>
						<a href="billing.php">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Billing</span>
						</a>
					</li>
					<li>
						<a href="updateArticles.php">
							<span><i class="fa fa-edit"></i></span>
							<span>Update Articles</span>
						</a>
					</li>					
				</ul>
			</nav>
		</div>
		<div class="main-content">
		  <div class = "titleContainer">
			<div class="title">
				Update Employee Registration
				<!--Start Logout Dropdown-->
				<div class="logout">
					<img src="images/user_logo/Milton.jpg" alt="User Image" width="45" height="45" style="border-radius:50px; border:3px solid blue;">
					<div class="logout_content">
						<div class="image_container">
						  <img src="images/user_logo/Milton.jpg" alt="Cinque Terre" width="100" height="100" style="border-radius: 50px;">
						</div>          
						<div class="text_contents">
						 <p class="username"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
						 <p class = "user_login_time"> Login Time: 10:30 AM </p>
						</div>
						<div>
						  <a href="logout.php" class="sign_out"><button>Sign out</button></a>
						</div>
						<div>
						  <a href="reset_password.php" class="change_password"><button>Change Password</button></a>
						</div>
					</div>
				</div>
				<!--End Logout Dropdown-->				
			</div>
		  </div>
			<div class="foodReservationMsg">

			</div>
			<div class="sub-main">
				<div class = "employeeForm">
						<div class="employeeFormInformation">
						 <form action = "updateEmployee.php?id=<?php echo $id;?>" method = "post" enctype = "multipart/form-data">
							<table>
							<tr>
								<td>
									<td>Name<td>
									<input type="text" name="employeeName" value = "<?php echo $getData['EmployeeName']?>" id = "myInput">
								</td>
							</tr>
							<tr>
								<td>
									<td>Designation<td>
									<input type="text" name="designation" value = "<?php echo $getData['Designation']?>"  id = "myInput">
								</td>
							</tr>
						
							<tr>
								<td>
									<td>Mobile No<td>
									<input type="text" name="mobile" value = "<?php echo $getData['MobileNo']?>" id = "myInput">
								</td>
							</tr>
							<tr>
								<td>
									<td>Email<td>
									<input type="email" name="email" value = "<?php echo $getData['Email']?>" id = "myInput">
								</td>
							</tr>
							<tr>
								<td>
									<td>Address<td>
									<input type="text" name="address" value = "<?php echo $getData['Address']?>" id = "myInput">
								</td>
							</tr>
							<tr>
								<td>
									<td>Join Date<td>
									<input type="date" name="joinDate" value = "<?php echo $getData['JoinDate']?>" id = "myInput">
								</td>
							</tr>
							<tr>
								<td>
									<td>Salary<td>
									<input type="text" name="salary" value = "<?php echo $getData['Salary']?>" id = "myInput">
								</td>
							</tr>
							<tr>
								<td>
									<td>Choose a Picture<td> 
									<input type='file' name="image" onchange="readURL(this);" value = "<?php echo $getData['Picture']?>" id = "myInput"/>
								</td>
							</tr>
							<tr>
								<td>
									<td><td> 									
									<input type="submit" name="update" value = "Update" id = "myInput" class = "form-control btn-success btn-group employeebtn">
									<input type="submit" name="delete" value = "Delete" class = "form-control btn-danger btn-group employeebtn">
								</td>
							</tr>
							</table>
						 </div>
						</form>
					<div class ="UploadPicPosition">
							<img src="<?php  echo $getData['Picture']; ?>" id="blah" width="150px" height="150px"/>	
					</div>
			</div>
		</div>
		<?php include("footer.php");?>
		</div>
	</body>
	<script>
		var input = document.getElementById("myInput");
		input.addEventListener("keyup", function(event) {
		});
	</script>
	<script>
	     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>
</html>