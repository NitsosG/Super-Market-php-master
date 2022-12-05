<?php 
function inputFormField($label, $name){
    echo '<div class="form-field">' ;
    echo '<label for="' . $name . '">' . $label . ':</label>';
    echo '<input type="text" id="' . $name .'"name="'. $name .'">';
    echo '</div>';
}

function inputFormSelect($label, $name, $rows){
    echo '<div class="form-field">' ;
    echo '<label for="' . $name . '">' . $label . ':</label>';
    echo '<select id=' . $name. ' >';
    foreach ($rows as $row) {
        printf("<option value='%s'>%s</option>",$row["code"], $row["name"]);
    }
    echo '</select>';
    echo '</div>';
}

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
    echo '</form>';
    echo '</div>';
}

function productComarisonCheckbox($label, $class, $rows, $jsFunction){
    echo '<div class="form-field">' ;
    echo $label . '<br>';    
    echo '<form id="' . $class . '">';
    foreach ($rows as $row) {
        echo '<div>';
        printf('<img src="img/%s" alt="%s" width="50" height="50">',$row["picture"],$row["description"]);
        printf('<input class="%s" type="checkbox" id="%s" name="%s" value="%s">', $class,$row["code"],$row["code"],"checked");
        printf('<label for="%s">%s %s</label><br>',$row["code"],$row["description"], $row["price"]);
        echo '</div>';
    }
    printf (' <button type="button" onclick="%s">Επιλογή</button>', $jsFunction);
    echo '</form>';
    echo '</div>';
}
?>
