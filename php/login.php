<?php
// Backend de login, comprobar que el usuario sea correcto
require_once('configuration.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"]) && !empty($_POST["pass"])) {
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        // Preparar la consulta para evitar SQL Injection
        $sql = "SELECT name_user AS name, id_rol AS rol FROM user WHERE email_user = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Iniciamos la sesión y almacenamos datos del usuario
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['name'] = $row['name'];
            $_SESSION['rol'] = $row['rol'];

            header("Location: ../main.php");
            exit();
        } else {
            echo "<script>alert('Correo o contraseña incorrectos'); window.location.href='../signIn.html';</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Por favor, completa todos los campos.'); window.location.href='../signIn.html';</script>";
    }
}
?>
