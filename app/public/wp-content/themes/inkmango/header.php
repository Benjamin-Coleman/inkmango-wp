<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inkmango
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'inkmango' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$inkmango_description = get_bloginfo( 'description', 'display' );
			if ( $inkmango_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $inkmango_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'inkmango' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div ref="navbarWrapper" class="nav-wrapper">
        <header class="active">
          <div class="nav-item">
            <a href="/popular">
              <span>Popular</span>
            </a>
          </div>
          <div class="nav-item">
            <a href="/latest">
              <span>Latest</span>
            </a>
          </div>
          <div class="nav-item">
            <a href="/feated">
              <span>Featured</span>
            </a>
          </div>
          <div class="nav-item nav-item__logo">
            <h3>inkmango</h3>
          </div>
          <div class="nav-item margin-left">
            <a href="/">
              <span />
            </a>
          </div>
          <div class="nav-item">
            <a href="/signup">
              <span>Signup</span>
            </a>
          </div>
          <div class="nav-item">
            <a href="/login">
              <span>Login</span>
            </a>
          </div>
        </header>
      </div>

	<div id="content" class="site-content">
