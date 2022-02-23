<!DOCTYPE html>

<?php 
    include("../configDatabase.php");
	include("../dbConnection.php"); 	
?>


<!--Mashed Update and Delete Code-->
<?php 
	    $id = $_GET['id']; 
		$db = new Database();
		$query = "SELECT * FROM bddessert WHERE bdDessertId= $id"; //sql Command language
		$getData = $db->select($query)->fetch_assoc();
		
		if(isset($_POST['update'])){
           $foodItemName = mysqli_real_escape_string($db->link,$_POST['foodItemName']);
           $foodItemPrice = mysqli_real_escape_string($db->link,$_POST['foodItemPrice']);
          
           if($foodItemName == '' || $foodItemPrice == ''){
               $error = "Field, Menu & Item Must not be empty!";
           }else{
             $updateQuery = "UPDATE `bddessert` SET 
			 
			 `foodItemName`= '$foodItemName',
			 `foodItemPrice`= '$foodItemPrice' 
			 WHERE `bdDessertId`= '$id'";
            $update = $db->updateFoodMenu($updateQuery); 
           }
       } 
		
?>

		<?php 
			if(isset($_POST['delete'])){
				$deleteQuery = "DELETE FROM bddessert WHERE bdDessertId=$id";
				$deleteData = $db->deleteFoodMenu($deleteQuery);
			}
		?>
<!--Mashed End Update and Delete Code-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../CSS/Bootsrap/foodReservation/bootstrap.min.css">
		<link rel="stylesheet" href="../main.css">
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
						<a href="../analytics.php">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Analytics</span>
						</a>
					</li>
					<li>
						<a href="../rawMaterial.php">
							<span><i class="fa fa-bitbucket"></i></span>
							<span>Raw Material</span>
						</a>
					</li>
					<li>
						<a href="../foodReservation.php">
							<span><i class="fa fa-envira"></i></span>
							<span>Food Reservation</span>
						</a>
					</li>
					<li>
						<a href="../client.php">
							<span><i class="fa fa-user"></i></span>
							<span>Client</span>
						</a>
					</li>
					<li>
						<a href="../messages.php">

							<span><i class="fa fa-envelope"></i></span>
							<span>Messages</span>
						</a>
					</li>
					
					<li>
						<a href="../payment.php">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Payments</span>
						</a>
					</li>
					<li>
						<a href="../employee.php">
							<span><i class="fa fa-group"></i></span>
							<span>Employee</span>
						</a>
					</li>
					<li>
						<a href="../onlineOrder.php">
							<span><i class="fa fa-shopping-cart"></i></span>
							<span>Online Order</span>
						</a>
					</li>
					<li class="active">
						<a href="../foodMenu.php">
							<span><i class="fa fa-apple"></i></span>
							<span>Food Menu</span>
						</a>
					</li>
					<li>
						<a href="../latestNews.php">
							<span><i class="fa fa-newspaper-o"></i></span>
							<span>Latest News</span>
						</a>
					</li>
					<li>
						<a href="../billing.php">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Billing</span>
						</a>
					</li>
					<li>
						<a href="../updateArticles.php">
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
					Update Food Menu Registration
				</div>  
			</div>
			<div class = "sub-menu">
                <div class="foodMessage">
					
                   
                </div>
				<div class="foodMenuContent">
					<p>Bangladeshi & Chinese Food Menu</p>
					<div class="foodSubMenu">
					  <form method="post" action="updatebddessert.php?id=<?php echo $id;?>">
						<table>
							<tr>
								<td></td>
							</tr>
							
							<tr>
								<td>
									<input id="myInput" type="text" name="foodItemName" value = "<?php echo $getData['foodItemName'];?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<input id="myInput" type="text" name="foodItemPrice" value = "<?php echo $getData['foodItemPrice'];?>"> 
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
		</div>
	</body>
</html>

<script>
var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
});
</script>

