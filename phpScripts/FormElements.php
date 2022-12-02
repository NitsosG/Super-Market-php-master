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
    foreach ($rows as $row) {
        printf('<input class="%s" type="checkbox" id="%s" name="%s" value="%s">', $class,$row["code"],$row["code"],"checked");
        printf('<label for="%s">%s</label><br>',$row["name"],$row["name"]);
    }
    printf (' <button type="button" onclick="%s">Click Me!</button>', $jsFunction);
    echo '</div>';
}
?>
