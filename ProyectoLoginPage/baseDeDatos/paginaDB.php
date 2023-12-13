<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cargaDeUsuario</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="../">

    
</head>
<body>
    <h1 class="titulo">BASE DE DATOS SQL</h1>

    <!-- el action es para que el form pueda hacer algo -->
    <!-- la calss es para poder acceder desde el js  -->
    <!-- method = "POST" , es para hacer la carga de los datos, por lo gral es GET -->

    <div class="formularios">
        <div class="formulario">
            <H3 class="cargaUsuario"> CARGA DE USUARIO</H3>
            <form action="./php/registro_usuario_be.php" class="formulario__register" method="POST">
                <input type="text" placeholder="Nombre completo" name="nombre_completo" required> <br><br>
                <input type="text" placeholder="Correo electronico" name="mail" required><br><br>
                <input type="text" placeholder="Usuario" name="usuario" required><br><br>
                <input type="text" placeholder="Contrasenia" name="contrasena" required ><br><br>
                <button id="btn__registrarse">Registrarse</button>
            </form>
        </div>
        
        <div class="formulario">
            <H3 class="cargaProducto">CARGA DE PRODUCTO</H3>
            <form action="./php/registro_producto_be.php" class="formulario__producto" method="POST">
                <input type="text" placeholder="nombre" name="nombre" required> <br><br>
                <input type="text" placeholder="categoria" name="categoria" required><br><br>
                <input type="text" placeholder="precio" name="precio" required><br><br>
                <input type="text" placeholder="stock" name="stock" required><br><br>
                <button id="btn__producto">Agregar producto</button>
            </form>
        </div>
    </div>


    <script src="./assets/script.js">
    </script>

</body>

</html>