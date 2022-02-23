<?php include("session_start.php");?>
<!DOCTYPE html>


<!--Mashed End Update and Delete Code-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="CSS/Bootsrap/foodReservation/bootstrap.min.css">
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div class="header">
			<marquee><p>Khan Restaurant</p></marquee>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>MILTON KHAN </span>
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
					<li class="active">
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
					<li>
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
		
		
		<?php
			include("configDatabase.php"); // inclue config database.php file for connfigure connection
			include("dbConnection.php");  // include dbConnection.php file for connection
	    ?>
		
		<?php
			$id = $_GET['id']; 
			$db = new Database();
			$query = "SELECT * FROM client WHERE clientId =$id"; //sql Command language
			$getData = $db->select($query)->fetch_assoc();
			   if(isset($_POST['update'])){
					   $name = mysqli_real_escape_string($db->link,$_POST['name']);
					   $gender = mysqli_real_escape_string($db->link,$_POST['gender']);
					   $mobile = mysqli_real_escape_string($db->link,$_POST['mobile']);
					   $email = mysqli_real_escape_string($db->link,$_POST['email']);
					   $address = mysqli_real_escape_string($db->link,$_POST['address']);
					   $password = mysqli_real_escape_string($db->link,$_POST['password']);
					   $confirmPassword = mysqli_real_escape_string($db->link,$_POST['confirmPassword']);
					   if($name == '' || $gender == '' || $mobile == '' || $email == '' || $address == '' || $password == ''){
						   $error = "Field Must not be empty!";
					   }else{
						   
						if($password===$confirmPassword){
						$updateQuery = "UPDATE `client` SET 
						`name`='$name',
						`gender`='$gender',
						`mobile`= '$mobile',
						`email`='$email',
						`address`='$address',
						`password`='$password' 
						WHERE `clientId`='$id'";
						$update = $db->clientDataUpdate($updateQuery);
						}else{
							$msg = "Confirm Password Not Matched";
						}
					   }
				   } 
        ?>
	 
	   <?php 
			if(isset($_POST['delete'])){
				$deleteQuery = "DELETE FROM client WHERE clientId=$id";
				$deleteData = $db->deleteClient($deleteQuery);
			}
		?>
		
		

		
		
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Update Client Information
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
			<div class = "sub-menu">
                <div class="foodMessage">
					<?php
                    if(isset($error)){
                        echo "<span style='color:blue'>".$error."</span>";
                    } 
                    ?>
					<?php
                    if(isset($msg)){
                        echo "<span style='color:#b90c0c'>".$msg."</span>";
                    } 
                    ?>
                   
                </div>
				<div class="clientUpdateSubContent">
					<p>Update Client Information</p>
					<div class="clientSubMenu">
					  <form action="updateClient.php?id=<?php echo $id;?>" method="post">
						<table>
							<tr>
								<td>
									Name
								</td>
								<td>
									<input id="myInput" type="text" name="name" value="<?php echo $getData['name']?>" class="form-control"> 
								</td>
							</tr>
							<tr>
								<td>
									Gender
								</td>
								<td>
									<select id="myInput" name="gender" class="form-control">
										<option ><?php echo $getData['gender']?></option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Mobile
								</td>
								<td>
									<input id="myInput" type="text" name="mobile" value="<?php echo $getData['mobile']?>" class="form-control"> 
								</td>
							</tr>
							<tr>
								<td>
									Email
								</td>
								<td>
									<input id="myInput" type="text" name="email" value="<?php echo $getData['email']?>" class="form-control"> 
								</td>
							</tr>
							<tr>
								<td>
									Address
								</td>
								<td>
									<textarea id="myInput" name="address" class="form-control"><?php echo $getData['address']?></textarea>
								</td>
							</tr>
							<tr>
								<td>
									Password
								</td>
								<td>
									<input id="myInput" type="text" name="password" value="<?php echo $getData['password']?>" class="form-control"> 
								</td>
							</tr>
							<tr>
								<td>
									Confirm Password
								</td>
								<td>
									<input id="myInput" type="text" name="confirmPassword" value="<?php echo $getData['password']?>" class="form-control"> 
								</td>
							</tr>
							<tr>
								<td>
									 
								</td>
								<td>
									<input type="submit" name="update" value="Update">
									<input type="submit" name="delete" value="Delete" id="deleteBtn">
								</td>
							</tr>
						</table>
					   </form>
					</div>
				</div>
			</div>
			<?php include("footer.php");?>
		</div>
	</body>
</html>

<script>
var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
});
</script>

