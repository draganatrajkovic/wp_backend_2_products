<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dragana_custom_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row site-footer__top">
				<div class="site-footer__logo-holder site-footer__box col-md-4">
					<a class="site-footer__logo" href="<?php echo home_url('/'); ?>" rel="home">
						<img class="site-footer__logo-img" src="<?php echo the_field('footer_logo', 'options') ?>" alt="Starter Logo" title="Starter">
					</a>
				</div>
				<div class="site-footer__nav-holder site-footer__box col-md-4">
					<h4 class="site-footer__box-title title-small">Navigation</h4>
					<ul class="site-footer__nav">
						<li class="site-footer__nav-list"><a href="<?php echo home_url('/'); ?>" class="site-footer__nav-link"><?php echo the_field('footer_link_1', 'options') ?></a>
						</li>
						<li class="site-footer__nav-list"><a href="<?php echo home_url(''); ?>" class="site-footer__nav-link"><?php echo the_field('footer_link_2', 'options') ?></a>
						</li>
						<li class="site-footer__nav-list"><a href="<?php echo home_url(''); ?>" class="site-footer__nav-link"><?php echo the_field('footer_link_3', 'options') ?></a>
						</li>
						<li class="site-footer__nav-list"><a href="<?php echo home_url(''); ?>" class="site-footer__nav-link"><?php echo the_field('footer_link_4', 'options') ?></a>
						</li>
					</ul>
				</div>
				<div class="site-footer__social-holder site-footer__box col-md-4">
					<h4 class="site-footer__box-title title-small">Social Links</h4>
					<ul class="site-footer__social">
						<li class="site-footer__social-item">
							<a href="<?php echo the_field('footer_social_1_url', 'options') ?>" target="_blank" rel="noopener">
								<img class="site-footer__social-link icon font-ico-twitter" src="<?php echo the_field('footer_social_1_icon', 'options') ?>" alt="Social">
							</a>
						</li>
						<li class="site-footer__social-item">
							<a href="<?php echo the_field('footer_social_2_url', 'options') ?>" target="_blank" rel="noopener">
								<img class="site-footer__social-link icon font-ico-twitter" src="<?php echo the_field('footer_social_2_icon', 'options') ?>" alt="Social">
							</a>
						</li>
						<li class="site-footer__social-item">
							<a href="<?php echo the_field('footer_social_3_url', 'options') ?>" target="_blank" rel="noopener">
								<img class="site-footer__social-link icon font-ico-twitter" src="<?php echo the_field('footer_social_3_icon', 'options') ?>" alt="Social">
							</a>
						</li>
						<li class="site-footer__social-item">
							<a href="<?php echo the_field('footer_social_4_url', 'options') ?>" target="_blank" rel="noopener" >
								<img class="site-footer__social-link icon font-ico-twitter" src="<?php echo the_field('footer_social_4_icon', 'options') ?>" alt="Social">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="copyright">
				<p>@copyright text goes here</p>
			</div>
			<!-- .copyright -->
		</div>
	</footer>
	<!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
