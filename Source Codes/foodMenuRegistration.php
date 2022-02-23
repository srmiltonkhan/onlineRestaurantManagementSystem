<?php include("session_start.php");?>

<!DOCTYPE html>

<?php 
    include("configDatabase.php");
	include("dbConnection.php");       
?>
<?php
    $db =  new Database();
   if(isset($_POST['submit'])){
           $foodItemName = mysqli_real_escape_string($db->link,$_POST['foodItemName']);
           $foodItemPrice = mysqli_real_escape_string($db->link,$_POST['foodItemPrice']);
           $foodMenu = mysqli_real_escape_string($db->link,$_POST['Menu']);
           $foodItem = mysqli_real_escape_string($db->link,$_POST['Item']);
           if($foodItemName == '' || $foodItemName == '' || $foodMenu == '' || $foodItem == '' ){
               $error = "Field, Menu & Item Must not be empty!";
           }else{
               if($foodMenu=="1" && $foodItem=="4" ){
                   $table = "bdrice_biriani";
               }elseif($foodMenu=="1" && $foodItem=="5"){
                   $table = "bdMashed";
               }elseif($foodMenu=="1" && $foodItem=="6"){
                   $table = "bdVegetable";
               }elseif($foodMenu=="1" && $foodItem=="7"){
                   $table = "bdFish";
               }elseif($foodMenu=="1" && $foodItem=="8"){
                   $table = "bdMeat";
               }elseif($foodMenu=="1" && $foodItem=="9"){
                   $table = "bdDessert";
               }elseif($foodMenu=="1" && $foodItem=="10"){
                   $table = "bdDrink";
               }elseif($foodMenu=="1" && $foodItem=="11"){
                   $table = "bdsnacks";
               }elseif($foodMenu=="2" && $foodItem=="12"){
                   $table = "chsAppetizer";
               }elseif($foodMenu=="2" && $foodItem=="13"){
                   $table = "chsSalad";
               }elseif($foodMenu=="2" && $foodItem=="14"){
                   $table = "chsSoup";
               }elseif($foodMenu=="2" && $foodItem=="15"){
                   $table = "chsVegetable";
               }elseif($foodMenu=="2" && $foodItem=="16"){
                   $table = "chschicken";
               }elseif($foodMenu=="2" && $foodItem=="17"){
                   $table = "chsBeef";
               }elseif($foodMenu=="2" && $foodItem=="18"){
                   $table = "chsPrawn";
               }elseif($foodMenu=="2" && $foodItem=="19"){
                   $table = "chsFish";
               }elseif($foodMenu=="2" && $foodItem=="20"){
                   $table = "chsRice";
               }elseif($foodMenu=="2" && $foodItem=="21"){
                   $table = "chsNoodles";
               }elseif($foodMenu=="3" && $foodItem=="22"){
                   $table = "jpRice";
               }elseif($foodMenu=="3" && $foodItem=="23"){
                   $table = "jpPorridge";
               }elseif($foodMenu=="3" && $foodItem=="24"){
                   $table = "jpNoodles";
               }elseif($foodMenu=="3" && $foodItem=="25"){
                   $table = "jpDeepFried";
               }elseif($foodMenu=="3" && $foodItem=="26"){
                   $table = "jpSashimi";
               }elseif($foodMenu=="3" && $foodItem=="27"){
                   $table = "jpBread";
               }elseif($foodMenu=="3" && $foodItem=="28"){
                   $table = "jsfishseafood";
               }else{
				   $foodChooseItem = "Select Food Menu and Item Name";
			   }
            $query = "INSERT INTO `$table`(`foodItemName`,`foodItemPrice`) VALUES ('$foodItemName','$foodItemPrice')";
            $create = $db->insert($query);
           }
       } 
?>
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
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Food Menu Registration
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
                    if(isset($foodChooseItem)){
                        echo "<span style='color:blue'>".$error."</span>";
                    }
                    ?>
                    <?php
                    if(isset($error)){
                        echo "<span style='color:blue'>".$error."</span>";
                    }
                    ?>
                    <?php
                       if(isset($_GET['msg'])){
                          echo "<span style='color:green'>".$_GET['msg']."</span>";
                       }
                    ?>
                </div>
				<div class="foodMenuContent">
					<p>Bangladeshi & Chinese Food Menu</p>
					<div class="foodSubMenu">
					  <form method="post" action="foodMenuRegistration.php">
						<table>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td>
									<select name="Menu" id="Menu">
										<option value="">Select Menu</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<select name="Item" id="Item">
										<option value="">Select Item</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<input id="myInput" type="text" name="foodItemName" placeholder="Write Food Item Name"> 
								</td>
							</tr>
							<tr>
								<td>
									<input id="myInput" type="text" name="foodItemPrice" placeholder="Write Food Item Price"> 
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="submit" value = "Save"> 
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

<script>
$(document).ready(function(){

 load_json_data('Menu');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('foodMenuItem.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'Menu')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#Menu', function(){
  var Menu_id = $(this).val();
  if(Menu_id != '')
  {
   load_json_data('Item', Menu_id);
  }
  else
  {
   $('#Item').html('<option value="">Select Item</option>');
  }
 });
 
});
</script>