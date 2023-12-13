<?php
    
    //acceso a la caja fuerte ! 

    //hostname
    //username
    //pass
    //db
    // $conexion = mysqli_connect("localhost","u605473247_nicolas","Nico7193","u605473247_sitio");
    $conexion = mysqli_connect("localhost","root","","login_register_db");
    $conexion2 = mysqli_connect("localhost","root","","producto_register_db");

    if($conexion){
        echo 'Conecatado exitosamente a la base de datos POR USUARIO';
    }else{
        echo 'No se pudo conectar a la base de datos';
    }

    if($conexion2){
        echo 'Conecatado exitosamente a la base de datos POR PRODUCTO!';
    }else{
        echo 'No se pudo conectar a la base de datos';
    }
?>