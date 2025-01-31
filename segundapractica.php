<?php
function saludar(){
    echo "<p>Hola</p>";
}

saludar();
saludar();
saludar();

function suma($x, $y){
    return $x + $y;
}
echo "<p>".suma(5, 6)."</p>";
?>