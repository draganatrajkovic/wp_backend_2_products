<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------PRODUCT SLIDER PAGE!--------------------------';
?>


<?php  
if( have_rows('flexible_content_product_slider', 'option') ): 
    while ( have_rows('flexible_content_product_slider', 'option') ) : the_row(); 
        if(get_row_layout() == 'product_slider_layout'): 
?>

    <div class="product-slider">
        <div class="container">
            <h2 class="product-slider__title section-title"><?php echo get_sub_field('product_slider_title'); ?></h2>

            <div class="product-slider__items js-products-slider row">

                <?php 
                    $the_query = new WP_Query( 
                        [
                            'post_type' => 'product',
                            'orderby' => 'date',
                            'order'   => 'DESC'
                        ]
                    );

                    while ( $the_query->have_posts() ) :
                        $the_query->the_post();
                        $post = get_post();
                        $postTitle = $post->post_title;

                        $postContent = $post->post_content;
                        // $postContent = apply_filters( 'the_content', $post->post_content );

                        $postThumbnailId = get_post_thumbnail_id( $post );
                        $postImage = wp_get_attachment_url( $postThumbnailId ); 
                        
                        ?>

                    <div class="product-slider__item">
                        <div class="product-slider__item-body">
                            <a href="javascript:;" class="product-slider__item-thumb-holder">
                                <img src="<?php echo $postImage; ?>" alt="" class="product-slider__item-thumb">
                            </a>
                            <div class="product-slider__item-content">
                                <h3 class="product-slider__item-title title-small">
                                    <a href="javascript:;"><?php echo $postTitle; ?></a>
                                </h3>
                    
                                <p class="product-slider__item-desc"><?php echo $postContent; ?></p>
                                <a href="javascript:;" class="btn">Load More</a>
                            </div>
                        </div>
                    </div>
                    
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>

<?php 
endif;
endwhile; 
endif; 
?>
