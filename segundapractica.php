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

$saludo = function($hola){
    echo "<p>Hola me llamo $hola</p>";
};
echo $saludo ("Aaron");

$multiplicar = fn($x, $y) => $x * $y;
echo "<p>". $multiplicar(12, 25)."</p>";

$variable_global = 15;
function miFunction() {
    global $variable_global;
    echo "<p>".$variable_global."</p>";
    $variable_global++;
}
miFunction();
echo "<p>".$variable_global."</p>";

function sumaContador(){
    static $contador = 0;
    $contador++;
    echo "<p>".$contador."</p>";
}
echo "<p>".sumaContador()."</p>";
echo "<p>".sumaContador()."</p>";
echo "<p>".sumaContador()."</p>";

?>