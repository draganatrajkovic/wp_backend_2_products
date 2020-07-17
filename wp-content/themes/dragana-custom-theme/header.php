<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dragana_custom_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="/favicon.png" />
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="author" href="/humans.txt" />
	<!--
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.min.css">
	<script type="text/javascript" src="/js/site.min.js" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" defer></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" defer></script> 
	-->

	<title>WP Products</title>
	<meta name='robots' content='noindex,follow' />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dragana_custom_theme' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-header__container">
				<div class="site-header__branding">

					<a class="site-header__logo" href="<?php echo home_url( '/' ); ?>" rel="home">
						<!-- header image field to show logo for options page header -->
							<img class="site-header__logo-img" src="<?php the_field('header_logo', 'options'); ?>" alt="Starter Logo" title="Starter">
					</a>
				</div>

				<div class="site-header__nav-outer js-nav-outer">
					<div class="site-header__nav-inner js-nav-inner">
						<nav id="site-navigation" class="site-nav">
							<!--This HTML structure and classes must stay the same as this is how wp_nav_menu() 
							function will render it. You can add new elements in <li> or <a> tags, such as SVGs 
							or <span>s, but you cannot rearrange elements, wrap them in additional <div>s or 
							change classes.//-->
							<ul class="site-nav__list">
								<li class="menu-item">
									<a href="#">Menu Item</a>
								</li>

								<li class="menu-item menu-item-has-children">
									<a href="#">Menu Item 2</a>
									<span class="site-nav__icon js-nav-icon svg-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7.406 8.578L12 13.172l4.594-4.594L18 9.984l-6 6-6-6z"></path></svg></span>	
									<ul class="sub-menu">
										<li class="menu-item">
											<a href="#">Submenu Item</a>
										</li>

										<li class="menu-item menu-item-has-children">
											<a href="#">Submenu Item 2</a>
											<span class="site-nav__icon js-nav-icon svg-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M8.578 16.594L13.172 12 8.578 7.406 9.984 6l6 6-6 6z"></path></svg></span>	
											<ul class="sub-menu">
												<li class="menu-item">
													<a href="#">Third Level Item</a>
												</li>

												<li class="menu-item">
													<a href="#">Third Level Item 2</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
					

							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>

						</nav><!-- #site-navigation -->
					</div>
				</div>

			</div>
		</div>

		<a href="javascript:" class="site-header__hamburger hamburger js-menu-btn"><span></span></a>

	</header><!-- #masthead -->
