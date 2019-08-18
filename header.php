<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package au_copyediting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('template-parts/svg'); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<a href="#" class="toggle-nav">
		    <svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
		        <use xlink:href="#hamburger2"></use>
		    </svg>
		  </a>
			<div class="menu-nav-container">
				<div class="mobile-nav-header-container">
					<a href="#" class="close-toggle">
						<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
								<use xlink:href="#close"></use>
						</svg>
					</a>
				</div>

				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				<div class="header-social-icons">
					<ul>
						<li>
							<a href="https://www.facebook.com/Au-Copyediting-Copywriting-995339710662121/?modal=admin_todo_tour">
								<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
										<use xlink:href="#facebook"></use>
								</svg>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/aucopyeditor">
								<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
										<use xlink:href="#twitter"></use>
								</svg>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/aaron-unterreiner-b404936/">
								<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
										<use xlink:href="#linkedin-logo"></use>
								</svg>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/au_copyediting_copywriting/">
								<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
										<use xlink:href="#instagram"></use>
								</svg>
							</a>
						</li>
					</ul>
				</div>
			</div><!-- .menu-nav-container -->
		</nav><!-- #site-navigation -->
		<div class="logo-header">
			<img src="<?php echo get_template_directory_uri() . '/images/aulogo3.svg'; ?>" alt="">

		</div><!-- .site-branding -->
		<div class="header-social-icons">
			<ul>
				<li>
					<a href="https://www.facebook.com/Au-Copyediting-Copywriting-995339710662121/?modal=admin_todo_tour">
						<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
								<use xlink:href="#facebook"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/aucopyeditor">
						<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
								<use xlink:href="#twitter"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/in/aaron-unterreiner-b404936/">
						<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
								<use xlink:href="#linkedin-logo"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/au_copyediting_copywriting/">
						<svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1">
								<use xlink:href="#instagram"></use>
						</svg>
					</a>
				</li>

			</ul>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
