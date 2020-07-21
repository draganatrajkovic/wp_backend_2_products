<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------BANNER PAGE!--------------------------';
?>

<div class="banner">
    
    <picture class="banner__image">
        <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner-dog-desk.jpg">
            <source media="(min-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner-dog-tab.jpg">
                <source media="(min-width: 320px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner-dog-mob.jpg">
                    <img class="cover-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-dog-desk.jpg" alt="">
    </picture>

    <div class="banner__caption">
        <h1 class="banner__caption-title">This is Title</h1>
        <p class="banner__caption-text">Here goes description paragraph</p>
    </div>

    <div class="popup js-popup">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>


