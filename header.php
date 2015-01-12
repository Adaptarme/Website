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
    <title><?php wp_title( '' ); ?></title>
    <?php echo insert_metas_in_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800%7CLato:400,700' rel='stylesheet' type='text/css'>
    <!-- build:css css/main.css --> 
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/libs/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/prism.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/base.css">
    <!-- endbuild -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
    <header class="header white" role="banner">
        <div class="container">
            <div class="nav-container">
                <nav class="navbar navbar-default" role="navigation">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" width="250" height="45" alt="Logo Adaptar.ME" />
                    </a>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                        <?php echo simple_menu_list( 'primary' ); ?>
                    </div>
                </nav>
            </div>
        </div><!-- .container -->
    </header>

    <div class="wrapper">
        <div class="container">
            <div class="row">