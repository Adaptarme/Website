<?php
/**
 * La cabecera para nuestro tema.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400%7CLato:300,400,700%7CRaleway:300,400'>
    <link rel='stylesheet' href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- build:css /wp-content/themes/dist/css/main.css --> 
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/prism.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/boostrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/wordpress.css">
    <!-- endbuild -->
</head>

<body <?php body_class(); ?>>

    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">Adaptar.ME</a></h1>
            </div><!-- .navbar-header -->
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <?php echo simple_menu_list( 'primary' ); ?>
            </nav>
        </div><!-- .container -->
    </header>

    <div class="wrapper">
        <div class="container-fluid">