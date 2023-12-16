<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// session_start();
// $_SESSION['usuario']=$usuarioIngreso;

include('db.php');

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas){
    session_start(); // Iniciar la sesión
    header("location:home.php");
    // Guardar el nombre de usuario en la sesión
    $_SESSION['usuario'] = $usuario;
    echo $_SESSION ['usuario'];

    
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTITCACION</h1>
    <?php
}

mysqli_free_result($resultado);

?>