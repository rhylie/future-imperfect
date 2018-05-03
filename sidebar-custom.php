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

<section id="sidebar" class="widget-area sidebar-custom">

	<!-- Intro -->
		<section id="intro">
			<a href="#" class="logo"><img src="http://localhost/wp-content/uploads/2018/05/logo.jpg" alt="" /></a>
			<header>
				<h2>Future Imperfect</h2>
				<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
			</header>
		</section>

	<!-- Mini Posts -->
		<section>
			<div class="mini-posts">

				<!-- Mini Post -->
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content-sidebar', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

			</div>
		</section><!-- /. Ends Mini Posts -->


	<!-- Footer -->
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
			</div><!-- /.ends site-info -->
		</footer>

</section><!-- #secondary -->


