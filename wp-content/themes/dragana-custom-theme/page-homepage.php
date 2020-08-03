<?php
/**
 * Template Name: Homepage
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
				include 'page-homepage/banner.php';
				include 'page-homepage/product-cats.php';
				include 'page-homepage/story-block.php';
				include 'page-homepage/team-list.php';
				include 'page-homepage/product-slider.php';
				include 'page-homepage/slider.php';
				include 'page-homepage/newsletter.php';
				?>

			</main><!-- #main -->
		</div>
	</div>

	<?php
	// get_sidebar();
	get_footer();
	?>

</div>