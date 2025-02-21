<?php
require_once ("funciones.php");
if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
}
$conexion = conectar();
$sql = "SELECT * FROM items";
$result = mysqli_query($conexion, $sql);
?>
<HTML>
    <HEAD>
        <TITLE>Lista de Items</TITLE>
    </HEAD>
    <BODY>
        <DIV class="contenido">
            <TABLE>
                <TR>
                    <TH>ID</TH>
                    <TH>Nombre</TH>
                    <TH>Tipo</TH>
                    <TH>STR</TH>
                    <TH>AGI</TH>
                    <TH>INT</TH>
                    <TH>MND</TH>
                    <TH>VIT</TH>
                    <TH>Descripcion</TH>
                </TR>
                <?php
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".htmlspecialchars($row["id"])."</td>";
                        echo "<td>".htmlspecialchars($row["name"])."</td>";
                        echo "<td>".htmlspecialchars($row["type"])."</td>";
                        echo "<td>".htmlspecialchars($row["STR"])."</td>";
                        echo "<td>".htmlspecialchars($row["AGI"])."</td>";
                        echo "<td>".htmlspecialchars($row["INTE"])."</td>";
                        echo "<td>".htmlspecialchars($row["MND"])."</td>";
                        echo "<td>".htmlspecialchars($row["VIT"])."</td>";
                        echo "<td>".htmlspecialchars($row["description"])."</td>";
                        echo "</tr>";

                    }
                }    
                ?>
            </TABLE>
        </DIV>
    </BODY>
</HTML>