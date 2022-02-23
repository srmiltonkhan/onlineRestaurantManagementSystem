f<?php  
include("pdo_db_connection.php");
$error = "";

?>
<?php include("session_start.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

		<link rel="stylesheet" href="css/billing.css">
	<style>
		.lineHeight{
			padding: 3px 10px; 
		}
		.iconColor{
			color: blue;
		}
		.form-control {
			padding: 6px 5px;
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
					<li class="active">
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
					Billing Information
							<!--Start Section search Data field from table-->
						<span style="margin-left:50px;"><input style="padding-right:20px;" type="search" class="light-table-filter" data-table="order-table" placeholder="Search..."><i style ="margin-left:-20px;"class="fa fa-search"></i></span>
						<!--End Section search Data field from table-->	
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
					<a href="#addBill" data-toggle="modal"><button class="btnRight btnBillOrder"><i class="fa fa-plus-square"></i> Add Bill</button></a>
				</div>
			</div>		
            <div style="overflow-x:auto">
				<table class = "foodReservationTable order-table">
				 <thead>
					<tr>
                        <th width="5%";>SL</th>
                        <th width="5%";>Invoice</th>
						<th width="25%";>Customer Name</th>
						<th width="15%";>Mobile</th>
						<th width="20%";>Address</th>
						<th width="15%";>Date</th>
						<th width="5%";>Total</th>
						<th width="5%";>PDF</th>
						<th width="10%";>Action</th>
					</tr>
				  </thead>
				  <tbody>
					<!--Start Retrieve Data From BDMashed Table-->
						<?php  
							$query = "SELECT * FROM`customers` ORDER BY customer_id DESC";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();
						?> 
						
						<?php	$i=1;
							foreach($all_result as $key=> $row) {?>
							  <tr>
						<?php echo "<td style='text-align:left;'>".$i++."</td>";
							  echo '<td style="text-align:left;">'.$row['invoice_number'].'</td>';
							  echo '<td style="text-align:left;">'.$row['customer_name'].'</td>';
							  echo '<td style="text-align:left;">'.$row['mobile_number'].'</td>';
							  echo '<td style="text-align:left;">'.$row['address'].'</td>';
							  echo '<td style="text-align:left;">'.$row['date_time'].'</td>';
							  echo '<td>'.$row['final_total'].'</td>';
							  echo '<td><a href="print_invoice.php?pdf=1&id='.$row["customer_id"].'"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>';
							  echo "<td><a href=\"deleteBilling.php?id=$row[customer_id]\" onClick=\"return confirm('Are you sure you want to delete Data')\"><i class= 'fa fa-trash' style='font-size:20px;color:#a72929;'></i></a></td>";
							  echo '</tr>';
							}
						?>

					<!--End Retrieve Data From BDMashed Table-->				  
				</tbody>
				</table>
			</div>	
<!--Start Remove Jquery -->	
	<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'deleteRow/deleteBilling.php',
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
<!--End Remove Jquery -->
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
			
<!-- Start Add Billing Modal HTML -->
		<!--Fetch Data from Database-->
		<?php  
			$query = "SELECT foodItemName, foodItemPrice FROM bdrice_biriani ORDER BY foodItemName";  
			$statement = $connect->prepare($query);
			$statement->execute();
			$all_result = $statement->fetchAll(); 
		?> 
		<!--End Fetch Data from Database-->
  <!-- Modal -->
  <div class="modal fade" id="addBill" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Add Bill</h4>
			</div>
		
		<form action="billing.php" method="post">
			    <div class="modal-body">
				<div class="col-md-9" style="padding-left:0px;padding-right:0px;">
					<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-user iconColor"></i></span>
						<input type="text" name="customer_name" id="customer_name" placeholder="Client Name" class="form-control" required />
						<?php echo $error;?>
					</div>
					<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-map-marker iconColor"></i></span>
						<textarea name="address" id="address" placeholder="Address" class="form-control" required></textarea>  
					</div>
				</div>
				<div class="col-md-3" style="padding-right: 0px;padding-left: 0px;">
					<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-phone iconColor"></i></span>
						<input type="text" name="mobile_number" id="mobile_number" placeholder ="Mobile Number" class="form-control" required />
					</div>			
				</div>
				<div class="input-group lineHeight">
					<span class="input-group-addon"><i class="fa fa-apple iconColor"></i></span>
					<select name="itemName" id="itemName" class="form-control selectpicker " data-live-search="true" data-size="8" data-live-search-style="startsWith" required>
						<option placeholder="Search"></option>
						<?php 
						foreach($all_result as $row) {
						unset($foodItemName);
						$foodItemName = $row['foodItemName'];
						$foodItemPrice = $row['foodItemPrice'];
						echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
						}
						?>
					<!--Start Retrieve Data From BDMashed Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM bdmashed ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();
						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From BDMashed Table-->
					<!--Start Retrieve Data From BDFISH Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM bdfish ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From BDFISH Table-->	
					<!--Start Retrieve Data From BDDrink Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM bddrink ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From BDDrink Table-->	
					<!--Start Retrieve Data From BDMeat Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM bdmeat ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From BDMeat Table-->
					<!--Start Retrieve Data From BDDessert Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM bddessert ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From BDDessert Table-->						
					<!--Start Retrieve Data From BDSnacks Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM bdsnacks ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From BDSnacks Table-->
					<!--Start Retrieve Data From BDVegetable Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM bdvegetable ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From BDVegetable Table-->	
					<!--Start Retrieve Data From Chinese Appetizer Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM chsappetizer ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From Appetizer Table-->
					<!--Start Retrieve Data From Chinese Beef Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM chsbeef ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From Beef Table-->
					<!--Start Retrieve Data From Chinese Rice Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM chsrice ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From Rice Table-->
					<!--Start Retrieve Data From Chinese Noodles Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM chsnoodles ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From Noodles Table-->	
					<!--Start Retrieve Data From Japanese Rice Table-->
						<?php  
							$query = "SELECT foodItemName,foodItemPrice FROM jprice ORDER BY foodItemName ";  
							$statement = $connect->prepare($query);
							$statement->execute();
							$all_result = $statement->fetchAll();

						?> 
						<?php 
							foreach($all_result as $row) {
							unset($foodItemName);
							$foodItemName = $row['foodItemName'];
							$foodItemPrice = $row['foodItemPrice'];
							echo '<option value="'.$foodItemName.'"data-foodprice="'.$foodItemPrice.'" >'.$foodItemName.'  - '.$foodItemPrice.' TK</option>';
							}
						?>
					<!--End Retrieve Data From Japanese Table-->						
					</select>
				</div>
			
				<div class="input-group lineHeight">
					<span class="input-group-addon"><i class="fa fa-calculator iconColor"></i></span>
					<!--<input type="text" name="itemQuantity" id="itemQuantity" class="form-control">-->
					
					<select name="itemQuantity" id="itemQuantity" class="form-control" data-live-search="true">
						<?php 
							$one=1;
							$two=2;
							$three=3;
							$four=4;
							$five=5;
							echo '<option value="'.$one.'">'.$one.'</option>';
							echo '<option value="'.$two.'">'.$two.'</option>';
							echo '<option value="'.$three.'">'.$three.'</option>';
							echo '<option value="'.$four.'">'.$four.'</option>';
							echo '<option value="'.$five.'">'.$five.'</option>';
						?>
					</select>
				</div>

				<div style="float: right;" class="lineHeight" class="form-group"> 	
					<input type="button" class="add-row btn btn-primary" value="Add"/>
				</div>		
				<div class="bs-container">
					<table class="table order-list" id="invoice-item-table">
						<thead class="thead-gray">
							<tr>
								<th width="5%">No</th>
								<th width="70%">Food Item Name</th>
								<th width="5%">U.Price</th>
								<th width="5%">Qty</th>
								<th width="10%">Total</th>
								<th width="5%">Remove</th>
							</tr>
						</thead>
						<tbody>
							<tr>

							</tr>				
						</tbody>
					</table>				
						 <div>
							 Payment Type:
							 <select name="payment_type" id="payment_type" style="width:200px; height:25px;"> 
								<option value="Cash">Cash</option>
								<option value="Credit">Credit</option>
							 </select>							  
							 <span style="margin-left: 87px;"> Sub Total: <input type="text" name="grand_total" id="grand_total" readonly/></span>					
						</div>	
						
						<div class="bill_discount">
												
							 <span>  Word: 	<input type ="text" name="grand_total_word" id="grand_total_word" style="width: 345px; margin-top:5px;" required /></span>
							Discount:
							<span> <input type="text" name="discount" id="discount" onkeyup="getPrice()" placeholder="%"/></span>
						</div>
						<br/>
						<br/>
						<div class="bill_final_total">
							Grand Total:
							<span> <input type="text" name="final_total" id="final_total" onfocus="grand_total_word.innerHTML=convert_number_to_word(this.value)" readonly /></span>
						
						</div>
				</div>		
			</div>
		
			<div class="modal-footer">
			  <input type="hidden" name="total_item" id="total_item" value="1"/>
			  <input type="submit" name="save" value="Save" class="btn btn-success">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
      </form>
      </div>
      
    </div>
  </div>
<!-- End Add Billing Modal HTML --> 
<?php include("footer.php");?>	
</div>
</body>
<!--Start JavaSript Code for Multiple Item from Select Taq-->
<script type="text/javascript">
    $(document).ready(function(){
		var count = 0;
        $(".add-row").click(function(){
            count++;
			$('#total_item').val(count);
            var itemName = $("#itemName").val();
            var foodprice = $("#itemName").find(':selected').data("foodprice");
            var itemQuantity = $("#itemQuantity").val();
			var total = foodprice*itemQuantity; 
            var markup = '<tr><td>'+count+'</td><td><input type = "text" name = "item_name[]" id = "item_name'+count+'" value = "'+itemName+'" style="width:390px;border:none;"readonly></td><td><input type = "text" name="food_price[]" id = "food_price'+count+'" value = '+foodprice+' style="width:55px;border:none;"readonly></td><td><input type="text" name = "item_quantity[]" id = "item_quantity'+count+'" value="'+itemQuantity+'" style="border:none;width:30px;" readonly></td><td><input type="text" name = "total[]" id = "total'+count+'" value='+total+' name="total" class="total" style="width:60px;border:none;" readonly></td><td><input style ="padding:0px 5px"; type="submit" value ="Remove" name="remove" class="remove btn btn-danger btn-xs delete"/></td></tr>';
            $("#invoice-item-table").append(markup);
			
		var grand_total = 0;
        $('.total').each(function() {
            grand_total += parseFloat($(this).val());            
        }); 
       $('#grand_total').val(grand_total.toFixed(2));
	   
        });
        $(document).on('click', '.remove', function(){
        	thisRow = $(this).closest('tr');
        	var total = parseFloat(thisRow.find('.total').val());
        	var gt = parseFloat($('#grand_total').val());
        	$('#grand_total').val(gt-total);
        	thisRow.remove();	
        });
		getPrice = function() {
            var sub_total = Number(document.getElementById("grand_total").value);
            var discount_percentage = Number(document.getElementById("discount").value) / 100;
            var final_total = sub_total - (sub_total * discount_percentage)
            //var vat_in_amount = final_total * 0.15;
            // var final_total_after_vat = final_total + vat_in_amout;
            document.getElementById("final_total").value = final_total.toFixed(2);
        }
    });    
</script>
<!--End JavaSript Code for Multiple Item from Select Taq-->
<!--Start Invoice Button Action-->
<?php
	 if(isset($_POST["save"])){

		// Start Invoice Number
		$length = 6;
		$id = '';
		$acronym="";// add acronym
		for ($i=0;$i<$length;$i++){
		$id .= rand(1, 9);
		}
		$invoice_number = $acronym.$id;
		// End Invoice Number
		
		// Start Date and Time in PHP 
		date_default_timezone_set('Asia/Dhaka');
		$currentDateTime=date('m/d/Y H:i:s');
		$date_time = date("h:i A. d-M-y", strtotime($currentDateTime));
		// End Date and Time in PHP 
		
		 $query = "INSERT INTO `customers`(`invoice_number`, `customer_name`, `mobile_number`, `address`, `date_time`, `grand_total`,`discount`,`final_total`,`grand_total_word`,`payment_type`,`current_date`) VALUES 
		 (:invoice_number,:customer_name,:mobile_number,:address,:date_time,:grand_total,:discount,:final_total,:grand_total_word,:payment_type,CURRENT_DATE())";
		$statement = $connect->prepare($query); 
		$statement->execute(
         array(
          ':invoice_number'   =>  $invoice_number,
          ':customer_name'    =>  trim($_POST["customer_name"]),
          ':mobile_number'    =>  trim($_POST["mobile_number"]),
          ':address'      	  =>  trim($_POST["address"]),
          ':date_time'        =>  $date_time,
          ':grand_total'      =>  trim($_POST["grand_total"]),
          ':discount'         =>  trim($_POST["discount"]),
          ':final_total'      =>  trim($_POST["final_total"]),
          ':grand_total_word' =>  trim($_POST["grand_total_word"]),
          ':payment_type' =>  trim($_POST["payment_type"])
      )
    );
	    // Fetch last insert ID
        $statement = $connect->query("SELECT LAST_INSERT_ID()");
        $customer_id = $statement->fetchColumn();	
		
		      for($count=0; $count<$_POST["total_item"]; $count++){
				 $query = "INSERT INTO `food`(`customer_id`, `food_name`, `unit_price`, `quantity`,`total`) VALUES 
				(:customer_id,:item_name,:food_price,:item_quantity,:total)"; 
				$statement = $connect->prepare($query);
				$statement->execute(
				array(
				':customer_id'   	=>  $customer_id,
				':item_name'        =>  trim($_POST["item_name"][$count]),
				':food_price'       =>  trim($_POST["food_price"][$count]),
				':item_quantity'    =>  trim($_POST["item_quantity"][$count]),
				':total'    		=>  trim($_POST["total"][$count])								
				 )
				);
				unset($statement);
			  }	
			unset($connect);
			
}


?>
</html>