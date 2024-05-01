<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" type="image/png" href="/public\assets\favicon-32x32.png">
        <meta name="description" content="Viphon Limited | Media Construction Specialists based in the UK | Specifying, Managing and Delivering complex media projects">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="public/styles/styles.css">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/0d8ed20400.js" crossorigin="anonymous"></script>

    </head>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <nav id="navbar-homepage" class="">
                <div class="nav-container">
                    <div class="nav-logo">
                        <h2><a href="/">Viphon</a></h2>
                    </div>
                    <div class="menu-btn">
                        <div class="menu-btn_burger"></div>
                    </div>
                    <div id="menu" class="menu-overlay">
                        <ul class="menu-content">
                                <li class="b-nav-list-item"><a href="/#about-home" onclick="closeNav()">About</a></li>
                                <li class="b-nav-list-item"><a href="services">Services</a></li>
                                <li class="b-nav-list-item"><a href="project">Projects</a></li>
                                <li class="b-nav-list-item"><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    
    <body>

    <!-- Page Content -->
    <?php

        echo $content;

    ?>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <a href="services">Services</a>
            <a href="project">Projects</a>
            <a href="contact">Contact</a>
        </div>
        <div class="footer-end">
            <p>&copy; Copyright 2024 | Viphon Limited </p>
        </div>

    </footer>

    <!-- JS -->
    <script src="js/home-scripts.js" async defer></script>

    </body>
</html>