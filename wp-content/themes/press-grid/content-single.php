<?php
global $post;
$categories = get_the_category();
$last_cat = '';
if( !empty($categories) ){
    foreach( $categories as $category ){
    	$last_cat = $category->name;
    }
}

?>

<div class="blog-single">

    <?php
    if( has_post_thumbnail() ){
        printf('<div class="entry-featured-image">%s</div>', get_the_post_thumbnail(get_the_id(), 'press-grid-featured-image'));
    }
    ?>

    <h1><?php the_title(); ?></h1>

    <div class="entry-details">
        <div class="entry-author">
            <?php echo get_avatar($post->post_author, 54, '', esc_attr__('Avatar', 'press-grid'), array('class'=>'image-small')); ?>
            <a href="<?php echo Press_Grid_Tpl::get_author_link(); ?>"><?php the_author_meta( 'display_name', $post->post_author ); ?></a>
        </div>
        <div class="entry-date"><?php echo get_the_date(); ?></div>
        <div class="entry-views"><?php echo Press_Grid_Std::getmeta('post_views'); ?> <?php esc_html_e('views', 'press-grid'); ?></div>
        <div class="entry-social">
            <?php echo Press_Grid_Tpl::get_share_links(); ?>
        </div>
    </div>

    <div class="entry-content">
        
        <article><?php the_content(); ?></article>

        <?php wp_link_pages(array(
                'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'press-grid') . '</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
                'pagelink' => '<span class="screen-reader-text">' . esc_html__('Page', 'press-grid') . ' </span>%',
                'separator' => '<span class="screen-reader-text">, </span>',
            ));
        ?>

        <?php
            $categories = get_the_category();
            $output = '';
            if (!empty($categories)) {
                $numItems = count($categories);
                $indx = 0;
                foreach ($categories as $category) {
                    $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" >' . esc_html($category->name) . '</a>';
                    if(++$indx !== $numItems) {
                        $output .= ' ';
                    }
                }
                print '<div class="content-tags content-categories">';
                print '<span>'.esc_html_e('Categories: ', 'press-grid').'</span>';
                printf($output);
                print '</div>';
            }
        ?>
        
        <?php 
            $tag_list = get_the_tag_list();
            if( !empty($tag_list) ): ?>
                <div class="content-tags">
                    <span><?php esc_html_e('Tags: ', 'press-grid'); ?></span>
                <?php echo get_the_tag_list('', esc_html__(' ', 'press-grid')); ?>
                </div>
        <?php
            endif;
        ?>
    </div>
    
</div>