<?php
   function alert($msg){
    echo "<script>alert('H καταχώρηση με κωδικό: " . $msg . " υπάρχει ήδη')</script>"; 
   }

   function alertSuccess(){
    echo '<div class="alert alert-success">
            <strong> Επιτυχής καταχώρηση! </strong>
        </div>';
   }

   function alertError($msg){
    echo '<div class="alert alert-danger">
            <strong>H καταχώρηση με κωδικό: ' . $msg . ' υπάρχει ήδη!</strong>
        </div>';
   }
    
?>