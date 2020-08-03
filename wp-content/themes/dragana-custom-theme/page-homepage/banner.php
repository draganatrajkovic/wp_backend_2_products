<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------BANNER PAGE!--------------------------';
?>

<?php  
if( have_rows('content') ): 
    while ( have_rows('content') ) : the_row(); 
        if(get_row_layout() == 'banner'): 
?>

    <div class="banner">

        <?php 
            $imageDesk = get_sub_field('banner_background_desktop'); //need to use ['url'] 'cos function get_sub_field() returns an array 
            $imageDeskUrl = $imageDesk['url']; 
            $imageDeskAlt = $imageDesk['title'];

            $imageTab = get_sub_field('banner_background_tablet');
            $imageTabUrl = $imageTab['url'];

            $imageMob = get_sub_field('banner_background_mobile');
            $imageMobUrl = $imageMob['url'];
        ?> 

        <picture class="banner__image"> 
            <source media="(min-width: 1200px)" srcset="<?php echo $imageDeskUrl; ?>">
                <source media="(min-width: 640px)" srcset="<?php echo $imageTabUrl; ?>">
                    <source media="(min-width: 320px)" srcset="<?php echo $imageMobUrl; ?>">
                        <img class="cover-img" src="<?php echo $imageDeskUrl; ?>" alt="<?php echo $imageDeskAlt; ?>">
        </picture>
        
        <div class="banner__caption">
            <h1 class="banner__caption-title"><?php the_sub_field('banner_title'); ?></h1>
            <p class="banner__caption-text"><?php the_sub_field('banner_subtitle'); ?></p>
        </div>

        <div class="popup js-popup">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

    </div>    

<?php 
endif;
endwhile; 
endif; 
?>

