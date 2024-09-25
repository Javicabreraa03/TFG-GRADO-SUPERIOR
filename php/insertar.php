<?php
// Recibimos los datos del formulario y los almacenamos en variables
if(isset($_POST["btnMen"])){
    $usuario = $_POST["email"];
    $mensaje =$_POST["mensaje"];
}
// Validamos que ambos campos estén completos
if(empty($usuario) || empty($mensaje)) {
    echo '<div class= "alert alert-dark">Por favor complete todos los campos</div>';
    exit;
}

// Realizamos la consulta SQL a la base de datos
$conexion = new mysqli("localhost", "root", "", "formula1");
if($conexion->connect_error) {
    die("Error al conectarse a la base de datos: " . $conexion->connect_error);
}

$resultado = $conexion->query("SELECT * FROM login WHERE usuario='$usuario'");
$sql="INSERT INTO mensaje (usuario,mensaje) VALUES ('$usuario', '$mensaje')";

// Verificamos si la consulta devolvió algún resultado

    // Si hay resultados, el usuario es válido
    if($resultado->num_rows > 0) {
        if(mysqli_query($conexion,$sql)){
        echo '<script type="text/javascript">alert("MENSAJE ENVIADO");
            window.location.href="index.php"
            </script>';
            exit;
        }
   
    }
    else {
    // Si no hay resultados, el usuario no existe o es incorrecto
    echo '<script type="text/javascript">alert("USUARIO INCORRECTO. DEBE  ESTAR REGISTRADO PARA ENVIAR MENSAJES AL ADMINISTRADOR.");
    window.location.href="index.php"
    </script>';
}


?>