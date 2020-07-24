<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------PRODUCT CATS PAGE!--------------------------';
?>


<?php  
if( have_rows('flexible_content_product_cats', 'option') ): 
    while ( have_rows('flexible_content_product_cats', 'option') ) : the_row(); 
        if(get_row_layout() == 'product_cats_layout'): 
?>

    <div class="product-cats">
        <div class="container">
            <h2 class="product-cats__title section-title"><?php echo the_sub_field('product_cats_title'); ?></h2>
            <div class="row">

                <?php $categories = get_sub_field('product_cats_category'); ?>

                <?php if( $categories ): ?>
                    
                    <?php 
                        foreach( $categories as $categoryId ): 
                            
                        $categoryTitle = get_the_category_by_ID($categoryId);

                        $categoryThumbnailId = get_woocommerce_term_meta( $categoryId, 'thumbnail_id', true ); 
                        $categoryImage = wp_get_attachment_url( $categoryThumbnailId ); 
                    ?>
                    
                        <div class="col-md-3 col-6">
                            <a class="product-cats__item" href="javascript:;">
                                <img src="<?php echo $categoryImage;?>" alt="<?php echo $categoryTitle;?>" class="product-cats__item-thumb">
                                <h3 class="product-cats__item-title"><?php echo $categoryTitle; ?></h3>
                            </a> 
                        </div>
                        
                    <?php endforeach; ?>
                
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php 
endif;
endwhile; 
endif; 
?>