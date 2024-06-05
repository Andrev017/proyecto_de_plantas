<?php
    require '../Data/modelo.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../CSS/estilos.css">

    <script>
        const emailValido = email => {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
        function validar(f){
            var nn = f.nombre.value;

            if (!emailValido(f.email.value)) {
                alert("Por favor, escribe un correo electrónico válido");
                f.email.focus();
                return false;
                }
                if(ok == false)
                alert(msg);
            return ok;
        }

    </script>
</head>

<body>
    <section class="container" >
        <h1>Registro</h1>

        <form action="../controller/registro.php" method="post" onsubmit="return validar(this)" >
            <h3>Ingrese sus Datos</h3>

            <div class="form-control" >
                <input type="text" name="nombre" required placeholder="Nombre" maxlength="100" minlength="5" >
                <input type="text" name="apellido" required placeholder="Apellido" maxlength="250" minlength="5">
                <input type="text" name="email" required placeholder="Gmail" title="Debe contener @" >
                <input type="password" name="contraseña" required placeholder="Contraseña" maxlength="50" minlength="6" >
            </div>
            
            <span>o <a href="#" class="inicio">Inicio de Sesion</a></span>
            <br><br>

            <input type="submit" value="Registrar" class="btn">
            
        </form> 
    </section>


</body>
</html>