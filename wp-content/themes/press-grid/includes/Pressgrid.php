<?php

class Press_Grid_Core{

	function __construct(){

        // Frontend Publish
        add_action('wp_ajax_themeton_frontend_publish', array($this, 'save_frontend_publish'));
        add_action('wp_ajax_nopriv_themeton_frontend_publish', array($this, 'save_frontend_publish'));

        // Frontend Profile Update
        add_action('wp_ajax_themeton_profile_update', array($this, 'update_profile'));
        add_action('wp_ajax_nopriv_themeton_profile_update', array($this, 'update_profile'));

        // Pressgrid Pagination
        add_action('wp_ajax_themeton_post_pagination', array($this, 'render_post_pagination'));
        add_action('wp_ajax_nopriv_themeton_post_pagination', array($this, 'render_post_pagination'));

        // Pressgrid User Login | Register | Recover
        add_action('wp_ajax_themeton_user_signin', array($this, 'themeton_user_signin_hook'));
        add_action('wp_ajax_nopriv_themeton_user_signin', array($this, 'themeton_user_signin_hook'));
        // ----
        add_action('wp_ajax_themeton_user_signup', array($this, 'themeton_user_signup_hook'));
        add_action('wp_ajax_nopriv_themeton_user_signup', array($this, 'themeton_user_signup_hook'));
        // ----
        add_action('wp_ajax_themeton_user_lost_pass', array($this, 'themeton_user_lost_pass_hook'));
        add_action('wp_ajax_nopriv_themeton_user_lost_pass', array($this, 'themeton_user_lost_pass_hook'));


        // community templates
        add_action('init', array($this, 'custom_rewrite'), 10, 0);
        add_filter('query_vars', array($this, 'add_query_vars'));
        add_filter( 'document_title_parts', array($this, 'custom_wp_title'), 10, 2 );
        add_filter('template_include', array($this, 'custom_templates'));

        // re-flush rewrite
        add_action( 'admin_init', array($this, 'settings_flush_rewrite') );
        add_action( 'pre_get_posts', array($this, 'fix_rewrite_404_header') );

        // some media scripts
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_filter( 'ajax_query_attachments_args', array( $this, 'filter_media' ) );

		//批量删除绘本
		add_action('wp_ajax_themeton_del_booklist', array($this, 'del_booklist'));
	}


/**************** 绘本管理 *****************/

	
	//批量删除绘本
	public function del_booklist(){
		global $wpdb;
		$id = $_POST['id'];
		foreach($id as $k=>$v){
			$result = wp_delete_post($v , true);
		}
		if($result){
			print_r(1);
		}
		exit;
	}


/**************** End *****************/


    // re-flush rewrite
    public function settings_flush_rewrite(){
        flush_rewrite_rules();
    }
    public function fix_rewrite_404_header(){
        global $wp_query;
        if( isset($wp_query->query_vars['pagename'], $wp_query->query_vars['reaction']) && $wp_query->query_vars['pagename']=='reaction' && !empty($wp_query->query_vars['reaction']) && isset($_POST['paged']) ){
            status_header(200);
        }
    }


	public function render_post_pagination(){
		$posts = Press_Grid_Post::get_posts();
		echo json_encode($posts);
		exit;
	}



	// additional query vars
	public function add_query_vars($public_query_vars){
        $public_query_vars[] = 'pagename';
        $public_query_vars[] = 'post';
        $public_query_vars[] = 'reaction';
        return $public_query_vars;
    }

    // additional url rewrite
    public function custom_rewrite(){
        $slug = 'frontend-editor';
        add_rewrite_rule( $slug . '/?$', 'index.php?pagename=' . $slug, 'top' );
        add_rewrite_rule( $slug . '/([0-9]+)/?$', 'index.php?pagename=' . $slug . '&post=$matches[1]', 'top' );

        $slug = 'profile-edit';
        add_rewrite_rule( $slug . '/?$', 'index.php?pagename=' . $slug, 'top' );

        $slug = 'reacted-posts';
        add_rewrite_rule( $slug . '/?$', 'index.php?pagename=' . $slug, 'top' );

        $slug = 'reaction';
        add_rewrite_rule( $slug . '/([a-zA-Z]+)/?$', 'index.php?pagename=' . $slug . '&reaction=$matches[1]', 'top' );
        add_rewrite_rule( $slug . '/([a-zA-Z]+)/page/([0-9]+)/?$', 'index.php?pagename=' . $slug . '&reaction=$matches[1]', 'top' );
    }


    // additional page titles
	public function custom_wp_title($title){
        global $wp_query;

        if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='frontend-editor' ){
            $title['title'] = esc_html__('Frontend Editor', 'press-grid');
        }
        else if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='profile-edit' ){
            $title['title'] = esc_html__('Edit Profile', 'press-grid');
        }
        else if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='reacted-posts' ){
            $title['title'] = esc_html__('Reacted Posts', 'press-grid');
        }
        else if( isset($wp_query->query_vars['pagename'], $wp_query->query_vars['reaction']) && $wp_query->query_vars['pagename']=='reaction' && !empty($wp_query->query_vars['reaction']) ){
            $title['title'] = esc_html__('Filter by Reaction', 'press-grid');
        }
		else if( is_user_logged_in() && isset($wp_query->query_vars['pagename'])&& $wp_query->query_vars['pagename']=='draw-list' ){
			$title['title'] = esc_html__('绘本管理', 'press-grid');
		}
		else if( is_user_logged_in() && isset($wp_query->query_vars['pagename'])&& $wp_query->query_vars['pagename']=='draw-edit' ){
			$title['title'] = esc_html__('绘本编辑', 'press-grid');
		}
		else if( is_user_logged_in() && isset($wp_query->query_vars['pagename'])&& $wp_query->query_vars['pagename']=='draw-item' ){
			$title['title'] = esc_html__('我的绘本', 'press-grid');
		}
		else if( is_user_logged_in() && isset($wp_query->query_vars['pagename'])&& $wp_query->query_vars['pagename']=='draw-item-detail' ){
			$title['title'] = esc_html__('专辑信息', 'press-grid');
		}

        return $title;
	}


    public function custom_templates($template){
        global $wp_query;

        // frontend editor
        if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='frontend-editor' ){
            return get_template_directory() . '/tpl-frontend-editor.php';
        }

        // edit profile
        else if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='profile-edit' ){
            return get_template_directory() . '/tpl-profile-edit.php';
        }

        // user reacted posts
        else if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='reacted-posts' ){
            return get_template_directory() . '/tpl-reacted-posts.php';
        }

        // edit work
        else if( isset($wp_query->query_vars['pagename'], $wp_query->query_vars['reaction']) && $wp_query->query_vars['pagename']=='reaction' && !empty($wp_query->query_vars['reaction']) ){
            return get_template_directory() . '/tpl-reaction.php';
        }
		
		/**** 绘本管理 ****/
		else if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='draw-list' ) {
			return get_template_directory() . '/template-page/tpl-draw-list.php';
		}
		else if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='draw-edit' ) {
			return get_template_directory() . '/template-page/tpl-draw-edit.php';
		}
		else if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='draw-item' ){
			return get_template_directory() . '/template-page/tpl-draw-item.php';
		}
		else if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) && $wp_query->query_vars['pagename']=='draw-item-detail' ) {
			return get_template_directory() . '/template-page/tpl-draw-item-detail.php';
		}

        return $template;
    }


    // load some media scripts
    /*public function enqueue_scripts(){
        global $wp_query;
        if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) ){
            if( $wp_query->query_vars['pagename']=='frontend-editor' || $wp_query->query_vars['pagename']=='profile-edit' ){
                wp_enqueue_media();
                wp_enqueue_script('press-grid-frontend', get_template_directory_uri() . '/js/frontend.js', array('jquery'), false, true );
            }
        }
    }*/

	  // load some media scripts
  public function enqueue_scripts(){
      global $wp_query;
      if( is_user_logged_in() && isset($wp_query->query_vars['pagename']) ){
          if( $wp_query->query_vars['pagename']=='frontend-editor' || $wp_query->query_vars['pagename']=='profile-edit' || $wp_query->query_vars['pagename']=='draw-edit' || $wp_query->query_vars['pagename']=='draw-list' ){
              wp_enqueue_media();
              wp_enqueue_script('press-grid-frontend', get_template_directory_uri() . '/js/frontend.js', array('jquery'), false, true );
          }
      }
  }

    public function filter_media( $query ){
        // admins get to see everything
        if ( ! current_user_can( 'manage_options' ) )
            $query['author'] = get_current_user_id();
        return $query;
    }




    public function save_frontend_publish(){

        if( !is_user_logged_in() ){
            exit;
        }

        $post_status = Press_Grid_Std::get_mod('frontend_post_status');
        $post_status = !empty($post_status) ? $post_status : 'draft';

        $post_id = $_POST['id'];
        $title = $_POST['title'];
        $excerpt = $_POST['excerpt'];
        $content = $_POST['content'];
        $cats = $_POST['cats'];
        $image = $_POST['image'];

        $my_post = array();
        $my_post['post_type']       = 'post';
        $my_post['post_title']      = $title;
        $my_post['post_excerpt']    = $excerpt;
        $my_post['post_content']    = $content;
        $my_post['post_status']     = $post_status;
        $my_post['post_author']     = get_current_user_id();
        $my_post['comment_status']  = 'open';

        // new post or update post
        if( !empty($post_id) ){ $my_post['ID'] = $post_id; }

        $post_id = wp_insert_post($my_post);

        // set featured image
        if( !empty($image) ){
            set_post_thumbnail( $post_id, $image );
        }

        // set categories
        wp_set_post_terms($post_id, $cats, 'category');

        printf('%s', json_encode( array('result'=>get_permalink($post_id)) ));

        exit;

    }


    public function trim($text){
        return trim( sprintf('%s', $text) );
    }


    public function update_profile(){
        if( !is_user_logged_in() ){
            exit;
        }

        $user = get_current_user_id();
        $profile = array(
            'first_name' => $this->trim($_POST['first_name']),
            'last_name' => $this->trim($_POST['last_name']),
            'user_email' => $this->trim($_POST['email']),
            'user_url' => $this->trim($_POST['website']),
            'user_facebook' => $this->trim($_POST['facebook']),
            'user_twitter' => $this->trim($_POST['twitter']),
            'description' => $this->trim($_POST['desc'])
        );

        foreach ($profile as $key => $value) {
            if( !empty($value) ){
                update_user_meta( $user, $key, esc_attr($value) );
            }
        }

        $pass1 = $this->trim($_POST['pass1']);
        $pass2 = $this->trim($_POST['pass2']);
        if( !empty($pass1) && !empty($pass2) && $pass1==$pass2 ){
            wp_set_password($pass1, $user);
        }

        printf('%s', json_encode(array('result'=>$user)) );

        exit;
    }



    public function themeton_user_signin_hook(){
        global $wpdb;
        $nonce = isset($_POST['nonce']) ? $_POST['nonce'] : '';
        
        if ( ! wp_verify_nonce( $nonce, 'pg_user_login_action' ) ){
            exit;
        }

        $username = '';
        $password = '';
        if( isset($_POST['username'], $_POST['username']) ){
            $username = $wpdb->escape($_POST['username']);
            $password = $wpdb->escape($_POST['pass']);
        }

        if( empty($username) || empty($password) ){
            exit;
        }

        $user_data = array();
        $user_data['user_login'] = $username;
        $user_data['user_password'] = $password;
        $user = wp_signon( $user_data, false );
        
        if ( !is_wp_error($user) ) {
            wp_set_current_user( $user->ID, $username );
            do_action('set_current_user');

            echo json_encode( array('redirect' => esc_url(home_url('/') . '?currently=loggedin') ) );
        }

        exit;
    }

    public function themeton_user_signup_hook(){
        $nonce = isset($_POST['nonce']) ? $_POST['nonce'] : '';

        $username = '';
        $email = '';
        if( isset($_POST['username'], $_POST['email']) ){
            $username = $_POST['username'];
            $email = $_POST['email'];
        }

        if( empty($username) || empty($email) ){
            exit;
        }

        if( !username_exists($username) && !email_exists($email) ){
            $random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
            $user_id = wp_create_user( $username, $random_password, $email );

            echo json_encode( array('user' => $user_id ) );
        }

        exit;
    }

    public function themeton_user_lost_pass_hook(){
        // username_email
        // nonce
        exit;
    }


}




class Press_Grid_Static{
    public static function build_url($param){
        return esc_url(home_url('/') . $param);
    }
    public static function get_url_frontend($post = ''){
        $slug = 'frontend-editor';
        $nuri = Press_Grid_Static::build_url($slug . "/");
        $uri = Press_Grid_Static::build_url('?pagename=' . $slug);
        if( !empty($post) ){
            $nuri = Press_Grid_Static::build_url($slug . "/$post/");
            $uri = Press_Grid_Static::build_url('?pagename=' . $slug . '&post=' . $post);
        }
        return Press_Grid_Static::get_uri($nuri, $uri);
    }

    public static function get_url_reaction($reaction){
        $slug = 'reaction';
        $nuri = Press_Grid_Static::build_url($slug . "/$reaction/");
        $uri = Press_Grid_Static::build_url('?pagename=' . $slug . '&reaction=' . $reaction);
        return Press_Grid_Static::get_uri($nuri, $uri);
    }

    public static function get_url_profile(){
        $slug = 'profile-edit';
        $nuri = Press_Grid_Static::build_url($slug . "/");
        $uri = Press_Grid_Static::build_url('?pagename=' . $slug);
        return Press_Grid_Static::get_uri($nuri, $uri);
    }
	
	
	public static function get_url_draw_list(){
		$slug = '?pagename=draw-list';
		$slug_permastruct = 'draw-list';
		$nuri = Press_Grid_Static::build_url( $slug_permastruct );
		$uri = Press_Grid_Static::build_url(  $slug  );
		return Press_Grid_Static::get_uri($nuri, $uri);
	}
	

	public static function get_url_draw_edit($id=''){
		if($id){
			$slug = '?pagename=draw-edit&post='.$id;
			$slug_permastruct = 'draw-edit?post='.$id;
		}
		else{
			$slug = '?pagename=draw-edit';
			$slug_permastruct = 'draw-edit';
		}
		$nuri = Press_Grid_Static::build_url( $slug_permastruct  );
		$uri = Press_Grid_Static::build_url(  $slug );
		return Press_Grid_Static::get_uri($nuri, $uri);
	}


	//显示绘本列表页
	public static function get_url_draw(){
		$slug	= 'draw-list';
		$nuri	= Press_Grid_Static::build_url($slug . "/");
		$uri	= Press_Grid_Static::build_url('?pagename=' . $slug);
		return Press_Grid_Static::get_uri($nuri, $uri);
	}

		
	//返回绘本连接
	/*public static function get_url_draw_edit($id=''){
		if($id){
			$slug = '?pagename=draw-edit&post='.$id;
			$slug_permastruct = 'draw-edit?post='.$id;
		}else{
			$slug = '?pagename=draw-edit';
			$slug_permastruct = 'draw-edit';
		}
		$nuri = Press_Grid_Static::build_url( $slug_permastruct  );
		$uri = Press_Grid_Static::build_url(  $slug );
		return Press_Grid_Static::get_uri($nuri, $uri);
	}*/


    public static function get_url_reacted_posts(){
        $slug = 'reacted-posts';
        $nuri = Press_Grid_Static::build_url($slug . "/");
        $uri = Press_Grid_Static::build_url('?pagename=' . $slug);
        return Press_Grid_Static::get_uri($nuri, $uri);
    }

    public static function get_uri($nice_uri, $uri){
        $permastruct = get_option('permalink_structure');
        return !empty($permastruct) ? $nice_uri : $uri;
    }
}

new Press_Grid_Core();