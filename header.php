<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gannett
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!-- OneTrust Cookies Consent Notice start -->
	<script src="https://cdn.cookielaw.org/consent/acae8df4-3160-49bc-9d93-cc2392bb325f.js" type="text/javascript" charset="UTF-8"></script>
	<script type="text/javascript">
	function OptanonWrapper() { }
	</script>
	<!-- OneTrust Cookies Consent Notice end -->

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N4JLCZ4');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4JLCZ4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gannett' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
		<div id="toggleContainer" class="toggle-container menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
