<?php
/*
    ==================================
    Press Grid WordPress Theme Configuration
    ==================================
*/

// Theme Setup
if ( ! function_exists( 'press_grid_theme_setup' ) ) :
    function press_grid_theme_setup() {

        // load translate file
        load_theme_textdomain( 'press-grid', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Support Theme Custom Logo
        add_theme_support( 'custom-logo' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 400, 400, true );

        // Set Image sizes
        add_image_size( 'press-grid-featured-image', 800, 0, true );
        add_image_size( 'press-grid-image-medium', 400, 0, true );
        add_image_size( 'press-grid-image-medium-thumb', 40, 0, true );
        add_image_size( 'press-grid-image-large', 842, 480, true );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => esc_html__('Primary Menu', 'press-grid'),
            'topbar_menu' => esc_html__('Topbar Menu', 'press-grid'),
            'footer_menu' => esc_html__('Footer Menu', 'press-grid')
        ) );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
        
        add_theme_support( 'post-formats', array(
            'quote', 'image', 'gallery', 'audio', 'video', 'link'
        ) );


        // Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'press_grid_theme_setup' );



// default content width
if ( ! isset( $content_width ) ) $content_width = 940;


// Register widget area.
function press_grid_widgets_init() {
    
    // define sidebars
    $theme_sidebars = array(
        'sidebar'=> esc_html__('Post Sidebar Area', 'press-grid'),
        'sidebar-page'=> esc_html__('Page Sidebar Area', 'press-grid')
    );
    
    foreach ($theme_sidebars as $id => $sidebar) {
        if( !empty($id) ){

            register_sidebar(array(
                'name' => $sidebar,
                'id' => $id,
                'description' => esc_html__('Add widgets here to appear in your sidebar.', 'press-grid'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="widget-title"><span>',
                'after_title'   => '</span></h5>'
            ));

        }
    }

}
add_action( 'widgets_init', 'press_grid_widgets_init' );


// Site Favicon
if( !function_exists('wp_site_icon') ):
    function press_grid_favicon(){
        if(Press_Grid_Std::get_mod('favicon') != ''){
            echo '<link rel="shortcut icon" type="image/x-icon" href="'.Press_Grid_Std::get_mod('favicon').'"/>';
        }
    }
    add_action('wp_head', 'press_grid_favicon');
endif;



// google Fonts
if ( ! function_exists( 'press_grid_fonts_url' ) ) :
    function press_grid_fonts_url() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';

        if ( $fonts ) {
            $fonts_url = esc_url(add_query_arg( array(
                'family' => implode( '|', $fonts ),
                'subset' => urlencode( $subsets ),
            ), '//fonts.googleapis.com/css' ));
        }

        return $fonts_url;
    }
endif;


// Enqueue Scripts
function press_grid_enqueue_scripts() {
    wp_enqueue_script( 'wp-mediaelement' );
    
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'tt-theme-fonts', press_grid_fonts_url(), array(), null );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Include all static css files
    wp_enqueue_style( 'press-grid-lib-packages', get_template_directory_uri() . '/css/packages.min.css' );
    wp_enqueue_script('press-grid-lib-packages', get_template_directory_uri() . '/js/packages.min.js', array('jquery'), false, true );
    
    // Theme style and scripts
    wp_enqueue_style( 'press-grid-stylesheet', get_stylesheet_uri() );
    wp_enqueue_script('press-grid-scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), false, true );
    wp_enqueue_script('press-grid-app-script', get_template_directory_uri() . '/js/app.js', array('jquery', 'mediaelement', 'wp-playlist'), false, true );


	/////////////////////////////////////
    // jquery file upload
    wp_enqueue_script('press-grid-ui-widget', get_template_directory_uri()
        . '/js/vendor/jquery.ui.widget.js', array('jquery'), false, true );

    wp_enqueue_script('press-grid-iframe-transport', get_template_directory_uri()
        . '/js/vendor/jquery.iframe-transport.js', array('jquery'), false, true );

    wp_enqueue_script('press-grid-fileupload', get_template_directory_uri()
        . '/js/vendor/jquery.fileupload.js', array('jquery'), false, true );

    // Print Inline Style, Scripts
    wp_add_inline_style('press-grid-stylesheet', Press_Grid_Tpl::inline_styles());
    wp_add_inline_script('press-grid-lib-packages', Press_Grid_Tpl::inline_script() );
}
add_action( 'wp_enqueue_scripts', 'press_grid_enqueue_scripts' );




// Custom Excerpt Length
function press_grid_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'press_grid_excerpt_length', 999 );




// Custom Excerpt More Symbol
function press_grid_excerpt_more( $excerpt ) {
    return esc_html__(' ...', 'press-grid');
}
add_filter( 'excerpt_more', 'press_grid_excerpt_more' );



// Primary menu callback function
function press_grid_primary_callback(){
    echo '<ul class="menu">';
    wp_list_pages( array(
        'sort_column'  => 'menu_order, post_title',
        'title_li' => '') );
    echo '</ul>';
}


// Footer menu callback function
function press_grid_footer_menu_callback(){
    echo '<ul class="footer-menu">';
        echo '<li class="menu-item"><a href="'.esc_url(home_url('/')).'">'.esc_html__('Home', 'press-grid').'</a></li>';
        echo '<li class="menu-item"><a href="'.esc_url(home_url('/')).'?post_type=post">'.esc_html__('Archive', 'press-grid').'</a></li>';
        echo '<li class="menu-item"><a href="'.esc_url(home_url('/')).'?s=">'.esc_html__('Search', 'press-grid').'</a></li>';
    echo '</ul>';
}



/*
                                                                    
 _____ _                 _              _____ _                     
|_   _| |_ ___ _____ ___| |_ ___ ___   |     | |___ ___ ___ ___ ___ 
  | | |   | -_|     | -_|  _| . |   |  |   --| | .'|_ -|_ -| -_|_ -|
  |_| |_|_|___|_|_|_|___|_| |___|_|_|  |_____|_|__,|___|___|___|___|
  
*/
// Themeton Standard Package
require get_template_directory() . '/framework/classes/class.themeton.std.php';

// Theme Class Extends Themeton Class
class Press_Grid_Std extends ThemetonStd { }

// Include current theme customize
require get_template_directory() . '/includes/functions.php';

// Theme Class Extends Template Class
class Press_Grid_Tpl extends TPL { }






function press_grid_filter_publish_dates( $the_date, $d, $post ) {
    return sprintf('%s %s', human_time_diff( strtotime($post->post_date), current_time('timestamp') ), esc_html__('ago', 'press-grid'));
}
if( Press_Grid_Std::get_mod('content_human_time')=='1' ){
    add_action( 'get_the_date', 'press_grid_filter_publish_dates', 10, 3 );
}


add_action('pre_get_posts', 'fa_orderby_views');
function fa_orderby_views($query) {
	if (is_home() && $query->is_main_query() && get_query_var('orderby') == 'views') {
		$query->set('meta_key', '_post_views');
		$query->set('orderby', 'meta_value_num');
	}
	return $query;
}


?>