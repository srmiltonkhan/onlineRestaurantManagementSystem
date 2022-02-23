  <?php include("databaseConnection.php");?>
 
 <?php 
	if(isset($_POST['submit'])){
      $fullName = mysqli_real_escape_string($conn,$_POST['fullName']);
      $PhoneNumber = mysqli_real_escape_string($conn,$_POST['PhoneNumber']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $howPerson = mysqli_real_escape_string($conn,$_POST['howPerson']);
      $address = mysqli_real_escape_string($conn,$_POST['address']);
      $message = mysqli_real_escape_string($conn,$_POST['message']);
	  
		date_default_timezone_set('Asia/Dhaka');
		$currentDateTime=date('m/d/Y H:i:s');
		$newDateTime = date('h:i A  d-M-y', strtotime($currentDateTime));
		
		
		// AlphaNumeric Unique Reservation ID Start Section
		$length = 6;
		$id = '';
		$empAcronym="OR";// add acronym
		for ($i=0;$i<$length;$i++){
			$id .= rand(1, 9);
		}
		$reservationId = $empAcronym.$id;
		// AlphaNumeric Unique Reservation ID Start Section
		
		
	  if($fullName==='' || $PhoneNumber==='' ){
		 $error = "Field Must not be empty!";
	  }else{
		 $insertQuery = "INSERT INTO `onlineorder`(`alphaNumericOrderID`,`fullname`, `mobile`, `email`, `howmany`, `address`, `date`, `message`) 
		 VALUES ('$reservationId','$fullName','$PhoneNumber','$email','$howPerson','$address','$newDateTime','$message')";
		 if ($conn->query($insertQuery) === TRUE) {
				echo '<script type="text/javascript">alert("Order Send successfully!");</script>';
			}
	  }
	}
    $conn->close();
 ?>
 
 
  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Make A</span>
              <h2>Reservation</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
              <form class="mu-reservation-form" action="" method = "post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">                       
                      <input type="text" class="form-control" placeholder="Full Name" name="fullName">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Mobile Number" name="PhoneNumber">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" name="howPerson">
                        <option value="0">How Many?</option>
                        <option value="1 Person">1 Person</option>
                        <option value="2 Persons">2 People</option>
                        <option value="3 Persons">3 People</option>
                        <option value="4 Persons">4 People</option>
                        <option value="5 Persons">5 People</option>
                        <option value="6 Persons">6 People</option>
                        <option value="7 Persons">7 People</option>
                        <option value="8 Persons">8 People</option>
                        <option value="9 Persons">9 People</option>
                        <option value="10 Persons">10 People</option>
                      </select>                      
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Address" name="address">                      
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" cols="30" rows="10" placeholder="Your Message" name="message" ></textarea>
                    </div>
                  </div>
                  <button type="submit" name ="submit" class="mu-readmore-btn">Make Reservation</button>
                </div>
              </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->
