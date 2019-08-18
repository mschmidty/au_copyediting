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
				<use xlink:href="#aulogosmall2"></use>
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
					<li>Email: <span>aaron@aucopyeditor.com</span></li>
				</ul>


			</div>
		</div>
		<div class="site-info">
			<p>Theme developed by
			<a href="http://schmidtyworks.com">Schmidtyworks</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
