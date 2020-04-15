
<?php

include('utube.php');

if (isset($_POST['save_user'])) {
  
  $type              = $_POST['type'];
  $username          = $_POST['username'];
  $password          = $_POST['password'];
  $email             = $_POST['email'];
  $university        = $_POST['university'];
  $department        = $_POST['department'];
  $hscbatch          = $_POST['hscbatch'];
  $has_warning       = 0;

  


  //DB Insert
    /* disable autocommit */
    $conn->autocommit(FALSE);
    
    if($has_warning != 1) {
 
#file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
 
      $password = md5($password);


      $query          = "INSERT INTO `regtable`(type,username,password,email,university,department,hscbatch,image) VALUES ('$type','$username','$password','$email','$university','$department','$hscbatch','$pname')";
      $result         = mysqli_query($conn, $query);
      
      if(!$result) {
        
        /* Rollback */
        $conn->rollback();

      die("User Added Failed. Please Try Again." . $result->error);
      }

    }

    /* commit insert */
    $conn->commit();

    $message = "User Added Successfully.";

    redirect_form($message, 'success');
  //DB Insert Ends

}

//Form Data Sanitize
function form_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function redirect_form($message, $type){

  $_SESSION['message']          = $message;
  $_SESSION['message_type']     = $type;

  header('Location: Loginform.php');

}

?>
