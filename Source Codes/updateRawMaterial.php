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
		<link rel="stylesheet" href="CSS/Bootsrap/foodReservation/bootstrap.min.css">
		<link rel="stylesheet" href="main.css">
		

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>

	</head>
	<?php 
    include("configDatabase.php");
	include("dbConnection.php");       
	?>
<?php
		$id = $_GET['id']; 
		$db = new Database();
		$query = "SELECT * FROM rawmaterial WHERE rawMaterialId =$id"; //sql Command language
		$getData = $db->select($query)->fetch_assoc();
		   if(isset($_POST['update'])){
				   $foodItemName = mysqli_real_escape_string($db->link,$_POST['foodItemName']);
				   $foodQuantity = mysqli_real_escape_string($db->link,$_POST['foodQuantity']);
				   $foodCost = mysqli_real_escape_string($db->link,$_POST['foodCost']);
				   $purchaseDate = mysqli_real_escape_string($db->link,$_POST['purchaseDate']);
				   $buyerName = mysqli_real_escape_string($db->link,$_POST['buyerName']);
				   $sellerName = mysqli_real_escape_string($db->link,$_POST['sellerName']);
				   if($foodItemName == '' || $foodQuantity == '' || $foodCost == '' || $purchaseDate == '' || $buyerName == '' || $sellerName == ''){
					   $error = "Field Must not be empty!";
				   }else{
					   
					$updateQuery = "UPDATE `rawmaterial` SET 
					`foodName`='$foodItemName',
					`foodQuantity`='$foodQuantity',
					`foodCost`= '$foodCost',
					`purchaseDate`='$purchaseDate',
					`buyerName`='$buyerName',
					`sellerName`='$sellerName' 
					WHERE `rawMaterialId`='$id'";
					$update = $db->update($updateQuery);
				   }
			   } 
?>
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
					<li class="active">
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
			if(isset($_POST['delete'])){
				$deleteQuery = "DELETE FROM rawmaterial WHERE rawMaterialId=$id";
				$deleteData = $db->delete($deleteQuery);
			}
		?>
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Raw Material Update Form
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
                <div class="rawMaterialMessage">
					
                    <?php
                    if(isset($error)){
                        echo "<span style='color:blue'>".$error."</span>";
                    } 
                    ?>
                    
                </div>
				<div class="rawMaterialMenuContent">
					<p>Raw Material Update Form</p>
					<div class="rawMaterialSubMenu">
					  <form action="updateRawmaterial.php?id=<?php echo $id;?>" method="post">
						<table>
							<tr>
								<td></td>
							</tr>
							
							<tr>
								<td>
									<input id="myInput" type="text" name="foodItemName" value="<?php echo $getData['foodName']?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<input id="myInput" type="text" name="foodQuantity" value="<?php echo $getData['foodQuantity']?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<input id="myInput" type="text" name="foodCost" value="<?php echo $getData['foodCost']?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<input id="myInput" type="date" name="purchaseDate" value="<?php echo $getData['purchaseDate']?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<input id="myInput" type="text" name="buyerName"  value="<?php echo $getData['buyerName']?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<input id="myInput" type="text" name="sellerName"  value="<?php echo $getData['sellerName']?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="update" value = "Update"> 
								    <input type="submit" name="delete" value = "Delete" id="deleteBtn"> 									
								</td>
							</tr>
						</table>
					   </form>
					</div>
				</div>
			</div>
			<?php include("footer.php");?>
		</div>
		<!-- Button triger by using keyboard-->
		<script> 
			var input = document.getElementById("myInput");
			input.addEventListener("keyup", function(event) {
			});
		</script>
	</body>
</html>