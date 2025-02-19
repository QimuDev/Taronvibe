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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/login/taronvibeLogo.png" type="image/png" />
    <title>Lista Eventos</title>
    <link rel="stylesheet" href="./css/listadoEventos.css" />
  </head>

  <body>
    <section class="nav-container">
    <nav>
      <div class="nav-logo">
        <a href="index.html">
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
        <h1 class="texto">Descubre nuestros <br />eventos ;)</h1>
        <img src="img/listadoOrg/text.png" alt="ola" class="ola" />
      </div>
    </section>

    <div class="marquee-container1">
      <div class="marquee">
      <span>
          Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp;
        </span>
      </div>
    </div>
    <div class="searchbar-container">
      <div class="searchbar">
        <img
          src="./img/listadoOrg/search.svg"
          alt="search"
          class="search-icon"
        />
        <input
          type="search"
          name="saerchOrg"
          class="search-input"
          placeholder="Busca un organizador"
        />
      </div>
    </div>

    <!-- <?=$lista?> -->
    <section>
      <div class="galery-container">
        <div class="img-container">
          <!-- Tarjeta ejemplo - repetir estructura -->
          <div class="card">
            <div class="galery-image a">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <!-- Repetir para todas las imágenes -->
          <div class="card">
            <div class="galery-image b">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <!-- ... resto de las tarjetas con misma estructura ... -->
          <div class="card">
            <div class="galery-image c">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image d">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image e">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image f">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image g">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image h">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image i">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image j">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image k">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="galery-image l">
              <div class="contenido-container"></div>
            </div>
            <div class="texto-container">
              <ul>
                <li class="nombre-evento">Nombre del evento</li>
                <li class="ubicacion-evento"><a href="">Ubicacion del evento</a></li>
                <li>22/02/2025</li>
                <li class="imagenes-contenido">
                  <img src="./img/main/icons/oso.svg" alt="oso" />
                  <img src="./img/main/icons/arbol.svg" alt="arbol" />
                  <img src="./img/main/icons/libro.svg" alt="libro" />
                </li>
              </ul>
            </div>
          </div>    
        </div>
      </div>
    </section>

    <div class="marquee-container1">
      <div class="marquee">
      <span>
          Descubre, disfruta y repite &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          &nbsp;&nbsp;&nbsp;&nbsp;
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp; Descubre, disfruta y repite
          <img
            src="./img/main/images/marqeeIcon.png"
            alt=""
            style="height: 1.5rem; width: auto; vertical-align: middle"
          />
          &nbsp;&nbsp;&nbsp;&nbsp;
        </span>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-left">
        <img
            src="img\login\TaronvibeLogoNav.png"
            style="height: 3.9rem; width: 11.2rem;"
            alt="Logo TaronVibe"
            class="logo"
          />
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
              <input type="text" placeholder="Nombre" class="input1" />
              <input
                type="email"
                placeholder="Correo electrónico"
                class="input2"
              />
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
