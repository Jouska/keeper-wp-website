<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package keeper
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image">
	<?php the_post_thumbnail('keeper-full-bleed'); ?>
	</figure>	
	<?php }  ?>
	<header class="entry-header--single">
		<?php /** keeper_the_category_list(); */?>
		<?php
		if ( is_single() && ! is_front_page() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="entry-meta">
			<?php keeper_posted_by(); ?>
			<?php keeper_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->


	<div class="single-wrapper">
		<section class="post-content">
			
			<?php
			if ( !is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div class="post-content__wrap">
				<div class="entry-meta">
					<?php keeper_posted_by(); ?>
					<?php keeper_posted_on(); ?>
				</div><!-- .entry-meta -->
				<div class="post-content__body">
			<?php
			endif; ?>
					<div class="entry-content">
						<?php
							the_content( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'keeper' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'keeper' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php keeper_entry_footer(); ?>
					</footer><!-- .entry-footer -->
			<?php
			if ( !is_active_sidebar( 'sidebar-1' ) ) : ?>
				</div><!-- .post-content__body -->
			</div><!-- .post-content__wrap -->
			<?php endif; ?>
			
			<?php
			keeper_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		</section><!-- .post-content -->
		
		<?php /**
		get_sidebar();
		 */
		?>
	</article><!-- #post-## -->
</div>