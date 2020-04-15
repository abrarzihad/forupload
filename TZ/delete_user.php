<?php

include("utube.php");
if(!(isset($_SESSION['user_id']) )){

 
  header('Location: Loginform.php');
   die();
}

$qUser_id               = '';

if (isset($_GET['id'])) {

  $id             = $_GET['id'];
  
  $query          = "SELECT * FROM `qa` WHERE id = $id";
  $result         = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) == 1) {

    $row            = mysqli_fetch_array($result);
    
    $university        = $row['university'];
    $hscbatch          = $row['hscbatch'];
    $department        = $row['department'];
    $question          = $row['question'];
    $qUser_id          = $row['user_id'];
   
  }

if($_SESSION['user_id'] != $qUser_id ){
    echo "you don't have permission..";
    die();
}

if(isset($_GET['id'])) {

  $id 			= $_GET['id'];
  
  $query 		= "DELETE FROM `qa` WHERE id = $id";
  $result 		= mysqli_query($conn, $query);

  if(!$result) {
    die("Delete Failed. Please try Again.");
  }

  $_SESSION['message'] 			= 'User Removed Successfully';
  $_SESSION['message_type'] 	= 'danger';
  header('Location: aqa.php');

}
}
?>
