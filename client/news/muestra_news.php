<?php
    session_start();
    $_SESSION['titulo'] = $_REQUEST['titulo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include('../../meta_tags.php');
    ?>
    
    <link rel="shortcut icon" href="../../favicon.png">

    <link rel="stylesheet" type="text/css" href="./controller/styles/style.css">
    <link rel="stylesheet" type="text/css" href="./controller/styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./controller/styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title></title>
</head>
<body>

    <a href="../news/news.php" class="btn-home">
        <img src="../../assets/arrow-left.svg" alt='botón'>
    </a>

    <?php 
        include('./controller/muestra_news_pgsql.php');
    ?>

</body>