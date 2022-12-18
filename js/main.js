function getBranches(){
    getItems("brands","branches","branches-placeholder");
}

function getProductComparison(){
    getItems("products","productsComparison","products-comparison-placeholder");
}

function getProducts(){
    getItems("product-subcategory","products","products-placeholder");
}

function getProductSubcategories(){
    getItems("product-category","productSubcategories","product-subcategories-placeholder");
}

function getItems(htmlClass,endpoint,placeholder){
    var elem = $(`.${htmlClass}`);
    var items = Array.from(elem);
    var selectedItems = [];
    for (let i = 0; i < items.length; i++) {
        if(items[i].checked){
            selectedItems.push(items[i].name);
        }
    }
    if(selectedItems.length == 0){
        alert("Επιλέξτε τουλάχιστον ένα");
        return;
    }
    var url = `../api/${endpoint}.php?items=${selectedItems}`;
    console.log(url);
    $.get(url, function(data){
        $(`#${placeholder}`).html(data);
    });
}

function validateBranchesForm() {
    var elem = $('.branches');
    var items = Array.from(elem);
    var selectedItems = [];
    for (let i = 0; i < items.length; i++) {
        if(items[i].checked){
            selectedItems.push(items[i].name);
        }
    }
    if(selectedItems.length == 0){
        alert("Επιλέξτε τουλάχιστον ένα");
        return false;
    }
    return true;
} 


function test(){
    alert("Ok!");
}

function addToCart(productId){
    postBody = '{"item":"'+productId +'"}';
    $.post("../api/cart.php",postBody ,function(data){
        $("#cart-placeholder").html(data);
    });;
}

function removeFromCart(productId){
    postBody = '{"item":"'+productId +'"}';
    $.ajax({
        url: '../api/cart.php',
        data : postBody,
        type: 'DELETE',
        success: function(data) {
            $("#cart-placeholder").html(data);
        }
    });
}