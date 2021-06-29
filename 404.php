<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gannett
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<div class="page-content">

				<img class="notfound-image" alt="The page cannot be found." src="<?php echo get_template_directory_uri() . '/images/404.png'; ?>">

				<h2>The page you requested was not found.</h2>

				<div class="wp-block-gannett-button-main centered-button">
					<div class="gannett-button center">
						<a target="" rel="noopener noreferrer" href="<?php echo get_home_url(); ?>" style="background-color:#414141">
							<span class="button_text" style="color:white">Return to home</span>
						</a>
					</div>				

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
