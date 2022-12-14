<?php 
  session_start();
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
<div>
  <?php
  $queryParamsStr = $_SERVER['QUERY_STRING'];
  $queryParams = array();
    foreach (explode ("&", $queryParamsStr) as $queryParam){
        array_push($queryParams, str_replace("=checked", "", $queryParam));
    }
  $_SESSION["branches"] = $queryParams;
  $selectedBranches = branchSelectionByCode($_SESSION["branches"]);
  echo "Επιλεγμένα υποκαταστήματα : ";
  foreach ($selectedBranches as $branch){
    echo $branch["name"] . ", ";
  };
  ?>
</div>

<div class="row">
  <div class="col-6 col-s-9">
    <?php
      checkbox("Κατηγορία","product-category",productCategorySelection(),"getProductSubcategories()");
    ?>
    <div id="product-subcategories-placeholder"></div>
    <div id="products-placeholder"></div>
    <div id="products-comparison-placeholder"></div>
    <?php
         echo '<div id="cart-placeholder">';
         productComarisonElement("Καλάθι","cartItem",cartProducts($_SESSION["cart"]), "Αφαίρεση","removeFromCart");
         echo '</div>';
    ?>
    <form action="checkout.php" id="checkout-form" method="get">
      <input type="submit">Checkout</input>
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