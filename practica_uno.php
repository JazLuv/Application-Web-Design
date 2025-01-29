<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $variable = "Texto";
            $variable_int = 12;
            $variable_float = 12.5;
            $bar_bol=true;

            echo "<p> Hola $variable </p>";
            echo "<p>Hola \"$variable_int </p>";
            echo gettype($bar_bol); //solo en desarrollo
            echo "<p>" . (3 + 4) . "</p>";
            // || or
            // && and
            // ! not
            if((!3 > 4 || 56 > 12) && (12 >1)){
                echo "Se cumple la condicion";
            }
            else if (12 > 1){
                echo "No se cumple la condicion";
            }
            else{
                echo "No se cumple la condicion";
            }
            $var = 0;
            while($var < 100){
                echo "<p> $var </p>";
                $var++;
            }
            $var = 0;
            do{
                echo "<p> $var </p>";
                $var++;
            }while($var < 10);
            //
            for($var = 0; $var < 10; $var++){
                echo "<p> $var </p>";
            }
            $frutas = ["manzana", "pera", "uva", "tomate"];
            foreach($frutas as $index => $name){
                echo "<p>$index<b>$name</b></p>";
            }
            $oper = 2;
            switch($oper){
                case 1:
                    echo "<p>caso 1</p>";
                    break;
                case 2:
                    echo "<p>caso 2</p>";
                    break;
                default:
                    echo "<p>caso default</p>";
                    break;
            }
        ?>
</body>
</html>