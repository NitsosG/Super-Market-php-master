<?php 
  session_start();
  $_SESSION["cart"] = array();
?>
<!DOCTYPE html>
<html>
<head>
<?php include '../phpScripts/DbServices.php';?>
<?php include '../phpScripts/FormElements.php';?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" type="text/css" href="../css/style.css" /> -->
<script src="../js/jquery.min.js"></script>
<script src="../js/main.js"></script>
</head>
<body>

<!-- <div class="header">
  <h1>Καταστήματα</h1>
</div> -->

<div class="row">
  <!-- <?php include 'menu.php';?> -->
  <div class="col-6 col-s-9">
    <?php
      checkbox("Αλυσίδα","brands",brandSelection(),"getBranches()");
    ?>
    <form action="products.php" id="branches-form" onsubmit="return validateBranchesForm()" method="get">
      <div id='branches-placeholder'></div>
      <input type="submit" >
    </form>
  </div>

  <!-- <div class="col-3 col-s-12">
    <div class="aside">
    </div>
  </div>
</div> -->

<!-- <?php include 'footer.php';?> -->
</body>
</html>


