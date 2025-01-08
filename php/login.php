<?php
//Backend de login, comprobar que el usuario sea correcto
require_once('configuration.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emial = $_POST["email"];
    $pass = $_POST["pass"];
    //Hacemos segura la contraseña
    $passConverted = md5($pass);

    //Comprobamos que el nombre y el correo sean los correctos
    $sql = "SELECT name_user AS name, id_rol AS rol FROM user WHERE email_user='$email' AND password='$passConverted'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        //Iniciamos la sesión y añadimos el nombre y el rol
        session_start();

        $row = $result->fetch_assoc();

        $_SESSION['name'] = $row['name'];
        $_SESSION['rol'] = $row['rol'];
        header("Location: ../main.php");
    } else {
        $message = 'correo o contraseña incorrectos';
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../login.html';
        </script>";
    }
}

?>