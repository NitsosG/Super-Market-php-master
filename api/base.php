<?php
include '../phpScripts/DbServices.php';
include '../phpScripts/FormElements.php';

session_start();

function baseApi($items, $html){
    header("Content-Type:text/html");
    if (empty($items)){
        http_response_code(400);
        $json_response = debug($items);
        echo $json_response;
        return;
    }
    http_response_code(200);
    echo $html;
}
?>