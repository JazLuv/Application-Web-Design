<?php
//////////////////////////////////
////// Variables globales ////////
//////////////////////////////////
define ('servidor','localhost');
define('basededatos','dbperrona');
define('usuario','lectura');
define('password','mipassword');

function conectar (){
    if(!($conexion = mysqli_connect(servidor, usuario, password, basededatos))){
        echo "Error conectando a la base de datos.";
        exit();
    }
    return $conexion;
}

function agregar_usuario($usuario, $password, $nombre, $apellido, $correo){
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (usuario, password, nombre, apellido, correo)
            VALUES (?, ?, ?, ?, ?)";
    $conexion = conectar();
    $stml = mysqli_prepare($conexion, $sql);
    if ($stml){
        mysqli_stmt_bind_param($stml, "sssss", $usuario, $password, $nombre, $apellido, $correo);
        if (mysqli_stmt_execute($stml)){
            echo "Usuario agregado exitosamente";
            header ("location: login.php");
        } else  {
        echo "Error al agregar usuario";
        }
        mysqli_stmt_close($stml);
    } else {
        echo "Error al preparar la consulta";
    }
}

function entrada($usuario, $password){
    $conexion = conectar();
    $sql = "SELECT password FROM usuarios WHERE usuario = ?"; // modificar tabla para que el usuario sea unico
    $stmt = mysqli_prepare($conexion, $sql);
    if ($stmt){
        mysqli_stmt_bind_param($stmt, "s", $usuario);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt)>0){
            mysqli_stmt_bind_result($stmt, $password_en_bd);
            mysqli_stmt_fetch($stmt);
            if(password_verify($password,$password_en_bd)){
                $_SESSION["usario"]= $usuario;
                header("location:main.php");
                exit();
            }else {
                $error = "Contraseña incorrecta";
            }
        } else {
            $error = "Usuario no encontrado";
        }
    }
}

?>