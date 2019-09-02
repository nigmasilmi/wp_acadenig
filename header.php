<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Academia by Nigm4</title>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Academia</strong></a></h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                    <ul>
                        <li><a href="<?php echo site_url('/nosotros') ?>">Nosotros</a></li>
                        <li><a href="#">Programas</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Sedes</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </nav>
                <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Acceder</a>
                    <a href="#" class="btn btn--small  btn--dark-orange float-left">Registrarse</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header>