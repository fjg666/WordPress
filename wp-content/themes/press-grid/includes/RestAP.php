<?php

class Press_Grid_Post{

	public static function get_posts(){
		
		//获取用户年龄（测试）
		$current_user = wp_get_current_user();
		$user_age = get_user_meta($current_user->ID,'user_age',true);
		
		//性格
		$nature = "";
		//性别
		$sex = "女";
		
		$result = self::get_user();
		$args = array( 
			'tag' => $result['age'][$user_age].",".$result['nature'][$nature].",".$result['sex'][$sex], //根据用户年龄筛选文章
			'orderby' => $_GET["orderby"], //date发布时间、comment_count评论数量排序
			'meta_key' => '_post_views', //配合meta_value_num根据文章浏览量排序
			'paged' => get_query_var('paged'), //分页
			'order' => 'DESC' //降序排
		);
		$query = new WP_Query($args);

		$result = array(
			'count' => 0,
			'current' => 1,
			'pagination' => array(),
			'pager_label' => esc_html__('查看更多', 'press-grid'),
			'pager_label_empty' => esc_html__('没有了', 'press-grid'),
			'items' => array()
		);

		while( $query->have_posts() ){
			$query->the_post();
			global $post;

			$item = Press_Grid_Post::get_post_item();
			$result['items'][] = $item;
		}

		// get pagination
		Press_Grid_Post::get_pagination($query, $result);

		wp_reset_postdata();

		return $result;
		
	}

	public static function get_user(){
		
		$result = array(
			//年龄对应
			'age' => array(
				"2" => "2-4",
				"3" => "2-4",
				"4" => "2-4",
				"5" => "5-7",
				"6" => "5-7",
				"7" => "5-7",
				"8" => "8-10",
				"9" => "8-10",
				"10" =>"8-10"
			),
			//性格对应
			'nature' => array(
				"1" => "nx",
				"2" => "nx",
				"3" => "nx",
				"4" => "kl",
				"5" => "kl",
				"6" => "kl"
				
			),
			//性别对应
			'sex' => array(
				"1" => "男",
				"2" => "女"
			),
		);
		
		//$str = $result['age'][2].','.$result['nature'][2].",".$result['sex'][2];
		return $result;
	}



	public static function get_posts_by_reaction(){
		$result = array(
			'count' => 0,
			'current' => 1,
			'pagination' => array(),
			'pager_label' => esc_html__('Load more', 'press-grid'),
			'pager_label_empty' => esc_html__('No more posts', 'press-grid'),
			'items' => array()
		);

		// Initial query sets
        $args = array(
            'post_type' => 'post',
        	'ignore_sticky_posts' => true,
        	'paged' => max(1, abs(get_query_var('paged'))),
        	'meta_query' => array(
        		array(
                	'key' => '_emotions',
                    'value'   => get_query_var('reaction'),
                    'compare' => 'LIKE'
                )
    		)
        );

        // Query posts loop
        $posts_query = new WP_Query($args);
        if($posts_query->have_posts()) {
            while ( $posts_query->have_posts() ) {
                $posts_query->the_post();
                global $post;

				$item = Press_Grid_Post::get_post_item();
				$result['items'][] = $item;
            }
        }

        Press_Grid_Post::get_pagination($posts_query, $result);

		wp_reset_postdata();

		return $result;
	}


	public static function get_post_item(){
		global $post;
		$categories = array();
        $post_cats = wp_get_post_terms( get_the_ID(), 'category' );
        if( !empty($post_cats) ){
            foreach( $post_cats as $category ){
                $cat_color = get_term_meta($category->term_id, '_category_color', true);
                $cat = array(
                        'name' => $category->name,
                        'slug' => $category->slug,
                        'link' => get_term_link($category),
                        'color' => $cat_color
                    );

                $categories[] = $cat;
            }
        }

        /* array(
    		'haha' => 0
		); */
        $post_emotions = get_post_meta(get_the_id(), '_emotions', true);
        if( empty($post_emotions) ){
        	$post_emotions = array(
        		array( 'emoji'=>'no-reaction', 'count'=>esc_html__('No Reaction Yet', 'press-grid') )
    		);
        }
        else{
        	$all_reactions = (array)$post_emotions;
        	$post_emotions = array();
        	foreach ($all_reactions as $key => $value) {
        		if( abs($value)>0 ){
        			$post_emotions[] = array( 'emoji'=>$key, 'count'=>abs($value) );
        		}
        	}
        }
        
        if( !class_exists('Themeton_Reaction') ){
        	$post_emotions = array();
        }

		$author_id = get_the_author_meta('ID');
		$post_format = get_post_format();
		$post_format = $post_format ? $post_format : '';
		$media = array( 'type'=>'no-image', 'src'=>'' );


		$gallery = Press_Grid_Post::get_post_gallery_images();
		if( !empty($gallery) ){
			$media = array(
				'type' => 'gallery',
				'src' => $gallery
			);
		}

		if( $post_format=='audio' ){
			$audio = Press_Grid_Post::get_post_audio();
			if( !empty($audio) ){
				$media = array(
					'type' => 'audio',
					'src' => $audio
				);
			}
		}

		if( has_post_thumbnail() && empty($media['src']) ){
			$media = array(
				'type' => 'image',
				'src' => wp_get_attachment_image_url(get_post_thumbnail_id(), 'press-grid-image-medium'),
				'lazyload' => wp_get_attachment_image_url(get_post_thumbnail_id(), 'press-grid-image-medium-thumb')
			);
		}

		$post_classes = Press_Grid_Post::filter_post_classes( (array)get_post_class() );

		$item = array(
			'id' => get_the_id(),
			'title' => get_the_title(),
			'link' => get_permalink(),
			'date' => get_the_date(),
			'format' => $post_format,
			'excerpt' => get_the_excerpt(),
			'author' => array(
				'id' => $author_id,
				'name' => get_the_author_meta('display_name', $author_id),
				'link' => get_author_posts_url($author_id),
				'avatar' => get_avatar_url($author_id)
			),
			'media' => $media,
			'categories' => $categories,
			'comments' => get_comments_number(),
			'post_views' => abs(TT::getmeta('post_views')),
			'post_size' => TT::getmeta('post_size'),
			'post_classes' => $post_classes,
			'emotions' => $post_emotions,
			'edit_url' => is_user_logged_in() && get_current_user_id()==$author_id ? Press_Grid_Static::get_url_frontend(get_the_id()) : ''
		);
		
		return $item;
	}


	public static function filter_post_classes($classes){
		$post_classes = array();
		foreach ($classes as $val) {
			if( !empty($val) && strpos($val, 'tag-')===false ){
				$post_classes[] = $val;
			}
		}
		return $post_classes;
	}



	public static function get_pagination($query, &$result){
		if( isset($query->max_num_pages) ){
        	$big = 999999999;
        	$current = 1;
    		$indexing = 0;
    		$page_links = array();

    		$pagination_type = TT::get_mod('content_pagination');
    		if( $pagination_type=='standard' ){
    			$pager = TPL::pagination($query);
    			$result['current'] = -1;
            	$result['pagination'] = array();
            	$result['pagination'][] = sprintf('%s', $pager);
    			return;
    		}


	        $paginate = (array)paginate_links( array(
	            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	            'type' => 'array',
	            'show_all' => true,
	            'prev_next' => false,
	            'total' => $query->max_num_pages,
	            'current' => max(1, abs(get_query_var('paged')))
	            )
	        );
    		
            foreach ( $paginate as $page ) {
            	$indexing++;
            	$url = '';
            	if( strpos($page, '<span')!==false ){
            		$current = $indexing;
            	}
            	else{
        			preg_match('/href=["\']?([^"\'>]+)["\']?/', $page, $match);
					$url = isset($match[1]) ? esc_url($match[1]) : '';
            	}
            	$page_links[] = $url;
            }

            $result['current'] = $current;
            $result['pagination'] = $page_links;
        }
	}


	// Post Gallery
	public static function get_post_gallery_images(){
		global $post;

		$gallery_items = array();

		if( get_post_format()=='gallery' ){
			$post_content = $post->post_content;
			if( has_shortcode($post_content, 'gallery') ){
	            $gallery = get_post_gallery( get_the_id(), false );
	            $attachment_ids = explode(",", isset($gallery['ids']) ? $gallery['ids'] : "");
	            foreach ($attachment_ids as $id){
	            	if( !empty($id) ){
	            		$img_full = wp_get_attachment_image_url( $id, 'press-grid-image-large' );
	                	$gallery_items[] = $img_full;
	            	}
	            }
	        }
		}

		return $gallery_items;
	}


	// Post Audio
	public static function get_post_audio(){
		global $post;
		$media = '';
		if( get_post_format()=='audio' ){
			$pattern = get_shortcode_regex();
		    preg_match('/'.$pattern.'/s', $post->post_content, $matches);

		    if (is_array($matches) && isset($matches[2]) && $matches[2] == 'audio') {
		        $shortcode = $matches[0];
		        $media = '<div class="mejs-audio-wrapper audio">'. do_shortcode($shortcode) . '</div>';
		    }
		    else if (is_array($matches) && isset($matches[2]) && $matches[2] == 'playlist') {
		    	$shortcode = $matches[0];
		        $media = '<div class="mejs-audio-wrapper audio-playlist">'. do_shortcode($shortcode) . '</div>';
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
		                    $media = "<div class='audio-oembed'>".apply_filters( "themeton_media_filter", $matches[1] )."</div>";
		                }
		            }
		        }
		    }
		}
	    
	    return $media;
	}

}