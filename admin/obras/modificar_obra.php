<?php
    session_start();
    
    include("../../conection.php");
    if(!isset($_SESSION['admin'])) {
        header("Location: ../login/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('../../meta_tags.php');
    ?>
    
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="../styles/desktop.css" media="screen and (min-width: 800px)"> 
    <title>Admin | publicación</title>
</head>
<body>

    <a href="../main/index.php" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php
        include('../mensaje.php');
    ?>

    <h1>Modificar publicación</h1>
    <h2>Seleccione la fila que desea modificar</h2>
    <form class="filter" action="" method="get">
        <input class="filter-value" name="argument" type="text" placeholder="Ingrese su texto aquí"/>
        <select class="filter-value" name="feature" required>
            <option>titulo</option>
            <option>nombre</option>
        </select>
        <input class="filter-submit" type="submit" value="Buscar"/>
    </form>
    <table>
        <thead>
            <tr>
                <th>id_obra</th>
                <th>Título</th>
                <th>Categoría</th>
                <th>Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php

                if($conexion) {

                    if(isset($_GET['argument'])) {

                        $sql = "SELECT contenido.id, titulo, categoria, nombre
                        FROM contenido INNER JOIN autor ON autor_id = autor.id
                        WHERE $_GET[feature] LIKE '%$_GET[argument]%';";

                        $resultado = pg_query($conexion, $sql);

                        while($row = pg_fetch_row($resultado)) {
                            echo "<tr>";
                            echo "<td>$row[0]</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>$row[3]</td>";
                            echo "</tr>";
                        }

                        unset($_GET['argument']);

                    } else {
                        include('./controller/mostrar_publicaciones.php');
                    }
                }
            ?>
        </tbody>
    </table>
    <script>
        const listElements = document.querySelectorAll('tr');

        listElements.forEach(listElement => {

            listElement.addEventListener('click', () => {
                
                window.location = "./modificar_obra_edicion.php?titulo=" + listElement.querySelector('td').textContent;
                
            })
        })
    </script>
</body>