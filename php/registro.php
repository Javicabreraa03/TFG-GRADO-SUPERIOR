<?php
// Recibimos los datos del formulario y los almacenamos en variables
if(isset($_POST["nuevoUser"])){
    $usuario = $_POST["email"];
    $clave =$_POST["contrasenya"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $postal = $_POST["cod_post"];
    $ciudad= $_POST["ciudad"];


}
// Validamos que ambos campos estén completos
if(empty($usuario) || empty($clave)) {
    echo '<div class= "alert alert-dark">Por favor complete todos los campos</div>';
    exit;
}

// Realizamos la consulta SQL a la base de datos
$conexion = new mysqli("localhost", "root", "", "formula1");
if($conexion->connect_error) {
    die("Error al conectarse a la base de datos: " . $conexion->connect_error);
}

$resultado = $conexion->query("SELECT * FROM login WHERE usuario='$usuario' AND contrasenya='$clave'");
$sql="INSERT INTO login (usuario,contrasenya,nombre,apellidos,cod_postal,ciudad) VALUES ('$usuario', '$clave','$nombre','$apellidos','$postal','$ciudad')";

// Verificamos si la consulta devolvió algún resultado

    // Si hay resultados, el usuario es válido
    if($resultado->num_rows > 0) {
        
    echo '<script type="text/javascript">alert("ESTE USUARIO YA ESTABA CREADO, USE OTRO");
    window.location.href="index.php"
    </script>';
    exit;
    }
    else {
        if(mysqli_query($conexion,$sql)){
// Si no hay resultados, el usuario no existe
    echo '<script type="text/javascript">alert("USUARIO CREADO");
    window.location.href="index.php"
    </script>';
    
    exit;
        }
    

}


?>