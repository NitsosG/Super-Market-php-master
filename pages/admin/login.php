<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<h2>Σύνδεση χρήστη</h2>
<div class="container-fluid">
<form method="post">
  <div class="row">
    <div class="col-sm-4">
      <?php 
        inputFormField("Όνομα Χρήστη","user_name","text","true");
        inputFormField("Κωδικός Χρήστη","password","text","true");
      ?>
      <input type="submit" value="Σύνδεση" class="btn btn-primary"></input>
    </div>
    <?php
    if(count($_POST)>0){
      if(authenticateUser($_POST['user_name'], $_POST['password']) == true){
        $_SESSION['name'] = $_POST['user_name'];
        header("Location: insertProduct.php");
      }else{
       echo '<script> alert("Λάθος όνομα/κωδικός"); </script>';
      }
    } 
    ?>
  </div>
  </form>
</div>

</body>
</html> 