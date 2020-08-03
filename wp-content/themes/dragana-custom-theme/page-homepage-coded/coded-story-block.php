<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------STORY BLOCK!--------------------------';
?>

<?php  
if( have_rows('flexible_content_fields') ): 
    while ( have_rows('flexible_content_fields') ) : the_row(); 
        if(get_row_layout() == 'story_block_layout'): 
?>

    <?php 
        $link = get_sub_field('story_block_link');
        $linkText = $link['title'];
        $image = get_sub_field('story_block_img');
    ?>

    <?php 
        $switchButton = get_sub_field('story_block_switch_but');
    ?>

    <?php if ($switchButton == true) :?>
        <div class="story-block ">
    <?php else :?>
        <div class="story-block story-block--alt">
    <?php endif ?>

            <div class="container">
                <div class="row story-block--row">
                    <div class="col-lg-6 story-block__content">
                        <h2 class="story-block__content-title section-title"><?php the_sub_field('story_block_title'); ?></h2>
                        <div class="entry-content story-block--entry-content">
                            <p><?php the_sub_field('story_block_text'); ?></p>
                        </div>
                        <a href="javascript:;" class="btn" target="_blank"><?php echo $linkText; ?></a>
                    </div>

                    <div class="col-lg-6 story-block__image">
                        <img src="<?php echo $image; ?>" alt="<?php echo $imageAlt; ?>">
                    </div>
                </div>
            </div>
        </div>

<?php 
endif;
endwhile; 
endif; 
?>
