<?php
get_header();

$user_id = get_current_user_id();
$first_name = get_the_author_meta('first_name', $user_id);
$last_name = get_the_author_meta('last_name', $user_id);
$email = get_the_author_meta('email', $user_id);
$url = get_the_author_meta('url', $user_id);
$description = get_the_author_meta('description', $user_id);

$facebook = get_the_author_meta('facebook', $user_id);
$twitter = get_the_author_meta('twitter', $user_id);

?>
<section class="content-area">

    <div class="icontainer">
        <div class="row sticky-content-sidebar">
            <div class="col-md-9">
                <div class="post-entry-content">
                    <div class="theiaStickySidebar">
                        
                        <div class="page-content">
                            <div class="entry-content">
                                <h2 class="page-title"><?php esc_html_e('Edit Profile', 'press-grid'); ?></h2>

                                <form method="post" id="frontend_user_form" class="form-horizontal">

                                    <div class="form-group row author-avatar">
                                        <label class="col-sm-3 col-md-2 col-form-label">
                                            <?php echo get_avatar( get_current_user_id(), 96 ); ?>
                                        </label>
                                        <div class="col-sm-9 col-md-10">
                                            <a target="_blank" href="https://en.gravatar.com/profiles/edit/?noclose#your-images"><span><?php esc_html_e('Change Avatar', 'press-grid'); ?></span></a>
                                            <span class="help-block"><?php esc_html_e('Note: Avatar is auto taken in Gravatar.com. If you insert your registered email in our email section then you uploaded avatar will be displayed in this section.', 'press-grid'); ?></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label" for="user_firstname"><?php esc_html_e('First name', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <input type="text" id="user_firstname" name="user_firstname" placeholder="<?php esc_html_e("Type first name", 'press-grid'); ?>" value="<?php echo esc_attr($first_name); ?>" class="form-control valid">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label" for="user_lastname"><?php esc_html_e('Last name', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <input type="text" id="user_lastname" name="user_lastname" placeholder="<?php esc_html_e("Type last name", 'press-grid'); ?>" value="<?php echo esc_attr($last_name); ?>" class="form-control valid">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label" for="user_email"><?php esc_html_e('E-mail', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <input type="text" id="user_email" name="user_email" placeholder="<?php esc_html_e("Type e-mail", 'press-grid'); ?>" value="<?php echo esc_attr($email); ?>" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label" for="user_url"><?php esc_html_e('Website', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <input type="text" id="user_url" name="user_url" placeholder="<?php esc_html_e("Type Website", 'press-grid'); ?>" class="form-control" value="<?php echo esc_attr($url); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label" for="user_fb_url"><?php esc_html_e('Facebook URL', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <input type="text" id="user_fb_url" name="user_fb_url" placeholder="<?php esc_html_e("Type Facebook URL", 'press-grid'); ?>" class="form-control" value="<?php echo esc_attr($facebook); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label" for="user_tw_url"><?php esc_html_e('Twitter URL', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <input type="text" id="user_tw_url" name="user_tw_url" placeholder="<?php esc_html_e("Type Twitter URL", 'press-grid'); ?>" class="form-control" value="<?php echo esc_attr($twitter); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label"><?php esc_html_e('Biographical Info', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <textarea id="user_description" name="user_description" cols="30" rows="5" placeholder="<?php esc_html_e("Type Biographical Info", 'press-grid'); ?>" class="form-control"><?php echo esc_html($description); ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label" for="new_password"><?php esc_html_e('New password', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <input type="password" id="new_password" name="new_password" placeholder="<?php esc_html_e("Type new password", 'press-grid'); ?>" class="form-control" value="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label" for="confirm_password"><?php esc_html_e('Confirm password', 'press-grid'); ?></label>
                                        <div class="col-sm-9 col-md-10">
                                            <input type="password" id="confirm_password" name="confirm_password" placeholder="<?php esc_html_e("Type confirm password", 'press-grid'); ?>" class="form-control" value="" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label">
                                            <div class="message hide"></div>
                                        </label>
                                        <div class="col-sm-9 col-md-10">
                                            <button type="button" id="profile_save" class="btn btn-primary"><?php esc_html_e('Update profile', 'press-grid'); ?></button>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label">
                                            
                                        </label>
                                        <div class="col-sm-9 col-md-10">
                                            <div class="alert alert-success" role="alert" style="display:none;">
                                                <strong><?php esc_html_e('Success!', 'press-grid'); ?></strong> <span><?php esc_html_e('Updated profile', 'press-grid'); ?></span>
                                            </div>
                                            <div class="alert alert-danger" role="alert" style="display:none;">
                                                <strong><?php esc_html_e('Warning!', 'press-grid'); ?></strong> <?php esc_html_e('Please try again!', 'press-grid'); ?>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php
            global $pressgrid_sidebar;
            $pressgrid_sidebar = 'page';
            get_sidebar();
            ?>
        </div>
    </div>

</section>


<?php get_footer(); ?>