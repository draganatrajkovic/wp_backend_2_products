<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------BANNER PAGE!--------------------------';
?>

<?php  
if( have_rows('flexible_content_banner', 'option') ): 
    while ( have_rows('flexible_content_banner', 'option') ) : the_row(); 
        if(get_row_layout() == 'banner_layout'): 
?>

    <div class="banner">

        <?php  
        if( have_rows('banner_img', 'option') ): 
            while ( have_rows('banner_img', 'option') ) : the_row(); 
                if(get_row_layout() == 'banner_img_layout'): 
        ?>
        
            <?php 
                $imageDesk = get_sub_field('banner_img_desk'); //need to use ['url'] 'cos function get_sub_field() returns an array 
                $imageDeskUrl = $imageDesk['url']; 
                $imageDeskAlt = $imageDesk['title'];

                $imageTab = get_sub_field('banner_img_tab');
                $imageTabUrl = $imageTab['url'];

                $imageMob = get_sub_field('banner_img_mob');
                $imageMobUrl = $imageMob['url'];
            ?> 

            <picture class="banner__image"> 
                <source media="(min-width: 1200px)" srcset="<?php echo $imageDeskUrl; ?>">
                    <source media="(min-width: 640px)" srcset="<?php echo $imageTabUrl; ?>">
                        <source media="(min-width: 320px)" srcset="<?php echo $imageMobUrl; ?>">
                            <img class="cover-img" src="<?php echo $imageDeskUrl; ?>" alt="<?php echo $imageDeskAlt; ?>">
            </picture>

        <?php 
        endif;
        endwhile; 
        endif; 
        ?>

        
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

