
<?php include("session_start.php");?>

<!DOCTYPE html>
<html>
		<?php
            include("configDatabase.php");
    		include("dbConnection.php");
        ?>
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

<style>
.foodMenuTable tr:hover{
	background-color: #eef1f7;
	cursor: pointer; 
}
.deleteColor{
	color:#980505; 
}


</style>

	</head>
	<body>
		<div class="header">
			<marquee><p>Khan Restaurant</p></marquee> 
			<div class="logout_container">			
				<a href="logout.php"><span class="logout_container_username"><h3>Logout</h3></span></a>			
				<!--<a href="logout.php"><span class="logout_container_username"><h3><?php //echo htmlspecialchars($_SESSION["username"]); ?></h3></span></a>-->				
			</div>			
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
					<li class="active">
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
    		$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM bdrice_biriani ORDER BY bdRiceBirianiId DESC"; //sql Command language
			 $read = $db->select($query); // query function store in '$read' variable
		 ?>
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Food Menu Information
					<?php
						if(isset($_GET['msg'])){ //mesage function from taking 'dbConnection.php' file by suing $_GET method
						echo "<span style='color: mediumblue; text-align: right; margin-left: 140px;'>".$_GET['msg']."</span>";
						} 
					?>
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
					<a href="foodMenuRegistration.php"><input type = "submit" value = "Add" title = "Register Food Menu"></a><span class = "toltipText">Register Food Menu</span>
				</div>
			</div>
			<div class = "foodMenuTable">
				<button class="collapsible">Bangladeshi Menu</button>
				<div class="content">
				<table>	
					<tr>	
						<p>Rice/Biriani</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
    		
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['bdRiceBirianiId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeBDRiceBiriani"></i></td>
						<td><a href="updateFoodTableFile/updateBDRiceBiraini.php? id=<?php echo urlencode($row['bdRiceBirianiId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			 <!--Table Function End-->
			<!--Start Delete Section -->
				<script type="text/javascript">
					$(".removeBDRiceBiriani").click(function(){
					var id = $(this).parents("tr").attr("id");
					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteBDRiceBiriani.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
	       <!--End Delete Section -->		
			
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM bdMashed ORDER BY bdmashedId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Mashed (ভর্তা)</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['bdmashedId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeBDMashed"></i></td>
						<td><a href="updateFoodTableFile/updateBDMashed.php? id=<?php echo urlencode($row['bdmashedId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeBDMashed").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteBdMashed.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM bdsnacks ORDER BY BDSnacksId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Snacks</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['BDSnacksId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeBDSnacks"></i></td>
						<td><a href="updateFoodTableFile/updateBDSnacks.php? id=<?php echo urlencode($row['BDSnacksId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeBDSnacks").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteBdSnacks.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
				
				
		  <!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM bdvegetable ORDER BY bdVegetableId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Vegetable</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['bdVegetableId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeBDVegetable"></i></td>
						<td><a href="updateFoodTableFile/updateBDVegetable.php? id=<?php echo urlencode($row['bdVegetableId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeBDVegetable").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteBDVegetable.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM bdfish ORDER BY bdFishId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Fish</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['bdFishId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeBDFish"></i></td>
						<td><a href="updateFoodTableFile/updateBDFish.php? id=<?php echo urlencode($row['bdFishId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeBDFish").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteBDFish.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			
			 <!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM bdmeat ORDER BY bdMeatId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Meat</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['bdMeatId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeBDMeat"></i></td>
						<td><a href="updateFoodTableFile/updateBDMeat.php? id=<?php echo urlencode($row['bdMeatId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeBDMeat").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteBDMeat.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
				
		    <!--Table Function Start-->
			    <?php 
				 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
				 $query = "SELECT * FROM bddessert ORDER BY bdDessertId DESC"; //sql Command language
				 $read = $db->select($query); // query function store in '$read' variable
				?>
				
				
			   <table>	
					<tr>	
						<p>Dessert</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
    		
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['bdDessertId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeBDDessert"></i></td>
						<td><a href="updateFoodTableFile/updateBDDessert.php? id=<?php echo urlencode($row['bdDessertId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			
			<script type="text/javascript">
					$(".removeBDDessert").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteBDDessert.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			
			
			
		   <!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM bddrink ORDER BY bdDrinkId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Drink/Beverage</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['bdDrinkId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeBDDrinkBeverage"></i></td>
						<td><a href="updateFoodTableFile/updateBDDrink.php? id=<?php echo urlencode($row['bdDrinkId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
			
				<script type="text/javascript">
					$(".removeBDDrinkBeverage").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteBDDrink.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			 </div>
			 
			 <!--Chinese Collapse Function Start-->
			 <button style="margin-top: 1px;" class="collapsible">Chinese Menu</button>
			 <div class="content">
				
				
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM chsrice ORDER BY chsRiceId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Rice</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['chsRiceId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeCHRice"></i></td>
						<td><a href="updateFoodTableFile/updateCHRice.php? id=<?php echo urlencode($row['chsRiceId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeCHRice").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteChRice.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			
						<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM chsappetizer ORDER BY chAppetizerId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Appetizer</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['chAppetizerId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeCHAppetizer"></i></td>
						<td><a href="updateFoodTableFile/updateCHAppetizer.php? id=<?php echo urlencode($row['chAppetizerId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeCHAppetizer").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteCHAppetizer.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM chsnoodles ORDER BY chsNoodlesId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Noodles</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['chsNoodlesId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeCHSNoodles"></i></td>
						<td><a href="updateFoodTableFile/updateCHSNoodles.php? id=<?php echo urlencode($row['chsNoodlesId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeCHSNoodles").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteCHSNoodles.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
				
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM chssalad ORDER BY chSaladId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Salad</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['chSaladId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeCHSalad"></i></td>
						<td><a href="updateFoodTableFile/updateCHSalad.php? id=<?php echo urlencode($row['chSaladId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeCHSalad").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteCHSalad.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
				
				
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM chssoup ORDER BY chSoupId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Soup</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['chSoupId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeCHSoup"></i></td>
						<td><a href="updateFoodTableFile/updateCHSoup.php? id=<?php echo urlencode($row['chSoupId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeCHSoup").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteCHSoup.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			 </div>
			  <!--Japanese Collapse Function Start-->
			 <button style="margin-top: 1px;" class="collapsible">Japanese Menu</button>
			 <div class="content">
			
			
			
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM jprice ORDER BY jpRiceId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Rice</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['jpRiceId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeJPRice"></i></td>
						<td><a href="updateFoodTableFile/updateJPRice.php? id=<?php echo urlencode($row['jpRiceId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeJPRice").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteJPRice.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM jpnoodles ORDER BY jpNoodlesId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Noodles</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['jpNoodlesId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeJPNoodles"></i></td>
						<td><a href="updateFoodTableFile/updateJPNoodles.php? id=<?php echo urlencode($row['jpNoodlesId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeJPNoodles").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteNoodles.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			
			<!--Table Function Start-->
			<?php 
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM jsfishseafood ORDER BY JsfishseafoodId DESC";
			 $read = $db->select($query); // query function store in '$read' variable
			?>
				<table>	
					<tr>	
						<p>Fish & Seafood Recipes</p>
						<th width="5%">SL No.</th>
						<th width="30%">Food Item Name</th>
						<th width="25%">Food Item Price</th>
						<th width="7%">Delete</th>
						<th width="8%">Action</th>
					</tr>
					<?php if($read){?>
					<?php 
						$i=1;
						while( $row = $read->fetch_assoc()){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
					<tr id="<?php echo $row['JsfishseafoodId']?>">
						<td><?php echo $i++;?></td>
						<td style='text-align: left;'><?php echo $row['foodItemName']; ?></td>
						<td><?php echo $row['foodItemPrice']; ?></td>
						<td> <i style='padding: 0px 20px'; class = "fa fa-trash removeJPFishSeafood"></i></td>
						<td><a href="updateFoodTableFile/updateJpFish.php? id=<?php echo urlencode($row['JsfishseafoodId']);?>"><i style='padding: 0px 20px'; class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>
					<?php } else { ?>
						<p style='color:#ffc110'>Data is not Available</p>
					<?php } ?>
				</table>
			<!--Table Function End-->
				<script type="text/javascript">
					$(".removeJPFishSeafood").click(function(){
					var id = $(this).parents("tr").attr("id");


					if(confirm('Are you sure to remove this record ?'))
					{
					$.ajax({
					   url: 'deleteRow/deleteJPFishSeafood.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed Successfully");  
					   }
					});
					}
					});
				</script>
			<!--Table Function End-->
			 </div>
			  
		  </div>
		  <?php include("footer.php");?>
		</div>
	</body>
</html>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("activeCollapse");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>