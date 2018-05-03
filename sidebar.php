<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package future-imperfect
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area">




	<!-- Intro -->
		<section id="intro">
			<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
			<header>
				<h2>Future Imperfect</h2>
				<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
			</header>
		</section>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>


	<?php
	if ( have_posts() ) :

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


	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'future-imperfect' ) ); ?>">
				<?php

				printf( esc_html__( 'Proudly powered by %s', 'future-imperfect' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php

				printf( esc_html__( 'Theme: %1$s by %2$s.', 'future-imperfect' ), 'future-imperfect', '<a href="http://underscores.me/">John Doe</a>' );
				?>
		</div>
	</footer>

</aside><!-- #secondary -->


