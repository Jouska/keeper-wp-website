<?php
/**
 * 
 * Template Name: Keeper Case Study Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package keeper
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
				<div class="case-study">
					<div class="case-study-header-wrapper">
						<header>
							<h1 class="entry-title">
								NEW<br>DIORAMA<br>THEATRE<br><span>2018</span>
							</h1>
								<?php
								// while ( have_posts() ) :
								// 	the_post();

								// 	get_template_part( 'template-parts/content', 'page' );

								// 	// If comments are open or we have at least one comment, load up the comment template.
								// 	if ( comments_open() || get_comments_number() ) :
								// 		comments_template();
								// 	endif;

								// endwhile; // End of the loop.
								?>
						</header>
						<div class="case-study-text-block">
							<p class="text-justified lead">The New Diorama Theatre needed a new, cohesive look to launch their innovative programming model. Since it launched back in July of 2018, they've sold 96% of their tickets so far. 
							<br><br>
							That's a bump of 400%.
							</p>
						</div>
						<div class="case-study-text-block">							
							<h2>Responsibilities</h2>
							<p class="text-center">&bull; Strategy &bull; Key Art<br>
							&bull; Branding &bull; Print <br>&bull; Photography
							&bull; Illustration <br>&bull; Animation
							</p>
						</div>
						<div class="case-study-text-block">
							<h2>Partners</h2>
							<p class="text-center">New Diorama Theatre<br>
							Cantate Communications<br>
								Borkowski
							</p>
						</div>
					</div>
				<article>
					<section class="case-study-cell ndt-orange-block">
						<div class="image-wrapper">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/ndt-logo-rz.jpg">
							
						</div>
					</section>
					<section class="case-study-cell ndt-beige-block">
						<div class="image-wrapper">
							<img srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-print-400.jpg 400w,
										 <?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-print-800.jpg 800w,
										 <?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-print-1920.jpg 1920w"
								 sizes="(max-width: 600px) 400px,
										(max-width: 1024px) 800px,
										1920px"
								 src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-print-1920.jpg" alt="NDT Print">
							<div class="case-study-cell__caption">
								<caption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatum magnam culpa assumenda illum obcaecati quaerat a.</caption>
							</div>
						</div>
					</section>
					<section class="case-study-cell ndt-gray-block">
						<div class="image-wrapper">
							<!-- <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-cover-1920.jpg" alt="NDT Cover"> -->

							<img srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-cover-400.jpg 400w,
										 <?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-cover-800.jpg 800w,
										 <?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-cover-1920.jpg 1920w"
								 sizes="(max-width: 600px) 400px,
										(max-width: 1023px) 800px,
										(min-width: 1024px) 1920px,
										400px"
								 src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-cover-1920.jpg" alt="NDT Cover">
								 <div class="case-study-cell__caption">
									<caption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatum magnam culpa assumenda illum obcaecati quaerat a.</caption>
								</div>
						</div>
					</section>
					<section class="case-study-cell ndt-gray-spread-1">
						<div class="image-wrapper image-2x">		
							<img srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-spread1-400.jpg 400w,
										 <?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-spread1-800.jpg 800w,
										 <?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-spread1-1920.jpg 1920w"
								 sizes="(max-width: 600px) 400px,
										(max-width: 1024px) 800px,
										1920px"
								 src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-spread1-1920.jpg" alt="NDT Spread 1">
								 <div class="case-study-cell__caption">
									<caption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatum magnam culpa assumenda illum obcaecati quaerat a.</caption>
								</div>
						</div>
					</section>
					<section class="case-study-cell ndt-gray-spread-2">
						<div class="image-wrapper image-2x">
							<img srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-spread2-400.jpg 400w,
											<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-spread2-800.jpg 800w,
											<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-spread2-1920.jpg 1920w"
									sizes="(max-width: 600px) 400px,
											(max-width: 1024px) 800px,
											1920px"
									src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-spread2-1920.jpg" alt="NDT Spread 2">
									<div class="case-study-cell__caption">
										<caption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatum magnam culpa assumenda illum obcaecati quaerat a.</caption>
									</div>
						</div>
					</section>
					<section class="case-study-cell ndt-badges-block">
						<div class="image-wrapper">
							<img srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-badges-400.jpg 400w,
											<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-badges-800.jpg 800w,
											<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-badges-1920.jpg 1920w"
									sizes="(max-width: 600px) 400px,
											(max-width: 1024px) 800px,
											1920px"
									src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-badges-1920.jpg" alt="NDT Badges">
									<div class="case-study-cell__caption">
										<caption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatum magnam culpa assumenda illum obcaecati quaerat a.</caption>
									</div>
						</div>
					</section>
					<section class="case-study-cell ndt-type-block">
						<div class="image-wrapper">
							<img srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-type-400.jpg 400w,
											<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-type-800.jpg 800w,
											<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-type-1920.jpg 1920w"
									sizes="(max-width: 600px) 400px,
											(max-width: 1024px) 800px,
											1920px"
									src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-studies/ndt-type-1920.jpg" alt="NDT Type">
									<div class="case-study-cell__caption">
										<caption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatum magnam culpa assumenda illum obcaecati quaerat a.</caption>
									</div>
						</div>
					</section>
				</article>
			</div>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
