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
				    <li class="active">
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
		<!--Fetch Data from Database-->
		<?php 
			include("configDatabase.php");
			include("dbConnection.php");
		?>
		<?php  
			$db =  new Database();
			$query = "SELECT * FROM latestnews ORDER BY latestNewsId";  
			$result = mysqli_query($db->link,$query);
		?> 
		<!--End Fetch Data from Database-->
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Daily Blog Information
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
					<?php
					if(isset($_GET['msg'])){ //mesage function from taking 'dbConnection.php' file by suing $_GET method
					echo "<span style='color: mediumblue; text-align: right; margin-left: 140px;'>".$_GET['msg']."</span>";
					} 
					?>
				</div>
			</div>
			<div>
				<table class = "foodReservationTable">
					<tr>
                        <th width="5%";>SL No</th>
                        <th width="35%";>News Title</th>
                        <th width="20%";>News Date</th>
                        <th width="30%";>Message </th>
                        <th width="10%";>Action </th>
						
					</tr>
					
					<?php if($result){?>
    		
					<?php 
						
						while($row = mysqli_fetch_array($result))  { // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
						
						<tr id="<?php echo $row['latestNewsId']?>">
					  <?php 
							echo "<td>".$row['latestNewsId']."</td>";
							echo "<td>".$row['NewsTitle']."</td>";
							echo "<td>".$row['NewsDate']."</td>";
							echo "<td>".$row['message']."</td>";
							?>
							<td><a href="updateLatestNews.php? id=<?php echo urlencode($row['latestNewsId']);?>"><i style='padding: 0px 10px'; class="fa fa-edit"></i></a></td>
					     </tr>
						<?php } ?>
						<?php } else { ?>
							<p>Data is not Available</p>
					<?php } ?>

				</table>
			</div>	
				<?php include("footer.php");?>
		</div>
	</body>
</html>