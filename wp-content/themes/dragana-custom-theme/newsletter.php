<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------NEWSLETTER PAGE!--------------------------';
?>

<!-- <div class="newsletter" style="background-image: url('assets/images/newsletter-background.jpg');"> -->

<div class="newsletter" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/newsletter-background.jpg');">

    <div class="container">
        <div class="newsletter__row">
            <h2 class="newsletter__title">Newsletter</h2>
            <form class="newsletter_form">
                <input type="email" class="newsletter_form-input" requred>
                <button class="newsletter_form-submit icon font-ico-airplane">
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>