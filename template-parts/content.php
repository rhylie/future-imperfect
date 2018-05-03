<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future-imperfect
 */

?>

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

			<div class="meta"><!-- Meta information has been customized to further accomodate the design in '/inc/template-tags.php' -->
				<?php
					future_imperfect_posted_on();
					future_imperfect_posted_by();
				?>
			</div><!-- .entry-meta -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php future_imperfect_post_thumbnail(); ?><!-- Outputs post thumbnail. 
											        TODO: Need to work on the responsive rendering for mobile, tablet etc. -->

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

	<footer>
		<ul class="actions">
			<li><a href="<?php the_permalink(); ?>" class="button big">Continue Reading</a></li>
		</ul>
		<ul class="stats">
			<li><a href="#">General</a></li><!-- TODO: Remove static content, generate dynamic current post category -->
			<li><a href="#" class="icon fa-heart">455</a></li>
			<?php $total_post_comments = get_comments_number( $post_id ); ?><!-- Store the total number of comments into '$total_post_comments' -->
			<li><a href="#" class="icon fa-comment"><?php echo $total_post_comments ?></a></li>
		</ul>
	</footer>

</article><!-- #post-<?php the_ID(); ?> -->
