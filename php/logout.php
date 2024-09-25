<?php
// Recuperamos la información de la sesión
session_start();

// Y la destruimos
session_destroy();
echo '<script type="text/javascript">alert("HAS CERRADO SESION");
    window.location.href="index.php"
    </script>';
?>