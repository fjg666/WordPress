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
                            printf('<h1 class="display-4">%s</h1>', esc_html__('Search', 'press-grid'));
                            printf('<div class="lead"><p>%s</p></div>', sprintf( wp_kses( __('Results for: <strong>%s</strong>', 'press-grid'), array('strong'=>array()) ), get_search_query() ) );
                        ?>
                    </div>
                </div>

                <div class="main-content">
                    <?php get_template_part('content'); ?>
                </div>

            </div>
        </div>
    </div>

    <div id="pressgrid_pagination"></div>
    
</section>


<?php get_footer(); ?>