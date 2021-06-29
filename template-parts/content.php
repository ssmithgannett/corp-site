<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gannett
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
				<?php
					
				?>
				<!--<a href="<?php 
					// 	$categories = get_the_category();

					// if( ! empty( $categories ) ) {
					//	echo get_home_url() . '/' . esc_html( $categories[0]->slug);
					// }
					?>">
					<?php 
					//	$categories = get_the_category();

					// if( ! empty( $categories ) ) {
					//	echo esc_html( $categories[0]->name);
					// }
					?>
				</a>-->
				
					<?php
						$categories = get_the_category();
						$i = 0;
						foreach ($categories as $key => $value) {
							if ($i == 0) {
								$i++;
								continue;
							}
							?><label class="pr-category"><?php echo $value->name;?></label><?php
							$i++;
						}
					
						if ($categories[1]->name == '') {
							?><label class="pr-category"><?php echo esc_html( $categories[0]->name);?></label><?php
						}
						if ($categories[0]->name == 'Uncategorized') {
							?>
							<script>
								jQuery('.pr-category').hide()
							</script>
							<?php
						}
					?>	
				

			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php gannett_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gannett' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gannett' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
