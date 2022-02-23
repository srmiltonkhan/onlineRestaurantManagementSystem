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
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		<link rel="stylesheet" href="main.css">


		<script src="main.js"></script>
		
		<style>
		.titleContent {
		text-align: center;
		font-size: 35px;
		color: inherit;
		}
		table tr td{
		border: 1px solid #dacece;
		text-align: center;	
		}
		table tr:nth-child(2n+1){
		background-color: #fff;
		height: 15px;
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
			<!--Start Navigation side Bar Section-->
			<nav>
				 <ul>
					<li class="active">
						<a href="analytics.php">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Analytics</span>
						</a>
					</li>			
					<?php include("navigationSiderBar.php");?>
				 </ul>
			</nav>
			<!--Endr Navigation side Bar Section-->
		</div>
		<div class="main-content">
			<div class = "titleContainer">
			<div class="title">
				Analytics Information
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
			<div class="sub-main">
				<div class="widget">
					<div class="title">Total Employee </div>
					<div class="titleContent">
						<?php 
							
							include("configDatabase.php");
							include("dbConnection.php");
							$db = new Database();
							$sql = "SELECT COUNT(`employeeid`) AS total from employee";
							$result = $db->select($sql);
							$values = mysqli_fetch_assoc($result);
							$num_rows = $values['total'];
							echo $num_rows."  "."<span><img src = 'images/icon/employee.png' style='width:112px';></span>";							
							
							
						?>
					  
					</div>
				</div>
				<div class="widget">
					<div class="title">Total Clients</div>
					<div class="titleContent">
						
						<?php 
							
							$sql = "SELECT COUNT(`clientId`) AS total from client";
							$result = $db->select($sql);
							$values = mysqli_fetch_assoc($result);
							$num_rows = $values['total'];
							echo $num_rows."  "."<span><img src = 'images/icon/clients.png' style='width:80px';></span>";
							
						?>
				     </div>
				</div>
				<div class="widget">
					<div class="title">Total Raw Material</div>
					<div class="titleContent">
						<?php 
							$sql = "SELECT COUNT(`rawMaterialId`) AS total from rawmaterial";
							$result = mysqli_query($db->link,$sql);
							$values = mysqli_fetch_assoc($result);
							$num_rows = $values['total'];
							echo $num_rows."  "."<span><img src = 'images/icon/rowmaterial.png' style='width:80px';></span>";
						?>
					</div>
				</div>
				
				<div class="widget">
					<div class="title">Total Food Reservation</div>
					<div class="titleContent">
						<?php 
							$sql = "SELECT COUNT(`foodReservationId`) AS total from foodreservation";
							$result = $db->select($sql);
							$values = mysqli_fetch_assoc($result);
							$num_rows = $values['total'];
							echo $num_rows."  "."<span><img src = 'images/icon/foodReservation.png' style='width:125px';></span>";
						?>
					</div>
				</div>
				<div class="widget">
					<div class="title">Online Order</div>
					<div class="titleContent">
						<?php 
							$sql = "SELECT COUNT(`orderId`) AS total from onlineorder";
							$result = $db->select($sql);
							$values = mysqli_fetch_assoc($result);
							$num_rows = $values['total'];
							echo $num_rows."  "."<span><img src = 'images/icon/onlinOrder.png' style='width:125px';></span>";
						?>
					</div>
				</div>
				<div class="widget">
					<div class="title">Delivered Order List</div>
					<div class="titleContent">
						<?php 
							$sql = "SELECT COUNT(`deliverOrderId`) AS total from deliverorder";
							$result = $db->select($sql);
							$values = mysqli_fetch_assoc($result);
							$num_rows = $values['total'];
							echo $num_rows."  "."<span><img src = 'images/icon/deliveryorder1.png' style='width:125px';></span>";
						?>
					</div>
				</div>

				<div class="widget">
					<div class="title">Today Sale Amount</div>
					<div class="titleContent">
						<?php
							date_default_timezone_set('Asia/Dhaka');
							$today = date('Y-m-d');
							$sql = "SELECT SUM(final_total) AS today_bill_amount FROM `customers` WHERE `current_date`='$today'";
							$result = $db->select($sql);
							$values = mysqli_fetch_assoc($result);
							$today_bill_amount = $values['today_bill_amount'];
							echo $today_bill_amount."  "."<span><img src = 'images/icon/billamount.png' style='width:130px';></span>";
						?>
					</div>
				</div>
				<div class="widget">
					<div class="title">Last Seven Days Sale Amount</div>
					<div class="titleContent">
						<?php
							//$today = date('Y-m-d');
							$sql = "select SUM(final_total) AS last_seven_day_bill_amount from customers where  `current_date` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
							$result = $db->select($sql);
							$values = mysqli_fetch_assoc($result);
							$num_rows = $values['last_seven_day_bill_amount'];
							echo $num_rows."  "."<span><img src = 'images/icon/billamount.png' style='width:130px';></span>";
						?>
					</div>
				</div>	
				<div class="widget">
					<div class="title">Last Thirty Days Sale Amount</div>
					<div class="titleContent">
						<?php 
							$sql = "select SUM(final_total) AS last_thirty_day_bill_amount from customers where  `current_date` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
							$result = $db->select($sql);
							$values = mysqli_fetch_assoc($result);
							$num_rows = $values['last_thirty_day_bill_amount'];
							echo $num_rows."  "."<span><img src = 'images/icon/billamount.png' style='width:130px';></span>";
						?>
					</div>
				</div>	

			</div>
			<div class="sale_bill_amount_line_chart">
				<!--Start Section last one day bill amount-->
				<?php
					$date_one_days_ago= date("Y-m-d",strtotime('-1 days', strtotime($today)));
					$sql = "Select SUM(final_total) AS last_one_day_bill_amount from customers where  `current_date` = '$date_one_days_ago' ";
					$result = $db->select($sql);
					$values = mysqli_fetch_assoc($result);
					$last_one_day_bill_amount = $values['last_one_day_bill_amount'];				
				?>
				<!--End Section last one day bill amount-->
				<!--Start Section last two day bill amount-->
				<?php
					$date_two_days_ago= date("Y-m-d",strtotime('-2 days', strtotime($today)));
					$sql = "Select SUM(final_total) AS last_two_days_bill_amount from customers where  `current_date` = '$date_two_days_ago'";
					$result = $db->select($sql);
					$values = mysqli_fetch_assoc($result);
					$last_two_days_bill_amount = $values['last_two_days_bill_amount'];				
				?>
				<!--End Section last two day bill amount-->
				<!--Start Section last three day bill amount-->
				<?php
				    $date_three_days_ago= date("Y-m-d",strtotime('-3 days', strtotime($today)));
					$sql = "Select SUM(final_total) AS last_three_days_bill_amount from customers where  `current_date`= '$date_three_days_ago'";
					$result = $db->select($sql);
					$values = mysqli_fetch_assoc($result);
					$last_three_days_bill_amount = $values['last_three_days_bill_amount'];				
				?>
				<!--End Section last three day bill amount-->
				<!--Start Section last four day bill amount-->
				<?php
				    $date_four_days_ago= date("Y-m-d",strtotime('-4 days', strtotime($today)));
					$sql = "Select SUM(final_total) AS last_four_days_bill_amount from customers where  `current_date`= '$date_four_days_ago'";					
					$result = $db->select($sql);
					$values = mysqli_fetch_assoc($result);
					$last_four_days_bill_amount = $values['last_four_days_bill_amount'];				
				?>
				<!--End Section last four day bill amount-->	
				<!--Start Section last five day bill amount-->
				<?php
					$date_five_days_ago= date("Y-m-d",strtotime('-5 days', strtotime($today)));
					$sql = "Select SUM(final_total) AS last_five_days_bill_amount from customers where  `current_date` = '$date_five_days_ago'";
					$result = $db->select($sql);
					$values = mysqli_fetch_assoc($result);
					$last_five_days_bill_amount = $values['last_five_days_bill_amount'];				
				?>
				<!--End Section last five day bill amount-->	
				<!--Start Section last six day bill amount-->
				<?php
					$date_six_days_ago= date("Y-m-d",strtotime('-6 days', strtotime($today)));
					$sql = "Select SUM(final_total) AS last_six_days_bill_amount from customers where  `current_date`='$date_six_days_ago'";
					$result = $db->select($sql);
					$values = mysqli_fetch_assoc($result);
					$last_six_days_bill_amount = $values['last_six_days_bill_amount'];				
				?>
				<!--End Section last six day bill amount-->	
				<?php 
					
					$todayNow= date("l");
					$todayNow_day_show ="Today";
					$yesterday_day_format = "Yesterday";
					$yesterday = date('l',strtotime($todayNow)-1);
					$two_days_ago = date('l',strtotime($yesterday)-1);
					$three_days_ago = date('l',strtotime($two_days_ago)-1);
					$four_days_ago = date('l',strtotime($three_days_ago)-1);
					$five_days_ago = date('l',strtotime($four_days_ago)-1);
					$six_days_ago = date('l',strtotime($five_days_ago)-1);
				?>
				<?php
					$dataPoints = array(
					array("y" => $today_bill_amount, "label" => $todayNow_day_show."-("."$today".")"),
					array("y" => $last_one_day_bill_amount, "label" => $yesterday_day_format."-"."$date_one_days_ago"),
					array("y" => $last_two_days_bill_amount, "label" => $two_days_ago."-"."$date_two_days_ago"),
					array("y" => $last_three_days_bill_amount, "label" => $three_days_ago."-"."$date_three_days_ago"),
					array("y" => $last_four_days_bill_amount, "label" => $four_days_ago."-"."$date_four_days_ago"),
					array("y" => $last_five_days_bill_amount, "label" => $five_days_ago."-"."$date_five_days_ago"),
					array("y" => $last_six_days_bill_amount, "label" => $six_days_ago."-"."$date_six_days_ago")
					);
				?>
				<script>
					window.onload = function () {
					 
					var chart = new CanvasJS.Chart("chartContainer", {
						title: {
							text: "Sales Amount Over a Week"
						},
						axisY: {
							title: "Sales Amount"
						},
						data: [{
							type: "line",
							dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
						}]
					});
					chart.render();
					}
					
			    </script>
				<div id="chartContainer" style="height: 370px; width: 100%;"></div>
			</div>

			<div class="sale_information_container">
				<div class="sale_information_title" style="text-align:center;">Date Wise  Sale Information</div>
				<div class="sale_data">
					<table>
						<tr>
							<td>DATE</td>
							<td>Sale Amount</td>
						</tr>
						<tr>
							<td><?php echo $today;?></td><td><?php echo $today_bill_amount; ?></td> 
						</tr>
						<tr>
							<td><?php echo $date_one_days_ago;?></td><td><?php echo $last_one_day_bill_amount; ?></td> 
						</tr>
						<tr>
						    <td><?php echo $date_two_days_ago;?></td><td><?php echo $last_two_days_bill_amount; ?></td> 
						</tr>
						<tr>
						    <td><?php echo $date_three_days_ago;?></td><td><?php echo $last_three_days_bill_amount; ?></td> 
						</tr>
						<tr>
						    <td><?php echo $date_four_days_ago;?></td><td><?php echo $last_four_days_bill_amount; ?></td> 
						</tr>
						<tr>
						    <td><?php echo $date_five_days_ago;?></td><td><?php echo $last_five_days_bill_amount; ?></td> 
						</tr>
						<tr>
						    <td><?php echo $date_six_days_ago;?></td><td><?php echo $last_six_days_bill_amount; ?></td> 
						</tr>						
						<tr>
							<td>Total Sale Amount</td>
							<?php 
								$total_date_wise_sale_amount = $today_bill_amount+$last_one_day_bill_amount+$last_two_days_bill_amount+$last_three_days_bill_amount+$last_four_days_bill_amount+$last_five_days_bill_amount+$last_six_days_bill_amount;
							?>
							<td><?php echo $total_date_wise_sale_amount; ?></td> 
						</tr>
					</table>
				</div>
			</div>
			<div class="widget" style="margin-bottom:50px;">
				<div class="title" style="text-align:center;">All Sale Amount</div>
				<div class="titleContent">
					<?php 
						$sql = "select SUM(final_total) AS all_sale_amount from customers";
						$result = $db->select($sql);
						$values = mysqli_fetch_assoc($result);
						$all_sale_amount = $values['all_sale_amount'];
						echo $all_sale_amount."  "."<span><img src = 'images/icon/billamount.png' style='width:130px';></span>";
					?>
				</div>
			</div>			
			

			<?php include("footer.php");?>
		</div>
	</body>
</html>