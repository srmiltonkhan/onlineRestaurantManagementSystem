
		<?php include("databaseConnection.php");?>
  <!-- Start Contact PhP Code -->
  <?php
		
/* 			if(isset($_POST['submit'])){
           //$username = mysqli_real_escape_string($conn,$_POST['username']);
           $email = mysqli_real_escape_string($conn,$_POST['email']);
           //$subject = mysqli_real_escape_string($conn,$_POST['subject']);
           $message = mysqli_real_escape_string($conn,$_POST['message']);
		   
		   
		   date_default_timezone_set('Asia/Dhaka');
		   $currentDateTime=date('m/d/Y H:i:s');
		   $newDateTime = date('h:i A  d-M-y', strtotime($currentDateTime));

           if($username == '' || $email == '' || $subject == '' || $message == ''){
               $error = "Field Must not be empty!";
           }else{
              
            $insertContactInfo = "INSERT INTO `contactinfo`(`username`, `useremail`, `subject`, `message`,`DateTime`) VALUES ('$username','$email','$subject','$message','$newDateTime')";
			
			if ($conn->query($insertContactInfo) === TRUE) {
				echo '<script type="text/javascript">alert("Message Send successfully!");</script>';		
			} else {
				
			}
           }
       }  */
	?>
<?php 
/*  if(isset($POST('submit')){
	 $to = "khanrestaurant@gmail.com";
	 $email = $POST['email'];
	 $subject = $POST['subject'];
	 $message = $POST['message'];
	 if(mail($to, $subject, $message)){
		echo 'Your mail has been sent successfully.';
	} else{
		echo 'Unable to send email. Please try again.';
	}
 } */
	
?>
  <!-- End Contact PhP Code -->

<!-- Start Contact section -->
  
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form" action="" method="post">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Type Your Message"></textarea>
                      </div>                      
                      <button type="submit" name="submit" class="mu-send-btn">Send Message</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>House – 14 </p>
					  <p>Road – 1</p>
					  <p>Sector – 3</p>
					  <p>Jasimuddin Avenue, Uttara</p>
                      <address>
                        <p><i class="fa fa-phone"></i> +8801621000361</p>
                        <p><i class="fa fa-envelope-o"></i>contact@khanrestaurant.com</p>
                        <p><i class="fa fa-map-marker"></i>Uttara, Dhaka, Bangladesh</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
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
  <!-- End Contact section -->