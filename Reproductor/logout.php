<?php
session_start();
session_unset();    // borrar variables de sesion
session_destroy(); // destruir la sesion
header("Location: index.php"); // Redireccionar al index
?>