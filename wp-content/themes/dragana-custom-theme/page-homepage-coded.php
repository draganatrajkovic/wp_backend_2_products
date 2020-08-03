<?php
/**
 * Template Name: Homepage Coded
 * @package dragana_custom_theme
 */
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<?php
	get_header();
	?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php
				include 'page-homepage-coded/coded-banner.php';
				include 'page-homepage-coded/coded-product-cats.php';
				include 'page-homepage-coded/coded-story-block.php';
				include 'page-homepage-coded/coded-team-list.php';
				include 'page-homepage-coded/coded-product-slider.php';
				include 'page-homepage-coded/coded-slider.php';
				include 'page-homepage-coded/coded-newsletter.php';
				?>

			</main><!-- #main -->
		</div>
	</div>

	<?php
	// get_sidebar();
	get_footer();
	?>

</div>