<?php 
include 'DbConnection.php';
include 'Debug.php';

function branchSelection($brandCodes){
    return selection("SELECT code, name FROM Super_market_branch WHERE brand in (" . convertArrayToSqlFilter($brandCodes) . ")" );
}

function branchSelectionByCode($branchCodes){
    return selection("SELECT code,name FROM Super_market_branch WHERE code in (" . convertArrayToSqlFilter($branchCodes) . ")" );
}

function brandSelection(){
    return selection("SELECT code, name FROM Super_market_brand");
}

function productCategorySelection(){
    return selection("SELECT code,description as name FROM Product_category");
}

function productSubcategorySelection($category){
    return selection("SELECT code,description as name FROM Product_subcategory WHERE category in (" . convertArrayToSqlFilter($category) . ")");
}

function productSelection($subcategories){
    return selection("SELECT code,description, picture FROM Product WHERE subcategory in (" . convertArrayToSqlFilter($subcategories) . ")");
}

function productComparison($productCodes, $branchesCodes){
    return selection("SELECT p.description,smb.brand ,smb.name, pppb.price, p.picture, p.code as productCode, smb.code as branch FROM Product  p
    JOIN Product_price_per_brand pppb ON p.code = pppb.product 
    JOIN Super_market_branch smb ON smb.brand  = pppb.brand 
    where p.code in (" . convertArrayToSqlFilter($productCodes) . ")
    AND smb.code in (" . convertArrayToSqlFilter($branchesCodes) . ")
    ORDER BY p.subcategory, p.code, pppb.price");
}

function cartProducts($productIds){
    $cartItems = array();
    foreach($productIds as $productId){
        $cartElemenent = explode ("#", $productId);
        $productCodes = array($productCodes,$cartElemenent[0]);
        $branchCodes = array($branchCodes,$cartElemenent[1]);
        array_push($cartItems, productComparison($productCodes, $branchCodes)[0]);
    }
    return $cartItems;
}

function selection(string $query){
    $conn = DbConnection();
    $result = $conn->query($query);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $conn->close();
    return $rows;
}

function countResults(string $query){
    $conn = DbConnection();
    $result = $conn->query($query);
    $conn->close();
    return mysqli_num_rows($result);
}

function convertArrayToSqlFilter($codes){
    $sqlFilter = "";
        foreach ($codes as $code){
            $sqlFilter .= "'" . $code . "',";
        }
    return rtrim($sqlFilter, ',');
}

function authenticateUser($username, $password){
    $isAuth = countResults("select * FROM Users where username = '" .$username. "' and password = '" .$password. "'");
    if($isAuth == 1){
        return true;
    }
    return false;
}
 
?>
