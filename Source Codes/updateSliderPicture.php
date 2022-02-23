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
			.UploadSliderPic {
			width: 302px;
			height: 252px;
			margin-bottom: 20px; 
			border: 1px solid #cfd4de;
			}		
		</style>
		<?php 
		include("configDatabase.php");
		include("dbConnection.php");       
		?>
		<?php
		$id = $_GET['id']; 
		$db =  new Database();
		$query = "SELECT * FROM `slider` WHERE sliderId =$id"; //sql Command language
		$getData = $db->select($query)->fetch_assoc();
		
		
   if(isset($_POST['update'])){
			$fileinfo = @getimagesize($_FILES["image"]["tmp_name"]);
			$width = $fileinfo[0];
			$height = $fileinfo[1];		   
           $filestore = mysqli_real_escape_string($db->link,$_FILES['image']['name']);
           $filename = $_FILES['image']['tmp_name'];
		   $destination = "images/slider/".$filestore;
		   
	   
			
		   if(!file_exists($_FILES["image"]["tmp_name"])){
			 $errorUPload = "Choose image file to upload."; 
		   }
           else if($width <> "1920" && $height <> "750" ){
			$error = " Picture Dimension should be 1920X750."; 
           }
		   else{
			   $deleteImg = $getData['sliderPicture'];
				unlink($deleteImg);
			   if(move_uploaded_file($filename,$destination)){
					$updateQuery = "UPDATE `slider` SET `sliderPicture`= '$destination' WHERE sliderId = '$id'";
				$update = $db->updateSlider($updateQuery);
			   }
       
           }
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
					<li class="active">
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
				Update Slider Picture 
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
					<div style="color:#00004d; font-weight:bold;">
						<?php echo $getData['PictureTitle'];?>
					</div>
					<div style="text-align:center; color: #c11b1b;">
						<?php
							if(isset($error)){
								echo "<span><i class='fa fa-warning'></i>".$error."</span>";
							}
						 ?>
						<?php
							if(isset($errorUPload)){
								echo "<span><i class='fa fa-warning'></i>".$errorUPload."</span>";
							}
						 ?>						 
					</div>					
					<div class ="UploadSliderPic">
							<img src="<?php  echo $getData['sliderPicture']; ?>" id="blah" width="650px" height="250px"/>	
					</div>
				
					<div class="employeeFormInformation">
						<form action = "updateSliderPicture.php?id=<?php echo $id;?>" method = "post" enctype = "multipart/form-data">
							<table style="width: 692px;";>
							
							<tr>
								<td>
									<td>Choose a Picture<td> 
									<input type='file' name="image" onchange="readURL(this);" value = <?php echo $getData['sliderPicture']?> id = "myInput" accept=".jpg,.JPG,.jpeg,.png,.BMP,.bmp"/>
									<td>* File name should be a word</td>
								</td>
							</tr>						
							<tr>
								<td>
									<td><td> 
									<input type="submit" name="update" value = "Update" id = "myInput" class = "form-control btn-success btn-group employeebtn">
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