<?php
include 'base.php';

$itemsStr = $_GET['items'];
$items = explode (",", $itemsStr);
$html = productCheckbox("Προϊόντα","products",productSelection($items),"getProductComparison()");
echo baseApi($items,$html);
?>