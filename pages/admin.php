<!DOCTYPE html>
<html>
<body>
<?php
  include '../phpScripts/DbServices.php';
  session_start();
  if (!isset($_SESSION['name'])) {
    header("Location: login.php");
  }
?>
<h2>Διαχειριστική οθόνη</h2>
<h3>Χρήστης : <?php echo $_SESSION['name'] ?></h3>
<a href="logout.php">Αποσύνδεση</a>
</body>
</html> 

