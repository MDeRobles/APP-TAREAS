<?php
    $IdUsuario=$_GET['id'];
    ob_start();
    include('conexion.php');
    $conexion = conecta();

    $sql="delete from tareas where ID='".$IdUsuario."'";
    $resultado=mysqli_query($conexion,$sql);

         echo "<script language='JavaScript'>
                location.assign('tareas.php');
                </script>";

    mysqli_close($conexion);
?>