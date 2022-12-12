<?php
  include '../phpScripts/DbServices.php';
  session_start();
  
  if (isset($_SESSION['name'])) {
	    header("Location: admin.php");
  }	  
 
?>

<!DOCTYPE html>
<html>
<body>
<h2>Σύνδεση χρήστη</h2>
<form method="post">
      <legend>Όνομα</legend>
      <input type="text" name="user_name"></input></br>
	  <legend>Κωδικός</legend>
	  <input type="password" name="password"></input>
    </br>
    </br>
    <input type="submit" value="Σύνδεση"></input>
    <?php
    if(count($_POST)>0){
      if(authenticateUser($_POST['user_name'], $_POST['password']) == true){
        $_SESSION['name'] = $_POST['user_name'];
        header("Location: admin.php");
      }else{
        echo "Λάθος όνομα/κωδικός";
      }
    } 
    ?>
</form>

</body>
</html> 