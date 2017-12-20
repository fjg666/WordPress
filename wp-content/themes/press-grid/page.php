<?php get_header(); ?>


<?php
while ( have_posts() ) : the_post();
    $page_layout = Press_Grid_Std::getmeta('page_layout');
?>
<section class="content-area">

    <div class="icontainer">

        <?php if( $page_layout=='full' ): ?>
        
        <div class="row">
            <div class="col-sm-12">
                <?php get_template_part('content', 'page'); ?>
            </div>
        </div>

        <?php else: ?>

        <div class="row sticky-content-sidebar">
            <div class="col-md-8 col-lg-8 col-xl-9 sticky-content <?php echo esc_attr($page_layout=='left' ? 'pull-right' : ''); ?>">
                <div class="post-entry-content theiaStickySidebar">
                    <?php get_template_part('content', 'page'); ?>
                </div>
            </div>

            <?php
            global $pressgrid_sidebar;
            $pressgrid_sidebar = 'page';
            get_sidebar();
            ?>
        </div>

        <?php endif; ?>


    </div>

</section>
<?php endwhile; ?>


<?php get_footer(); ?>