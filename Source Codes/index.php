<?php
include("configDatabase.php");
include("dbConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Khan Restaurant || Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/restaurantLogo.gif" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">    
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
  </head>
  
  <body>  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader cenerimg">
      <img src="assets/img/preloader.gif" alt=" loader img">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                                        
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#mu-slider">HOME</a></li>         
            <li><a href="#mu-restaurant-menu">MENU</a></li>                       
            <li><a href="#mu-reservation">RESERVATION</a></li>                       
            <li><a href="#mu-gallery">GALLERY</a></li>
            <li><a href="#mu-chef">OUR TEAM</a></li>
            <li><a href="#mu-latest-news">BLOG</a></li> 
            <li><a href="#mu-contact">CONTACT</a></li>
			<li><a href="#mu-about-us">ABOUT US</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html"><img  src = "assets/img/icon/userIcon.png" alt = "userIcon" data-toggle="tooltip" title = "Login"  style = "width: 18px; margin-bottom:10px;"> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="#loginForm" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                <li><a href="#add_data_Modal" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Create Account</a></li>                           
              </ul>
            </li>			
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 
<!-- Start Modal Login HTML -->
<div id="loginForm" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="text" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg clientBtn">Sign In</button>
					</div>
					<p class="hint-text"><a href="#">Forgot Password?</a></p>
				</form>
			</div>
			<div class="modal-footer">Don't have an account? <a href="#">Create one</a></div>
		</div>
	</div>
</div> 
<!-- End Modal Login HTML --> 

<!-- Start Registration Modal HTML -->
	<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog modal_icon"> 
           <div class="modal-content">  
                <div class="modal-header registrationHeader">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Client Registration</h4>  
                </div>  
				 <span style= "color: green;"id="message"></span>
                <div class="modal-body">  
                     <form method="post" id="insertClientForm" action="">  
                        <div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" name="name" id="name" placeholder="Client Name" class="form-control" />
						</div>
						<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>
						<select name="gender" id="gender" class="form-control" required>  
							<option value="Male">Choose Gender</option>  
							<option value="Male">Male</option>  
							<option value="Female">Female</option>  
						</select> 
						</div> 
						<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-phone"></i></span>
						<input type="text" name="mobile" id="mobile" placeholder="Mobile" class="form-control" />  
						</div> 
						<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="email" name="clientEmail" id="clientEmail" placeholder="Email" class="form-control" />  
						</div> 
						<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
						 <textarea name="clientAddress" id="clientAddress" placeholder="Address" class="form-control"></textarea>  
						</div> 
						<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="text" name="password" id="password" placeholder="Password" class="form-control" />  
                        </div>
						<div class="input-group lineHeight">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="text" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" class="form-control" />  
                        </div>  
                          <input type="hidden" name="client_id" id="client_id"/>  
                          <input type="submit" name="insert" id="insert" value="Save" class="btn btn-success clientBtn" class="form-control"/>  
                     </form>  
                </div>  
                <div class="modal-footer registrationFooter">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
             </div>  
      </div> 
	 </div>
<!-- End Registration Modal HTML -->    
<!-- Start Registration Modal AJAX for Inserting Data -->
        <script>
            $(document).ready(function() {
                <!--#insertClientForm grabs the form id-->
                $("#insertClientForm").submit(function(e) {
                    e.preventDefault();
                    $.ajax( {
                        <!--insert.php calls the PHP file-->
                        url: "insert.php",
                        method: "post",
                        data: $("form").serialize(),
                        dataType: "text",
                        success: function(strMessage) {
                            $("#message").text(strMessage);
                            $("#insertClientForm")[0].reset();
                        }
                    });
                });
            });
        </script>    
<!-- End Registration Modal HTML -->    
<?php  
	$db =  new Database();
	$query = "SELECT * FROM slider WHERE sliderId='1'";  
	$result = mysqli_query($db->link,$query);
?> 
  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 
      <!-- Top slider -->
      <div class="mu-top-slider">
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
		<?php foreach($result as $key => $row){?>
		  <?php echo "<img src = ".$row['sliderPicture']." height='487px'>"; ?> 
		<?php }?>
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Welcome</span>
            <h2 class="mu-slider-title">To The Khan Restaurant</h2>
            <p>Healthy Food Healthy Life</p>           

          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->  
		<?php  
			$query = "SELECT * FROM slider WHERE sliderId='2'";  
			$result = mysqli_query($db->link,$query);
		?> 		
         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
		<?php foreach($result as $key=> $row){?>
          <?php echo "<img src = ".$row['sliderPicture']." height='487px'>"; ?>
		<?php } ?>
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">The Real</span>
            <h2 class="mu-slider-title">GREEN FOODS</h2>
			<p>Healthy Food Healthy Life</p> 
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 
		<?php  
			$query = "SELECT * FROM slider WHERE sliderId='3'";  
			$result = mysqli_query($db->link,$query);
		?> 		
         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
		<?php foreach($result as $key=> $row){?>
          <?php echo "<img src = ".$row['sliderPicture']." height='487px'>"; ?>
		<?php } ?>
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Delicious</span>
            <h2 class="mu-slider-title">SPICY MASALAS</h2>
           <p>Healthy Food Healthy Life</p> 
           
          </div>
		<?php  
			$query = "SELECT * FROM slider WHERE sliderId='4'";  
			$result = mysqli_query($db->link,$query);
		?> 			  
          <!-- / Top slider content -->
        </div>
		<div class="mu-top-slider-single">
		<?php foreach($result as $key=> $row){?>
          <?php echo "<img src = ".$row['sliderPicture']." height='487px'>"; ?>
		<?php } ?>
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Restaurant</span>
            <h2 class="mu-slider-title">Comfortable Place</h2>
           <p>Healthy Food Healthy Life</p> 
           
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">
            <ul class="mu-counter-nav">
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Fresh</span>
                  <h3><span class="counter">55</span><sup>+</sup></h3>
                  <p>Breakfast Items</p>
                </div>
              </li>
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Delicious</span>
                  <h3><span class="counter">130</span><sup>+</sup></h3>
                  <p>Lunch Items</p>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Hot</span>
                   <h3><span class="counter">35</span><sup>+</sup></h3>
                  <p>Coffee Items</p>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Satisfied</span>
                  <h3><span class="counter">3562</span><sup>+</sup></h3>
                  <p>Customers</p>
                </div>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                <li><a href="#meals" data-toggle="tab">Meals</a></li>
                <li><a href="#curryItems" data-toggle="tab">Curry Items</a></li>
                <li><a href="#snacks" data-toggle="tab">Snacks</a></li>
                <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
                <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">
					 <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bdsnacks ORDER BY BDSnacksId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Bangladeshi </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>
									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
					  
					  					 <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM chsnoodles ORDER BY chsNoodlesId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Chinese </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
					  
					  					 <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM jpnoodles ORDER BY jpNoodlesId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Japanese </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>

                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bdrice_biriani ORDER BY bdRiceBirianiId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Bangladeshi </h3>
						  <h4  class="media-heading subMenuHeader" >Rice/Biriani </h4>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
					    <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM chsrice ORDER BY chsRiceId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Chinese </h3>
						  <h4  class="media-heading subMenuHeader" >Rice </h4>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/chineseRice.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
                   <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM jprice ORDER BY jpRiceId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Japanese </h3>
						  <h4  class="media-heading subMenuHeader" >Rice </h4>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>

                   </div>
                 </div>
                </div>
				<div class="tab-pane fade " id="curryItems">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bdfish ORDER BY bdFishId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Bangladeshi </h3>
						  <h4  class="media-heading subMenuHeader">Fish</h4>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/bdfish.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
							
					<!--Start Sub Item-->
						    <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bdmeat ORDER BY bdMeatId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						<h4  class="media-heading subMenuHeader">Meat</h4>
						<div class="mu-tab-content-left">
					     <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/bdfish.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
						 <?php } ?>
							  </ul>   
						</div>
					<!--End Sub Item-->
					<!--Start Sub Item-->
						    <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bdvegetable ORDER BY bdVegetableId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						<h4  class="media-heading subMenuHeader">Vegetable</h4>
						<div class="mu-tab-content-left">
					     <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/bdfish.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
						 <?php } ?>
							  </ul>   
						</div>
					<!--End Sub Item-->
					
					<!--Start Sub Item-->
						    <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bdmashed ORDER BY bdmashedId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						<h4  class="media-heading subMenuHeader">Mashed</h4>
						<div class="mu-tab-content-left">
					     <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/bdfish.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
						 <?php } ?>
							  </ul>   
						</div>
					<!--End Sub Item-->
                      </div>
					    <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM chssalad ORDER BY chSaladId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Chinese </h3>
						  <h4  class="media-heading subMenuHeader" >Salad </h4>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/CHSsalad.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
					<!--Start Sub Item-->
						    <!--Start PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM chsappetizer ORDER BY chAppetizerId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End PHP Code-->
						<h4  class="media-heading subMenuHeader">Appetizer</h4>
						<div class="mu-tab-content-left">
					     <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/bdfish.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
						 <?php } ?>
							  </ul>   
						</div>
					<!--End Sub Item-->
					
					<!--Start Sub Item-->
						    <!--Start PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM chssoup ORDER BY chSoupId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End PHP Code-->
						<h4  class="media-heading subMenuHeader">soup</h4>
						<div class="mu-tab-content-left">
					     <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/bdfish.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
						 <?php } ?>
							  </ul>   
						</div>
					<!--End Sub Item-->
                      </div>
					    <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM jsfishseafood ORDER BY JsfishseafoodId ASC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Japanese </h3>
						  <h4  class="media-heading subMenuHeader" >Fish & Seafood Recipes </h4>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>									
                      </div>

                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="snacks">
                  <div class="mu-tab-content-area">
                    <div class="row">
					<div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM BDSnacks ORDER BY BDSnacksId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Bangladeshi </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/sheek-kabab.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
					  
					    <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM chsnoodles ORDER BY chsNoodlesId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Chinese </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/coldNoodles.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
					     <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM jpnoodles ORDER BY jpNoodlesId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Japanese </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
                    </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bddessert ORDER BY bdDessertId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Bangladeshi </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
					   <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bddessert ORDER BY bdDessertId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Chinese </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
					  
					    <div class="col-md-4">
						  <!--Start BD Desserts PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bddessert ORDER BY bdDessertId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Desserts PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Japanese </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="drinks">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-4">
						  <!--Start BD Drinks PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bddrink ORDER BY bdDrinkId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Drinks PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Bangladeshi </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-9.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
                      <div class="col-md-4">
						  <!--Start BD Drinks PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bddrink ORDER BY bdDrinkId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Drinks PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Chinese </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/item-10.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
					  
                      <div class="col-md-4">
						  <!--Start BD Drinks PHP Code-->
							<?php 
								$db = new Database(); // call database class from 'dbConnection.php' file with new key word declare 
								$query = "SELECT * FROM bddrink ORDER BY bdDrinkId DESC";
								$read = $db->select($query); // query function store in '$read' variable
							?>
						  <!--End BD Drinks PHP Code-->
						  
						  <h3  class="media-heading menuHeader" >Japanese </h3>
							<div class="mu-tab-content-left">
							  <ul class="mu-menu-item-nav">
						<?php 
							while( $row = $read->fetch_assoc())
							{ ?>
								<li>
								  <div class="media">
									<div class="media-left">
									  <a href="#">
										<img class="media-object" src="assets/img/menu/japaneseDrinks.jpg" alt="img">
									  </a>
									</div>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#"><?php echo $row['foodItemName']; ?></a></h4>
									  <span class="mu-menu-price"><?php echo $row['foodItemPrice']; ?> TK</span>

									 <span style="float:right";><input type="checkbox"/></span>
									</div>
								  </div>
								</li>
								
						 <?php   } ?>
							  </ul>   
							</div>
                      </div>
                   </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->
	<?php include("reservation.php");?>
  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Gallery</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-gallery-content">
              <div class="mu-gallery-top">
                <!-- Start gallery menu -->
                <ul>
                  <li class="filter active" data-filter="all">ALL</li>
                  <li class="filter" data-filter=".food">FOOD</li>
                  <li class="filter" data-filter=".drink">DRINK</li>
                  <li class="filter" data-filter=".restaurant">RESTAURANT</li>
                  <li class="filter" data-filter=".dinner">DINNER</li>
                  <li class="filter" data-filter=".dessert">DESSERT</li>
                </ul>
              </div>
              <!-- Start gallery image -->
              <div class="mu-gallery-body" id="mixit-container">
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix food">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/1.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/1.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix drink">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/2.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/2.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix restaurant">                  
                  <div class="mu-single-gallery-item">
                   <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/3.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/3.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dinner">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/4.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/4.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dinner">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/5.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/5.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>   
                  </div>
                </div>               
                <!-- End single gallery image -->               
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix food">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/6.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/6.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix drink">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/7.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/7.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix restaurant">                  
                  <div class="mu-single-gallery-item">
                   <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/8.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/8.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dessert">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/9.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/9.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->                         
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">
              <div class="mu-title">
                <span class="mu-subtitle">Testimonials</span>
                <h2>What Customers Say</h2>
                <i class="fa fa-spoon"></i>              
                <span class="mu-title-bar"></span>
              </div>
              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Today’s restaurant owners have much more on their plates than preparing and serving tasty food. Social responsibility to do the right thing for employees, the community and the natural environment is an important aspect of your business. </p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Abir Hossain</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Food establishments should be familiar with their suppliers. Again, financial considerations can tempt food establishment owners to purchase the most inexpensive ingredients with no questions asked. </p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Rabbi Hossain</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Restaurants face many issues when it comes to the ethics of their company. The term “ethics” branches across many factors of the restaurant industry.</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- Asif </p>                      
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->

  <!-- Start Subscription section -->
  <section id="mu-subscription">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-subscription-area">
            <form class="mu-subscription-form">
              <input type="text" placeholder="Type Your Email Address">
              <button class="mu-readmore-btn" type="Submit">SUBSCRIBE</button>
            </form>            
          </div>
        </div>
      </div>
    </div>    
  </section>
  <!-- End Subscription section -->

  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">
            <div class="mu-title">
              <span class="mu-subtitle">Our Professionals</span>
              <h2>MASTER CHEFS</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-6.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Simon Jonson</h4>
                      <span>Head Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Kelly Wenzel</h4>
                      <span>Pizza Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Greg Hong</h4>
                      <span>Grill Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Marty Fukuda</h4>
                      <span>Burger Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-6.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Simon Jonson</h4>
                      <span>Head Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Kelly Wenzel</h4>
                      <span>Pizza Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Greg Hong</h4>
                      <span>Grill Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Marty Fukuda</h4>
                      <span>Burger Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>                      
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->
<!--Fetch Data from Database-->
<?php  

	$query = "SELECT * FROM latestnews WHERE latestNewsId=1";  
	$result = mysqli_query($db->link,$query);
	$row = $result->fetch_assoc();
?> 
<!--End Fetch Data from Database-->
  
  
  <!-- Start Latest News -->
  <section id="mu-latest-news">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-latest-news-area">
            <div class="mu-title">
              <span class="mu-subtitle">Latest News</span>
              <h2>FROM OUR BLOG</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-latest-news-content">
              <div class="row">
                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
				    <section style="height:85px;">
					 
						<h3><?php echo $row['NewsTitle'];?></h3>
					</section>
                    <figure class="mu-news-img">
                      <a href="#"><img src="assets/img/news/1.jpg" alt="img"></a>                      
                    </figure>
                    <div class="mu-news-single-content">                      
                      <ul class="mu-meta-nav">
                        <li>By Manager</li>
                        <li>Date: <?php echo $row['NewsDate'];?></li>
                      </ul>
                      <p><?php echo $row['message'];?></p>
                    </div>                   
                  </article>
                </div>
<!--Fetch Data from Database-->
<?php  

	$query = "SELECT * FROM latestnews WHERE latestNewsId=2";  
	$result = mysqli_query($db->link,$query);
	$row = $result->fetch_assoc();
?> 
<!--End Fetch Data from Database-->
                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
				    <section style="height:85px;">
						<h3><?php echo $row['NewsTitle'];?></h3>
					</section>                    
					<figure class="mu-news-img">
                      <a href="#"><img src="assets/img/news/2.jpg" alt="img"></a>                      
                    </figure>
                    <div class="mu-news-single-content">                      
                      <ul class="mu-meta-nav">
                        <li>By Manager</li>
                        <li>Date:<?php echo $row['NewsDate'];?></li>
                      </ul>
                      <p><?php echo $row['message'];?></p>
                    </div>                   
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Latest News -->

	  <?php include("contactInfo.php");?>
  
   <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>ABOUT US</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                 <h2>Welcome to Khan Restaurant</h2>
					<p>As the name suggests "Khan" it's a treasure of Indian Cuisine. 
					Khan is the place for a fine dining experience where the tradition 
					is blended with an imaginative and modern twist. The traditional recipes 
					which holds the heritage of Indian cuisine, won the hearts of thousands food 
					connoisseur. Khan delivers on all five facets of the dining experience - decor, 
					ambience, service, food and value. As the restaurant it self states on its business 
					card, Khan "comes to spice u, to sizzle u; to tantalize u and to honour u", with 
					"Happy eating n a healthy living".</p>
					<p>After successfully serving Indian Cuisine 
					to our valued guests, Khan has now introduced its Khan Mithai with the same
					passion which is the hallmark of our hospitality. Khan Mithai products are made 
					of superior ingredients which are cooked in a very hygienic state of the art kitchen 
					combine to bring you an offering that will delight your taste buds. All wrapped in the 
					distinct traditional warmth of Khan hospitality.                             
                  <ul>
                    <li>Healthy Food Healthy Life</li>
                    <li>Delicious Food & Comfortable Place</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">                
                 <ul class="mu-abtus-slider">                 
                   <li><img src="assets/img/about-us/abtus-img-1.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-2.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-6.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-4.png" alt="img"></li>
                   <li><img src="assets/img/about-us/abtus-img-5.png" alt="img"></li>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Map section -->
  <section id="mu-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14593.601756976288!2d90.37165742760291!3d23.87541508801399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31d0d5083e210c2!2sTakeout+Uttara!5e0!3m2!1sen!2sbd!4v1562261122425!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>Designed by <a rel="nofollow" href="http://srmiltonkhan.unaux.com">Milton Khan</a></p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>