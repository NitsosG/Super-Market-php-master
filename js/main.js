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
    var url = `../api/${endpoint}.php?items=${selectedItems}`;
    console.log(url);
    $.get(url, function(data){
        $(`#${placeholder}`).html(data);
    });
}



function test(){
    alert("Ok!");
}