<?php
/**
 * The header for our theme
 *
 * @link  https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @see  `includes/frontend/class-header.php`
 *
 * @package    Reykjavik
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.0.0
 */

/**
 * HTML
 */

	do_action( 'tha_html_before' );

?>

<html <?php language_attributes(); ?> class="no-js">

<head>

<?php

/**
 * HTML head
 */

	do_action( 'tha_head_top' );

	do_action( 'tha_head_bottom' );

	wp_head();

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158299736-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-97624362-1');
</script>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel='stylesheet' id='reykjavik-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C700%7COpen+Sans%3A300%2C400%2C700&#038;subset=latin&#038;ver=2.0.3' type='text/css' media='screen' />
</head>


<body <?php body_class(); ?>>

<?php

/**
 * Body
 */

	do_action( 'tha_body_top' );



/**
 * Header
 */

	if ( ! apply_filters( 'wmhook_reykjavik_disable_header', false ) ) {

		do_action( 'tha_header_before' );

		do_action( 'tha_header_top' );

		do_action( 'tha_header_bottom' );

		do_action( 'tha_header_after' );

	}



/**
 * Content
 */

	do_action( 'tha_content_before' );

	do_action( 'tha_content_top' );
