<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$log = false;
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    if ($_POST[ "user" ] == "admin" && $_POST[ "pass" ] == "root") {
        $user = $_POST["user"];
        $log = true;
    }
}
if($log == true){
    echo "<h1> Bienvenido $user </h1>";
}else{
?>
    <FORM METHOD="POST" ACTION = "http://127.0.0.1/paginaperrona.php">
    <LABEL>usuario:</LABEL><INPUT TYPE="text" NAME="user"><BR>
    <LABEL>contraseña:</LABEL><INPUT TYPE="password" NAME="pass"><BR>
    <BUTTON TYPE="submit">enviar</BUTTON>
    </FORM>
<?php
}
?>  
    <H1>Hola pagina perrona</H1>
</body>
</html>