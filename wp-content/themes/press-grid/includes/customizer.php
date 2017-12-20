<?php

if (!function_exists('tt_customizer_options')):

    function tt_customizer_options() {
        $template_uri = get_template_directory_uri();

        $pages = array();
        $all_pages = get_pages();
        foreach ($all_pages as $page) {
            $pages[$page->ID] = $page->post_title;
        }


        $option = array(
            // General
            array(
                'type' => 'section',
                'id' => 'colors',
                'label' => esc_html__('Colors', 'press-grid'),
                'desc' => '',
                'controls' => array(

                    // General Colors
                    array(
                        'id' => 'generals_subtitle1',
                        'type' => 'sub_title',
                        'label' => esc_html__('General Option', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'brand-color',
                        'label' => esc_html__('Brand Color', 'press-grid'),
                        'default' => getLessValue('brand-color')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'color-title',
                        'label' => esc_html__('Title color', 'press-grid'),
                        'default' => getLessValue('color-title')
                    ),
                    array(
                        'type' => 'color',
                        'id' => 'color-text',
                        'label' => esc_html__('Text color', 'press-grid'),
                        'default' => getLessValue('color-text')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'color-second',
                        'label' => esc_html__('Second color', 'press-grid'),
                        'default' => getLessValue('color-second')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'body-background',
                        'label' => esc_html__('Body Background', 'press-grid'),
                        'default' => getLessValue('body-background')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'content-bg-color',
                        'label' => esc_html__('Content Background Color', 'press-grid'),
                        'default' => getLessValue('content-bg-color')
                    ),



                    array(
                        'id' => 'generals_subtitle2',
                        'type' => 'sub_title',
                        'label' => esc_html__('Topbar Colors', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'topbar-bg',
                        'label' => esc_html__('Topbar Background Color', 'press-grid'),
                        'default' => getLessValue('topbar-bg')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'topbar-color',
                        'label' => esc_html__('Topbar Text Color', 'press-grid'),
                        'default' => getLessValue('topbar-color')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'topbar-border',
                        'label' => esc_html__('Topbar Border Color', 'press-grid'),
                        'default' => getLessValue('topbar-border')
                    ),



                    array(
                        'id' => 'generals_subtitle3',
                        'type' => 'sub_title',
                        'label' => esc_html__('Header', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'header-bg',
                        'label' => esc_html__('Header Background Color', 'press-grid'),
                        'default' => getLessValue('header-bg')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'logo-color',
                        'label' => esc_html__('Logo Text Color', 'press-grid'),
                        'default' => getLessValue('logo-color')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'menu-color',
                        'label' => esc_html__('Menu Text Color', 'press-grid'),
                        'default' => getLessValue('menu-color')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'menu-hover',
                        'label' => esc_html__('Menu Hover Color', 'press-grid'),
                        'default' => getLessValue('menu-hover')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'menu-bg-sub',
                        'label' => esc_html__('Sub Menu Background Color', 'press-grid'),
                        'default' => getLessValue('menu-bg-sub')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'menu-color-sub',
                        'label' => esc_html__('Sub Menu Text Color', 'press-grid'),
                        'default' => getLessValue('menu-color-sub')
                    ),



                    array(
                        'id' => 'generals_subtitle4',
                        'type' => 'sub_title',
                        'label' => esc_html__('Search Popup', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'search-bg-color',
                        'label' => esc_html__('Background Color', 'press-grid'),
                        'default' => getLessValue('search-bg-color')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'search-color',
                        'label' => esc_html__('Text Color', 'press-grid'),
                        'default' => getLessValue('search-color')
                    ),


                    array(
                        'id' => 'generals_subtitle5',
                        'type' => 'sub_title',
                        'label' => esc_html__('Footer', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'footer-bg',
                        'label' => esc_html__('Background Color', 'press-grid'),
                        'default' => getLessValue('footer-bg')
                    ),

                    array(
                        'type' => 'color',
                        'id' => 'footer-color',
                        'label' => esc_html__('Text Color', 'press-grid'),
                        'default' => getLessValue('footer-color')
                    ),

                )
            ),// end General


            // Fonts
            array(
                'type' => 'section',
                'id' => 'font',
                'label' => esc_html__('Font', 'press-grid'),
                'desc' => '',
                'controls' => array(
                    array(
                        'id' => 'font_subtitle1',
                        'type' => 'sub_title',
                        'label' => esc_html__('Content Text Font', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'type' => 'font',
                        'id' => 'font-title',
                        'label' => esc_html__('Title Font', 'press-grid'),
                        'default' => getLessValue('font-title')
                    ),
                    array(
                        'type' => 'font',
                        'id' => 'font-text',
                        'label' => esc_html__('Text Font', 'press-grid'),
                        'default' => getLessValue('font-text')
                    ),
                    array(
                        'type' => 'font',
                        'id' => 'font-second',
                        'label' => esc_html__('Second Font', 'press-grid'),
                        'default' => getLessValue('font-second')
                    ),


                    array(
                        'id' => 'font_subtitle2',
                        'type' => 'sub_title',
                        'label' => esc_html__('General Text Font', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'type' => 'font',
                        'id' => 'topbar-font',
                        'label' => esc_html__('Topbar Text Font', 'press-grid'),
                        'default' => getLessValue('topbar-font')
                    ),
                    array(
                        'type' => 'font',
                        'id' => 'logo-font',
                        'label' => esc_html__('Logo Text Font', 'press-grid'),
                        'default' => getLessValue('logo-font')
                    ),

                    array(
                        'type' => 'font',
                        'id' => 'menu-font',
                        'label' => esc_html__('Menu Font', 'press-grid'),
                        'default' => getLessValue('menu-font')
                    ),

                    array(
                        'type' => 'font',
                        'id' => 'footer-font',
                        'label' => esc_html__('Footer Text Font', 'press-grid'),
                        'default' => getLessValue('footer-font')
                    ),

                )
            ),// end Fonts


            // Branding & Logo
            array(
                'type' => 'section',
                'id' => 'section_header_style',
                'label' => esc_html__('Header Styles', 'press-grid'),
                'desc' => '',
                'controls' => array(

                    array(
                        'type' => 'image',
                        'id' => 'logo',
                        'label' => esc_html__('Logo Image', 'press-grid'),
                        'default' => ''
                    ),
                    array(
                        'type' => 'image',
                        'id' => 'favicon',
                        'label' => esc_html__('Favicon', 'press-grid'),
                        'default' => $template_uri . "/images/favicon.png"
                    ),


                    // Header Options Section
                    array(
                        'id' => 'topbar_option_section',
                        'type' => 'sub_title',
                        'label' => esc_html__('Topbar Options', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'type' => 'pixel',
                        'id' => 'topbar-height',
                        'label' => esc_html__('Topbar Height', 'press-grid'),
                        'default' => getLessValue('topbar-height')
                    ),

                    array(
                        'id' => 'topbar-font-weight',
                        'label' => esc_html__('Topbar font weight', 'press-grid'),
                        'default' => getLessValue('topbar-font-weight'),
                        'type' => 'select',
                        'choices' => array(
                            '100' => esc_html__('Ultra Light', 'press-grid'),
                            '200' => esc_html__('Thin', 'press-grid'),
                            '300' => esc_html__('Light', 'press-grid'),
                            '400' => esc_html__('Regular', 'press-grid'),
                            '500' => esc_html__('Medium', 'press-grid'),
                            '600' => esc_html__('Semibold', 'press-grid'),
                            '700' => esc_html__('Bold', 'press-grid'),
                            '800' => esc_html__('Heavy', 'press-grid'),
                            '900' => esc_html__('Black', 'press-grid')
                        )
                    ),

                    array(
                        'type' => 'pixel',
                        'id' => 'topbar-font-size',
                        'label' => esc_html__('Topbar Font Size', 'press-grid'),
                        'default' => getLessValue('topbar-font-size')
                    ),
                    

                    // Header Options Section
                    array(
                        'id' => 'header_option_section',
                        'type' => 'sub_title',
                        'label' => esc_html__('Header Options', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'id' => 'header-bg-alpha',
                        'label' => esc_html__('Header Background Color Alpha', 'press-grid'),
                        'default' => getLessValue('header-bg-alpha'),
                        'type' => 'select',
                        'choices' => array(
                            '0%' => '0%',
                            '10%' => '10%',
                            '20%' => '20%',
                            '30%' => '30%',
                            '40%' => '40%',
                            '50%' => '50%',
                            '60%' => '60%',
                            '70%' => '70%',
                            '80%' => '80%',
                            '90%' => '90%',
                            '100%' => '100%'
                        )
                    ),

                    array(
                        'type' => 'pixel',
                        'id' => 'header-height',
                        'label' => esc_html__('Header Height', 'press-grid'),
                        'default' => getLessValue('header-height')
                    ),

                    array(
                        'id' => 'logo-width',
                        'label' => esc_html__('Logo Width', 'press-grid'),
                        'default' => getLessValue('logo-width'),
                        'type' => 'pixel'
                    ),


                    // Menu Options Section
                    array(
                        'id' => 'menu_option_section',
                        'type' => 'sub_title',
                        'label' => esc_html__('Menu Options', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'id' => 'menu-font-weight',
                        'label' => esc_html__('Menu font weight', 'press-grid'),
                        'default' => getLessValue('menu-font-weight'),
                        'type' => 'select',
                        'choices' => array(
                            '100' => esc_html__('Ultra Light', 'press-grid'),
                            '200' => esc_html__('Thin', 'press-grid'),
                            '300' => esc_html__('Light', 'press-grid'),
                            '400' => esc_html__('Regular', 'press-grid'),
                            '500' => esc_html__('Medium', 'press-grid'),
                            '600' => esc_html__('Semibold', 'press-grid'),
                            '700' => esc_html__('Bold', 'press-grid'),
                            '800' => esc_html__('Heavy', 'press-grid'),
                            '900' => esc_html__('Black', 'press-grid')
                        )
                    ),

                    array(
                        'type' => 'pixel',
                        'id' => 'menu-font-size',
                        'label' => esc_html__('Menu Font Size', 'press-grid'),
                        'default' => getLessValue('menu-font-size')
                    ),

                    array(
                        'type' => 'pixel',
                        'id' => 'menu-space',
                        'label' => esc_html__('Menu Items Space', 'press-grid'),
                        'default' => getLessValue('menu-space')
                    ),

                )
            ),// end Branding


            // Content options
            array(
                'type' => 'section',
                'id' => 'page_content',
                'label' => esc_html__('Content Options', 'press-grid'),
                'controls' => array(

                    array(
                        'id' => 'content_option_subtitle',
                        'type' => 'sub_title',
                        'label' => esc_html__('Content Option', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'id' => 'content_columns',
                        'label' => esc_html__('Blog Columns', 'press-grid'),
                        'default' => 'col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12',
                        'type' => 'select',
                        'choices' => array(
                            'col-sm-6 col-xs-12' => esc_html__('2 columns', 'press-grid'),
                            'col-md-4 col-sm-6 col-xs-12' => esc_html__('3 columns', 'press-grid'),
                            'col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12' => esc_html__('4 columns', 'press-grid'),
                            'one_column' => esc_html__('1 column with sidebar', 'press-grid'),
                        )
                    ),
                    array(
                        'id' => 'content_human_time',
                        'label' => esc_html__('Content Date - Human Readablity', 'press-grid'),
                        'default' => '0',
                        'type' => 'switch'
                    ),

                    array(
                        'id' => 'content-font-size',
                        'label' => esc_html__('Content Font Size', 'press-grid'),
                        'default' => getLessValue('content-font-size'),
                        'type' => 'pixel'
                    ),
                    array(
                        'id' => 'content-line-height',
                        'label' => esc_html__('Content Text Line Height', 'press-grid'),
                        'default' => getLessValue('content-line-height'),
                        'type' => 'pixel'
                    ),
                    array(
                        'id' => 'content-margin',
                        'label' => esc_html__('Content Margin', 'press-grid'),
                        'default' => getLessValue('content-margin'),
                        'type' => 'pixel',
                        'desc' => 'From right and left.'
                    ),
                    array(
                        'id' => 'content_pagination',
                        'label' => esc_html__('Pagination', 'press-grid'),
                        'default' => 'default',
                        'type' => 'select',
                        'choices' => array(
                            'default' => esc_html__('Default - Ajax pagination', 'press-grid'),
                            'standard' => esc_html__('Standard pagination', 'press-grid')
                        )
                    ),
                    
                    // Home Slider
                    array(
                        'id' => 'home_slider_title',
                        'type' => 'sub_title',
                        'label' => esc_html__('Home Slider', 'press-grid'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'home_slider',
                        'label' => esc_html__('Home Slider', 'press-grid'),
                        'default' => '0',
                        'type' => 'switch'
                    ),
                    array(
                        'id' => 'home_slider_cat',
                        'label' => 'Home Slider Category',
                        'desc' => 'Enter category slug',
                        'default' => '',
                        'type' => 'input'
                    ),

                    // frontend option
                    array(
                        'id' => 'content_option_subtitle1',
                        'type' => 'sub_title',
                        'label' => esc_html__('Frontend Option', 'press-grid'),
                        'default' => ''
                    ),

                    array(
                        'id' => 'frontend_post_status',
                        'label' => esc_html__('Frontend Post Status', 'press-grid'),
                        'default' => 'draft',
                        'type' => 'select',
                        'choices' => array(
                            'draft' => esc_html__('Draft', 'press-grid'),
                            'publish' => esc_html__('Publish', 'press-grid')
                        )
                    ),

                )
            ), //end Content options
    

            array(
                'type' => 'section',
                'id' => 'page_conten_banner',
                'label' => esc_html__('Ads Options', 'press-grid'),
                'controls' => array(
                    array(
                        'id' => 'banner_header',
                        'label' => esc_html__('Header Banner', 'press-grid'),
                        'default' => '',
                        'type' => 'textarea'
                    ),
                    array(
                        'id' => 'banner_footer',
                        'label' => esc_html__('Footer Banner', 'press-grid'),
                        'default' => '',
                        'type' => 'textarea'
                    )
                )
            ),


             array(
                'type' => 'section',
                'id' => 'page_conten_reaction',
                'label' => esc_html__('Reaction Options', 'press-grid'),
                'controls' => array(
                    // like
                    array(
                        'id' => 'reaction_like',
                        'label' => esc_html__('Like', 'press-grid'),
                        'default' => '',
                        'type' => 'checkbox'
                    ),
                    array(
                        'id' => 'reaction_like_label',
                        'label' => '',
                        'default' => esc_html__('Like', 'press-grid'),
                        'type' => 'input'
                    ),

                    // haha
                    array(
                        'id' => 'reaction_haha',
                        'label' => esc_html__('Haha', 'press-grid'),
                        'default' => '',
                        'type' => 'checkbox'
                    ),
                    array(
                        'id' => 'reaction_haha_label',
                        'label' => '',
                        'default' => esc_html__('Haha', 'press-grid'),
                        'type' => 'input'
                    ),

                    // love
                    array(
                        'id' => 'reaction_love',
                        'label' => esc_html__('Love', 'press-grid'),
                        'default' => '',
                        'type' => 'checkbox'
                    ),
                    array(
                        'id' => 'reaction_love_label',
                        'label' => '',
                        'default' => esc_html__('Love', 'press-grid'),
                        'type' => 'input'
                    ),

                    array(
                        'id' => 'reaction_sad',
                        'label' => esc_html__('Sad', 'press-grid'),
                        'default' => '',
                        'type' => 'checkbox'
                    ),
                    array(
                        'id' => 'reaction_sad_label',
                        'label' => '',
                        'default' => esc_html__('Sad', 'press-grid'),
                        'type' => 'input'
                    ),

                    array(
                        'id' => 'reaction_angry',
                        'label' => esc_html__('Angry', 'press-grid'),
                        'default' => '',
                        'type' => 'checkbox'
                    ),
                    array(
                        'id' => 'reaction_angry_label',
                        'label' => '',
                        'default' => esc_html__('Angry', 'press-grid'),
                        'type' => 'input'
                    ),
                )
            ),


            // Social options
            array(
                'type' => 'section',
                'id' => 'social_content',
                'label' => esc_html__('Social Links', 'press-grid'),
                'controls' => array(
                    array(
                        'id' => 'social_fb',
                        'label' => 'Facebook',
                        'desc' => 'http://facebook.com/example',
                        'default' => '#',
                        'type' => 'input'
                    ),
                    array(
                        'id' => 'social_tw',
                        'label' => 'Twitter',
                        'desc' => 'http://twitter.com/example',
                        'default' => '#',
                        'type' => 'input'
                    ),
                    array(
                        'id' => 'social_gp',
                        'label' => 'Google Plus',
                        'desc' => 'http://plus.google.com/example',
                        'default' => '#',
                        'type' => 'input'
                    ),
                    array(
                        'id' => 'social_vm',
                        'label' => 'Vimeo',
                        'desc' => 'http://www.vimeo.com/example',
                        'default' => '',
                        'type' => 'input'
                    ),
                    array(
                        'id' => 'social_yt',
                        'label' => 'Youtube',
                        'desc' => 'http://www.youtube.com/example',
                        'default' => '#',
                        'type' => 'input'
                    ),
                    array(
                        'id' => 'social_in',
                        'label' => 'Instagram',
                        'desc' => 'http://www.instagram.com/example',
                        'default' => '',
                        'type' => 'input'
                    ),
                    array(
                        'id' => 'social_ln',
                        'label' => 'Linkedin',
                        'desc' => 'http://www.linkedin.com/example',
                        'default' => '',
                        'type' => 'input'
                    )
                ),
            ), //end Social options


            // Footer
            array(
                'type' => 'section',
                'id' => 'section_footer',
                'label' => esc_html__('Footer', 'press-grid'),
                'controls' => array(

                    array(
                        'id' => 'footer_logo',
                        'label' => esc_html__('Footer Logo Image', 'press-grid'),
                        'default' => get_template_directory_uri()."/images/logo.svg",
                        'type' => 'image'
                    ),

                    array(
                        'id' => 'footer-font-size',
                        'label' => esc_html__('Footer Font Size', 'press-grid'),
                        'default' => getLessValue('footer-font-size'),
                        'type' => 'pixel'
                    ),
                    array(
                        'id' => 'footer-padding',
                        'label' => esc_html__('Footer Padding', 'press-grid'),
                        'default' => getLessValue('footer-padding'),
                        'type' => 'pixel',
                        'desc' => 'Top and bottom spaces'
                    ),

                    array(
                        'id' => 'copyright_content',
                        'label' => esc_html__('CopyRight Content', 'press-grid'),
                        'default' => esc_html__('Copyright 2017 &copy; Themeton | All Rights Reserved.', 'press-grid'),
                        'desc' => '',
                        'type' => 'textarea'
                    ),


                ),
            ), // end Footer



            // Extras
            array(
                'id' => 'panel_extra',
                'label' => esc_html__('Extras', 'press-grid'),
                'desc' => esc_html__('Export Import and Custom CSS.', 'press-grid'),
                'sections' => array(
                    // Settings
                    array(
                        'type' => 'section',
                        'id' => 'section_settings',
                        'label' => esc_html__('Settings', 'press-grid'),
                        'desc' => '',
                        'controls' => array(
                            array(
                                'id' => 'transport_mode',
                                'label' => esc_html__('Customizer Transport', 'press-grid'),
                                'desc' => esc_html__('Transport setting for customizer event when you change customizer element value.', 'press-grid'),
                                'default' => 'refresh',
                                'type' => 'select',
                                'choices' => array(
                                    'refresh' => esc_html__('Refresh when change value', 'press-grid'),
                                    'postMessage' => esc_html__('Collect changes until save', 'press-grid')
                                )
                            ),
                            array(
                                'id' => 'preloader_disable',
                                'label' => esc_html__('Pre Loader Disable', 'press-grid'),
                                'default' => '0',
                                'type' => 'switch',
                            ),
                        )
                    ), // end settings

                    // Custom Widget
                    array(
                        'type' => 'section',
                        'id' => 'section_custom_sidebars',
                        'label' => esc_html__('Custom Sidebars', 'press-grid'),
                        'desc' => '',
                        'controls' => array(
                            array(
                                'type' => 'textarea',
                                'id' => 'custom_sidebars',
                                'label' => esc_html__('Custom Sidebars', 'press-grid'),
                                'desc' => esc_html__('Enter sidebar id seperate by ', 'press-grid'),
                                'default' => ''
                            )
                        )
                    ), // end custom widgets

                    // Backup
                    array(
                        'type' => 'section',
                        'id' => 'section_backup',
                        'label' => esc_html__('Export/Import', 'press-grid'),
                        'desc' => '',
                        'controls' => array(
                            array(
                                'id' => 'backup_settings',
                                'label' => esc_html__('Export Data', 'press-grid'),
                                'desc' => esc_html__('Copy to Customizer Data', 'press-grid'),
                                'default' => '',
                                'type' => 'backup'
                            ),
                            array(
                                'id' => 'import_settings',
                                'label' => esc_html__('Import Data', 'press-grid'),
                                'desc' => esc_html__('Import Customizer Exported Data', 'press-grid'),
                                'default' => '',
                                'type' => 'import'
                            )
                        )
                    ), // end backup
                    // Custom
                    array(
                        'type' => 'section',
                        'id' => 'section_custom_css',
                        'label' => esc_html__('Custom CSS', 'press-grid'),
                        'desc' => '',
                        'controls' => array(
                            array(
                                'id' => 'custom_css',
                                'label' => esc_html__('Custom CSS (general)', 'press-grid'),
                                'default' => '',
                                'type' => 'textarea'
                            ),
                            array(
                                'id' => 'custom_css_tablet',
                                'label' => esc_html__('Tablet CSS', 'press-grid'),
                                'desc' => esc_html__('Screen width between 768px and 991px.', 'press-grid'),
                                'default' => '',
                                'type' => 'textarea'
                            ),
                            array(
                                'id' => 'custom_css_widephone',
                                'label' => esc_html__('Wide Phone CSS', 'press-grid'),
                                'desc' => esc_html__('Screen width between 481px and 767px. Ex: iPhone landscape.', 'press-grid'),
                                'default' => '',
                                'type' => 'textarea'
                            ),
                            array(
                                'id' => 'custom_css_phone',
                                'label' => esc_html__('Phone CSS', 'press-grid'),
                                'desc' => esc_html__('Screen width up to 480px. Ex: iPhone portrait.', 'press-grid'),
                                'default' => '',
                                'type' => 'textarea'
                            ),
                        )
                    ), // end Custom
                    
                )
            ) // end Extras
        );

        // remove deprecated items
        if( function_exists('get_custom_logo') ){
            for( $i=0; $i<count($option); $i++ ){
                if( isset($option[$i]['id']) && $option[$i]['id']=='section_header_style' ){
                    for( $j=0; $j<count($option[$i]['controls']); $j++ ){
                        if( $option[$i]['controls'][$j]['id']=='logo' || $option[$i]['controls'][$j]['id']=='favicon' ){
                            unset($option[$i]['controls'][$j]);
                        }
                    }
                }
            }
        }

        return $option;
    }

endif;

function tt_theme_customize_setup(){
    // create instance of TT Theme Customizer
    new TT_Theme_Customizer();
}
add_action( 'after_setup_theme', 'tt_theme_customize_setup' );
