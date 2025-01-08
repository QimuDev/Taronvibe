<?php
//Página backend para el registro de usuarios
require_once('configuration.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Recogemos la información del usuario
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //Aseguramos la contraseña
    $passSecure = md5($pass);
    $postalCode = $_POST['postalCode'];
    $birthday = $_POST['birthday'];
    $rol = 2;

    //Introducimos los datos
    $sql = "INSERT INTO user (name_user, email_user, password, postal_code, birthday, id_rol) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    if($stmt) {
        //Los unimos
        $stmt->bind_param("sssisi", $name, $email, $passSecure, $postalCode, $birthday, $rol);

        if($stmt->execute()){
            //inicia la sesión
            session_start();

            $_SESSION['name'] = $name;
            $_SESSION['rol'] = $rol;

            header("Location: ../main.php");
        } else {
            $message = 'Error a la hora de preparar la consulta';
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='../register.html';
            </script>";
        }
        $stmt->close();
    } else {
        $message = 'Error en la conexión';
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../register.html';
        </script>";
    }
}

?>