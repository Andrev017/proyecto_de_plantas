<?php


session_start();
$email = $_POST['email'];
$password = $_POST['contraseña'];


$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";

$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 1) {

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;


    header('Location: ../View/index.html');
} else {
    header('Location: ../View/registro.php');
}