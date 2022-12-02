<?php 
include 'DbConnection.php';

function branchSelection(){
    return selection("SELECT code, name FROM Super_market_branch");
}

function branchSelectionFiltered($brandCodes){
    $sqlFilter = converJsonListToSqlFilter($brandCodes);
    return selection("SELECT code, name FROM Super_market_branch WHERE brand in (" . $sqlFilter . ")" );
}

function brandSelection(){
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

function converJsonListToSqlFilter($codes){
    $sqlFilter = "";
        foreach ($codes as $code){
            $sqlFilter .= "'" . $code . "',";
        }
    return rtrim($sqlFilter, ',');
}
?>
