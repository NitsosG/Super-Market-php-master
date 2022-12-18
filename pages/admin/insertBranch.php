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
              inputFormSelect("Αλυσίδα","brand",brandSelection(),null);
              inputFormField("Κωδικός Υποκαταστήματος", "branch-code","text",true);
              inputFormField("Όνομα Υποκαταστήματος", "branch-name","text",true);
              inputFormField("Διεύθυνση Υποκαταστήματος", "branch-city","text",true);
              inputFormField("Τ.Κ Υποκαταστήματος", "branch-postal-code","number",true);
              inputFormField("Τηλέφωνο Υποκαταστήματος", "branch-tel","number",true);
              inputFormField("Email Υποκαταστήματος", "branch-email","text",true);
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
            $brand = $_POST['brand'];
            $branchCode = $_POST['branch-code'];
            $branchName = $_POST['branch-name'];
            $branchCity = $_POST['branch-city'];
            $branchPostCode = $_POST['branch-postal-code'];
            $branchTel = $_POST['branch-tel'];
            $branchEmail = $_POST['branch-email'];
          try{
            insertBranch($branchCode, $branchName, $branchCity, $branchPostCode, $branchTel,$branchEmail, $brand);
            alertSuccess();
          }catch(Exception $e){
            alertError($branchCode);
          }
          
        }
      ?>
      </div> 
      </div>
      </div>  
      </div>
    </body>
</html>
