<?php
include 'base.php';

$itemsStr = $_GET['items'];
$items = explode (",", $itemsStr);
$html = checkbox("Υποκατηγορίες ","product-subcategory",productSubcategorySelection($items),"getProducts()");
echo baseApi($items,$html);

?>