<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------TEAM LIST PAGE!--------------------------';
?>

<?php  
if( have_rows('content') ): 
    while ( have_rows('content') ) : the_row(); 
        if(get_row_layout() == 'team_list'): 
?>

    <div class="team-list">
        <div class="container">
            <h2 class="section-title team-list--title"><?php the_sub_field('team_list_title'); ?></h2>
            <div class="row">

            <?php
                $arrayTeamMembers = ['team_list_member_1', 'team_list_member_2'];

                foreach ($arrayTeamMembers as $member) :
                    
                    $singlePost = get_sub_field( $member ); 
                    $singlePostTitle = $singlePost->post_title; //'cos it's object!!!
                    $singlePostText = $singlePost->post_content;
                    
                    $singlePostId = $singlePost->ID;
                    
                    /* grab the url for the full size featured image */
                    $featured_img_url = get_the_post_thumbnail_url($singlePostId, 'full'); 

                    if($singlePost) :?>
                        
                        <div class="col-lg-6 team-list__box">
                            <div class="team-list__img-holder">
                                <img class="team-list__img" src="<?php echo $featured_img_url; ?>" alt="">
                            </div>
                            <div class="team-list__content">
                                <h3 class="team-list__content-title" text><?php echo $singlePostTitle; ?></h3>
                                <div class="team-list__content-text">
                                    <p><?php echo $singlePostText; ?></p>
                                </div>
                                
                                <a href="javascript:;" class="btn team-list__content-btn js-open-popup">Read More</a>
                                
                                <div class="popup-holder js-popup-holder">
                                    <div class="popup-overlay js-popup-overlay"></div>
                                    <div class="popup-content">
                                        <a href="javascript:;" class="popup-close js-popup-close"></a>
                                        <h3 class="popup-title"><?php echo $singlePostTitle; ?></h3>
                                        <div class="popup-text">
                                            <p><?php echo $singlePostText; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                endif; 
                endforeach;
                ?>

            </div>
        </div>
    </div>

<?php 
endif;
endwhile; 
endif; 
?>
