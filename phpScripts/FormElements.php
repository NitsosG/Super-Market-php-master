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
?>
