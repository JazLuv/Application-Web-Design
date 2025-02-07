<?php

?>
<HTML>
    <HEAD>
        <TITLE>Sign in page</TITLE>
    </HEAD>
    <BODY>
        <FORM method = "POST" action="nuevo_usuario.php">
            <LABEL>Usuario: </LABEL>
            <INPUT type="TEXT" name="usuario" id="usuario"><BR>
            <LABEL>Contraseña: </LABEL>
            <INPUT type="PASSWORD" name="password" require><BR>
            <LABEL>Nombre: </LABEL>
            <INPUT type="TEXT" name="nombre" require><BR>
            <LABEL>Apellido: </LABEL>
            <INPUT type="TEXT" name="apellido" require><BR>
            <LABEL>Correo: </LABEL>
            <INPUT type="TEXT" name="correo" require><BR>
            <BUTTON type="submit">Ingresar</BUTTON>
        </FORM>
        <?php
        if(isset($error)){
            echo "<p>".$error."</p>";
        }
        ?>
    </BODY>
</HTML>