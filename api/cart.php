<?php
   include 'base.php';
   $itemsStr = $_POST['items'];
   $data = json_decode(file_get_contents('php://input'), true);
   $productId = $data["item"];
   $requestMethod = $_SERVER['REQUEST_METHOD'];
   if($requestMethod == 'POST'){
      array_push($_SESSION["cart"], $productId);
   }elseif($requestMethod == 'DELETE'){
      if (($key = array_search($productId, $_SESSION["cart"])) !== false) {
         unset($_SESSION["cart"][$key]);
     }
   }
   $html = cartElements("Καλάθι","cartItem",$_SESSION["cart"], "removeFromCart");
?>