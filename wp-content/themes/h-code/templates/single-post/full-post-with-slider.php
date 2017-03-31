<?php
/**
 * displaying content with full width slider
 *
 * @package H-Code
 */
?>
<?php
$hcode_options = get_option( 'hcode_theme_setting' ); 
// no image
$hcode_no_image = (isset($hcode_options['hcode_no_image'])) ? $hcode_options['hcode_no_image'] : '';
$featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
if($featured_image) {
    $featured_image = $featured_image;
} elseif( !empty( $hcode_no_image['url'] ) ) {
    $featured_image = $hcode_no_image['url'];
}
 ?>
<section class="wow fadeIn blog-single-full-width-with-image-slider-header fix-background parallax-fix background-size-inherit">
    <?php if( !empty( $featured_image ) ) { ?>
        <img class="parallax-background-img" src="<?php echo $featured_image;?>" alt="" />
    <?php } ?>
</section>
<?php
    
$post_author = get_post_field( 'post_author', get_the_ID() );
$author = get_the_author_meta( 'user_nicename', $post_author);
$day = get_the_date('d', get_the_ID());
$month = get_the_date('F', get_the_ID());
$year = get_the_date('Y', get_the_ID()); 

$hcode_single_enable_author     = hcode_option('hcode_single_enable_author');
$hcode_single_enable_date       = hcode_option('hcode_single_enable_date');
$hcode_single_date_format       = hcode_option('hcode_single_date_format');
$hcode_single_enable_category   = hcode_option('hcode_single_enable_category');
?>
<section class="wow fadeIn bg-yellow">
    <div class="container">
        <div class="row">
            <!-- content  -->
            <div class="col-md-12 col-sm-12 blog-headline position-relative">
                <?php if( $hcode_single_enable_date ) { ?>
                <!-- post date  -->
                <div class="blog-date bg-black white-text text-center alt-font"><span class="white-text"><?php echo $day;?></span><?php echo $month;?></div>
                <!-- end post date  -->
                <?php } ?>
                <div class="col-md-10 col-sm-9 col-xs-12 xs-no-padding pull-right">
                    <!-- post title  -->
                    <h2 class="blog-single-full-width-with-image-slider-headline alt-font text-black"><?php echo get_the_title();?></h2>
                    <!-- end post title  -->
                    <?php if( $hcode_single_enable_author ) { ?>
                        <!-- Posted by  -->
                        <span class="posted-by text-uppercase white-text alt-font"><?php echo sprintf( '%1$s <a class="white-text url fn n" href="%2$s">%3$s</a>',esc_html__( 'Posted by - ', 'H-Code' ), esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), get_the_author() ); ?></span>
                        <!-- end Posted by  -->
                    <?php } ?>
                    <?php if( $hcode_single_enable_category ) { ?>
                    <!-- post categories  -->
                    <div class="blog-cat text-uppercase">
                    <?php
                        $categories = get_the_category();
                        foreach ($categories as $k => $cat) {
                            $cat_link = get_category_link($cat->cat_ID);
                            echo '<a href="'.$cat_link.'">'.$cat->name.'</a>';
                        }
                    ?>
                    </div>
                    <?php } ?>
                </div>
                <!-- end post categories  -->
            </div>
            <!-- slider  -->
            
            <!-- end slider  -->
        </div>
        <!-- end content  -->
    </div>
</section>
<?php
$hcode_options = get_option( 'hcode_theme_setting' );
$blog_image = hcode_post_meta('hcode_image');
$blog_quote = hcode_post_meta('hcode_quote');
$blog_gallery = hcode_post_meta('hcode_gallery');
$blog_video = hcode_post_meta('hcode_video_type');
$blog_feature_image = hcode_post_meta("hcode_featured_image");
if($blog_image == 1 || !empty($blog_gallery) || !empty($blog_video) || !empty($blog_quote) || $blog_feature_image == 1):
?>
<?php if ( !post_password_required() ) { ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <?php
                $output ='';
                if(!empty($blog_quote)){
                    ob_start();
                        get_template_part('loop/single-post/loop','quote');
                        $output .= ob_get_contents();  
                    ob_end_clean();  
                }elseif(!empty($blog_gallery)){
                    ob_start();
                        get_template_part('loop/single-post/loop','gallery');
                        $output .= ob_get_contents();  
                    ob_end_clean();  
                }
                elseif(!empty($blog_video)){
                    ob_start();
                        get_template_part('loop/single-post/loop','video');
                        $output .= ob_get_contents();  
                    ob_end_clean();  
                }
                elseif(!empty($blog_image)){
                    ob_start();
                        get_template_part('loop/single-post/loop','image');
                        $output .= ob_get_contents();  
                    ob_end_clean();  
                }
                
                echo $output;
            ?>
            </div>
        </div>
    </div>
</section>
<?php } else{  ?>
<section class="no-padding-top"></section>
<?php } ?>
<?php endif; ?>
<div class="blog-details-text">
	<?php the_content();//get_template_part( 'templates/content/content', 'single' ); ?>
    <?php
    wp_link_pages( array(
        'before'      => '<div class="page-links default-link-pages"><span class="page-links-title">' . esc_html__( 'Pages:', 'brando' ) . '</span>',
        'after'       => '</div>',
        'pagelink'    => '<span class="page-numbers">%</span>',
    ) );
    $hcode_enable_tags = hcode_option('hcode_enable_meta_tags');

    if($hcode_enable_tags == 1):
    $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'H-Code' ) );
    if ( $tags_list ) { 
    ?>
    <section class="no-padding">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 blog-date text-left border-bottom no-padding-lr center-col padding-four">
                <?php hcode_single_post_meta_tag(); ?>
            </div>
        </div>
    </section>
    <?php
    }
    endif;
    ?>
</div>
<?php
$enable_post_author = hcode_option('hcode_enable_post_author');

if($enable_post_author == 1):
    // Author bio.
    if ( is_single() && get_the_author_meta( 'description' ) ) :
            get_template_part( 'author-bio' );
    endif;
endif;
?>                         
<?php 
$enable_social_icons = hcode_option('hcode_social_icons');

if($enable_social_icons == 1 && class_exists('Hcode_Addons_Post_Type')):
    echo do_shortcode( '[hcode_single_post_share]' ); 
endif;

?>

<?php
	// If comments are open or we have at least one comment, load up the comment template
$hcode_enable_post_comment = hcode_option('hcode_enable_post_comment');

if( $hcode_enable_post_comment == 1 ):
	if ( comments_open() || get_comments_number() ) : ?>
    <section class="wow fadeIn clear-both no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 center-col">
		          <?php comments_template(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php 
	endif;
endif;
?>
<?php
$enable_navigation = hcode_option('hcode_enable_navigation');

if($enable_navigation == 1):
    hcode_single_post_navigation(); 
endif;
?>