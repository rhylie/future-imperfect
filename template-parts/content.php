<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future-imperfect
 */

?>


<!-- <article class="post">
	<header>
		<div class="title">
			<h2><a href="#">Magna sed adipiscing</a></h2>
			<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
		</div>
		<div class="meta">
			<time class="published" datetime="2015-11-01">November 1, 2015</time>
			<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
		</div>
	</header>
	<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
	<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
	<footer>
		<ul class="actions">
			<li><a href="#" class="button big">Continue Reading</a></li>
		</ul>
		<ul class="stats">
			<li><a href="#">General</a></li>
			<li><a href="#" class="icon fa-heart">28</a></li>
			<li><a href="#" class="icon fa-comment">128</a></li>
		</ul>
	</footer>
</article> -->


<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
	<header class="tparts-content">

		<div class="title">
			<?php
			if ( is_singular() ) :
				the_title( '<h2>', '</h2>' );
				the_content();
			else :
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				the_content();
			endif;
			?>
		</div><!-- /.ends title -->

		<?php
		if ( 'post' === get_post_type() ) :
		?>

			<div class="meta">
				<?php
				future_imperfect_posted_on();
				future_imperfect_posted_by();
				?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php future_imperfect_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'future-imperfect' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'future-imperfect' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php future_imperfect_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
