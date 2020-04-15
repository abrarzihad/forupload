<?php

include('utube.php');

if (isset($_POST['submit'])) {
  
  unset($_SESSION["user_id"]);
  header('Location: Loginform.php');
  die();

}


?>