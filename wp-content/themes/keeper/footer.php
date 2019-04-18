<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package keeper
 */

?>

	</div><!-- #content -->
	
	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="footer">
            <div class="footer__logo-box">
                <h3>Keeper</h3>
            </div>
            <nav class="footer__navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-3',
				) );
			?>
            </nav>
            <?php wp_footer(); ?>
        </footer>
	</body>
</html>
