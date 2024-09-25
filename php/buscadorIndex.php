<?php
// Realizamos la consulta SQL a la base de datos
$conexion = new mysqli("localhost", "root", "", "formula1");
if($conexion->connect_error) {
    die("Error al conectarse a la base de datos: " . $conexion->connect_error);
}
 

//Realizamos la extracción de datos y consulta.

if(isset($_GET['enviar'])){
    $busqueda= $_GET['buscar'];

    $resultado= $conexion->query("SELECT nombre,id FROM buscador WHERE nombre LIKE '%$busqueda%'");
    
    $array=$resultado->fetch_array();

    $id=$array['id'];
    //var_dump($id);
    //var_dump($resultado);


    if($resultado->num_rows > 0){

        if($id>0 && $id<22){
            echo '<script type="text/javascript">
            alert("SU RESULTADO SE ENCUENTRA EN ESTA PÁGINA");
    window.location.href="paginas/pilotos.php"
    </script>';
            
        }
        else if($id>21 && $id<33){
            echo '<script type="text/javascript">
            alert("SU RESULTADO SE ENCUENTRA EN ESTA PÁGINA");
    window.location.href="paginas/equipos.php"
    </script>';
            
        }
        else if($id>32 && $id<36){
            echo '<script type="text/javascript">
            alert("SU RESULTADO SE ENCUENTRA EN ESTA PÁGINA");
    window.location.href="paginas/clasificacion.php"
    </script>';
            
        }
        else if($id>35 && $id<62){
            echo '<script type="text/javascript">
            alert("SU RESULTADO SE ENCUENTRA EN ESTA PÁGINA");
    window.location.href="paginas/calendario.php"
    </script>';
            
        }
        
        else if($id>62 && $id<70){
            echo '<script type="text/javascript">
            alert("SU RESULTADO SE ENCUENTRA EN ESTA PÁGINA");
    window.location.href="index.php"
    </script>';
            
        }
        else if($id=62){
            echo '<script type="text/javascript">
            alert("SU RESULTADO SE ENCUENTRA EN ESTA PÁGINA");
    window.location.href="paginas/cla_pilotos.php"
    </script>';
            
        }
    }
    else{
        echo '<script type="text/javascript">
            alert("SU BÚSQUEDA NO HA OBTENIDO RESULTADO");
    window.location.href="index.php"
    </script>';
    }

}
?>
