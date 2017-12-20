<div class="row sticky-content-sidebar">
    <div class="col-md-8 col-lg-8 sticky-content">
        <div class="post-entry-content theiaStickySidebar">
        	<div class="pressgrid-viewport">
			    <div id="pressgrid_content">
			    	<?php
				    $posts = Press_Grid_Post::get_posts();
				    printf('<script type="text/template" id="pressgrid_json">%s</script>', json_encode($posts));
				    ?>
			    </div>
			</div>
			<?php get_template_part('template-parts/banner-footer'); ?>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 sidebar">
        <div class="entry-sidebar theiaStickySidebar">
        	<?php
	        $sidebar_id = 'sidebar';
	        if ( is_active_sidebar( $sidebar_id ) ) :
	            dynamic_sidebar($sidebar_id);
	        endif;
	        ?>
        </div>
    </div>
</div>