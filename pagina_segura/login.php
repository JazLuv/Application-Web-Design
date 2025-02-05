<?php
session_start();
// usuario predefinido
$usuarios = ["usuario1"=>"123456", "admin"=>"admin"];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST["usuario"];
    $pass = $_POST["llave"];
    if(isset($usuarios[$user]) && $usuarios[$user]==$pass){
        $_SESSION["usuario"] = $user;
        header("location: main.php");
        exit();
    } else{
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<HTML>
    <HEAD>
        <TITLE>Login Page</TITLE>
    </HEAD>
    <BODY>
        <FORM method = "POST" action="login.php">
            <LABEL>Usuario: </LABEL>
            <INPUT type="TEXT" name="usuario" id="usuario"><BR>
            <LABEL>Contraseña: </LABEL>
            <INPUT type="PASSWORD" name="llave" id="llave"><BR>
            <BUTTON type="submit">Ingresar</BUTTON>
        </FORM>
        <?php
        if(isset($error)){
            echo "<p>".$error."</p>";
        }
        ?>
    </BODY>
</HTML>