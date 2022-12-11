<?php 
function checkbox($label, $class, $rows, $jsFunction){
    echo '<div class="form-field">' ;
    echo $label . '<br>';    
    echo '<form id="' . $class . '">';
    foreach ($rows as $row) {
        printf('<input class="%s" type="checkbox" id="%s" name="%s" value="%s">', $class,$row["code"],$row["code"],"checked");
        printf('<label for="%s">%s</label><br>',$row["name"],$row["name"]);
    }
    if(!is_null($jsFunction)){
        printf (' <button type="button" onclick="%s">Επιλογή</button>', $jsFunction);
    }
    echo '</form>';
    echo '</div>';
}

function productCheckbox($label, $class, $rows, $jsFunction){
    echo '<div class="form-field">' ;
    echo $label . '<br>';    
    echo '<form id="' . $class . '">';
    foreach ($rows as $row) {
        echo '<div>';
        printf('<img src="img/%s" alt="%s" width="50" height="50">',$row["picture"],$row["description"]);
        printf('<input class="%s" type="checkbox" id="%s" name="%s" value="%s">', $class,$row["code"],$row["code"],"checked");
        printf('<label for="%s">%s</label><br>',$row["code"],$row["description"]);
        echo '</div>';
    }
    printf (' <button type="button" onclick="%s">Επιλογή</button>', $jsFunction);
    echo '</form>';
    echo '</div>';
}

function productComarisonElement($label, $class, $rows, $jsFunction){
    echo '<div class="form-field">' ;
    echo $label . '<br>';    
    echo '<form id="' . $class . '">';
    foreach ($rows as $row) {
        echo '<div>';
        printf('<img src="img/%s" alt="%s" width="50" height="50">',$row["picture"],$row["description"]);
        $productId = $row["productCode"] . '#' .$row["branch"] . '#' .$row["brand"];
        $jsFunctionWithParameters = $jsFunction."('" . $productId . "')";
        printf (' <button type="button" onclick="%s">Επιλογή</button>', $jsFunctionWithParameters);
        printf('<label> %s %s %s</label><br>', $row["description"], $row["price"], $row["branch"]);
        echo '</div>';
    }
    echo '</form>';
    echo '</div>';
}

function cartElements($label, $class, $rows, $jsFunction){
    echo '<div class="form-field">' ;
    echo $label . '<br>';    
    foreach ($rows as $row) {
        echo '<div>';
        printf ($row);
        $jsFunctionWithParameters = $jsFunction."('" . $row . "')";
        printf (' <button type="button" onclick="%s">Αφαίρεση</button>', $jsFunctionWithParameters);
        echo '</div>';
    }
    echo '</div>';
}
?>
