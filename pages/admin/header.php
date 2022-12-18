<head>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/main.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />
<?php 
  include '../../phpScripts/DbServices.php';
  include '../../phpScripts/FormElements.php';

  session_start();

  if (isset($_SESSION['name']) && str_contains($_SERVER['REQUEST_URI'],'login.php')) {
    header("Location: insertProduct.php");
  }	  

  if (!isset($_SESSION['name']) && !str_contains($_SERVER['REQUEST_URI'],'login.php')) {
    header("Location: login.php");
  }
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>