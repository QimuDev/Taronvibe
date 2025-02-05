<?php
require_once('./php/configuration.php');

$sql = 'SELECT name_org AS nombre, image_org AS imagen FROM organizer';

$result = $conn->query($sql);
$lista = "";
if($result -> num_rows > 0) {
    $lista = "<ul class='ulOrg'>";
    while ($row = $result -> fetch_assoc()){
        $lista .= "<li><img src=.".$row['imagen']." loading='lazy' alt=".$row['nombre']." class='imgOrg'>".$row['nombre']."</li>";
    }
    $lista .= "</ul>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista organizadores</title>
    <link rel="stylesheet" href="./css/listadoOrganizadores.css">
</head>

<body>
    <nav>
        <div class="nav-logo">
            <img src="./img/listadoOrg/taronvibeLogo.png" alt="Logo">
        </div>
        <div class="nav-profile">
            <ul class="nav-list">
                <li class="nav-item"><a href="#Eventos">Eventos</a></li>
                <li class="nav-item"><a href="#Organizadores">Organizadores</a></li>
                <li><button class="btn-profile"><img src="./img/listadoOrg/iniciar.svg" class="profile-icon" alt="svg perfil"> Mi Perfil</button></li>
            </ul>
        </div>
    </nav>
    <div class="descubre">
        <h1 class="texto">Descubre nuestros <br> organizadores ;)</h1>
        <img src="./img/listadoOrg/text.png" alt="ola" class="ola">
    </div>
    <div class="marquee-container">
        <div class="marquee">
            <span>Una súper frase animada scrolling non stop, Una súper frase animada non stop, Una súper frase animada scrolling non stop, Una súper frase animada non stop, Una súper frase animada scrolling non stop, Una súper frase animada non stop, </span>
        </div>
    </div>
        <div class="searchbar-container">
            <div class="searchbar">
                <img src="./img/listadoOrg/search.svg" alt="search" class="search-icon">
                <input type="search" name="saerchOrg" class="search-input" placeholder="Busca un organizador">
            </div>
        </div>
    <div class="listOrgContainer">
        <div class="lista">
            <?=$lista?>
        </div>
    </div>

    <div class="marquee-container">
        <div class="marquee">
            <span>Una súper frase animada scrolling non stop, Una súper frase animada non stop, Una súper frase animada scrolling non stop, Una súper frase animada non stop, Una súper frase animada scrolling non stop, Una súper frase animada non stop, </span>
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="./img/listadoOrg/taronvibeLogo.png" alt="Logo TaronVibe" class="logo">
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
                <li><a href="politicas.html">Política de Privacidad</a></li>
                <li><a href="cookies.html">Política de Cookies</a></li>
                <li><a href="#">Aviso Legal</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>