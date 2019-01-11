<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cibus</title>

<!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Feuille CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">

    <!-- banniere -->
        <div class="banniere">
            <img src="<?php echo get_bloginfo('template_url') ?>../img/ban.jpg"/>
        </div>
<<<<<<< HEAD
            <nav id="nav">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Articles</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">A Propos</a></li>
            </nav>
        </div>
    <div class="container">
=======

        <nav id="nav">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>

        </nav>

    </div>
<div class="container">
>>>>>>> 2e25ea5e6c7fcd3e657c3ca417a098e22ae7c9c8
