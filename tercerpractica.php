<?php
class Persona{
    public $nombre;
    public $edad;
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    //public - private - protected
    private function definirNombre(){
        return $this->nombre;
    }

    public function saludar(){
        echo "<p>".$this->definirNombre()."</p>";
    }
}
$persona3 = new Persona("Juanito", 25);
$persona3->saludar();
$persona2 = new Persona("Menganito", 18);
$persona2->saludar();
//Herencia
class Animal{
    public function saludar(){
        echo "<p>Hola soy un animal</p>";
    }
}
class Perro extends Animal{
    public function hacersonido(){
        echo "<p>Guau guau</p>";
    }
}
$perrito = new Perro();
echo "<p>".$perrito->saludar()."</p>";
echo "<p>".$perrito->hacersonido()."</p>";

//Estaticos
class Miclase{
    public static function metodoEstatico(){
        return "<p>Este es una funcion estatica</p>";
    }
}
echo "<p>".Miclase::metodoEstatico()."</p>";

$miobjeto = new Miclase();
echo "<p>".$miobjeto->metodoEstatico()."</p>";

//Interfaces
interface interfaceAnimal{
    public function hablar();
    public function gritar();
}
class Ganado implements interfaceAnimal{
    public function saludo(){
        echo "<p>Que royal</p>";
    }
    public function hablar(){
        echo "<p>Buenas tardes calamares</p>";
    }
    public function gritar(){
        echo "<p>QUE QUIERES</p>";
    }
}
$lavaca = new Ganado();
echo "<p>".$lavaca->hablar()."</p>";
echo "<p>".$lavaca->gritar()."</p>";
echo "<p>".$lavaca->saludo()."</p>";

// clases abstractas
abstract class abstractAnimal{
    protected $nombre;
    abstract public function hablar();
    public function __construct($nombre){
        $this->nombre = $nombre;
    }
}
class Gato extends abstractAnimal{
    public function hablar(){
        echo "<p>Miau</p>";
    }
}
$gatillo = new Gato("Firulais");
$gatillo->hablar();
?>