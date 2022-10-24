<?php
global $options;
$options = get_option('ana_theme_options');
//theme options
$functions_path = TEMPLATEPATH . '/functions/';
// Custom Navigation Walker
require_once('functions/menu/wp_bootstrap_navwalker.php');
// Custom widgets
require_once ($functions_path . 'widget/homepage-category.php');
// Remove emojicons
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
// Meta boxes
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/functions/meta-box/' ) );
define( 'RWMB_DIR', trailingslashit( STYLESHEETPATH . '/functions/meta-box/' ) );
require_once RWMB_DIR . 'meta-box.php';
include RWMB_DIR . 'config-meta-boxes.php';
// admin
if ( STYLESHEETPATH == TEMPLATEPATH ) {
define('OF_FILEPATH', TEMPLATEPATH);
define('OF_DIRECTORY', get_bloginfo('template_directory'));
} else {
define('OF_FILEPATH', STYLESHEETPATH);
define('OF_DIRECTORY', get_bloginfo('stylesheet_directory'));
}
require_once (OF_FILEPATH . '/admin/admin-functions.php');
require_once (OF_FILEPATH . '/admin/admin-interface.php');
require_once (OF_FILEPATH . '/admin/theme-options.php');
require_once (OF_FILEPATH . '/admin/theme-functions.php');
//Redirect to Theme Options Page on Activation
if ( is_admin() && isset($_GET['activated'] ) && $pagenow =="themes.php" )
	wp_redirect( 'admin.php?page=optionsframework' );
//colors
function anathemes_add_stylesheet() {
    wp_enqueue_style('coloroptions', get_template_directory_uri() . "/styles/" . get_option('an_altstylesheet') . "", '', '', 'all');
}
add_action('init', 'anathemes_add_stylesheet');
// widgets
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Anasayfa',
'id' => 'sidebar-widgets',
'description' => 'Anasayfaya kategori ekleyin.',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));
// favicon
function anathemes_favicon() {
    if (get_option('an_favicon') != '') {
        echo '<link rel="shortcut icon" type="image/icon" href="' . get_option('an_favicon') . '" />' . "\n";
    } else {
        ?>
        <?php
    }
}
add_action('wp_head', 'anathemes_favicon');
// breadcrumb
function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> &raquo; ";
		if (is_category() || is_single()) {
			the_category(' & ');
			if (is_single()) {
				echo " &raquo; ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}
// custom css
function anathemes_custom_css() {
    $output = '';
    $custom_css = get_option('an_customcss');
    if ($custom_css <> '') {
        $output .= $custom_css . "\n";
    }
    if ($output <> '') {
        $output = "\n<style type=\"text/css\">\n" . $output . "</style>\n";
        echo $output;
    }
}
add_action('wp_head', 'anathemes_custom_css');
// analytics
function anathemes_analytics() {
    if (get_option('an_analytics') != '') {
        echo '' . get_option('an_analytics') . '' . "\n";
    } else {
        ?>
        <?php
    }
}
add_action('wp_footer', 'anathemes_analytics');
//menus
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'top-left' => 'Sol Üst',
			'top-right' => 'Sağ Üst',
			'footer-right' => 'Sağ Alt',
		)
	);
}
?>