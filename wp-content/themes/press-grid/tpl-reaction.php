<?php
// pagination
if( isset($_POST['paged']) ){
    $posts = Press_Grid_Post::get_posts_by_reaction();
    echo json_encode($posts);
    exit;
}

get_header();
?>

<section class="content-area">

    <div class="icontainer">
        <div class="row">
            <div class="col-sm-12">

                <div class="main-title">
                    <div class="entry-title">
                        <?php
                        $reaction = get_query_var('reaction');
                        $theme_reactions = TPL::get_emotions();
                        if( array_key_exists($reaction, $theme_reactions) ): ?>
                        <h1 class="display-4">
                            <svg class="emotion-icon emoji-icon-<?php echo esc_attr($reaction); ?>" aria-hidden="true" style="width: 80px;height: 80px;">
                                <use xlink:href="#emoji-icon-<?php echo esc_attr($reaction); ?>"></use>
                            </svg>
                        </h1>
                        <div class="lead">
                            <?php esc_html_e('Filter by', 'press-grid'); ?> <strong><?php printf('%s', $theme_reactions[$reaction]); ?></strong>
                        </div>
                        <?php
                        endif; ?>
                    </div>
                </div>

                <div class="main-content">
                    <div class="pressgrid-viewport">
                        <div id="pressgrid_content"></div>
                        <?php
                        $posts = Press_Grid_Post::get_posts_by_reaction();
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