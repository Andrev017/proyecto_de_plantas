<?php
    require '../DataBase/modelo.php';
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inisio de Sesión</title>
    <link rel="stylesheet" href="../CSS/inicio_sesion.css">


</head>
<body>
    <section class="container">

    <h1>Inisio de Sesión</h1>

    <form action="../controller/sesion.php"  method="post" >

        <div class="form-control">
            <input type="text" name="email" required placeholder="Gmail" title="Debe contener @" >
            <input name="password" type="password" required placeholder="Contraseña" maxlength="50" minlength="6">
        </div>


        <input type="submit" value="Iniciar" class="btn">
        <br><br>
        <span> No estoy registrado <a href="../View/registro_clientes.php"> Registrarse</a></span>
    </form>

        

    </section>
</body>
</html>