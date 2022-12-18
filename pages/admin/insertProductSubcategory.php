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
        <h3>Καταχώρηση υποκαταστήματος</h3>
        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <?php 
              inputFormSelect("Κατηγορια","product-category",productCategorySelection(),null);
              inputFormField("Κωδικός Υποκατηγορίας", "product-subcategory-code","text",true);
              inputFormField("Όνομα Υποκατηγορίας", "product-subcategory-name","text",true);
            ?>
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
  $productCategory = $_POST['product-category'];
  $productSubcategoryCode = $_POST['product-subcategory-code'];
  $productSubcategoryName = $_POST['product-subcategory-name'];
  insertProductSubcategory($productCategory, $productSubcategoryCode, $productSubcategoryName);
}
?>
