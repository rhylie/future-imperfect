<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package future-imperfect
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
<div id="wrapper">

	<header id="header">

		<?php

		if ( is_front_page() && is_home() ) :
			?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		endif; 
		?>

		<nav class="links">
			<?php

			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );

			?>
		</nav><!-- #site-navigation -->

		<nav class="main">
			<ul>
				<li class="search">
					<a class="fa-search" href="#search">Search</a>
					<form id="search" method="get" action="#">
						<input type="text" name="query" placeholder="Search" />
					</form>
				</li>

				<li class="menu">
					<a class="fa-bars" href="#menu">Menu</a>
				</li>
			</ul>
		</nav>

	</header><!-- #masthead -->

	<!-- Menu -->
		<section id="menu">

			<!-- Search -->
				<section>
					<form class="search" method="get" action="#">
						<input type="text" name="query" placeholder="Search" />
					</form>
				</section>

			<!-- Links -->
				<section>
					<ul class="links">
						<li>
							<a href="#">
								<h3>LATEST BLOG POST 1</h3>
								<p>Feugiat tempus veroeros dolor</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>LATEST BLOG POST 2</h3>
								<p>Sed vitae justo condimentum</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>LATEST BLOG POST 3</h3>
								<p>Phasellus sed ultricies mi congue</p>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>LATEST BLOG POST 4</h3>
								<p>Porta lectus amet ultricies</p>
							</a>
						</li>
					</ul>
				</section>

			<!-- Actions -->
				<section>
					<ul class="actions vertical">
						<li><a href="#" class="button big fit">Log In</a></li>
					</ul>
				</section>

		</section>
