
<?php

  include('utube.php');

  if (isset($_POST['submit'])) {
    
    $university        = $_POST['university'];
    $department        = $_POST['department'];
    $hscbatch          = $_POST['hscbatch'];
    $question          = $_POST['question'];
    $answer            = $_POST['answer'];
    $user_id           = $_POST['user_id'];
    $has_warning       = 0;

    echo $question;

    //DB Insert
      /* disable autocommit */
      $conn->autocommit(FALSE);
      
      if($has_warning != 1) {

        $query          = "INSERT INTO `qa`(university,department,hscbatch,question,answer, user_id) VALUES ('$university','$department','$hscbatch','$question','$answer', '$user_id')";
        $result         = mysqli_query($conn, $query);
        
        if(!$result) {
          
          /* Rollback */
          $conn->rollback();

          die("User Added Failed. Please Try Again." . $result->error);
        }

      }

      /* commit insert */
      $conn->commit();

      $message = "QA Successful";

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

    header('Location: aqa.php');

  }

?>
