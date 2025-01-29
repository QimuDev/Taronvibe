<?php
include_once('configuracion.php');
include_once('config.php');

$sql = "SELECT 
            e.ID_Equipo, 
            e.Nombre_Equipo AS Nombre, 
            e.Logo_Equipo AS Logo, 
            e.Ciudad_Equipo AS Ciudad, 
            COUNT(j.ID_Jugador) AS Cantidad_Jugadores,
            COUNT(f.ID_Fav_Equipo) AS Favorito
        FROM equipos e
        LEFT JOIN jugadores j ON j.ID_Equipo = e.ID_Equipo
        LEFT JOIN favoritos_equipos f ON f.ID_Fav_Equipo = e.ID_Equipo AND f.ID_Fav_Usuario = ?
        GROUP BY e.ID_Equipo, e.Nombre_Equipo, e.Logo_Equipo, e.Ciudad_Equipo";
$result = $conn->query($sql);

$tabla = "<div class='container mt-4'><div class='row justify-content-center'>"; // Inicio del contenedor y fila
if ($result->num_rows > 0) {    
    // Generar las filas dentro del bucle
    while ($row = $result->fetch_assoc()) {
        $tabla .= "
            <div class='col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center align-items-stretch'>
                <div class='card shadow-sm' style='border-radius: 20px; max-width: 100%;'>
                    <img src='./" . $row["Logo"] . "' alt='Imagen de " . $row["Nombre"] . "' class='img-fluid' style='max-height: 200px; object-fit: contain;'>
                    <div class='card-body' style='border-radius: 0 0 20px 20px;'>
                        <h5 class='card-title'>" . $row['Nombre'] . "</h5>
                        <p class='card-text'>Nº Jugadores: <span class='price'>" . $row['Cantidad_Jugadores'] . "</span></p>
                        <p style='margin-bottom: 0px;' class='card-text'>📍Ciudad: " . $row['Ciudad'] . "</p>
                    </div>
                </div>
            </div>
        ";
    }
}
$tabla .= "</div></div>"; // Cerrar el contenedor y la fila
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita tus datos</title>
    <link rel="stylesheet" href="./css/userProfile.css">
</head>
<body>
    <!-- NAV MENÚ -->
    <nav>
        <div class="nav-logo">
            <img src="./img/img_userProfile/TARONVIBE Logo.png" alt="Logo">
        </div>
        <div class="nav-profile">
            <ul class="nav-list">
                <li class="nav-item"><a href="#Eventos">Eventos</a></li>
                <li class="nav-item"><a href="#Organizadores">Organizadores</a></li>
                <li><button class="btn-profile"><img src="./img/img_userProfile/Vector.svg" alt="svg perfil"> Mi Perfil</button></li>
            </ul>
        </div>
        <div class="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <div class="mobile-nav">
        <ul class="nav-list">
            <li class="nav-item"><a href="#Eventos">Eventos</a></li>
            <li class="nav-item"><a href="#Organizadores">Organizadores</a></li>
            <li><button class="btn-profile"><img src="./img/img_userProfile/Vector.svg" alt="svg perfil"> Mi Perfil</button></li>
        </ul>
    </div>

    <!-- CONTENIDO PÁGINA -->
    <div class="profile-container">
        <div class="profile-image">
            <img height="400px" width="400px" src="./img/img_userProfile/Property 1=Rectangle 40.png" alt="Imagen del usuario">
        </div>
        <div class="profile-details">
            <h2>Nombre del usuario</h2>
            <div class="profile-icons">
                <span class="icon"><img src="./img/img_userProfile/oso-naranja.svg"></span>
                <span class="icon"><img src="./img/img_userProfile/oso-naranja.svg"></span>
                <span class="icon"><img src="./img/img_userProfile/oso-naranja.svg"></span>
            </div>
            <p>correousuario@gmail.com</p>
            <p>26/05/1990</p>
        </div>
        <a style="text-decoration: none;" href="./userUpdate.html"><button class="btn-save"><img src="./img/img_userProfile/lapiz-negro.svg" alt="svg edit"> Mi Perfil</button></a>
    </div>

    <!-- TUS GUSTOS -->
    <div class="wrapper-container" style="margin-top: 150px;">
        <h1>Tus gustos</h1>
        <div class="wrapper">
            <button class="option active" onclick="toggleButton(event)">Favoritos</button>
            <button class="option" onclick="toggleButton(event)">Pasados</button>
            <div class="slider"></div>
        </div>
    </div>

    <div class="marquee-container">
        <div class="marquee">
            <span>Una súper frase animada scrolling non stop, Una súper frase animada non stop, Una súper frase animada scrolling non stop, Una súper frase animada non stop, Una súper frase animada scrolling non stop, Una súper frase animada non stop, Una súper frase animada scrolling non stop, Una súper frase animada non stop.</span>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="./img/img_userProfile/TARONVIBE Logo.png" alt="Logo TaronVibe" class="logo">
                <ul class="footer-links">
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Organizadores</a></li>
                    <li><a href="#">Iniciar sesión</a></li>
                </ul>
                <div class="footer-social">
                    <span class="circle"></span>
                    <span class="circle"></span>
                    <span class="circle"></span>
                </div>
            </div>
            <div class="footer-right">
                <h2>Únete a nuestra newsletter</h2>
                <form class="newsletter-form">
                    <div class="form-input">
                        <input type="text" placeholder="Nombre" class="input">
                        <input type="email" placeholder="Correo electrónico" class="input">
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="btn-footer">Suscribete</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 - TARONVIBE</p>
            <ul class="footer-policies">
                <li><a href="#">Política de Privacidad</a></li>
                <li><a href="#">Política de Cookies</a></li>
                <li><a href="#">Aviso Legal</a></li>
            </ul>
        </div>
    </footer>
</body>
<script>
    document.querySelector('.hamburger-menu').addEventListener('click', () => {
        document.querySelector('.mobile-nav').classList.toggle('active');
    });
</script>
<script>
    function toggleButton(event) {
    const buttons = document.querySelectorAll('.option');
    const slider = document.querySelector('.slider');

    buttons.forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');

    if (event.target.innerText === "Favoritos") {
        slider.style.transform = "translateX(0%)";
    } else {
        slider.style.transform = "translateX(100%)";
    }
}
</script>
</html>