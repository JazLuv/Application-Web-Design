<?php
//Arrays
$frutas = ["mango", "tomate", "fresas"];
echo "<p>".count( $frutas )."</p>";
$edades = ["Ana" => 26,"Mau"=>21,"Jaz"=>57];
echo "<p>".$edades['Ana']."</p>";
$cantidades = ["Ana"=>[12,24,56], "Mau"=>[12,24,0],"Jaz"=>[12]];
echo"<p>".$cantidades["Mau"][0]."</p>";
$materias = ["Ana"=>["edad"=>21, "materia"=>"DAW"],
            "Mau"=>["edad"=>21, "materia"=>"DAW"],
            "Jaz"=>["edad"=>57, "materia"=>"DAW"]];
echo "<p>".$materias["Mau"]["edad"].$materias["Mau"]["materia"]."</p>";
//PILAS LIFO last in first out
$pila = [];
array_push($pila, "A");
array_push($pila, "B");
array_push($pila,"C");
array_push($pila,"D");
while(!empty($pila)){
    echo "<p>".array_pop($pila)."</p>";
}
//COLAS FIFO first in first out
$cola = [];
array_push($cola, "A");
array_push($cola, "B");
array_push($cola,"C");
array_push($cola,"D");
while(!empty($cola)){
    echo "<p>".array_shift($cola)."</p>";
}
?>