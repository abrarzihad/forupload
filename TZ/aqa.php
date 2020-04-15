<?php

include('utube.php');

 //echo $_SESSION['user_id'];
 //die();

if(!(isset($_SESSION['user_id']))){
  header('Location: Loginform.php');
}

?>

<?php include('header.php'); ?>

<!DOCTYPE html>
<html>

<head>
  <title>Career Consultancy</title>
  <link rel="stylesheet" href="aaq style.css">
</head>

<body>
  <fieldset>
   <legend><div class="headline"><h1>¿? Ask a question ¿? (Logged In as <?php echo $_SESSION['user_name'] ?>)</h1></div></legend>

   <form action="logout.php" method="post">
      <input type="submit" name="submit" value="Logout">
   </form>


   <!-- MESSAGES -->
   <?php if (isset($_SESSION['message'])) {?>
    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['message']?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php 
      //session_unset(); 
      unset($_SESSION["message"]);
      } 
    ?>

 <?php  
 if (isset($_SESSION['user_type']) && ($_SESSION['user_type']=='Student')) {?>
    <div>
      <form action="qa.php" method="post">
        <input type="hidden" value="<?php echo $_SESSION['user_id']; ?>" name="user_id">
        <label>University:</label>
        <select name="university">
         <option value="buet" selected>BUET</option>
         <option value="kuet">KUET</option>
         <option value="ruet">RUET</option>
         <option value="cuet">CUET</option>
         <option value="sust">SUST</option>
         <option value="iut">IUT</option>
         <option value="du">DU</option>
         <option value="ku">KU</option>
         <option value="ru">RU</option>
         <option value="cu">CU</option>
       </select> 
       <label>Depratment:</label>
       <select name="department">
         <option value="math">MATHEMATICS</option>
         <option value="stat">STATISTICS</option>
         <option value="chem">CHEMISTRY</option>
         <option value="phy">PHYSICS</option>
         <option value="cse" selected>CSE</option>
         <option value="eee">EEE</option>
         <option value="me">ME</option>
         <option value="ce">CE</option>
         <option value="ipe">IPE</option>
         <option value="mme">MME</option>	
       </select>
       <br><br>
       <label>Batch(HSC):</label>
       <input type="number" name="hscbatch">
       <br><br>
       <label>Question:</label><br><br>
       <textarea placeholder="Ask your question" name="question"></textarea>
       <br><br>
       <input type="submit" name="submit" value="Submit">
       <input type="reset">

     </form>
   </div>
 <?php } ?>
 </fieldset>
 <fieldset>
  <legend>
    <div class="headline"><h1>=See Answers=</h1></div>
  </legend>
  <div>
    <label>Answer:</label>
    <br><br>
    <table class="table table-bordered" border="10">
      <thead>
        <tr>
          <th>University</th>
          <th>HSCbatch</th>
          <th>Department</th>
          <th>Question</th>
          <th>Answer</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>

        <?php
        $user_id      = $_SESSION['user_id'];

        $single_user        = "SELECT * FROM `regtable` WHERE `id`=". $user_id;
        $result_single_user = mysqli_query($conn, $single_user);

        while($single_user = mysqli_fetch_assoc($result_single_user)) {
          $single_user_arr = $single_user;
        }

        if($single_user_arr['type'] == 'Student'){ 
          $query        = "SELECT * FROM `qa` WHERE `user_id` = " . $user_id;
        }else{
          $query        = "SELECT * FROM `qa` WHERE `university` = '" . $single_user_arr['university'] . "' AND `department` = '" . $single_user_arr['department'] . "'";

          // echo $query;
          // die();
        }

        $result_users   = mysqli_query($conn, $query);

        if(mysqli_num_rows($result_users) > 0) {    

          while($row = mysqli_fetch_assoc($result_users)) { ?>

            <tr>
              <td><?php echo $row['university']; ?></td>
              <td><?php echo $row['hscbatch']; ?></td>
              <td><?php echo $row['department']; ?></td>
              <td><?php echo $row['question']; ?></td>
              <td><?php echo $row['answer']; ?></td>
              <td>

                <?php if($single_user_arr['type'] == 'Alumni'){ ?>
                  <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                  </a>
                <?php } ?>

                <?php if($single_user_arr['type'] == 'Student'){ ?>
                  <a href="delete_user.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                  <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                  </a>
                <?php } ?>

              </td>
            </tr>

            <?php

          }

        }else { ?>

          <tr>
            <td colspan="4" style="text-align: center; font-weight: bold;">No User Exists Yet</td>
          </tr>

          <?php 
        } 
        ?>

      </tbody>
    </table>
  </div>
</fieldset>
</body>

</html>