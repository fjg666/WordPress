<?php

// wp_oembedd media filter
global $wp_embed;
add_filter( 'themeton_media_filter', array( $wp_embed, 'autoembed' ), 8 );


class TPL{

    // Print Sites Logo
    public static function get_logo(){
        $custom_logo = '';
        if( function_exists('get_custom_logo') ){
            $custom_logo = get_custom_logo();
        }
        else{
            $logo = TT::get_mod('logo');
            if( !empty($logo) ){
                $custom_logo = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home"><img src="%2$s" alt="'.get_bloginfo('name').'" class="custom-logo"></a>',
                    esc_url(home_url('/')),
                    esc_url($logo)
                );
            }
        }

        if( !empty($custom_logo) && strpos($custom_logo, " src=") ){
            $custom_logo = str_replace(' itemprop="url"', '', $custom_logo);
            $custom_logo = str_replace(' itemprop="logo"', '', $custom_logo);
            print($custom_logo);
        }
        else{
            printf('<a href="%s" rel="home" class="logo-text-link">%s</a>', esc_url(home_url('/')), get_bloginfo('name') );
            $description = get_bloginfo('description', 'display');
            if ( !empty($description) ){
                printf('<p class="site-description">%s</p>', $description);
            }
        }
    }


    // Print custom styles
    public static function inline_styles(){
        global $post;
        
        $custom_css = TT::get_mod('custom_css');
        $custom_css .= TT::get_mod('custom_css_tablet') != '' ?    '@media (min-width: 768px) and (max-width: 985px) { ' . TT::get_mod('custom_css_tablet') . ' }' : '';
        $custom_css .= TT::get_mod('custom_css_widephone') != '' ? '@media (min-width: 481px) and (max-width: 767px) { ' . TT::get_mod('custom_css_widephone') . ' }' : '';
        $custom_css .= TT::get_mod('custom_css_phone') != '' ?     '@media (max-width: 480px) { '                        . TT::get_mod('custom_css_phone') . ' }' : '';
        $custom_css .= TT::get_mod('meta_disable') == '1' ? ' .meta {display:none !important;} ' : '';
        
        $body_bg_style = TT::get_option_bg_value('body_bg_image');
        $custom_css .= ($body_bg_style != '') ? "body.boxed-layout { $body_bg_style } " : '';
        
        return $custom_css;
    }

    public static function inline_script(){
        $cookie = array();
        if( array_key_exists('reactions_of_posts', $_COOKIE) ){
            $cookie = (array)json_decode($_COOKIE['reactions_of_posts']);
        }

        $columns = TT::get_mod('content_columns');
        $columns = !empty($columns) ? $columns : 'col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12';
        $columns = $columns=='one_column' ? 'col-sm-12' : $columns;

        return sprintf('var theme_options = { ajax_url: "%s" };
                        var themeton_reaction_of_posts = %s;
                        var themeton_content_col = "%s";',
                        esc_url(admin_url('admin-ajax.php')), json_encode($cookie), $columns );
    }


    public static function build_theme_image_support(){
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_editor_style( array('css/editor-style.css') );
    }

    public static function print_post_thumbnail(){
        the_post_thumbnail();
    }


    public static function the_date_info(){
        ?>
        <?php echo date_i18n( 'l, F d',  strtotime(date( "Y-m-d" )) ); ?>
        <?php
    }

    public static function the_close_icon(){
        ?>
        <svg class="icon-close" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
            <polygon points="16,1.6 14.4,0 8,6.4 1.6,0 0,1.6 6.4,8 0,14.4 1.6,16 8,9.6 14.4,16 16,14.4 9.6,8"/>
        </svg>
        <?php
    }


    public static function the_search_icon(){
        ?>
        <svg class="icon-search" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 14" xml:space="preserve">
            <path d="M5.4,0C2.4,0,0,2.4,0,5.4s2.4,5.4,5.4,5.4c1.2,0,2.2-0.4,3.1-1l0,0l4,4c0.1,0.1,0.2,0.1,0.3,0l1.1-1.1c0.1-0.1,0.1-0.2,0-0.3l-4-4c0.6-0.9,1-2,1-3.1C10.9,2.4,8.4,0,5.4,0z M5.4,9.6c-2.3,0-4.2-1.9-4.2-4.2s1.9-4.2,4.2-4.2s4.2,1.9,4.2,4.2S7.7,9.6,5.4,9.6z"/>
        </svg>
        <?php
    }

    public static function the_burger_icon(){
        ?>
        <svg class="icon-burger" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 12" xml:space="preserve">
            <path d="M1.1,0.1h11.7c0.6,0,1.1,0.5,1.1,1.1s-0.5,1.1-1.1,1.1H1.1C0.5,2.3,0,1.8,0,1.2S0.5,0.1,1.1,0.1z"/>
            <path d="M1.1,4.9h11.7C13.5,4.9,14,5.4,14,6s-0.5,1.1-1.1,1.1H1.1C0.5,7.1,0,6.6,0,6S0.5,4.9,1.1,4.9z"/>
            <path d="M1.1,9.7h11.7c0.6,0,1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1H1.1c-0.6,0-1.1-0.5-1.1-1.1C0,10.2,0.5,9.7,1.1,9.7z"/>
        </svg>
        <?php
    }


    // return selected emotion icon
    public static function get_emotions(){

        $emotions = array(
            'like' => esc_html__('Like', 'press-grid'),
            'haha' => esc_html__('Haha', 'press-grid'),
            'love' => esc_html__('Love', 'press-grid'),
            'sad' => esc_html__('Sad', 'press-grid'),
            'angry' => esc_html__('Angry', 'press-grid')
        );

        $result = array();

        foreach ($emotions as $key => $value) {
            $mod_val = TT::get_mod('reaction_'.$key);
            $mod_label = TT::get_mod('reaction_'.$key.'_label');
            if( $mod_val=='1' ){
                $result[$key] = !empty($mod_label) ? $mod_label : $value;
            }
        }

        if( empty($result) ){
            $result = $emotions;
        }

        return $result;
    }
    


    
    public static function get_post_media(){
        global $post;
        $media = '';
        if( has_post_thumbnail() ){
            $thumb_img = wp_get_attachment_image( get_post_thumbnail_id(), 'large' );
            $media = $thumb_img;
        }

        $format = get_post_format();

        if( current_theme_supports('post-formats', $format) ){

            // Image
            if( $format=='image' ){
                if(!has_post_thumbnail()){
            
                    $first_img = '';
                    ob_start();
                    ob_end_clean();
                    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                    $first_img = $matches[1][0];

                    $media ='<div class="image" data-src="'. $first_img .'">
                            <a href="'.get_permalink().'">
                            <img src="'. get_template_directory_uri().'/images/5x3.png" alt="'.get_the_title().'">
                            </a></div>';
                } else {
                    $media = wp_get_attachment_image( get_post_thumbnail_id(), 'large');
                }
            }


            // blockquote
            else if( $format=='quote' ){
                preg_match("/<blockquote>(.*?)<\/blockquote>/msi", get_the_content(), $matches);
                if( isset($matches[0]) && !empty($matches[0]) ){
                    $media = $matches[0];
                    $media = str_replace("<blockquote", "<blockquote class='quote-element'", $media);
                }
            }


            // link
            else if( $format=='link' ){
                preg_match('/<a\s[^>]*href=\"([^\"]*)\"[^>]*>(.*)<\/a>/siU', get_the_content(), $matches);
                if( isset($matches[1],$matches[2]) && !empty($matches[2]) ){
                    $media = "<blockquote class='link-element'>
                                $matches[2]
                                <cite><a href='$matches[1]'>$matches[1]</a></cite>
                              </blockquote>";
                }
            }


            // gallery
            else if( $format=='gallery' && has_shortcode($post->post_content, 'gallery') ){
                $galleryObject = get_post_gallery( get_the_ID(), false );
                $ids = explode(",", isset($galleryObject['ids']) ? $galleryObject['ids'] : "");

                $gallery = '';
                if( $ids == "" || count($ids) < 2) {
                    foreach ($galleryObject['src'] as $key => $value) {
                        $gallery .= "<div class='swiper-slide'><img src='$value' alt='".get_the_title()."'/></div>";
                    }
                } else {
                    foreach ($ids as $gid) {
                        $img = wp_get_attachment_image( $gid, 'thumbnail' );
                        $gallery .= "<div class='swiper-slide'>$img</div>";
                    }
                }


                $media = !empty($gallery) ? "<div class='gallery-slideshow'>
                                                <div class='swiper-container gallery-container'>
                                                    <div class='swiper-wrapper'>$gallery</div>
                                                </div>
                                                <div class='swiper-button-prev'></div>
                                                <div class='swiper-button-next'></div>
                                            </div>" : $media;

                $media = $media;
            }


            // audio
            else if( $format=='audio' ){
                $pattern = get_shortcode_regex();
                preg_match('/'.$pattern.'/s', $post->post_content, $matches);
                if (is_array($matches) && isset($matches[2]) && $matches[2] == 'audio') {
                    $shortcode = $matches[0];
                    $media = '<div class="mejs-wrapper audio">'. do_shortcode($shortcode) . '</div>';
                }
                else{
                    $frame = "frame";
                    $regx = "/<i$frame(.)*<\/i$frame>/msi";
                    preg_match($regx, get_the_content(), $matches);
                    if( isset($matches[0]) && !empty($matches[0]) ){
                        $media = $matches[0];
                    }
                    else{
                        if ( preg_match( '|^\s*(https?://[^\s"]+)\s*$|im', $post->post_content, $matches ) ) {
                            if(isset($matches[1])) {
                                $media = "<div class='audio-post'>".apply_filters( "themeton_media_filter", $matches[1] )."</div>";
                            }
                        }
                    }
                }
                $media = $media;
            }



            // video
            else if( $format=='video' ){
                if ( preg_match( '|^\s*(https?://[^\s"]+)\s*$|im', $post->post_content, $matches ) ) {
                    if(isset($matches[1])) {
                        $media = "<div class='video-post'>".apply_filters( "themeton_media_filter", $matches[1] )."</div>";
                    }
                }
            }
            
        }

        return !empty($media) ? "<div class='entry-media'>$media</div>" : "";
    }
    

    public static function get_post_video_url(){
        global $post;

        if( Tana_Std::get_mod('video_lightbox_disable') == '1' ) {
            return get_permalink();
        }

        $format = get_post_format();
        if( $format=='video' ){
            if ( preg_match( '|^\s*(https?://[^\s"]+)\s*$|im', $post->post_content, $matches ) ) {
                if (isset($matches[1]) && !empty($matches[1])) {
                    return $matches[1];
                }
            }
        }
        return '';
    }


    public static function get_author_link(){
        global $post;
        return get_author_posts_url(get_the_author_meta('ID'));
    }


    
    public static function get_author_name(){
        global $post;
        return get_the_author();
    }


     
    public static function pagination( $query=null ) {
         
        global $wp_query;
        $query = $query ? $query : $wp_query;
        $big = 999999999;

        $paginate = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type' => 'array',
            'total' => $query->max_num_pages,
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
            )
        );

        $result = '';

        if ($query->max_num_pages > 1) :
            $result .= "<ul class='pagination'>";
            foreach ( $paginate as $page ) {
                $result .= "<li>$page</li>";
            }
            $result .= "</ul>";
        endif;
        
        return $result;
    }





    public static function getCategories($post_id, $post_type){
        $cats = array();
        $taxonomies = get_object_taxonomies($post_type);
        if( !empty($taxonomies) ){
            $tax = $taxonomies[0];
            if( $post_type=='product' )
                $tax = 'product_cat';
            $terms = wp_get_post_terms($post_id, $tax);
            foreach ($terms as $term){
                $cats[] = array(
                                'term_id' => $term->term_id,
                                'name' => $term->name,
                                'slug' => $term->slug,
                                'link' => get_term_link($term)
                                );
            }
        }

        return $cats;
    }




    public static function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count=='' || $count=='0'){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }
    public static function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }





    public static function get_share_links(){
        global $post;

        $thumb = array();
        if( has_post_thumbnail() ) {
           $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); 
        }
        $social = '';

        $social .= '<a href="http://www.facebook.com/sharer.php?u='.esc_url(get_permalink()).'" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>';
        $social .= '<a href="https://twitter.com/share?url='.esc_url(get_permalink()).'&text='.esc_attr(get_the_title()).'" target="_blank"><i class="fa fa-twitter"></i></a>';
        $social .= '<a href="https://plus.google.com/share?url='.esc_url(get_permalink()).'" target="_blank"><i class="fa fa-google-plus"></i></a>';
        $social .= '<a href="https://pinterest.com/pin/create/bookmarklet/?media='.esc_url(isset($thumb[0]) ? $thumb[0] : '').'&url='.esc_url(get_permalink()).'&description='.esc_attr(get_the_title()).'" target="_blank"><i class="fa fa-pinterest"></i></a>';
        $social .= '<a href="#" onclick="window.print();return false;"><i class="fa fa-print"></i></a>'; 

        return $social;
    }


    public static function get_social_links($print = true){
        $social_fb = TT::get_mod('social_fb');
        $social_tw = TT::get_mod('social_tw');
        $social_gp = TT::get_mod('social_gp');
        $social_vm = TT::get_mod('social_vm');
        $social_yt = TT::get_mod('social_yt');
        $social_ln = TT::get_mod('social_ln');
        $social_in = TT::get_mod('social_in');

        $result = '';
        
        if( !empty($social_fb) ){
            $result .= '<a href="'.esc_attr($social_fb).'"><i class="fa fa-facebook"></i></a>';
        }
        if( !empty($social_tw) ){
            $result .= '<a href="'.esc_attr($social_tw).'"><i class="fa fa-twitter"></i></a>';
        }
        if( !empty($social_gp) ){
            $result .= '<a href="'.esc_attr($social_gp).'"><i class="fa fa-google-plus"></i></a>';
        }
        if( !empty($social_vm) ){
            $result .= '<a href="'.esc_attr($social_vm).'"><i class="fa fa-vimeo"></i></a>';
        }
        if( !empty($social_yt) ){
            $result .= '<a href="'.esc_attr($social_yt).'"><i class="fa fa-youtube"></i></a>';
        }
        if( !empty($social_ln) ){
            $result .= '<a href="'.esc_attr($social_ln).'"><i class="fa fa-linkedin"></i></a>';
        }
        if( !empty($social_in) ){
            $result .= '<a href="'.esc_attr($social_in).'"><i class="fa fa-instagram"></i></a>';
        }

        if( $print ){
            print($result);
        }
        else{
            return $result;
        }
    }


    public static function get_related_posts( $options=array() ){
        $options = array_merge(array(
                    'per_page'=>'6'
                    ),
                    $options);

        global $post;

        $args = array(
            'post__not_in' => array($post->ID),
            'posts_per_page' => $options['per_page']
        );
        $post_type_class = 'blog';

        $categories = get_the_category($post->ID);
        if ($categories) {
            $category_ids = array();
            foreach ($categories as $individual_category) {
                $category_ids[] = $individual_category->term_id;
            }
            $args['category__in'] = $category_ids;
        }

        if(isset($args)) {
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {

                $html = '';
                $index = 0;
                while ($my_query->have_posts()) {
                    $my_query->the_post();

                    $thumb = '';
                    if( has_post_thumbnail() ){
                        $thumb = "<a href='".get_permalink()."'>" . wp_get_attachment_image(get_post_thumbnail_id(), 'press-grid-image-medium') . "</a>";
                    }
                    
                    $html .= "<div class='related-post-item'>
                                $thumb
                                <h4><a href='".get_permalink()."'>".get_the_title()."</a></h4>
                                <div class='entry-date'>".get_the_date()."</div>
                            </div>";
                }


                $html = "<div class='related-posts'>
                            <h5 class='widget-title'>".esc_html__('Related Posts', 'press-grid')."</h5>
                            $html
                        </div>";

                return $html;
                
            }
        }
        
        wp_reset_postdata();

        return '';
    }

    

    public static function clear_urls($content){
        $pattern = "/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?]))/";
        $content = preg_replace($pattern, "", $content);
        return trim( $content );
    }



    public static function get_page_title(){
        global $post;
        $title = '';
        if( function_exists('is_shop') && is_shop() ):
            $title = esc_html__('Shop', 'press-grid');
        elseif( function_exists('is_shop') && is_product() ):
            $title = esc_html__('Shop Details', 'press-grid');
        elseif( is_archive() ):
            if(function_exists('the_archive_title')) :
                $title = get_the_archive_title();
            else:
                $title = sprintf( wp_kses( __('Category: <span>%s</span>', 'press-grid'), array('span'=>array()) ), single_cat_title( '', false ) );
            endif;

        elseif( is_search() ):
            $title = sprintf( wp_kses( __('For: <span>%s</span>', 'press-grid'), array('span'=>array()) ), get_search_query() );
        elseif( is_singular('portfolio') ):
            $title = get_the_title();
        elseif( is_single() ):
            $title = get_the_title();
        elseif( is_front_page() || is_home() ):
            if( is_home() ):
                $title = esc_html__('Blog', 'press-grid');
            elseif( get_query_var('post_type')=='portfolio' ):
                $title = esc_html__('Projects', 'press-grid');
            elseif( !is_front_page() && is_home() ):
                $reading_blog_page = get_option('page_for_posts');
                $po = get_post($reading_blog_page);
                $title = apply_filters('the_title', $po->post_title);
            else:
                $title = esc_html__('Home', 'press-grid');
            endif;
        elseif( is_404() ):
            $title = esc_html__('404 Page', 'press-grid');
        else:
            $title = get_the_title();
        endif;

        return $title;
    }



}