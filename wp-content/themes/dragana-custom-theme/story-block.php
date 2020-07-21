<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------STORY BLOCK!--------------------------';
?>

<?php  
if( have_rows('flexible_content_story_block', 'option') ): 
    while ( have_rows('flexible_content_story_block', 'option') ) : the_row(); 
        if(get_row_layout() == 'story_block_layout'): 
?>

    <?php 
        $switchButton = get_sub_field('story_block_switch_but');
        if ($switchButton == true) :
    ?>

        <div class="story-block ">
            <div class="container">
                <div class="row story-block--row">
                    <div class="col-lg-6 story-block__content">
                        <h2 class="story-block__content-title section-title"><?php the_sub_field('story_block_title'); ?></h2>
                        <div class="entry-content story-block--entry-content">
                            <p><?php the_sub_field('story_block_text'); ?></p>
                        </div>

                        <a href="javascript:;" class="btn" target="_blank"><?php the_sub_field('story_block_link'); ?></a>
                    </div>

                    <div class="col-lg-6 story-block__image">
                        <?php $image = get_sub_field('story_block_img');?>
                        <img src="<?php echo $image; ?>" alt="<?php echo $imageAlt; ?>">
                    </div>
                </div>
            </div>
        </div>

    <?php else :?>

        <div class="story-block story-block--alt">
            <div class="container">
                <div class="row story-block--row">
                    <div class="col-lg-6 story-block__content">
                        <h2 class="story-block__content-title section-title"><?php the_sub_field('story_block_title'); ?></h2>
                        <div class="entry-content story-block--entry-content">
                            <p><?php the_sub_field('story_block_text'); ?></p>
                        </div>
                        <a href="javascript:;" class="btn" target="_blank"><?php the_sub_field('story_block_link'); ?></a>
                    </div>
                    <div class="col-lg-6 story-block__image">
                        <?php $image = get_sub_field('story_block_img');?>
                        <img src="<?php echo $image; ?>" alt="<?php echo $imageAlt; ?>">
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>

<?php 
endif;
endwhile; 
endif; 
?>
