<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text hidden" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<?php

	if ( get_field('inverted_header')[0] == 'Yes' ) { $inv_header = "inverted"; } else { $inv_header = ""; }

	?>

    <header id="masthead" class="site-header <?php echo $inv_header; ?>" role="banner">

	    <nav class="navbar navbar-expand-lg navbar-dark" role="navigation">
		    <a class="navbar-brand" href="<?php echo site_url(); ?>">
			    <?php
			    $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
			    ?>
			    <img class="img-fluid" src="<?php echo $custom_logo__url[0]; ?>"/>
		    </a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
		    </button>

		    <?php
		    // Primary navigation menu.
		    wp_nav_menu(array(
			    'theme_location' => 'primary',
			    'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
			    'container'       => 'div',
			    'container_class' => 'collapse navbar-collapse',
			    'container_id'    => 'bs-navbar',
			    'menu_class'      => 'navbar-nav mr-auto',
			    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			    'walker'          => new WP_Bootstrap_Navwalker(),
		    ));

		    ?>
	    </nav>

    </header><!-- .site-header -->

    <div class="site-content">