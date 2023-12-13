<?php

    //esta es la llave para abrir la caja fuerte y tener acceso a los libros usuarios
    //hago referencia para inluir la pagina
    include './conexion_be.php'; 

    

    //orden en como creo mis variables y las apunto tal cual el name
    $nombre= $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio= $_POST['precio'];
    $stock= $_POST['stock'];


    //estas lineas hacen referencia a como esta ordenada mi BD , la puedo ver desde el admin y cuando quiera
    //inserar una line me dice el orden
    $query = "INSERT INTO productos(nombre , categoria , precio , stock) 
                             VALUES('$nombre','$categoria', '$precio' , '$stock')";

    //verificar que el correo no se repita
    // $verificar_correo = mysqli_query($conexion2, "SELECT * FROM usuarios WHERE mail= '$mail' ");

    // if (mysqli_num_rows($verificar_correo) > 0 ){
    //     echo'
    //     <script>
    //         alert ("ESTE MAIL YA ESTA REGISTRADO"); 
    //         window.location = "../paginaDB.php";
    //     </script>
    //     ';
    //     exit();
    // }

        //verificar que el usuaio no se repita
        // $verificar_usuario = mysqli_query($conexion2, "SELECT * FROM usuarios WHERE usuario= '$usuario' ");

        // if (mysqli_num_rows($verificar_usuario) > 0 ){
        //     echo'
        //     <script>
        //         alert ("ESTE USUARIO YA ESTA REGISTRADO"); 
        //         window.location = "../paginaDB.php";
        //     </script>
        //     ';
        //     exit();
        // }



    $ejecutar = mysqli_query($conexion2, $query); // aca referencio el conexion seria la llave para utilizar la query

    if($ejecutar){
        echo'
        <script>
            alert ("PRODUCTO AGREGADO"); 
            window.location = "../paginaDB.php";
        </script>
        ';
    }

    mysqli_close($conexion2 );

?> 