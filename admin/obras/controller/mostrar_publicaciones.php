<?php
    include("../../conection.php");

    if($conexion) {

        $sql = 'SELECT contenido.id, titulo, categoria, nombre
        FROM contenido INNER JOIN autor ON autor_id = autor.id';

        $resultado = pg_query($conexion, $sql);

        while($row = pg_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "</tr>";
        }
        

    } else {
        die("La conexión falló");
    }
?>