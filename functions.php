<?php
function mytheme_enqueue_style() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'menu-style', get_template_directory_uri() . '/css/menumaker.css' );
	wp_enqueue_style( 'font-style', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'carousel-style', get_template_directory_uri() . '/css/owl.carousel.min.css' );
    wp_enqueue_style( 'fancy-style', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );
    wp_enqueue_script( 'slim-js', get_template_directory_uri() . '/js/jquery-3.6.0.min.js' );
    wp_enqueue_script( 'menu-js', get_template_directory_uri() . '/js/menumaker.js' );
	wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js' );
	wp_enqueue_script( 'carousel-settings', get_template_directory_uri() . '/js/settings.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/jquery.fancybox.min.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/bootstrap-slider/bootstrap-slider.min.js' );
    wp_enqueue_script( 'style', get_template_directory_uri() . '/js/plugin/bootstrap-slider/bootstrap-slider.min.css' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js' );
    wp_enqueue_script( 'style', get_template_directory_uri() . '/js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/chartjs/chart.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/countdown/countdown.js' );
    wp_enqueue_script( 'style', get_template_directory_uri() . '/js/plugin/countdown/countdown.css' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/otp-loader/script.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/otp-sms/otp-input.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/otp-input.js/script.js' );
    wp_enqueue_script( 'style', get_template_directory_uri() . '/js/plugin/otp-input.js/style.css' );
    wp_enqueue_script( 'style', get_template_directory_uri() . '/js/plugin/swiper/swiper-bundle.min.css' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/swiper/swiper-bundle.min.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/tagify/jQuery.tagify.min.js' );
    wp_enqueue_script( 'style', get_template_directory_uri() . '/js/plugin/tagify/tagify.css' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/plugin/vanilla-tilt/vanilla-tilt.min.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/vendor/bootstrap.bundle-5.3.2.min.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/vendor/jquery-3.7.1.min.js' );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/vendor/modernizr-3.11.2.min.js' );

}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );

function mytheme_enqueue_options_style() {
	wp_enqueue_style( 'admin-options-style', get_template_directory_uri() . '/css/admin.css' );
	wp_enqueue_style( 'font-options-style', get_template_directory_uri() . '/css/fonts.css' );
}
add_action( 'admin_enqueue_scripts', 'mytheme_enqueue_options_style' );

function mytheme_enqueue_login_style() {
    wp_enqueue_style( 'mytheme-options-style', get_template_directory_uri() . '/css/login.css' );
}
add_action( 'login_enqueue_scripts', 'mytheme_enqueue_login_style' );

define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );
include_once( MY_ACF_PATH . 'acf.php' );
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return true;
}
?>
<?php
add_action( 'init', 'reg_menu' );
function reg_menu() {
    register_nav_menus(
        array(
                'top-menu' => __( 'فهرست بالایی' )
            )
    );
    register_nav_menus(
        array(
                'main-menu' => __( 'فهرست اصلی' )
            )
    );
}

add_theme_support( 'post-thumbna ils' );
if (function_exists('add_image_size')){
add_image_size( 'thumb', 426, true);
add_image_size( 'small', 240, true);
}
add_filter( 'post_thumbnail_html', 'my_post_thumbnail_html' );

function my_post_thumbnail_html( $html ) {

	if ( empty( $html ) )
		$html = '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/no-image.gif' . '" alt="" />';

	return $html;
}
?>
<?php
function shapeSpace_remove_toolbar_menu() {
	
	global $wp_admin_bar;
	
	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('updates');
	
}
add_action('wp_before_admin_bar_render', 'shapeSpace_remove_toolbar_menu', 999); 

function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
add_action( 'admin_init', 'remove_dashboard_meta' );
?>
<?php if ( function_exists('register_sidebar') )
register_sidebar(array(
'id'          => 'login-widget',
'name'          => 'ابزارک شما یک فوتر',
'description'   => 'ناحيه قرارگيری ابزارک‌های شما',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '',
'after_title'   => '',
));
?>
<?php
function wp_pagination() {
global $wp_query;
$big = 12345678;
$page_format = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array'
) );
if( is_array($page_format) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<div><ul>';
            echo '<li><span>'. $paged . ' از ' . $wp_query->max_num_pages .'</span></li>';
            foreach ( $page_format as $page ) {
                    echo "<li>$page</li>";
            }
           echo '</ul></div>';
}
}
?>
<?php
function my_wpdiscuz_shortcode() {
    if(file_exists(ABSPATH . 'wp-content/plugins/wpdiscuz/templates/comment/comment-form.php')){
        include_once ABSPATH . 'wp-content/plugins/wpdiscuz/templates/comment/comment-form.php';
    }
}
add_shortcode( 'wpdiscuz_comments', 'my_wpdiscuz_shortcode' );
?>
<?php
class CSS_Menu_Maker_Walker extends Walker {

    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        /* Add active class */
        if(in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
            unset($classes['current-menu-item']);
        }

        /* Check for children */
        $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
        if (!empty($children)) {
            $classes[] = 'has-sub';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'><span>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</span></a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}
?>
