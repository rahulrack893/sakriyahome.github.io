<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sparkle_Store
 */

get_header(); ?>

<?php do_action( 'sparklestore-breadcrumbs' ); ?>

<div class="inner_page">
	<div class="container">
	    <div class="row">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) : 

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_pagination( 
		            		array(
							    'prev_text' => esc_html__( 'Prev', 'sparklestore' ),
							    'next_text' => esc_html__( 'Next', 'sparklestore' ),
							)
			            );

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		       
		    <?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer();