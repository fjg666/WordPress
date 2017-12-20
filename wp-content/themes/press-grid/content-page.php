<div class="page-content">
    <div class="entry-content">
        <?php

        if( Press_Grid_Std::getmeta('title_show')!='0' ){
            the_title('<h1 class="page-title">', '</h1>');
        }

        the_content();

        wp_link_pages( array(
            'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'press-grid') . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
            'pagelink'    => '<span class="screen-reader-text">' . esc_html__('Page', 'press-grid') . ' </span>%',
            'separator'   => '<span class="screen-reader-text">, </span>',
        ) );
        ?>

        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
    </div>
</div>