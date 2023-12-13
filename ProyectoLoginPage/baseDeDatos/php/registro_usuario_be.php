<?php
    //esta es la llave para abrir la caja fuerte y tener acceso a los libros usuarios
    //hago referencia para inluir la pagina
    include './conexion_be.php'; 

    //orden en como creo mis variables y las apunto tal cual el name
    $nombre_completo = $_POST['nombre_completo'];
    $mail = $_POST['mail'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];


    //estas lineas hacen referencia a como esta ordenada mi BD , la puedo ver desde el admin y cuando quiera
    //inserar una line me dice el orden
    $query = "INSERT INTO usuarios(nombre_completo , mail , usuario , contrasena) 
                            VALUES('$nombre_completo','$mail', '$usuario' , '$contrasena')";

    //verificar que el correo no se repita
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail= '$mail' ");
    
    $ejecutar = mysqli_query($conexion, $query); // aca referencio el conexion seria la llave para utilizar la query

    if($ejecutar){
        echo'
        <script>
            alert ("Usuario almacenado correctamente"); 
            window.location = "../../index.php";
        </script>
        ';
        exit();
        
    }
    
    if (mysqli_num_rows($verificar_correo) > 0 ){
        echo'
        <script>
            alert ("ESTE MAIL YA ESTA REGISTRADO !! repite correo"); 
            window.location = "../../index.php";
        </script>
        ';
        exit();
    }

        //verificar que el usuaio no se repita
        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario' ");

        if (mysqli_num_rows($verificar_usuario) > 0 ){
            echo'
            <script>
                alert ("ESTE USUARIO YA ESTA REGISTRADO"!! repite usuario!!); 
                window.location = "../../index.php";
            </script>
            ';
            exit();
        }


    mysqli_close($conexion);
?> 




