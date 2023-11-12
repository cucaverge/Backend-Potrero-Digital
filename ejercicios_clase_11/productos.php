<table style="border: solid 2px black;">
    <tr>
        <td>Nombre del Producto</td>
        <td>Descripcion del Producto</td>
        <td>Imagen del Producto</td>
        <td>Acciones</td>
    </tr>
    <?php 
    $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

    $query = "SELECT * FROM productos";
    $resultado = mysqli_query($conexion, $query);

    while($unaFila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
            echo "<td>".$unaFila["nombre_producto"]."</td>";
            echo "<td>".$unaFila["descripcion_producto"]."</td>";
            echo "<td>".$unaFila["imagen_producto"]."</td>";
            echo "<td><a href='./eliminar_producto.php?id=".$unaFila["id_producto"]."'>Eliminar</a></td>";
        echo "</tr>";
    }

    mysqli_close($conexion);
    ?>