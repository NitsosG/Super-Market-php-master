<?php 
include 'DbConnection.php';

function brandSelection(){
    return selection("SELECT code, name FROM Super_market_branch");
}

function branchSelection(){
    return selection("SELECT code, name FROM Super_market_brand");
}

function productSelection(){
    return selection("SELECT code,name FROM Product_category");
}

function selection(string $query){
    $conn = DbConnection();
    $result = $conn->query($query);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $conn->close();
    return $rows;
}
?>
