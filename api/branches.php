<?php
include 'base.php';

$itemsStr = $_GET['items'];
$items = explode (",", $itemsStr);
$html = checkbox("Καταστήματα","branches",branchSelection($items), "test()");
echo baseApi($items,$html);
?>