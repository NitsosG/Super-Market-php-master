<?php
    include 'DbServices.php';
    include 'FormElements.php';
    //debug(cartProducts(array("DELTA_MILK#SKLAVENITIS_2")));
   debug (productComarisonElement("Καλάθι","cartItem",cartProducts(array("DELTA_MILK#SKLAVENITIS_2")), "removeFromCart"));
    
?>