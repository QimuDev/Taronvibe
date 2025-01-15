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
    <title>Document</title>
    <link rel="stylesheet" href="./css/listadoOrganizadores.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400..800&display=swap" rel="stylesheet">
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
</body>
</html>