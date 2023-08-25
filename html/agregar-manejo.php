<?php
ob_start();
include('conexion.php');

    if(empty($_POST)){
        ob_start();
        redireccion('agregar.php');
        ob_end_flush();
        return;
    }

    $nombre =  valida($_POST['nombre']);
    $descripcion =  valida($_POST['descripcion']);
   


    if ($nombre == '' || $descripcion == ''){
        ob_start();
        redireccion('agregar.php');
        ob_end_flush();
        return;
    }

    $conexion = conecta();

    if(!$conexion){
        ob_start();
        redireccion('agregar.php');
        ob_end_flush();
        return;
    }
    
    $sqlM = "SELECT MAX(ID) AS max_value FROM tareas";
    $result = $conexion->query($sqlM);
    $row = $result->fetch_assoc();
    $maxValue = $row['max_value'];

// Paso 3: Incrementar el valor máximo obtenido
    $maxValue = $maxValue ? $maxValue + 1 : 1;
    
    $hotel="";
        
       
        $sqlU = "select * from inicioshoteles order by id desc LIMIT 1"; 

    
        $resultadoU = mysqli_query($conexion, $sqlU);

        if($resultadoU){
        $fila = mysqli_fetch_assoc($resultadoU);
        $user = $fila['hotel'];
        $hotel = $user;
        }
    

    $sql = "insert into tareas(ID,Nombre,Descripcion,Completada) values('$maxValue','$nombre','$descripcion','NO')";

    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        
        header('refresh: 3; url=agregarventana.php');
        
      
    }
    else{
       ob_start();
        redireccion('agregar.php');
        ob_end_flush();
       
    }

    mysqli_close($conexion);
?>