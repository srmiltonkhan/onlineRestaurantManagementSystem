<?php include("session_start.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="main.css">
	<style>
		.modal-body input[type=text] {
			display: block;
			width: 100%;
			height: 34px;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			}
			
			.side-nav ul li a {
				padding: 14px 16px;
				color: #fff;
				display: block;
				text-decoration: none;
			}
			.side-nav ul li span:nth-child(2) {
				margin-left: 10px;
				font-size: 13px;
				font-weight: 650;
			}
			button, input, optgroup, select, textarea {
			font: x-small;
			font-size: smaller;
			}
			.sign_out button{
				margin-top: 84px;
				float: right;
				height: 25px;
				width: 100px;
				margin-right: 10px;
				font-size: 13px;
				color: black;
				font-weight: 500;

			}
			.change_password button{
				margin-top: 45px;
				float: left;
				height: 25px;
				margin-left: 10px;
				width: 125px;
				font-size: 13px;
				font-weight: 500;
				color: black;
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
					<li class="active">
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
							<span>Latest News</span>
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
			$query = "SELECT * FROM client ORDER BY clientId DESC";  
			$result = mysqli_query($db->link,$query);
		?> 
		<!--End Fetch Data from Database-->
		
		<div class="main-content">
			<div class = "titleContainer">
				<div class="title">
					Client Information
						<!--Start Section Sezrch Data field from table-->
						<span style="margin-left:50px;"><input style="padding-right:20px;" type="search" class="light-table-filter" data-table="order-table" placeholder="Search..."><i style ="margin-left:-20px;"class="fa fa-search"></i></span>
						<!--End Section Sezrch Data field from table-->					
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
						  <a href="" class="change_password"><button>Change Password</button></a>
						</div>
					</div>
				</div>
				<!--End Logout Dropdown-->	
					<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-success btnClientAdd edit_data"><i class="fa fa-plus-circle"></i> Add New Client</button>  

				</div>
			</div>
			
			
		<!--Fetch div-->	
			
		         
			 <div id="client_table" style="overflow-x:auto"> 
				  <table class="employeeTble order-table"> 
				   <thead>
					   <tr>  
							<th width="4%">SL</th>  
							<th width="20%">Client Name</th>  
							<th width="7%">Gender</th>  
							<th width="10%">Mobile</th>  
							<th width="14%">Email</th>  
							<th width="20%">Address</th>  
							<th width="9%">Password</th>  
							<th width="6%">Delete</th>  
							<th width="10%">Action</th>  
							
					   </tr>  
					 </thead>
					   <?php  
					   $i=1;
					   while($row = mysqli_fetch_array($result))  
					   {  
					   ?> 
					   
					   <tr id="<?php echo $row['clientId']?>">  
							<td><?php echo $i++; ?></td>  
							<td id="<?php echo $row["clientId"]; ?>" class="view_data" style='text-align: left';><?php echo $row["name"]; ?></td>  
							<td ><?php echo $row["gender"]; ?></td>  
							<td><?php echo $row["mobile"]; ?></td>  
							<td style='text-align: left';><?php echo $row["email"]; ?></td>  
							<td style='text-align: left';><?php echo $row["address"]; ?></td>  
							<td><?php echo $row["password"]; ?></td>  
							<td><a class = "remove"><i style="padding: 0px 10px; font-size: 17px;"; class="fa fa-trash"></i></a></td>  
							<td><a href="updateClient.php? id=<?php echo urlencode($row['clientId']);?>"><i style="padding: 0px 7px;font-size:17px;"; class="fa fa-edit"></i><a/>
							<a id="<?php echo $row["clientId"]; ?>" class="view_data"><i style="padding: 0px 7px;font-size: 20px;" class="fa fa-eye"></i><a/></td> 
						  
					   </tr>  
					   <?php  
					   }  
					   ?>  
				  </table>  
			 </div>  
		</div>
		<?php include("footer.php");?>
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
		
		<!-- Add View Modal HTML -->
		
		<div id="dataModal" class="modal fade">  
			  <div class="modal-dialog">  
				   <div class="modal-content">  
						<div class="modal-header clientViewHeader">  
							 <button type="button" class="close" data-dismiss="modal">&times;</button>  
							 <h4 class="modal-title">Client Details</h4>  
						</div>  
						<div class="modal-body" id="client_detail">  
						</div>  
						<div class="modal-footer">  
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
						</div>  
				   </div>  
			  </div>  
		 </div>  
		
<!-- Start Registration Modal HTML -->
	<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header clientViewHeader">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Client Registration</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                           
						<input type="text" name="name" id="name" placeholder="Client Name" class="form-control" />  
						<br/>  
						<select name="gender" id="gender" class="form-control">  
							<option value="Male">Choose Gender</option>  
							<option value="Male">Male</option>  
							<option value="Female">Female</option>  
						</select> 
						<br/> 
						<input type="text" name="mobile" id="mobile" placeholder="Mobile" class="form-control" />  
						<br/> 
						<input type="text" name="email" id="email" placeholder="Email" class="form-control" />  
						<br/>  
						 <textarea name="address" id="address" placeholder="Address" class="form-control"></textarea>  
						 <br />  
                          <input type="text" name="password" id="password" placeholder="Password" class="form-control" />  
                          <br />  
                          <input type="text" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" class="form-control" />  
                          <br />  
                          <input type="hidden" name="client_id" id="client_id"/>  
                          <input type="submit" name="insert" id="insert" value="Save" class="btn btn-success clientBtn" class="form-control"/>  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
             </div>  
      </div> 
	 </div>
<!-- End Registration Modal HTML -->
</body>
</html>
<script>  
	$(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Save");  
           $('#insert_form')[0].reset();  
      });  
      
	  $(document).on('click', '.edit_data', function(){  
           var client_id = $(this).attr("id");  
           $.ajax({  
                url:"clientModalFile/fetch.php",  
                method:"POST",  
                data:{client_id:client_id},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);  
                     $('#gender').val(data.gender);  
                     $('#mobile').val(data.mobile);  
                     $('#email').val(data.email);  
                     $('#address').val(data.address);  
                     $('#password').val(data.password);  
                     $('#confirmPassword').val(data.password);  
                     $('#client_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
	  
	  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#gender').val() == '')  
           {  
                alert("gender is required");  
           }  
           else if($('#mobile').val() == '')  
           {  
                alert("mobile is required");  
           }  
           else if($('#email').val() == '')  
           {  
                alert("email is required");  
           }
		   else if($('#address').val() == '')  
           {  
                alert("address is required");  
           }
		   else if($('#password').val() == '')  
           {  
                alert("password is required");  
           }
		   else if($('#confirmPassword').val() == '.password')  
           {  
                alert("confirmPassword is required");  
           }
           else  
           {  
                $.ajax({  
                     url:"clientModalFile/insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#client_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var client_id = $(this).attr("id");  
           if(client_id != '')  
           {  
                $.ajax({  
                     url:"viewData/clientSelect.php",  
                     method:"POST",  
                     data:{client_id:client_id},  
                     success:function(data){  
                          $('#client_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>
	
	
	<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'deleteRow/deleteClient.php',
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
