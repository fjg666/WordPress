<?php

class CurrentThemePageMetas extends TTRenderMeta{

    function __construct(){
        add_action( 'admin_init', array($this, 'initial_items') );
        add_action( 'admin_enqueue_scripts', array($this, 'print_admin_scripts') );
        add_action( 'add_meta_boxes', array($this, 'add_custom_meta'), 1 );
        add_action( 'edit_post', array($this, 'save_post'), 99 );

        // support svg logo
        $svg_logo_filter = sprintf('%s_%s', 'upload', 'mimes');
        add_filter( $svg_logo_filter, array($this, 'support_svg_logo') );

        add_action('admin_enqueue_scripts', array($this, 'print_elements_icons'));

        // Post Views
        add_filter( 'the_content', array($this, 'content_filter'), 20 );
    }

    // Post Views
    public function content_filter($content){
        if( is_single() ){
            $post_id = get_the_id();
            $post_view = abs(get_post_meta( $post_id, '_post_views', true ));
            $post_view += 1;
            update_post_meta( $post_id, '_post_views', $post_view );
        }
        
        return $content;
    }

    public function print_elements_icons(){
        wp_enqueue_style('tana-admin-vc-element-icons', get_template_directory_uri() . '/css/elements-icons.css' );
    }


    public function support_svg_logo($types){
        $types['svg'] = sprintf('%s/%s+%s', 'image', 'svg', 'xml');
        return $types;
    }
    

    public function initial_items(){
        $this->items = $this->items();
    }

    public function items(){
        global $post;

        define('ADMIN_IMAGES', get_template_directory_uri().'/framework/admin-assets/images/');

        $all_post_types = array();
        $data_post_types = TT::get_post_types();
        foreach ($data_post_types as $key => $value) {
            $all_post_types[] = $key;
        }

        $tmp_arr = array(
            /*
            'post' => array(
                'label' => esc_html__('Options', 'press-grid'),
                'post_type' => 'post',
                'items' => array(
                    array(
                        'type' => 'checkbox',
                        'name' => 'post_size_big',
                        'label' => esc_html__('Large Item on Grid', 'press-grid'),
                        'default' => '0',
                        'desc' => esc_html__('For Grid Element Size', 'press-grid')
                    )
                )
            ),
            */
            'page' => array(
                'label' => 'Page Options',
                'post_type' => 'page',
                'items' => array(
                    array(
                        'name' => 'page_layout',
                        'type' => 'thumbs',
                        'label' => esc_html__('Page Layout', 'press-grid'),
                        'default' => 'full',
                        'option' => array(
                            'full' => ADMIN_IMAGES . '1col.png',
                            'right' => ADMIN_IMAGES . '2cr.png',
                            'left' => ADMIN_IMAGES . '2cl.png'
                        ),
                        'desc' => esc_html__('Select Page Layout (Fullwidth | Right Sidebar | Left Sidebar)', 'press-grid')
                    ),

                    array(
                        'type' => 'checkbox',
                        'name' => 'title_show',
                        'label' => esc_html__('Page Title Show', 'press-grid'),
                        'default' => '1'
                    )

                )
            )

        );

        return $tmp_arr;
    }
    
}

new CurrentThemePageMetas();

