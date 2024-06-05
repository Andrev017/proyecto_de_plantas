<?php
    require "../Data/modelo.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id_usuario'];
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);


        $sql = "INSERT INTO usuario (nombre_usuario,apellido_usuario,email_usuario,contraseña_usuario) VALUES ('$nombre', '$apellido','$email','$contraseña')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../View/index.html"); 
        } else {
            echo "Error al insertar registro: " . $conn->error;
        }

        $conn->close();
    }
?>

