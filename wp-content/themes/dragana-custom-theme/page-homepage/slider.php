<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------SLIDER PAGE!--------------------------';
?>

<?php  
if( have_rows('content') ): 
    while ( have_rows('content') ) : the_row(); 
        if(get_row_layout() == 'basic_slider'): 
?>

    <?php 
        $images = get_sub_field('basic_slider_gallery');
        // size: thumbnail, medium, large, full or custom size; npr: $image['sizes']['full']; 
    ?>

    <?php 
    if( $images ): ?>
        <div class="basic-slider js-slider">
            <?php foreach( $images as $image ): ?>
                <figure>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['filename'] ?>" />
                </figure>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

<?php 
endif;
endwhile; 
endif; 
?>