<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<section id="primary" class="site-content">
<div id="content" role="main" class="category-page">

	<?php
	// Check if there are any posts to display
	if ( have_posts() ) : ?>

	<h1 class="category-title"><?php echo single_cat_title( '', false ); ?></h1>
	
	</div>

	<div class="category-posts">
		<?php

		// The Loop
		while ( have_posts() ) : the_post();
		
		?>

		<div class="category-post">
		 <a href="<?php echo get_post_permalink() ?>">
		 	<h3><?php the_title(); ?></h3>
             <p><?php the_excerpt(); ?></p>
             <div class="read-more">Read more <div class="more-arrow"></div></div>
		 </a>
		

		</div><!-- content-box -->

		<?php endwhile;

		else: ?>
		<p>Sorry, no posts matched your criteria.</p>


		<?php endif; ?>
	</div><!-- category-posts -->
</div><!-- category-page -->
</section>


<?php get_footer(); ?>
