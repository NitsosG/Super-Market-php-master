<!DOCTYPE html>
<html>
<head>
<?php include '../phpScripts/DbServices.php';?>
<?php include '../phpScripts/FormElements.php';?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

<div class="header">
  <h1>Καταστήματα</h1>
</div>

<div class="row">
  <?php include 'menu.php';?>
  <div class="col-6 col-s-9">
    <form>
    <?php
      inputFormField('Ταχυδρομικός κώδικας','TK');
      inputFormSelect("Όνομα αλυσίδας","brand",brandSelection());
      inputFormSelect("Κατάστημα","branch",branchSelection());
    ?>
    </form>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>What?</h2>
      <p>Chania is a city on the island of Crete.</p>
      <h2>Where?</h2>
      <p>Crete is a Greek island in the Mediterranean Sea.</p>
      <h2>How?</h2>
      <p>You can reach Chania airport from all over Europe.</p>
    </div>
  </div>
</div>

<?php include 'footer.php';?>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">   -->

</body>
</html>


