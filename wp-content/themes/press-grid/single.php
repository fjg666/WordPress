<?php get_header(); ?>

<?php 
while ( have_posts() ) : the_post(); ?>
<section class="content-area">

    <div class="icontainer">
        <div class="row sticky-content-sidebar">

            <div class="col-md-8 col-lg-8 col-xl-6 sticky-content">
                <div class="post-entry-content theiaStickySidebar">
                    <?php get_template_part( 'content', 'single' ); ?>

                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>

            <?php
            $post_reactions = '';
            $all_reactions = Press_Grid_Tpl::get_emotions();
            $post_emotions = get_post_meta(get_the_id(), '_emotions', true);
            $post_emotions = !empty($post_emotions) ? (array)$post_emotions : array();

            $reaction_obj = array();
            $max_reaction = 0;
            if( class_exists('Themeton_Reaction') ){
                foreach ($all_reactions as $key => $value) {
                    $reaction_count = array_key_exists($key, $post_emotions) ? abs($post_emotions[$key]) : 0;
                    $max_reaction = max($max_reaction, $reaction_count);
                    $reaction_obj[$key] = array(
                        'label' => $value,
                        'count' => $reaction_count
                    );
                }
            }

            foreach ($reaction_obj as $key => $value) {
                $percent = $max_reaction!=0 ? abs($value['count']*100/$max_reaction) : 0;
                $post_reactions = sprintf('%s
                                            <div class="reaction-item">
                                                <a href="javascript:;" class="reaction-item">
                                                    <svg className="emotion-icon emoji-icon-%s" aria-hidden="true">
                                                        <use xlink:href="#emoji-icon-%s"></use>
                                                    </svg>
                                                </a>
                                                <div class="react-label">
                                                    <span style="width:%s%%;"></span>
                                                    <small>%s (%s)</small>
                                                </div>
                                            </div>',
                                            $post_reactions, $key, $key, $percent,
                                            $value['label'], $value['count']
                                    );
            }

            $related_posts = Press_Grid_Tpl::get_related_posts();
            ?>
            <div class="col-md-3 col-xl-3 hidden-lg-down sidebar">
                <div class="entry-sidebar theiaStickySidebar">
                    <?php if(!empty($post_reactions)): ?>
                    <div class="widget">
                        <h5 class="widget-title"><?php esc_html_e('Post reactions', 'press-grid'); ?></h5>
                        <div class="post-reactions"><?php printf('%s', $post_reactions); ?></div>
                    </div>
                    <?php endif; ?>
                    <div class="widget">
                        <?php printf('%s', $related_posts); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-3 sidebar">
                <div class="entry-sidebar theiaStickySidebar">
                    <div class="widget-show-small hidden-xl-up">
                        <?php if(!empty($post_reactions)): ?>
                        <div class="widget">
                            <h5 class="widget-title"><?php esc_html_e('Post reactions', 'press-grid'); ?></h5>
                            <div class="post-reactions"><?php printf('%s', $post_reactions); ?></div>
                        </div>
                        <?php endif; ?>
                        <div class="widget">
                            <?php printf('%s', $related_posts); ?>
                        </div>
                    </div>
                    <?php
                    $sidebar_id = 'sidebar';
                    if ( is_active_sidebar( $sidebar_id ) ) :
                        dynamic_sidebar($sidebar_id);
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </div>

</section>

<?php
endwhile;
?>


<?php get_footer(); ?>