<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package keeper
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header article-intro keeper-blog-intro">
				<h2 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'keeper' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, tempore! Mollitia eos doloremque eum dolorem accusantium laudantium laborum reiciendis hic molestiae magni et ea cum, suscipit asperiores repellendus unde fuga!</p>
				<?php get_search_form(); ?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
