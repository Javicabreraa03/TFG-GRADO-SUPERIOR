
    <?php
// Recibimos los datos del formulario y los almacenamos en variables
if(isset($_POST["btnEntrar"])){
    // Recuperamos la información de la sesión
session_start();

// Y la destruimos
session_destroy();
    $usuario = $_POST["email"];
    $clave = $_POST["contrasenya"];
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

// Verificamos si la consulta devolvió algún resultado

    // Si hay resultados, el usuario es válido

    if ($usuario == "javai2002@gmail.com" && $clave == "2002") {
        // almacenamos el usuario en la sesión
        session_start();
        $_SESSION['usuario'] = $usuario;
        echo '<script type="text/javascript">alert("BIENVENIDO JAVIER(ADMIN)");
    window.location.href="index.php"
    </script>';
    }
    else if($resultado->num_rows > 0) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        echo '<script type="text/javascript">alert("HAS INICIADO SESIÓN");
    window.location.href="index.php"
    </script>';
    exit;
        // cargamos la página principal
    header("Location: index.php");
    exit;
    }
    else {
    // Si no hay resultados, el usuario no existe o la contraseña es incorrecta
    echo '<script type="text/javascript">alert("USUARIO O CONTRASEÑA INCORRECTA");
    window.location.href="index.php"
    </script>';
}


?>

