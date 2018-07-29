<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package au_copyediting
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<use xlink:href="#auLogoSmall2"></use>
		</svg>
		<div class="footer-info">
			<div class="footer-navigation">
				<h3>Site Map</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</div>
			<div class="footer-contact">
				<h3>Contact</h3>
				<ul>
					<li>Email: <span>aaron@aucopyedior.com</span></li>
					<li>Phone: <span>970-###-####</span></li>
				</ul>


			</div>
		</div>
		<div class="site-info">
			<p>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'au_copyediting' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'au_copyediting' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'au_copyediting' ), 'au_copyediting', '<a href="http://schmidtyworks.com">Michael Schmidt</a>' );
				?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
