<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-Lily
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( is_singular() ) :
			
			the_title( '<h1 class="entry-title">', '</h1>' );
			// the_content();
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					wp_lily_posted_on();
					wp_lily_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		
		<?php endif;?>


	</header><!-- .entry-header -->

	<?php wp_lily_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
		
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-lily' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		else:?>
			<div class="card mb-4">
			<div class="card-body">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				<?php if(has_post_thumbnail()): ?>
						<?php if ( 'post' === get_post_type() ) :?>
							<div class="entry-meta">
								<?php
								wp_lily_posted_on();
								wp_lily_posted_by();
								?>
							</div><!-- .entry-meta -->
					   <?php endif; ?>
					<img src="<?php the_post_thumbnail_url( 'smallest'); ?>" class="img-fluid">
				<?php endif; ?>
			<?php the_excerpt( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-lily' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-lily' ),
			'after'  => '</div>',
		) );

		?>

		<a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
		</div></div>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_lily_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
