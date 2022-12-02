<?php
include '../phpScripts/DbServices.php';
include '../phpScripts/FormElements.php';

header("Content-Type:text/html");
$brandCodes = $_GET['brandCodes'];
if (empty($brandCodes)){
    http_response_code(400);
    $json_response = json_encode("It's Not Ok");
    echo $json_response;
    return;
}
http_response_code(200);
echo checkbox("Καταστήματα","branches",branchSelectionFiltered($brandCodes), "test()");
?>