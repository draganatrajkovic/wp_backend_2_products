<?php
/**
 * @package dragana_custom_theme
 */
// echo '--------------------------NEWSLETTER PAGE!--------------------------';
//Use Mailchimp Plugin
//mailchimp.com -> my profile/account/extras/create a key - to get api key
//paste that key in wp plugin/mailchimp/api key
//mailchimp.com/audience /signup forms/form builder - set the form fields you need
?>

<?php  
if( have_rows('content') ): 
    while ( have_rows('content') ) : the_row(); 
        if(get_row_layout() == 'newsletter'): 
?>

    <?php 
        $image = get_sub_field('newsletter_background');
        $shortcode = get_sub_field('newsletter_shortcode');
    ?>

    <div class="newsletter" style="background-image: url('<?php echo $image; ?>');">
        <div class="container">
            <div class="newsletter__row">
                <h2 class="newsletter__title"><?php the_sub_field('newsletter_title'); ?></h2>
                <form class="newsletter_form">

                    <!-- <input type="email" class="newsletter_form-input" requred>
                    <button class="newsletter_form-submit icon font-ico-airplane">
                        </span>
                    </button> -->

                    <?php 
                        echo do_shortcode( $shortcode );                         
                    ?>
                </form>
            </div>
        </div>
    </div>


<?php 
endif;
endwhile; 
endif; 
?>


<!-- <style>
    .mc4wp-form {

    }
    .mc4wp-form input[type="submit"] {

    }
    .mc4wp-form input[type="input"] {

    }

    .mc4wp-form{
        position:relative;
        -webkit-box-flex:1;
        -webkit-flex-grow:1;
        -ms-flex-positive:1;
        flex-grow:1;max-width:70%
    } 
    @media screen and (max-width: 1024px){
        .mc4wp-form{font-size:35px}
    }
        @media screen and (max-width: 767px){
            .mc4wp-form{max-width:initial}
        }
        .mc4wp-form input[type="input"]{
                padding:10px 60px 10px 20px;
                border-radius:30px;
                border:2px solid transparent;
                width:100%;
                display:block
            }
            .mc4wp-form input[type="submit"]{
                color:#fff;
                padding-top:11px;
                padding-bottom:11px;
                position:absolute;
                top:50%;
                -webkit-transform:translateY(-50%);
                transform:translateY(-50%);
                right:3px;
                height:42px;
                width:42px;
                border-radius:50%;
                display:-webkit-box;
                display:-webkit-flex;
                display:-ms-flexbox;
                display:flex;
                -webkit-box-align:center;
                -webkit-align-items:center;
                -ms-flex-align:center;
                align-items:center;
                -webkit-box-pack:center;
                -webkit-justify-content:center;
                -ms-flex-pack:center;
                justify-content:center;
                background-color:#4fc08d;
                border:2px solid #4fc08d;
                -webkit-transition:0.2s ease-in-out;
                transition:0.2s ease-in-out
            }
            @media only screen and (min-width: 1025px){
                .mc4wp-form input[type="submit"]:hover{
                    color:#4fc08d;
                    background-color:#fff
                }
            }

</style> -->