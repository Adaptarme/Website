<?php
/**
 * La cabecera para nuestro tema.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <title><?php wp_title(''); ?></title>
    <meta name="description" content="<?php echo get_bloginfo ( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,700,400,300%7COpen+Sans:400,700,800%7CLato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header id="header" class="fixed-nav"role="banner">
        <div class="container">
            <div class="nav-container">
                <nav class="navbar navbar-default navbar-static" role="navigation">
                    <div class="navbar-header">
                        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="Logo Adaptar.ME"></a></h1>
                    </div>
                    <div class="collapse navbar-collapse bs-js-navbar-scrollspy pull-right">
                        <?php //echo simple_menu_list( 'primary' ); ?>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalContact">Contacta con nosotros</button>
                    </div>
                </nav>
            </div>
        </div><!-- .container -->
    </header>
    <?php if ( is_home() ) : ?>
    <div id="common">
        <div class="header-overlay">
            <div class="container">
                <h1>Hola.</h1>
                <p>Somos entusiastas de las últimas tecnologías web y el software libre.</p>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="container">
    <div class="row">        