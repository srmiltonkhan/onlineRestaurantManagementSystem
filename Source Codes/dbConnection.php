<?php
class Database{
	public $host   = DB_HOST; //host name in object oriented php
	public $user   = DB_USER; // user name in object oriented php
	public $pass   = DB_PASS; // password in object oriented php
	public $dbname = DB_NAME;  // database name of MySQL 

	    public $link;
        public $foodChooseItem;
        public $msg;
	    public $error;
	    public $errorUPload;
        
	public function __construct(){
		$this->dbConnection();
	}
	// Database Connection Function with Oobject Oriented PHP 
	private function dbConnection(){
		$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		// check connection with message
		if(!$this->link){
			$this->error = "Connection Fail". $this->link->connect_error;
			return false;
		}
		else{
			
		}
	}
 
// Select or Read data
public function select($query){
  $result = $this->link->query($query) or die($this->link->error.__LINE__);
  if($result->num_rows > 0){
    return $result;
  } else {
   return false;
  }
 }
 
// Insert data into foodMenu Table
public function insert($query){
 $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
 if($insert_row){
     header("Location:foodMenuRegistration.php?msg=".urlencode('Data Inserted Successfully'));
     exit();
     
 } else {
     die("Error:(".$this->link->errno.")");
  }
 }
 // Insert Data Into Employee Table
 public function insertEmployee($queryEmployee){
 $insert_row = $this->link->query($queryEmployee) or die($this->link->error.__LINE__);
 if($insert_row){
     header("Location:employeeRegistration.php?msgEmployee=".urlencode('Data Inserted Successfully'));
     exit();
     
 } else {
     die("Error:(".$this->link->errno.")");
  }
 }
 // Insert Data Into Raw Material Table
 public function insertRawMaterial($queryRawMaterial){
 $insert_row = $this->link->query($queryRawMaterial) or die($this->link->error.__LINE__);
 if($insert_row){
     header("Location:rawMaterialRegistration.php?msgRawMaterial=".urlencode('Data Inserted Successfully'));
     exit();
     
 } else {
     die("Error:(".$this->link->errno.")");
  }
 }
 // Insert Data Into Food Reservation Table
 public function insertFoodReservation($queryFoodReservation){
 $insert_row = $this->link->query($queryFoodReservation) or die($this->link->error.__LINE__);
 if($insert_row){
     header("Location:foodReservationRegistration.php?msgFoodReservation=".urlencode('Data Inserted Successfully'));
     exit();
     
 } else {
     die("Error:(".$this->link->errno.")");
  }
 }
	// update data
		public function update($updateQuery){
			$updateData = $this->link->query($updateQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($updateData){
				header("Location:rawMaterial.php?msg=".urlencode('Data Upadated Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		
		// Delete data
		public function delete($deleteQuery){
			$deleteData = $this->link->query($deleteQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($deleteData){
				header("Location:rawMaterial.php? msg=".urlencode('Data Deleted Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		//End of Raw Material
		
		
		// update Food Reservation data
		public function updateFoodReservation($updateQuery){
			$updateData = $this->link->query($updateQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($updateData){
				header("Location:foodReservation.php?msg=".urlencode('Data Upadated Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		// update Food Reservation data
		public function updateLatestNews($updateQuery){
			$updateData = $this->link->query($updateQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($updateData){
				header("Location:latestNews.php?msg=".urlencode('Data Upadated Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}		
		// Delete Food Reservation data
		public function deleteFoodReservation($deleteQuery){
			$deleteData = $this->link->query($deleteQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($deleteData){
				header("Location:foodReservation.php? msg=".urlencode('Data Deleted Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		//End of Food Reservation data
		
		// update Employee data
		public function updateEmployee($updateQuery){
			$updateData = $this->link->query($updateQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($updateData){
				header("Location:employee.php?msg=".urlencode('Data Upadated Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		
		// Delete  Employee data
		public function deleteEmployee($deleteQuery){
			$deleteData = $this->link->query($deleteQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($deleteData){
				header("Location:employee.php? msg=".urlencode('Data Deleted Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		//End of Employee data
		
	
		
		// update Food Menu data
		public function updateFoodMenu($updateQuery){
			$updateData = $this->link->query($updateQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($updateData){
				header("Location:../foodMenu.php?msg=".urlencode('Data Upadated Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		
		// Delete  Food Menu  data
		public function deleteFoodMenu($deleteQuery){
			$deleteData = $this->link->query($deleteQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($deleteData){
				header("Location:../foodMenu.php? msg=".urlencode('Data Deleted Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		//End of Food Menu  data
		
		// update Client data
		public function clientDataUpdate($updateQuery){
			$updateData = $this->link->query($updateQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($updateData){
				header("Location:client.php?msg=".urlencode('Data Upadated Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		// Delete  Food Menu  data
		public function deleteClient($deleteQuery){
			$deleteData = $this->link->query($deleteQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($deleteData){
				header("Location:client.php? msg=".urlencode('Data Deleted Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}
		// update Slider Picture data
		public function updateSlider($updateQuery){
			$updateData = $this->link->query($updateQuery) or die ($this->link->error.__LINE__);
			//check validation
			if($updateData){
				header("Location:updateArticles.php?msg=".urlencode('Data Upadated Successfully.'));
				exit();
			}else {
				die("Error: (".$this->link->errno.")".$this->link->error);
			}
		}		
}
?>				