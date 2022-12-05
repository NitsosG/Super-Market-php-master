<?php
include 'base.php';

 $itemsStr = $_GET['items'];
 $items = explode (",", $itemsStr);
 //debug($_SESSION["branches"]);
//  $selectedBranches = branchSelectionByCode(explode (",", $_SESSION["branches"]));
//  $selectedBranchesCode = array();
//  foreach ($selectedBranches as $branch){
//     array_push($selectedBranchesCode,$branch["code"]);
//   };
   $html = productComarisonCheckbox("Σύγκριση τιμών","product-comparison",productComparison($items, $_SESSION["branches"]), "test()");
   echo baseApi($items,$html);
?>