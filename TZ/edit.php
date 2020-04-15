<?php
include("utube.php");
if(!(isset($_SESSION['user_id']) )){

 
  header('Location: Loginform.php');
   die();
}




$university             = '';
$hscbatch               = '';
$department             = '';
$question               = '';
$answer                 = '';
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

  if($_SESSION['user_id'] != $qUser_id && !($_SESSION['user_type'] =='Alumni' && $_SESSION['department'] == $department && $_SESSION['university'] == $university)){
    echo "you don't have permission..";
    die();

  }

}

if (isset($_POST['update'])) {
  
    $id                = $_GET['id'];
    $university        = $_POST['university'];
    $hscbatch          = $_POST['hscbatch'];
    $department        = $_POST['department'];
    $question          = $_POST['question'];
    $answer            = $_POST['answer'];

  $query        = "UPDATE `qa` set university = '$university', hscbatch = '$hscbatch', department = '$department', question = '$question', answer = '$answer' WHERE id = $id";
  $result       = mysqli_query($conn, $query);
    
  if(!$result) {
    die("User Updated Failed. Please Try Again." . $result->error);
  }

  $_SESSION['message']        = 'User Updated Successfully';
  $_SESSION['message_type']   = 'warning';
  header('Location: aqa.php');

  }


 
?>

<?php include('header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">

        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

          <div class="form-group">
            <input type="text" name="university" class="form-control" placeholder="university name" value="<?php echo $university; ?>" autofocus required>
          </div>

          <div class="form-group">
            <input type="int" name="hscbatch" class="form-control" placeholder="hscbatch" value="<?php echo $hscbatch; ?>" required>
          </div>
          
          <div class="form-group">
            <textarea name="department" class="form-control" placeholder="department"><?php echo $department;?></textarea>
          </div>
           <div class="form-group">
            <input type="text" name="question" class="form-control" placeholder="question" value="<?php echo $question; ?>" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="answer" class="form-control" placeholder="answer" value="<?php echo $answer; ?>" autofocus>
          </div>


          <button class="btn-success" name="update">Update User</button>

        </form>

      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

