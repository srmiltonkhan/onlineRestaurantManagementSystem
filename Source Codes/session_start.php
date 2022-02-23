<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminLogin.php");
    exit;
}
/*  if(isset($_SESSION["username"]))  
      {  
           if((time() - $_SESSION['last_login_timestamp']) > 60) // 900 = 15 * 60  
           {  
                header("location:logout.php");  
           }  
           else  
           {  
               
               
           }  
      }  
      else  
      {  
           header('location:adminLogin.php');  
      }  */ 
      ?>  
