<?php
    include 'Debug.php';
    
    $queryParamsStr = "AB_1=checked&AB_2=checked&SKLAVENITIS_1=checked&SKLAVENITIS_2=checked";
    $queryParams = array();
    foreach (explode ("&", $queryParamsStr) as $queryParam){
        array_push($queryParams, str_replace("=checked", "", $queryParam));
    }
    debug($queryParams);
?>