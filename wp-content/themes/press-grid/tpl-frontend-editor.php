<?php

get_header(); 

$_get_post = get_query_var('post');

$post_id = !empty($_get_post) && abs($_get_post)>0 ? abs($_get_post) : 0;
$post_title = '';
$post_excerpt = '';
$post_content = '';
$post_image = '';
$post_image_src = '';
$post_cats = array();

if( $post_id>0 ){
    $the_post = get_post($post_id);
    if( !empty($the_post) && isset($the_post->post_content) ){
        $post_title = $the_post->post_title;
        $post_excerpt = $the_post->post_excerpt;
        $post_content = $the_post->post_content;

        if( has_post_thumbnail($post_id) ){
            $post_image = get_post_thumbnail_id($post_id);
            $post_image_src = sprintf( '<img src="%s">', esc_attr(wp_get_attachment_image_url($post_image, 'full')) );
        }

        $categories = wp_get_post_terms($post_id, 'category');
        if( !empty($categories) ){
            foreach( $categories as $category ){
                $post_cats[] = $category->term_id;
            }
        }
    }

}

?>
<section class="content-area">


    <form method="post" id="frontend_editor">
        <div class="icontainer">
            <div class="row sticky-content-sidebar">
                
                <div class="col-md-9">
                    <div class="post-entry-content">
                        <div class="theiaStickySidebar">
                            
                            <div class="page-content">
                                <div class="entry-content">

                                    <input type="hidden" id="post_id" name="post_id" value="<?php echo esc_attr($post_id); ?>">

                                    <div class="form-group">
                                        <input type="text" id="post_title" name="post_title" value="<?php echo esc_attr($post_title); ?>" placeholder="<?php esc_html_e("Enter title here", 'press-grid'); ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <textarea type="text" id="post_excerpt" name="post_excerpt" placeholder="<?php esc_html_e("Enter excerpt here", 'press-grid'); ?>" class="form-control"><?php printf('%s', $post_excerpt); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <?php
                                        wp_editor( $post_content, 'post_content', array(
                                            'media_buttons' => true,
                                            'wpautop' => true
                                        ));
                                        ?>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Sidebar
    			================================================== -->
    			<div class="col-md-3 sidebar">
    				<div class="entry-sidebar">
    					<div class="theiaStickySidebar">
                            
                            <div class="alert alert-success" role="alert" style="display:none;">
                                <strong><?php esc_html_e('Post updated!', 'press-grid'); ?></strong> <span data-text="<?php esc_attr_e('View Post', 'press-grid'); ?>"></span>
                            </div>
                            <div class="alert alert-danger" role="alert" style="display:none;">
                                <strong><?php esc_html_e('Warning!', 'press-grid'); ?></strong> <?php esc_html_e('Please try again!', 'press-grid'); ?>
                            </div>

    						<div class="widget">
                                <button type="button" id="post_save" class="btn btn-primary"><?php esc_html_e('Save Post', 'press-grid'); ?></button>
                                &nbsp;
                                <a href="<?php echo esc_url(get_author_posts_url(get_current_user_id())); ?>" class="btn"><?php esc_html_e('Cancel', 'press-grid'); ?></a>
                            </div>
                            <div class="widget">
                                <h5><?php esc_html_e('Featured Image', 'press-grid'); ?></h5>
                                <div class="elm-featured-image">
                                    <div class="elm-image-preview"><?php printf('%s', $post_image_src); ?></div>
                                    <input type="hidden" id="post_featured_image" name="post_featured_image" value="<?php echo esc_attr($post_image); ?>" class="elm-image">
                                    <a href="javascript:;" class="elm-image-handler" data-add="<?php esc_attr_e('Set featured image', 'press-grid'); ?>" data-remove="<?php esc_attr_e('Remove featured image', 'press-grid'); ?>">
                                        <?php esc_html_e('Set featured image', 'press-grid'); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="widget">
    							<h5><?php esc_html_e('Categories', 'press-grid'); ?></h5>
                                <div class="elm-categories">
                                    <div class="elm-cat-item">
                                        <?php
                                        $categories = get_categories( array(
                                            'type' => 'post',
                                            'child_of' => 0,
                                            'parent' => '0',
                                            'orderby' => 'name',
                                            'order' => 'ASC',
                                            'hide_empty' => false,
                                            'hierarchical' => 1,
                                            'number' => '',
                                            'taxonomy' => 'category',
                                            'pad_counts' => false

                                        ));
                                        foreach ($categories as $item):
                                        ?>
                                        <label>
                                            <input type="checkbox" name="post_cat[]" value="<?php echo esc_attr($item->term_id); ?>" <?php printf('%s', in_array($item->term_id, $post_cats) ? 'checked' : ''); ?>>
                                            <?php printf('%s', $item->name); ?>
                                        </label>
                                        <?php
                                        endforeach; ?>
                                    </div>
                                </div>
    						</div>
    				    </div>
    				</div>
    			</div>

            </div>
        </div>
    </form>

</section>


<?php get_footer(); ?>