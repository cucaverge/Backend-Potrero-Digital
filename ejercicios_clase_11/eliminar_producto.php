<?php 
$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

if(isset($_GET['id'])){
    $id_producto = $_GET['id'];

    $query = "DELETE FROM productos WHERE id_producto = $id_producto";
    $resultado = mysqli_query($conexion, $query);

    if($resultado === true){
        echo "Se eliminó el producto correctamente!";
    } else {
        echo "Hubo un error, vuelva a intentarlo nuevamente!";
    }
} else {
    echo "No se proporcionó un ID de producto válido para eliminar.";
}

mysqli_close($conexion);
?>