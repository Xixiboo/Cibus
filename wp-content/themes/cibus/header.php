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
    
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
    <!-- banniere -->
        <div class="banniere">

        </div>
        <nav id="nav">
            <?php wp_nav_menu( array( ‘theme_location’ => ‘menu-principal’ ) ); ?>
            <li><a href="#"></a>Accueil</li>
            <li><a href="#"></a>Articles</li>
            <li><a href="#"></a>Contacts<li>
            <li><a href="#"></a>A Propos</li>
        </nav>
    </div>
<div class="container">