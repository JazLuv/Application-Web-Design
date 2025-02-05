<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
}
?>
<HTML>
    <HEAD>
        <TITLE>Main Page</TITLE>
    </HEAD>
    <BODY>
        <p>
            <?php
            echo "Bienvenido ".$_SESSION["usuario"];?>
            <a href = "logout.php">Salir</a>
        </p>
    </BODY>
</HTML>