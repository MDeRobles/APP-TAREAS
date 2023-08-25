<?php
     function redireccion($dir){
        ob_start();
        header('refresh:0, url=' . $dir);
        ob_end_flush();
    }
    
    function valida($texto){
        $texto = trim($texto);
        $texto = stripslashes($texto);
        $texto = htmlspecialchars($texto);
        return $texto;
    }

    function conecta(){
        DEFINE('SERVIDO', 'localhost');
        DEFINE('USUARI', 'id20739104_root');
        DEFINE('PASSWOR', '/Nom/035');
        DEFINE('B', 'id20739104_nom');

        $resultado = mysqli_connect(SERVIDO, USUARI, PASSWOR, B);

        return $resultado;
    }
?>