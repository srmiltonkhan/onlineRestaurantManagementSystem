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
		
		
		
		<link href="DatePicker/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="DatePicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" href="main.css">
		<style>
			.side-nav ul li a {
				padding: 12px 16px;
				color: #fff;
				display: block;
				text-decoration: none;
			}
			.logout_container {
				margin-top: -60px;
			}
			
		</style>
	</head>
	<?php
		include("configDatabase.php"); // inclue config database.php file for connfigure connection
		include("dbConnection.php");  // include dbConnection.php file for connection
	 ?>
	 <?php
		$id = $_GET['id']; 
		$db = new Database();
		$query = "SELECT * FROM foodreservation WHERE foodReservationId =$id"; //sql Command language
		$getData = $db->select($query)->fetch_assoc();
		
		
		//check validation
		if(isset($_POST['update'])){
			$foodName = mysqli_real_escape_string($db->link, $_POST['foodName']);
			$foodQuantity  = mysqli_real_escape_string($db->link, $_POST['foodQuantity']);
			$foodReservationDate  = mysqli_real_escape_string($db->link, $_POST['foodReservationDate']);
			
			//check validation
			if($foodName == "" || $foodQuantity == "" || $foodReservationDate == "" ){
				$error = "Failed must not be empty";
			}else{
				$updateQuery = "UPDATE `foodreservation` SET `foodName`='$foodName',
				`foodQuantity`='$foodQuantity',`foodReservationDate`='$foodReservationDate' WHERE foodReservationId='$id'";
				
				$update = $db->updateFoodReservation($updateQuery);
				
			}
		}
		
	 ?>
	 <?php 
		if(isset($_POST['delete'])){
			$deleteQuery = "DELETE FROM foodreservation WHERE foodReservationId=$id";
			$deleteData = $db->deleteFoodReservation($deleteQuery);
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
					<li>
						<a href="rawMaterial.php">
							<span><i class="fa fa-bitbucket"></i></span>
							<span>Raw Material</span>
						</a>
					</li>
					<li class="active">
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
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Food Reservation Update Form
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
                <div class="foodReservationMsg">
					<?php
                    /* if(isset($foodChooseItem)){
                        echo "<span style='color:blue'>".$error."</span>";
                    }*/
                    ?>
                    <?php
                    if(isset($error)){
                        echo "<span style='color:blue'>".$error."</span>";
                    }
                    ?>
                    <?php
                       if(isset($_GET['msgFoodReservation'])){
                          echo "<span style='color:green'>".$_GET['msgFoodReservation']."</span>";
                       } 
                    ?>
                </div>
				<div class="foodReservationSubContent">
					<p>Food Reservation Update Form</p>
					<div class="foodReservationSubMenu">
					  <form action="updateFoodReservation.php?id=<?php echo $id;?>" method="post">
							<table>
								<tr>
									<td>
										<input id="myInput" type="text" name="foodName" value="<?php echo $getData['foodName']?>" class="form-control"> 
									</td>
								</tr>
								<tr>
									<td>	
										<input id="myInput" type="text" name="foodQuantity" value="<?php echo $getData['foodQuantity']?>" class="form-control" class="form-control"> 
									</td>
								</tr>
								<tr>
									<td>
										<div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
										<input id="myInput" class="form-control" size="16" type="text" readonly name="foodReservationDate" value="<?php echo $getData['foodReservationDate']?>" class="form-control">
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
										</div>

										<script type="text/javascript" src="DatePicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
										<script type="text/javascript" src="DatePicker/bootstrap/js/bootstrap.min.js"></script>
										<script type="text/javascript" src="DatePicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
										<script type="text/javascript" src="DatePicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
										<script type="text/javascript">
										$('.form_datetime').datetimepicker({
										//language:  'fr',
										weekStart: 1,
										todayBtn:  1,
										autoclose: 1,
										todayHighlight: 1,
										startView: 2,
										forceParse: 0,
										showMeridian: 1
										});
										$('.form_date').datetimepicker({
										language:  'fr',
										weekStart: 1,
										todayBtn:  1,
										autoclose: 1,
										todayHighlight: 1,
										startView: 2,
										minView: 2,
										forceParse: 0
										});
										$('.form_time').datetimepicker({
										language:  'fr',
										weekStart: 1,
										todayBtn:  1,
										autoclose: 1,
										todayHighlight: 1,
										startView: 1,
										minView: 0,
										maxView: 1,
										forceParse: 0
										});
										</script>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="update" value="Update" class="form-control btn-success btn-group"> 
										<input type="submit" name="delete" value="Delete" class="form-control btn-danger btn-group"> 
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