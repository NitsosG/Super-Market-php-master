<?php
include 'base.php';

  $itemsStr = $_GET['items'];
  $items = explode (",", $itemsStr);
  $html = productComarisonElement("Σύγκριση τιμών","product-comparison",productComparison($items, $_SESSION["branches"]), "addToCart");
  echo baseApi($items,$html);
?>