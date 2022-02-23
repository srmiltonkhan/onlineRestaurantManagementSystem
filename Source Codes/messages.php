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
					<li class="active">
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
		
		<!--Fetch Data from Database-->
		<?php 
			include("configDatabase.php");
			include("dbConnection.php");
		?>
		<?php  
			$db =  new Database();
			$query = "SELECT * FROM contactinfo ORDER BY contactId DESC";  
			$result = mysqli_query($db->link,$query);
		?> 
		<!--End Fetch Data from Database-->
		
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Message
					<!--Start Section Sezrch Data field from table-->
					<span style="margin-left:50px;"><input style="padding-right:20px;" type="search" class="light-table-filter" data-table="order-table" placeholder="Search..."><i style ="margin-left:-20px;"class="fa fa-search"></i></span>
					
					<!--End Section Sezrch Data field from table-->		
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
			
			<div>
				<table class = "foodReservationTable order-table">
					<thead>
					<tr>
                        <th width="2%";>SL</th>
						<th width="12%";>User Name</th>
						<th width="15%";>E-mail</th>
						<th width="19%";>Subject</th>
						<th width="30%";>Message</th>
						<th width="15%";>Date</th>
						<th width="7%";>Action</th>
					</tr>
					</thead>
					<?php if($result){?>
    		
					<?php 
						$i=1;
						while($row = mysqli_fetch_array($result))  { // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
							<tr id="<?php echo $row['contactId']?>">
								<td> <?php echo $i++ ?> </td>
								<td id="<?php echo $row["contactId"]; ?>" class="view_data" style='text-align: left';><?php echo $row["username"]; ?></td>
								<td style='text-align: left';> <?php echo $row['useremail']; ?> </td>
								<td style='text-align: left';> <?php echo $row['subject']; ?> </td>
								<td style='text-align: left';> <?php echo $row['message']; ?> </td>
								<td style='text-align: left';> <?php echo $row['DateTime']; ?> </td>
								<td> <i style="color: #98363f"; class = "fa fa-trash remove"></i></td>
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
		<script type="text/javascript">
			$(".remove").click(function(){
				var id = $(this).parents("tr").attr("id");


				if(confirm('Are you sure to remove this record ?'))
				{
					$.ajax({
					   url: 'deleteRow/deleteMessage.php',
					   type: 'GET',
					   data: {id: id},
					   error: function() {
						  alert('Something is wrong');
					   },
					   success: function(data) {
							$("#"+id).remove();
							alert("Record removed successfully");  
					   }
					});
				}
			});
		</script>
		
		<script>
		$(document).on('click', '.view_data', function(){  
           var client_id = $(this).attr("id");  
           if(client_id != '')  
           {  
                $.ajax({  
                     url:"viewData/messageSelect.php",  
                     method:"POST",  
                     data:{client_id:client_id},  
                     success:function(data){  
                          $('#client_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      }); 
		</script>
		<!--Start Section Sezrch Data from table-->
<script>
	(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>	
<!--End Section Sezrch Data from table-->
		
		
</html>