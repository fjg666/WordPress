<?php
$home_slider = Press_Grid_Std::get_mod('home_slider');
if( $home_slider=='1' ): ?>
    <div class="featured-post">
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'ignore_sticky_posts' => true
            );

            $home_slider_cat = Press_Grid_Std::get_mod('home_slider_cat');
            if( !empty($home_slider_cat) ){
                $args['category_name'] = $home_slider_cat;
            }
            
            $posts_query = new WP_Query($args);
            while( $posts_query->have_posts() ):
                $posts_query->the_post();
                $item = Press_Grid_Post::get_post_item();
                $featured_image = has_post_thumbnail() ? wp_get_attachment_image_url(get_post_thumbnail_id(), 'large') : '';
                ?>
                <div class="swiper-slide">
                    <div class="fpost-item" style="background-image:url(<?php echo esc_url($featured_image); ?>);">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dim/2x1.png" class="dimension" alt="dimension">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dim/4x3.png" class="dimension dim4x3" alt="dimension">
                        <div class="fpost-meta">
                            <?php

                            $categories = $item['categories'];
                            if( !empty($categories) ){
                                $cats = array();
                                $indx = 0;
                                foreach( $categories as $val ){
                                    $cats[] = sprintf('<a href="%s" style="background-color:%s;">%s</a>', $val['link'], esc_attr($val['color']), $val['name']);
                                    $indx++;
                                    if( $indx>1 ){ break; }
                                }
                                printf('<div class="fpost-cat">%s</div>', implode('', $cats));
                            }

                            if( !empty($item['title']) ){
                                printf('<h3><a href="%s">%s</a></h3>', $item['link'], $item['title']);
                            }

                            if( !empty($item['excerpt']) ){
                                printf('<p>%s</p>', $item['excerpt']);
                            }


                            $reaction_html = '';
                            $reactions = array();
                            $reaction_total = 0;
                            foreach ($item['emotions'] as $val) {
                                $reactions[] = sprintf('<span>
                                                            <svg class="emotion-icon emoji-icon-%1$s" aria-hidden="true">
                                                                <use xlink:href="#emoji-icon-%1$s"/>
                                                            </svg>
                                                        </span>', $val['emoji']);
                                $reaction_total += $val['count'];
                            }

                            $reaction_html = sprintf('<div class="post-reactions">
                                                        %s <em>%s</em>
                                                    </div>', implode('', $reactions), $reaction_total);

                            printf('<div class="fpost-details">
                                        %s
                                        <span class="entry-meta-item">
                                            <i class="icon-eye"></i> %s
                                        </span>
                                        <span class="entry-meta-item">
                                            <i class="icon-bubbles"></i> %s
                                        </span>
                                        <span class="entry-meta-item">
                                            <i class="icon-clock"></i>
                                            <a href="%s">%s</a>
                                        </span>
                                        <span class="entry-meta-item">
                                            <img src="%s" alt="avatar"/>
                                            <a href="%s">%s</a>
                                        </span>
                                    </div>',
                                    $reaction_html, $item['post_views'], $item['comments'], $item['link'], $item['date'],
                                    $item['author']['avatar'], $item['author']['link'], $item['author']['name'] );
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
<?php endif; ?>