<?php include("session_start.php");?>
<!DOCTYPE html>
<html>
	<head>
        <?php
            include("configDatabase.php");
    		include("dbConnection.php");
        ?>	
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="CSS/Bootsrap/foodReservation/bootstrap.min.css">
		<link rel="stylesheet" href="main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>
		
		<style>
			img {
			  border-radius: 50%;
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
					<li class="active">
						<a href="Employee.php">
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
			 $db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
			 $query = "SELECT * FROM employee ORDER BY employeeid DESC"; //sql Command language
			 $read = $db->select($query); // query function store in '$read' variable
		 ?>
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Employee Information
						<!--Start Section search Data field from table-->
						<span style="margin-left:50px;"><input style="padding-right:20px;" type="search" class="light-table-filter" data-table="order-table" placeholder="Search..."><i style ="margin-left:-20px;"class="fa fa-search"></i></span>
						<!--End Section search Data field from table-->					
					<?php
						if(isset($_GET['msg'])){ //mesage function from taking 'dbConnection.php' file by suing $_GET method
						echo "<span style='color: mediumblue; text-align: right; margin-left: 50px;'>".$_GET['msg']."</span>";
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
					<a href="employeeRegistration.php"><input type = "submit" value = "Add Employee" title = "Register Employee"></a><span class = "toltipText">Register Employee</span>
				</div>
			</div>
			<div style="overflow-x:auto">
				<table class = "employeeTble order-table">
				  <thead>
					<tr>
                        <th width="3%";>SL</th>
						<th width="7%";>Picture</th>
						<th width="18%";>Name</th>
						<th width="10%";>Designation</th>
						<th width="10%";>MobileNo</th>
						<th width="8%";>Email</th>
						<th width="17%";>Address</th>
						<th width="12%";>JoinDate</th>
						<th width="6%";>Salary</th>
						<th width="10%";>Action</th>
					</tr>
                   </thead>
                   <?php if($read){?>
    		
					<?php 
						$i=1;
						foreach($read as $key => $row){ // 'while loop' used for Data retrieve and used fetch_assoc() function
					?>
							<tr id="<?php echo $row['employeeid']?>">
								<td> <?php echo $i++ ?> </td>
								<td> <?php echo "<img style='width:40px; height: 40px;' src = ".$row['Picture'].">"; ?> </td>
								<td id="<?php echo $row["employeeid"]; ?>" class="view_data" style='text-align: left;'> <?php echo $row['EmployeeName']; ?> </td>
								<td style='text-align: left;' > <?php echo $row['Designation']; ?> </td>
								<td> <?php echo $row['MobileNo']; ?> </td>
								<td style='text-align: left;'> <?php echo $row['Email']; ?> </td>
								<td style='text-align: left;'> <?php echo $row['Address']; ?> </td>
                                <td style='text-align: left;'> <?php echo $row['JoinDate']; ?> </td>
                                <td> <?php echo $row['Salary']; ?> </td>
								<td><i style="padding: 0px 5px; color: #98363f"; class = "fa fa-trash remove"></i><a href="updateEmployee.php? id=<?php echo urlencode($row['employeeid']);?>"><i style='padding: 0px 5px'; class="fa fa-edit"></i></a></td>
							</tr>
						<?php } ?>
						<?php } else { ?>
							<p>Data is not Available</p>
					<?php } ?>
				</table>
			</div>
			<?php include("footer.php");?>
		</div>
		
		<input type="hidden" name="employee_id" id="employee_id"/> 
		<!-- Add View Modal HTML -->
		
		<div id="dataModal" class="modal fade">  
			  <div class="modal-dialog">  
				   <div class="modal-content">  
						<div class="modal-header clientViewHeader">  
							 <button type="button" class="close" data-dismiss="modal">&times;</button>  
							 <h4 class="modal-title">Employee Details</h4>  
						</div>  
						<div class="modal-body" id="Employee_detail">  
						</div>  
						<div class="modal-footer">  
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
						</div>  
				   </div>  
			  </div>  
		 </div>  
		 
	</body>
	
	<script>
		
		$(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"viewData/employeeSelect.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#Employee_detail').html(data);  
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
	<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'deleteRow/deleteEmployee.php',
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
</html>