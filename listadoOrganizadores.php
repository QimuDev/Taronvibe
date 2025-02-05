<?php
require_once('./php/configuration.php');

$sql = 'SELECT name_org AS nombre, image_org AS imagen FROM organizer';
$result = $conn->query($sql);
$lista = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $lista .= "<div class='card'>";
        $lista .= "<div class='galery-image' style='background-image: url(" . $row['imagen'] . ")'>";
        $lista .= "<div class='contenido-container'></div>";
        $lista .= "</div>";
        $lista .= "<div class='texto-container'>";
        $lista .= "<h3>" . $row['nombre'] . "</h3>";
        $lista .= "</div>";
        $lista .= "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/login/taronvibeLogo.png" type="image/png" />
    <title>Lista organizadores</title>
    <link rel="stylesheet" href="./css/listadoOrganizadores.css" />
</head>
<body>
    <section class="nav-container">
        <nav>
            <div class="nav-logo">
                <a href="main.html">
                    <img src="img/login/TaronvibeLogoNav.png" alt="Logo" />
                </a>
            </div>
            <div class="nav-profile">
                <ul class="nav-list">
                    <li class="nav-item"><a href="listadoEventos.php">Eventos</a></li>
                    <li class="nav-item"><a href="listadoOrganizadores.php">Organizadores</a></li>
                    <li>
                        <a href="userProfile.php">
                            <button class="btn-profile">
                                <img src="./img/img_userUpdate/Vector.svg" alt="svg perfil"> Mi Perfil
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </section>
    <section>
        <div class="descubre">
            <h1 class="texto">Descubre nuestros <br>organizadores ;)</h1>
            <img src="./img/listadoOrg/text.png" alt="ola" class="ola">
        </div>
    </section>
    <div class="marquee-container">
        <div class="marquee">
            <span>Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite</span>
        </div>
    </div>
    <div class="searchbar-container">
        <div class="searchbar">
            <img src="./img/listadoOrg/search.svg" alt="search" class="search-icon" />
            <input type="search" name="searchOrg" class="search-input" placeholder="Busca un organizador" />
        </div>
    </div>
    <section>
        <div class="galery-container">
            <div class="img-container">
                <?= $lista ?>
            </div>
        </div>
    </section>
    <div class="marquee-container">
        <div class="marquee">
            <span>Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite</span>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="img\login\TaronvibeLogo+.png" alt="Logo TaronVibe" class="logo">
                <ul class="footer-links">
                    <li><a href="listadoEventos.php">Eventos</a></li>
                    <li><a href="listadoOrganizadores.php">Organizadores</a></li>
                    <li><a href="signIn.html">Iniciar sesión</a></li>
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
                        <input type="text" placeholder="Nombre" class="input1">
                        <input type="email" placeholder="Correo electrónico" class="input2">
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
</html>
