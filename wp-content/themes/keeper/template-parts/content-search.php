<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package keeper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php keeper_post_thumbnail(); ?>
	<div class="content-wrapper">
		<header class="entry-header">
			<?php
			if ( is_singular() && ! is_front_page() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<?php if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					keeper_posted_by();
					keeper_posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			if ( is_singular() && ! is_front_page() ) :
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'keeper' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
			else :

				the_excerpt();	
				
			 endif;

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'keeper' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php /** keeper_the_category_list(); */?>
			<?php keeper_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
