<?php
require get_template_directory() . '/framework/classes/class.tgm.plugin.activation.php';
add_action( 'tgmpa_register', 'themeton_register_required_plugins' );

function themeton_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
            'name'      => 'Envato Market',
            'slug'      => 'envato-market',
            'source'    => 'https://github.com/envato/wp-envato-market/archive/master.zip'
        ),
        array(
            'name'                  => esc_html__('Themeton Reaction', 'press-grid'),
            'slug'                  => 'themeton-reaction',
            'source'                => get_template_directory().'/includes/plugins/themeton-reaction.zip',
            'required'              => true,
            'version'               => '1.0',
            'force_activation'      => false,
            'force_deactivation'    => false
        ),
        array(
            'name'      => 'Super Socializer',
            'slug'      => 'super-socializer',
            'source'    => 'https://downloads.wordpress.org/plugin/super-socializer.zip'
        )
	);

    $config = array(
        'id'           => 'press-grid',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => ''                      // Message to output right before the plugins table.
    );
 
    tgmpa( $plugins, $config );
 
}


?>