<?php
session_start();
include("../conexion.php");

$usu = $_POST["Nusu"];
$contra = $_POST["Ncontra"];


$band = false;

$sentencia = "SELECT u.id_usuario, u.nombre, u.apellido, r.Nombre_rol, u.nomb_usuario FROM usuario  as u , roles as r where (r.Id_rol=u.Id_rol)AND (u.nomb_usuario='$usu' and u.contraseña='$contra'and u.Activo)";
$respuesta = $conn->query($sentencia);
while($fila = $respuesta->fetch_array()){
    $_SESSION['DBid'] = $fila['id_usuario'];
    $_SESSION['DBusu'] = $fila['nomb_usuario'];
    $_SESSION['DBnombre'] = $fila['nombre'];
    $_SESSION['DBapellido'] = $fila['apellido'];
    
    $_SESSION['rol'] = $fila['Nombre_rol'];
    $_SESSION['MensajeError'] = "";
    $_SESSION['MensajeExito'] = "";

 
    $band = true;
}

if ($band) header("location:index.php"); //SI TODO ESTA BIEN VAL DASHBOARD
elseif(empty($usu) || empty($contra)){ //PERMITE VERIFICAR SI LOS CAMPOS ESTAN VACIOS
    ?>
    <?php
    include("login.html");
    ?>
    <script>
        Swal.fire({
        title: "CAMPOS VACIOS!",
        icon: 'warning'
    })
    </script>
    
    <?php

}else{ //VERIFICA SI LOS DATOS ESTAN INCORRECTOS
    ?>
    <?php
    include("login.html");
    ?>
    <script>
        Swal.fire({
        title: "DATOS INCORRECTOS!",
        icon: 'error'
    })
    </script>
    
    <?php
}
?>