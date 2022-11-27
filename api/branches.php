<?php
header("Content-Type:application/json");
$queryParamName = 'brandCode';
if (isset($_GET[$queryParamName]) && $_GET[$queryParamName]!=""){
    response(NULL, NULL, 200,"No Record Found");
}
else
{
    response(NULL, NULL, 400,"Invalid Request");
}

function response($order_id,$amount,$response_code,$response_desc){
    $response['order_id'] = $order_id;
    $response['amount'] = $amount;
    $response['response_code'] = $response_code;
    $response['response_desc'] = $response_desc;
    // http_response_code($response_code);
    $json_response = json_encode($response);
    echo $json_response;
}