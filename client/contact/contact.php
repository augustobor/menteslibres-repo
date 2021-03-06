<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include('../../meta_tags.php');
    ?>
    
    <link rel="shortcut icon" href="../../favicon.png">

    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/tablet.css" media="screen and (min-width: 680px)">
    <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="screen and (min-width: 800px)"> 
    
    <title>Contacto</title>
</head>
<body>

    <header>
        
    </header>

    <menu class="menu-mobile">
        <img id="menuIcon" src="../../assets/burger-menu.svg" alt="hamburger-icon"/>
        <ul class="activate" id="menu-content">
            <li><a href="../main/index.php">Inicio</a></li>
            <li><a href="../about/about.php">Quiénes somos</a></li>
            <li><a href="../obras/obras.php">Obras</a></li>
            <li><a href="../news/news.php">Noticias</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </menu>

    <menu class="menu-desktop">
        <ul>
            <li><a href="../main/index.php">Inicio</a></li>
            <li><a href="../about/about.php">Quiénes somos</a></li>
            <li><a href="../obras/obras.php">Obras</a></li>
            <li><a href="../news/news.php">Noticias</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </menu>


    <section>
        <p>
            ¿Qué te parecen nuestras obras literarias? No dudes en enviarnos tus comentarios. 
            Si hay algún autor que quieras recomendarnos para leer, sería genial.
        </p>

        <form action="" id="form">
            <input name="name" id="contact--name" type="text" placeholder="Nombre" required/>
            <input name="email" id="contact--email" type="email" placeholder="Email" required/>
            <input name="matter" id="contact--thread" type="text" placeholder="Asunto" required/>
            <textarea name="message" id="contact--message" rows=10 cols="30" placeholder="Mensaje" required></textarea>
            <button id="submit-button" type="submit" form="form">Enviar</button>
        </form>
        <a id="mail-button" href="mailto:menteslibres.pabellonliterario@gmail.com"></a>
    </section>

    <section class="cafecito">

        <p>
            En el enlace del Cafecito pueden ayudarnos en la producción de ejemplares para 
            donarlos a escuelas, bibliotecas y otros Pabellones Literarios.
        </p>
        <a href="https://cafecito.app/sebaiako" target="blank" class="cafe">
            <img src="./imgs/coffe.svg" alt="cafecito"/>
            <p>Cafecito</p>
        </a>
    </section>
    <script src="../menu.js"></script>
    <script src="./mail.js"></script>
</body>