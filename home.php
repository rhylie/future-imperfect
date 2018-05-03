<?php
/**
 * The home.php blog post index page, if this DOESNT exist index.php overrides.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future-imperfect
 */

get_header();
?>
	
	<!-- RENDER MOST RECENT BLOG POSTS MAIN AREA -->
	<div id="main" class="home-template"><!-- Display latest blog posts -->
		<?php
		if ( have_posts() ) : 

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div><!-- #primary -->

<?php

/* Render sidebar-custom.php */
get_sidebar( 'custom' );

get_footer();
