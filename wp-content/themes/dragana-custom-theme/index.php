<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
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
				include 'banner.php';
				// include 'product-cats.php';
				include 'story-block.php';
				include 'team-list.php';
				// include 'product-slider.php';
				include 'slider.php';
				include 'newsletter.php';
				?>

			</main><!-- #main -->
		</div>
	</div>

	<?php
	// get_sidebar();
	get_footer();
	?>

</div>



