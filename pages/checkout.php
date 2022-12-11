<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php include '../phpScripts/DbServices.php';?>
<?php include '../phpScripts/FormElements.php';?>
<meta charset="UTF-8">
<!-- <link rel="stylesheet" type="text/css" href="../css/style.css" /> -->
<script src="../js/jquery.min.js"></script>
<script src="../js/main.js"></script>
</head>
<body>

<div class="row">
  <!-- <?php include 'menu.php';?> -->
  <div class="col-6 col-s-9">
    <?php
      echo '<div id="cart-placeholder">';
      productComarisonElement("Καλάθι","cartItem",cartProducts($_SESSION["cart"]), "Αφαίρεση","removeFromCart");
      echo '</div>';
    ?>
  </div>

<!-- <?php include 'footer.php';?> -->
</body>
</html>


