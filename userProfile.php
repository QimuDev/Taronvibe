<?php
include_once('./php/configuration.php');

$sql = "SELECT * FROM event";
$result = $conn->query($sql);

$tabla = "<div class='container'><div class='row'>"; // Inicio del contenedor y fila
if ($result->num_rows > 0) {    
    // Generar las filas dentro del bucle
    while ($row = $result->fetch_assoc()) {
        $tabla .= "
            <div class='col col-12 col-sm-6 col-md-4 col-lg-3'>
                <div class='card'>
                    <img src='./" . $row["image"] . "' alt='Imagen de " . $row["name_event"] . "' class='img-fluid'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row['name_event'] . "</h5>
                        <p class='card-text'><span class='price'>📍" . $row['postal_code'] . "</span></p>
                        <p class='card-text'>📅: " . $row['date_event'] . "</p>
                        <div class='event-icons'>
                            <span class='icon'><img src='./img/img_userProfile/oso-naranja.svg'></span>
                            <span class='icon'><img src='./img/img_userProfile/oso-naranja.svg'></span>
                            <span class='icon'><img src='./img/img_userProfile/oso-naranja.svg'></span>
                        </div>
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
    <link rel="icon" href="img/login/taronvibeLogo.png" type="image/png">
    <title>Perfil</title>
    <!-- CSS personalizado -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400..800&family=Happy+Monkey&family=Lora:ital,wght@0,400..700;1,400..700&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/userProfile.css">
</head>
<body>
    <!-- NAV MENÚ -->
    <nav>
    <div class="nav-logo">
        <a href="main.html">
            <img src="img/login/TaronvibeLogoNav.png" alt="Logo" />
        </a>
    </div>
        <div class="nav-profile">
            <ul class="nav-list">
                <li class="nav-item"><a href="#Eventos">Eventos</a></li>
                <li class="nav-item"><a href="listadoOrganizadores.html">Organizadores</a></li>
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
            <img height="370px" width="370px" src="./img/img_userProfile/Property 1=Rectangle 40.png" alt="Imagen del usuario">
        </div>
        <div class="profile-details">
            <h2>María Ferrer García</h2>
            <div class="profile-icons">
                <span class="icon"><img src="./img/img_userUpdate/svg/arbol-naranja.svg"></span>
                <span class="icon"><img src="./img/img_userUpdate/svg/comida-naranja.svg"></span>
                <span class="icon"><img src="./img/img_userUpdate/svg/libro-naranja.svg"></span>
            </div>
            <p>mariafg98@gmail.com</p>
            <p>23/08/1998</p>
        </div>
        <a style="text-decoration: none;" href="./userUpdate.html"><button class="btn-save"><img src="./img/img_userProfile/lapiz-negro.svg" alt=./img/img_userProfile/lapiz-blanco.svg>Editar datos</button></a>
    </div>

    <!-- TUS GUSTOS -->
    <div class="wrapper-container" style="margin-top: 150px;">
        <h1>Tus gustos</h1>
        <div class="wrapper">
            <button class="option active" onclick="toggleButton(event)">Favoritos</button>
            <button class="option" onclick="toggleButton(event)">Pasados</button>
            <div class="slider"></div>
        </div>
        <?php echo $tabla ?>
        <div class="pagination">
            <button class="page active" onclick="changePage(1)">1</button>
            <button class="page" onclick="changePage(2)">2</button>
            <button class="page" onclick="changePage(3)">3</button>
            <button class="page" onclick="changePage(4)">4</button>
            <button class="page" onclick="changePage(5)">5</button>
            <span class="dots">...</span>
            <button class="page" onclick="changePage(10)">10</button>
        </div>
    </div>

    <div class="marquee-container">
        <div class="marquee">
            <span>Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite. &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite</span>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="img\login\TaronvibeLogo+.png" alt="Logo TaronVibe" class="logo">
                <ul class="footer-links">
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Organizadores</a></li>
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

function changePage(pageNumber) {
    document.querySelectorAll('.page').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`.page:nth-child(${pageNumber})`)?.classList.add('active');
}
</script>
<script src="js/userProfile.js"></script>
</html>