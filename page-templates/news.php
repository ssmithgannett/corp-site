<?php /* Template Name: News Page */ ?>
<?php
/**
 * The template for displaying tag pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gannett
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <?php if ( have_posts() ) : ?>
        <div class="entry-content">
            <div class="tag-section">
                <h1 class="tag_section_header">In the News</h1>
            </div>
        <?php
            /* Start the Loop */

            $the_query = new WP_Query( 'tag=in-the-news' );
            
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?><div class="post-tag-item">
                        <h2><a href="<?php echo post_permalink() ?>"><?php the_title(); ?></a></h2><?php
                        the_excerpt(); ?>
                        <div class="gannett-button-small">
                            <a class="tag-read-more" href="<?php echo post_permalink() ?>">Read more</a>
                        </div>
                    </div>
                <?php
                }
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();

		else :

			get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </div>
    <?php
    get_footer();
    ?>