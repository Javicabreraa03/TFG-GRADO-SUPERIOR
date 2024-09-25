<?php
$nombreCookie = "mi_cookie_visitas";
# Para eliminar una cookie, se pone la fecha de expiración en una fecha anterior
$tiempoExpiracion = time() - 1;
setcookie($nombreCookie, "", $tiempoExpiracion);
# Y redireccionamos a index.php
header("Location: index.php");
?>

