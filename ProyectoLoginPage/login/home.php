
<?php
$conexion = mysqli_connect("localhost","root","","login_register_db");
session_start();
// include('validar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>ACCDEISTE COMO EL USUARIO esto es home php</H1>

    <h2>    
        <?php       
            $usuarioLogin = $_SESSION ['usuario']; 
            echo "Bienvenido a esta página " , $usuarioLogin;
        ?>
    </h2>


    
</body>



</html>