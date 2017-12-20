<div class="login-detail">
    <div class="signup">
        
        <?php if( is_user_logged_in() ): ?>

        <span class="avatar-wrap">
            <?php echo get_avatar(get_current_user_id(), 83); ?>
        </span>
        <span class="logged-in-menu dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:;"><?php echo get_the_author_meta('nicename', get_current_user_id()); ?></a>
            <span class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo esc_url(get_author_posts_url(get_current_user_id())); ?>">
                    <i class="fa fa-user"></i>
                    <?php esc_html_e('我的作品', 'press-grid'); ?>
                </a>
                <a class="dropdown-item" href="<?php echo esc_url(Press_Grid_Static::get_url_profile()); ?>">
                    <i class="fa fa-cog"></i>
                    <?php esc_html_e('我的设置', 'press-grid'); ?>
                </a>
                <!-- <a class="dropdown-item" href="<?php echo esc_url(Press_Grid_Static::get_url_frontend()); ?>">
                    <i class="fa fa-pencil-square"></i>
                    <?php esc_html_e('Add Post', 'press-grid'); ?>
                </a> -->
				<a class="dropdown-item" href="<?php echo esc_url(Press_Grid_Static::get_url_profile()); ?>">
                    <i class="fa fa-cog"></i>
                    <?php esc_html_e('绘本管理', 'press-grid'); ?>
                </a>
                <span class="dropdown-divider"></span>
                <a class="dropdown-item" href="<?php echo esc_url(wp_logout_url( home_url('/') )); ?>">
                    <i class="fa fa-sign-out"></i>
                    <?php esc_html_e('退出登录', 'press-grid'); ?>
                </a>
            </span>
        </span>

        <?php else: ?>

        <span class="avatar-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/user.png" alt="user avatar">
        </span>
        <div class="sign-links dropdown">
            <a href="javascript:;" class="sign-link-in"><?php esc_html_e('sign in', 'press-grid'); ?></a>
            <a href="javascript:;" class="sign-link-up"><?php esc_html_e('sign up', 'press-grid'); ?></a>
            <div class="dropdown-menu">

                <form class="dropdown-form dropdown-form-register">
                    <small class="form-text text-danger"></small>
                    <div class="form-group">
                        <label for="reg_username"><?php esc_html_e('Username', 'press-grid'); ?></label>
                        <input type="text" class="form-control" id="reg_username" placeholder="<?php esc_attr_e('Username', 'press-grid'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="reg_email"><?php esc_html_e('Email', 'press-grid'); ?></label>
                        <input type="email" class="form-control" id="reg_email" placeholder="<?php esc_attr_e('Enter email', 'press-grid'); ?>">
                        <small class="form-text text-muted"><?php esc_html_e('A password will be e-mailed to you.', 'press-grid'); ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <svg class="pagination-loader" aria-hidden="true">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-loader"></use>
                        </svg>
                        <span><?php esc_html_e('Register', 'press-grid'); ?></span>
                    </button>
                </form>

                <form class="dropdown-form dropdown-form-login">
                    <?php
                        if ( function_exists( 'wp_nonce_field' ) ){
                            wp_nonce_field( 'pg_user_login_action', 'pg_user_login_nonce' );
                        }
                    ?>
                    <small class="form-text text-danger"></small>
                    <div class="form-group">
                        <label for="login_username"><?php esc_html_e('Username', 'press-grid'); ?></label>
                        <input type="text" class="form-control" id="login_username" placeholder="<?php esc_attr_e('Username', 'press-grid'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="login_password"><?php esc_html_e('Password', 'press-grid'); ?></label>
                        <input type="password" class="form-control" id="login_password" placeholder="<?php esc_attr_e('Password', 'press-grid'); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <svg class="pagination-loader" aria-hidden="true">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-loader"></use>
                        </svg>
                        <span><?php esc_html_e('Login', 'press-grid'); ?></span>
                    </button>
                </form>

                <form class="dropdown-form dropdown-form-recover">
                    <div class="form-group">
                        <label for="rec_name_email"><?php esc_html_e('Username or E-mail:', 'press-grid'); ?></label>
                        <input type="text" class="form-control" id="rec_name_email" placeholder="<?php esc_attr_e('Username or Email', 'press-grid'); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary"><?php esc_html_e('Recover password', 'press-grid'); ?></button>
                </form>

                <form class="sign-in-up-links">
                <a href="<?php echo esc_url(wp_lostpassword_url( home_url('/') )); ?>">Lost password</a>
                    <a href="javascript:;" class="act-sign-in-up register">Register</a>
                    <a href="javascript:;" class="act-sign-in-up login">Login</a>
                </form>
            </div>
        </div>

        <?php
        if( function_exists('the_champ_social_login_enabled') && the_champ_social_login_enabled() ): ?>
            <span class="sign-seperator"><?php esc_html_e('or', 'press-grid'); ?></span>
            <span class="sign-others">
            <?php
            global $theChampLoginOptions;
            $html = '';
            $customInterface = apply_filters('the_champ_login_interface_filter', '', $theChampLoginOptions, false);
            if( isset($theChampLoginOptions['providers']) && is_array($theChampLoginOptions['providers']) && count($theChampLoginOptions['providers']) > 0 ):
                foreach($theChampLoginOptions['providers'] as $provider){
                    $html .= '<a href="javascript:;" ';
                    // id
                    if( $provider == 'google' ){
                        $html .= 'id="theChamp'. ucfirst($provider) .'Button" ';
                    }
                    // class
                    $html .= 'class="theChampLogin theChamp'. ucfirst($provider) .'Login" ';
                    $html .= 'alt="Login with ';
                    $html .= ucfirst($provider);
                    $html .= '" title="Login with ';
                    if($provider == 'live'){
                        $html .= 'Windows Live';
                    }else{
                        $html .= ucfirst($provider);
                    }
                    if(current_filter() == 'comment_form_top' || current_filter() == 'comment_form_must_log_in_after'){
                        $html .= '" onclick="theChampCommentFormLogin = true; theChampInitiateLogin(this)" >';
                    }else{
                        $html .= '" onclick="theChampInitiateLogin(this)" >';
                    }
                    $html .= '<i class="icon-social-'. strtolower($provider) .'"></i></a>';
                }
                printf('%s', $html);
            endif;
            ?>
            </span>
        <?php endif; ?>

        <?php endif; ?>

    </div>
</div>