<?php
/**
 * The template for displaying Portfolio category
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package H-Code
 */

get_header(); ?>

<?php
$layout_settings = $enable_container_fluid = $class_main_section = $section_class = $class = $output = $title = $top_header_class = '';
// To Get Category Layout.
$layout_settings_inner = hcode_option('hcode_portfolio_cat_settings');
$hcode_options = get_option( 'hcode_theme_setting' );          
$layout_settings = (isset($hcode_options['hcode_portfolio_cat_settings'])) ? $hcode_options['hcode_portfolio_cat_settings'] : '';
$enable_container_fluid = (isset($hcode_options['hcode_portfolio_cat_enable_container_fluid'])) ? $hcode_options['hcode_portfolio_cat_enable_container_fluid'] : '';
    switch ($layout_settings) {
        case 'hcode_portfolio_cat_full_screen':
            $section_class .= '';
            if(isset($enable_container_fluid) && $enable_container_fluid == '1'){
                $class_main_section .= 'container-fluid';
            } else {
                $class_main_section .= 'container';
            }
        break;

        case 'hcode_portfolio_cat_both_sidebar':
            $section_class .= '';
            $class_main_section .= 'container col3-layout';
        break;

        case 'hcode_portfolio_cat_left_sidebar':
        case 'hcode_portfolio_cat_right_sidebar':
            $section_class .= '';
            $class_main_section .= 'container col2-layout';
        break;

        default:
            $section_class .= '';
            $class_main_section .= 'container';
        break;
    }

?>

<section class="parent-section <?php echo $section_class;?>">
    <div class="<?php echo $class_main_section; ?>">
        <div class="row">
            <?php
                // If Is Set Get Portfolio Left Sidebar.
                get_template_part('templates/portfolio-cat-left');
            ?>
                <?php
                    // Portfolio Post layout.
                    get_template_part('templates/portfolio-content/content');
                ?>
            <?php
                // If Is Set Get Portfolio Right Sidebar.
                get_template_part('templates/portfolio-cat-right');
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>