<?php
/**
 * La cabecera para las páginas personalizadas.
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
    <title><?php wp_title( '' ); ?></title>
    <meta name="description" content="<?php echo get_bloginfo ( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,700,400,300%7COpen+Sans:400,700,800%7CLato:400,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,500,700,600,800,900,100,200,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/libs/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>

<body>
    <header class="header-2" role="banner">
        <div class="tini"></div>
        <div class="border-holder">
            <div class="container">
                <div class="nav-container">
                    <nav class="navbar navbar-default navbar-static" role="navigation">
                        <div class="navbar-header">
                            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png" class="img-responsive" alt="Logo Adaptar.ME"></a></h1>
                        </div>
                        <div class="collapse navbar-collapse pull-right">
                            <?php echo simple_menu_list( 'primary' ); ?>
                        </div>
                    </nav>
                </div><!-- .nav-container -->
                <div class="text-center">
                    <?php the_title( '<h2>', '</h2>' ); ?>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper-2 clearfix">
        <div class="container">  