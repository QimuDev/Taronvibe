<?php
//back para cerrar sesión
session_start();
session_unset();
session_destroy();
header("Location: ../main.php");
exit();