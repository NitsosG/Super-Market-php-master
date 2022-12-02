function getBranches(){
    var branchesElem = $(".brands");
    var brands = Array.from(branchesElem);
    var selectedBrands = [];
    for (let i = 0; i < brands.length; i++) {
        if(brands[i].checked){
            selectedBrands.push(brands[i].name);
        }
    }
    var obj = new Object();
    obj.brandCodes = selectedBrands
    console.log(JSON.stringify(obj));
    $.get("../api/branches.php", obj, function(data){
        $("#branches-placeholder").html(data);
    });
}

function test(){
    alert("Ok!");
}