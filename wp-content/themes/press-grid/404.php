<?php get_header(); ?>


<section class="content-area">

    <div class="icontainer">

        <div class="row sticky-content-sidebar">
            <div class="col-md-9">
                <div class="post-entry-content">
                    <div class="theiaStickySidebar">
                        <div class="page-content">
                            <div class="entry-content">
                                <h1 class="post-title text-center">
                                    <?php echo wp_kses( esc_html__('The page You are searching was not found!', 'press-grid'), array('br'=>array()) ); ?>
                                </h1>

                                <div class="entry-excerpt text-center">

                                    <p>
                                        <?php esc_html_e('Sorry, the post you are looking for is not available. Maybe you want to perform a search?', 'press-grid'); ?>
                                    </p>
                                    <?php get_search_form(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_sidebar(); ?>
        </div>

    </div>

</section>

<?php get_footer(); ?>