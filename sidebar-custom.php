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
			<?php the_custom_logo(); ?><!-- Render the site logo, if it has been added -->
			<header>
				<h2 class="blog_info_title"><?php bloginfo( 'name' ); ?></h2><!-- bloginfo( 'string' ) object contains various site information -->
				<p><?php bloginfo( 'description' ); ?></p>
			</header>
		</section>

	<!-- Mini Posts -->
		<section>
			<div class="mini-posts">

				<!-- Mini Post -->
					<?php $catquery = new WP_Query( 'cat=16&posts_per_page=3' ); ?>
					<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
						<article class="mini-post">
							
							<header>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<div class="meta"><!-- Meta information has been customized to further accomodate the design in '/inc/template-tags.php' -->
									<?php
										future_imperfect_posted_on();
										future_imperfect_posted_by_sidebar();
									?>
								</div><!-- .entry-meta -->

<!-- 								<time class="published" datetime="2015-10-20">October 20, 2015</time>
								<a href="#" class="author"><img src="http://localhost/wp-content/uploads/2018/05/logo.jpg" alt="" /></a> -->
							</header>
							<?php future_imperfect_post_thumbnail(); ?>
							<!-- <a href="#" class="image"><img src="http://localhost/wp-content/uploads/2018/05/pic06.jpg" alt="" /></a> -->

						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>


				<!-- <article class="mini-post">
					<header>
						<h3><a href="#">Vitae sed condimentum</a></h3>
						<time class="published" datetime="2015-10-20">October 20, 2015</time>
						<a href="#" class="author"><img src="http://localhost/wp-content/uploads/2018/05/logo.jpg" alt="" /></a>
					</header>
					<a href="#" class="image"><img src="http://localhost/wp-content/uploads/2018/05/pic06.jpg" alt="" /></a>
				</article> -->

			</div><!-- /.ends mini-posts -->
		</section>


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


