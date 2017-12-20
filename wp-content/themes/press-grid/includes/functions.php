<?php



// change default settings for default gallery
add_action( 'after_setup_theme', 'themeton_attachment_display_settings' );
function themeton_attachment_display_settings() {
    update_option( 'image_default_link_type', 'file' );
}


/*
                                                                    
 _____ _                 _              _____ _                     
|_   _| |_ ___ _____ ___| |_ ___ ___   |     | |___ ___ ___ ___ ___ 
  | | |   | -_|     | -_|  _| . |   |  |   --| | .'|_ -|_ -| -_|_ -|
  |_| |_|_|___|_|_|_|___|_| |___|_|_|  |_____|_|__,|___|___|___|___|
  
*/
$template_load_files = array(
    '/framework/classes/class.less.php',                    // Less Compiler
    '/framework/classes/class.render.meta.php',             // Meta fields for Posts
    '/framework/classes/class.wp.customize.controls.php',   // WP Customizer
    '/framework/classes/class.wp.customize.php',
    '/framework/functions/global.functions.php',            // Import functions
    '/framework/functions/functions.breadcrumb.php',
    '/framework/classes/class.import.data.php',             // Import Demo Data
    '/includes/widgets/init_widget.php',                    // Import Widgets
    '/includes/customizer.php',                             // Customizer
    '/includes/plugins.php',                                // TGM Plugin Activation
    '/includes/meta.page.php',                              // Quick Load Element for VC
    '/includes/ExtendVCRow.php',
    '/includes/template-tags.php',                          // Import Template tags
    '/includes/mega-menu/index.php',                        // Mega Menu
    '/includes/ExtraCategory.php',                          // Taxonomy Extra Fields
    '/includes/RestAP.php',                                 // Post Array Object
    '/includes/Pressgrid.php',                              // Pressgrid
    '/includes/woo.php'                                     // Woocommerce
);
foreach ($template_load_files as $load_file) {
    if( file_exists(get_template_directory() . $load_file) ){
        require get_template_directory() . $load_file;
    }
}




// Import VC Custom Elements
function themeton_load_vc_elements(){
    $file_dir = get_template_directory() . '/includes/vc-elements/';
    foreach( glob( $file_dir . '*.php' ) as $filename ) {
        $filename = sprintf('/includes/vc-elements/%s', basename($filename));
        require get_template_directory() . $filename;
    }
}
add_action('vc_before_init', 'themeton_load_vc_elements');






// for social plugin
function themeton_after_switch_theme_options() {
    global $theChampLoginOptions, $theChampFacebookOptions, $theChampSharingOptions;

    $theChampLoginOptions = (array)$theChampLoginOptions;
    $theChampFacebookOptions = (array)$theChampFacebookOptions;
    $theChampSharingOptions = (array)$theChampSharingOptions;

    $theChampLoginOptions['enable'] = '1';
    if( array_key_exists('enableAtLogin', $theChampLoginOptions) ){
        unset($theChampLoginOptions['enableAtLogin']);
    }

    if( array_key_exists('enable_commenting', $theChampFacebookOptions) ){
        unset($theChampFacebookOptions['enable_commenting']);
    }

    if( array_key_exists('enable', $theChampSharingOptions) ){
        unset($theChampSharingOptions['enable']);
    }

    update_option('the_champ_login', $theChampLoginOptions);
    update_option('the_champ_facebook', $theChampFacebookOptions);
    update_option('the_champ_sharing', $theChampSharingOptions);
    
}
add_action('after_switch_theme', 'themeton_after_switch_theme_options');


?>