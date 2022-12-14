<!DOCTYPE html>
<html>
    
    <?php include "header.php" ?>
    <body class="admin-form">
    <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">  
        <?php include "user.php" ?>
      </div>
      <div class="col-sm-8">  
      <h2>Διαχειριστικό</h2>
      </div>
    </div>
      <div class="row">
        <?php include "menu.php" ?>
        <div class="col-sm-4">
        <h3>Καταχώρηση κατηγορίας προϊόντων</h3>
        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <?php 
              inputFormField("Κωδικός Κατηγορίας προϊόντων", "product-category-code","text",true);
              inputFormField("Όνομα Κατηγορίας προϊόντων", "product-category-name","text",true);
            ?>
            <input type="submit" value="Καταχώρηση" class="btn btn-primary" />
        </form>
      </div>
      <div class="col-sm-4">
      </div>
      </div> 
      <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $brandCode = $_POST['product-category-code'];
          $brandName = $_POST['product-category-name'];
          try{
            insertProductCategory($brandCode, $brandName);
            alertSuccess();
          }catch(Exception $e){
            alertError($brandCode);
          }
          
        }
      ?>
      </div> 
      </div>
      </div>
    </body>
</html>


