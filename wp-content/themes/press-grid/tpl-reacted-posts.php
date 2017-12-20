<?php
// pagination
get_template_part('template-parts/paged');

get_header();
?>

<section class="content-area">

    <div class="icontainer">
        <div class="row">
            <div class="col-sm-12">

                <div class="main-title">
                    <div class="entry-title">
                        <?php
                            the_archive_title( '<h1 class="display-4">', '</h1>' );
                            the_archive_description( '<div class="lead">', '</div>' );
                        ?>
                    </div>
                </div>

                <div class="main-content">
                    <div class="pressgrid-viewport">
                        <div id="pressgrid_content"></div>
                        <?php
                        $posts = Press_Grid_Post::get_posts();

                        if( is_user_logged_in() && get_current_user_id()==get_query_var('author') ){
                            wp_reset_postdata();
                            $drafts = array();
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'draft',
                                'author' => get_current_user_id(),
                                'ignore_sticky_posts' => true
                            );
                            $posts_query = new WP_Query($args);
                            while( $posts_query->have_posts() ){
                                $posts_query->the_post();
                                $item = Press_Grid_Post::get_post_item();
                                $drafts[] = $item;
                            }
                            wp_reset_postdata();
                            $posts['items'] = array_merge($drafts, $posts['items']);
                        }

                        printf('<script type="text/template" id="pressgrid_json">%s</script>', json_encode($posts));
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="pressgrid_pagination"></div>

</section>

<?php get_footer(); ?>