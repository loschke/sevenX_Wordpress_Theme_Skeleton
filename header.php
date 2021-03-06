<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    
    <!-- add custom title support in functions.php -> title output within wp_head() 
    <title><?php wp_title(''); ?></title>
    -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//google-analytics.com">

    <?php wp_head(); ?>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
    
</head>
<body <?php body_class(); ?>>

<!-- wrapper -->
<div class="wrapper">

    <header class="header" role="banner">

        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
            </a>
        </div>

        <!-- primary navigation -->
        <nav class="nav" role="navigation">
            <?php
            wp_nav_menu( array(
                'menu' => 'Main-Menu',
                'theme-location'  =>  'primary-nav'
            ) );
            ?>
        </nav>
        <!-- /primary navigation -->

    </header>