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
        <h3>Καταχώρηση Προϊόντος</h3>
        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <?php 
              inputFormSelect("Υποκατηγορία προϊόντος","product-subcategory",allSubcategorySelection(),null);
              inputFormField("Κωδικός προϊόντος", "product-code","text",true);
              inputFormField("Περιφραφή προϊόντος", "product-description", "text", true);
            ?>
            <div class="form-group">
                <input type="file" id="product-img" name="product-img" required="true" />
            </div>
            <input type="submit" value="Καταχώρηση" class="btn btn-primary" />
        </form>
      </div>
      <div class="col-sm-4">
      </div>
      </div>  
      </div>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $productCode = $_POST['product-code'];
  $productDescr = $_POST['product-description'];
  $productSubCategory = $_POST['product-subcategory'];
  if(isset($_FILES["product-img"]) &&
		$_FILES["product-img"]["error"] == 0){
      $filename = basename($_FILES["product-img"]["name"]);
      $target_file = "../img/" . $filename;
      move_uploaded_file($_FILES["product-img"]["tmp_name"], $target_file);
      insertProduct($productCode, $productDescr, $filename, $productSubCategory);
    }
  
}
?>
